<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-info text-white">
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <ValidationObserver ref="observer" v-slot="{ validate, reset , invalid}">

                    <div class="card-body">
                        <div class="row font-weight-bold mb-2">
                            <div class="col-md-4">Name <span class="text-danger">*</span></div>
                            <div class="col-md-6">Value <span class="text-danger">*</span></div>
                        </div>
                        <div>
                            <div class="form-row"  v-for="(item, i) in meta" :key="i">
                                <div class="col-md-4 mb-3">
                                    <ValidationProvider v-slot="{ errors }" name="name" rules="required">

                                        <input
                                            type="text"
                                            v-model="item.name"
                                            placeholder="name"
                                            :class="{'form-control text-capitalize':true,'is-invalid':errors.length > 0}"
                                            autofocus
                                            required
                                        />
                                        <div class="invalid-feedback" v-if="errors.length > 0">
                                            {{ errors[0] }}
                                        </div>
                                    </ValidationProvider>

                                </div>

                                <div class="col-md-6 mb-3">
                                    <ValidationProvider v-slot="{ errors }" name="value" rules="required">

                                        <input
                                            v-model="item.value"
                                            type="text"
                                            placeholder="Value"
                                            :class="{'form-control text-capitalize':true,'is-invalid':errors.length > 0}"
                                            required
                                        />
                                        <div class="invalid-feedback" v-if="errors.length > 0">
                                            {{ errors[0] }}
                                        </div>
                                    </ValidationProvider>
                                </div>


                                <div class="col-md-1 mb-3">
                                    <button :disabled="deleteBtn"  @click="deleteRow(i, item)"  class="btn btn-info rounded-circle float-sm-right"><i class="fas fa-trash"></i></button>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-auto">
                                    <button @click="addNewRow()" :disabled="invalid"  class="btn btn-info rounded-circle"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                            <hr class="d-md-none">
                        </div>
                        <hr>
                        <div class="text-right">

                            <!--                            <button type="button" class="btn btn-tool" data-card-widget="card-refresh"  data-source-selector="#card-refresh-content"></button>-->
                            <button @click="save" :disabled="invalid || loading"  class="btn  btn-info my-3 " type="submit" style="width: 135px">
                                <i v-if="loading" class="fas fa-sync-alt fa-spin"></i>
                                <template v-else>
                                    Save
                                </template>
                            </button>
                        </div>
                    </div>
                </ValidationObserver>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
</template>

<script>
import { required  } from "vee-validate/dist/rules";
import {
    extend,
    ValidationObserver,
    ValidationProvider,
    setInteractionMode,
} from "vee-validate";
setInteractionMode("aggressive");
extend("required", {
    ...required,
    message: "This field can not be empty",
});

export default {
    name: "ProductMetaInfoComponent",
    components:{
        ValidationObserver,
        ValidationProvider,
    },
    props:{
        productId : {
          type: Number,
          required: true
        },
        product:{
            type:Object,
            required:true
        }
    },
    data(){
        return {
            meta: this.product.meta ? this.product.meta : [{name: '',value:''}],
            loading:false,
        }
    },

    computed:{
        deleteBtn(){
            return this.meta.length === 1
        },
    },
    methods:{

        deleteRow(index, item) {
            let idx = this.meta.indexOf(item);
            if (idx > -1) {
                this.meta.splice(idx, 1);
            }
        },
        addNewRow() {
            this.meta.push({
                name: '',
                value: '',
            });
        },
        save(){
            this.loading = true;

            axios.post(`/admin/products/${this.productId}/meta`, {meta:this.meta}).then(({data}) => {
                this.$toast.success(data.message);
                // window.location = '/invoices/'+data.data.id
            }).catch((error) => {
                this.$toast.error(error.response.data.message);
                if (error.response.status === 422)
                    this.$refs.observer.setErrors(error.response.data.errors)
            })
                .finally(() => this.loading = false)
        }
    }
}
</script>

<style scoped>

</style>
