<div class="col-lg-3">
    <div class="card border-0 shadow-sm bg-white">
        <div class="card-body">
            <form action="{{route('shop')}}" id="filter-form-side-bar">

             @if(request()->has('category'))
                    <input type="hidden" name="category" value="{{$category->id}}">
             @endif

                 @if(request()->has('sort'))
                     <input type="hidden" name="sort" value="{{request('sort')}}">
                 @endif

            <h5>Filter Product </h5>
            <hr>
            @if($category->brands->count() > 0)
                <h6 class = "text-info">Select brand </h6>
                <lu class="list-group">
                    @foreach($category->brands as $br)
                        <li class="list-group-item checkbox">
                            <div class="form-check">
                                <lable class="form-check-label">
                                    <input type="checkbox"
                                           name="brands[]"
                                           {{is_array(request('brands')) && in_array($br->id, request('brands')) ? 'checked' :''}}

                                           class=" form-check-input common_selector categorie" value="{{$br->id}}"  >{{$br->name}}
                                </lable>
                            </div>
                        </li>
                    @endforeach

                </lu>
                <br>
            @endif


            @if($category->forms->count() > 0)
                <h6 class = "text-info">Select Form </h6>
                <lu class="list-group">
                    @foreach($category->forms as $fr)
                        <li class="list-group-item checkbox">
                            <div class="form-check">
                                <lable class="form-check-label">
                                    <input type="checkbox"
                                           name="forms[]"
                                           {{is_array(request('forms')) && in_array($fr->id, request('forms')) ? 'checked' :''}}
                                           class=" form-check-input common_selector categorie" value="{{$fr->id}}"  >{{$fr->name}}
                                </lable>
                            </div>
                        </li>
                    @endforeach

                </lu>
                <br>
            @endif

            @if($category->types->count() > 0)
                <h6 class = "text-info">Select Type </h6>
                <lu class="list-group">
                    @foreach($category->types as $t)
                        <li class="list-group-item checkbox">
                            <div class="form-check">
                                <lable class="form-check-label">
                                    <input type="checkbox" name="types[]"
                                           {{is_array(request('types')) && in_array($t->id, request('types')) ? 'checked' :''}}

                                           class=" form-check-input common_selector categorie" value="{{$t->id}}"  >{{$t->name}}
                                </lable>
                            </div>
                        </li>
                    @endforeach

                </lu>
                <br>
            @endif
            @if($category->functionalities->count() > 0)
                <h6 class = "text-info">Select Functionality </h6>
                <lu class="list-group">
                    @foreach($category->functionalities as $f)
                            <li class="list-group-item checkbox">
                                <div class="form-check">

                                    <lable class="form-check-label">

                                        <input type="checkbox"
                                               name="functionalities[]"
                                               {{is_array(request('functionalities')) && in_array($f->id, request('functionalities')) ? 'checked' :''}}
                                               class=" form-check-input common_selector categorie"
                                               value="{{$f->id}}"  >{{$f->name}}
                                    </lable>
                                </div>
                            </li>
                        @endforeach

                    </lu>
                    <br>
                @endif

                @if($category->consumables->count() > 0)
                    <h6 class = "text-info">Select Consumable </h6>
                    <lu class="list-group">
                        @foreach($category->consumables as $c)
                            <li class="list-group-item checkbox">
                                <div class="form-check">
                                    <lable class="form-check-label">
                                        <input type="checkbox"
                                               {{is_array(request('consumables')) && in_array($c->id, request('consumables')) ? 'checked' :''}}

                                               name="consumables[]" class=" form-check-input common_selector categorie" value="{{$c->id}}"  >{{$c->name}}
                                    </lable>
                                </div>
                            </li>
                        @endforeach

                    </lu>
                    <br>
                @endif

                @if($category->computerConsumables->count() > 0)
                    <h6 class = "text-info">Select Computer Consumable </h6>
                    <lu class="list-group">
                        @foreach($category->computerConsumables as $cc)
                            <li class="list-group-item checkbox">
                                <div class="form-check">
                                    <lable class="form-check-label">
                                        <input type="checkbox"
                                               {{is_array(request('computer_consumables')) && in_array($cc->id, request('computer_consumables')) ? 'checked' :''}}

                                               name="computer_consumables[]"
                                               class=" form-check-input common_selector categorie" value="{{$cc->id}}"  >{{$cc->name}}
                                    </lable>
                                </div>
                            </li>
                        @endforeach

                    </lu>
                    <br>

                @endif
                </form>
            </div>
        </div>
    </div>

