@extends('admin.layouts.app')

@section('title','Forms Index')

@push('css')
    <link rel="stylesheet" href="{{asset('assets/admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endpush

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Form</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item "><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">forms</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">forms list</h3>
                    <div class="card-tools">
                        <form action="">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input form="text" name="search" class="form-control float-right" value="{{request('search')}}" placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="d-flex justify-content-start">
                        <a href="{{route('admin.forms.create')}}" title="Create New Brand" class="btn btn-info"><i class="fas fa-plus"></i></a>
                    </div>
                    <table id="table" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>name</th>
                            <th>category</th>
                            <th>created at</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($forms as $key=>$f)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$f->name}}</td>
                                <td>{{$f->category->name}}</td>
                                <td>{{$f->created_at->format('d-m-Y')}}</td>
                                <td>
                                    <a href="{{route('admin.forms.edit',$f->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="deleteForm({{$f->id}})"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot >
                        <tr >
                            <td colspan="5">
                                <div class="d-flex justify-content-center">
                                    {{$forms->links()}}
                                </div>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>
        <!-- /.col -->
    </div>
@endsection

@push('js')
    <script src="{{asset('assets/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <!-- SweetAlert2 -->
    <script src="{{asset('assets/admin/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
    <script>
        $('#table').DataTable({
            "paging": false,
            "lengthChange": false,
            "searching": false,
            "ordering": false,
            "info": false,
            "autoWidth": false,
            "responsive": true,
        });
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        @if(session()->has('error'))
        Toast.fire({
            icon: 'error',
            title: '{{session('error')}}'
        })
        @endif

        @if(session()->has('success'))
        Toast.fire({
            icon: 'success',
            title: '{{session('success')}}'
        })
        @endif

        const deleteForm = id => {

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {

                if (result.value) {
                    createForm(id).submit();
                }
            });
        }
        const createForm = id => {
            let f = document.createElement("form");
            f.setAttribute('method',"post");
            f.setAttribute('action',`/admin/forms/${id}`);

            let i1 = document.createElement("input"); //input element, text
            i1.setAttribute('type',"hidden");
            i1.setAttribute('name','_token');
            i1.setAttribute('value','{{csrf_token()}}');

            let i2 = document.createElement("input"); //input element, text
            i2.setAttribute('type',"hidden");
            i2.setAttribute('name','_method');
            i2.setAttribute('value','DELETE');

            f.appendChild(i1);
            f.appendChild(i2);
            document.body.appendChild(f);
            return f;
        }
    </script>
@endpush
