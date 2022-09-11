    <template id="saranaAdd">
        <section class="page-component">
            <div v-if="showheader" class="bg-light p-3 mb-3">
                <div class="container">
                    <div class="row ">
                        <div  class="col-12 comp-grid" :class="setGridSize">
                            <h3 class="record-title">Add New Sarana</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="pb-2 mb-3 border-bottom">
                <div class="container">
                    <div class="row ">
                        <div  class="col-md-7 comp-grid" :class="setGridSize">
                            <div  class=" animated fadeIn">
                                <form enctype="multipart/form-data" @submit="save" class="form form-default" action="sarana/add" method="post">
                                    <div class="form-group " :class="{'has-error' : errors.has('ruang_1')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="ruang_1">Ruang 1 <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.ruang_1"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Ruang 1"
                                                    class="form-control "
                                                    type="text"
                                                    name="ruang_1"
                                                    placeholder="Enter Ruang 1"
                                                    />
                                                    <small v-show="errors.has('ruang_1')" class="form-text text-danger">
                                                        {{ errors.first('ruang_1') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('ruang_2')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="ruang_2">Ruang 2 <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.ruang_2"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Ruang 2"
                                                    class="form-control "
                                                    type="text"
                                                    name="ruang_2"
                                                    placeholder="Enter Ruang 2"
                                                    />
                                                    <small v-show="errors.has('ruang_2')" class="form-text text-danger">
                                                        {{ errors.first('ruang_2') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('ruang_3')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="ruang_3">Ruang 3 <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.ruang_3"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Ruang 3"
                                                    class="form-control "
                                                    type="text"
                                                    name="ruang_3"
                                                    placeholder="Enter Ruang 3"
                                                    />
                                                    <small v-show="errors.has('ruang_3')" class="form-text text-danger">
                                                        {{ errors.first('ruang_3') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('ruang_4')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="ruang_4">Ruang 4 <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.ruang_4"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Ruang 4"
                                                    class="form-control "
                                                    type="text"
                                                    name="ruang_4"
                                                    placeholder="Enter Ruang 4"
                                                    />
                                                    <small v-show="errors.has('ruang_4')" class="form-text text-danger">
                                                        {{ errors.first('ruang_4') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('ruang_5')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="ruang_5">Ruang 5 <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.ruang_5"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Ruang 5"
                                                    class="form-control "
                                                    type="text"
                                                    name="ruang_5"
                                                    placeholder="Enter Ruang 5"
                                                    />
                                                    <small v-show="errors.has('ruang_5')" class="form-text text-danger">
                                                        {{ errors.first('ruang_5') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('ruang_6')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="ruang_6">Ruang 6 <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.ruang_6"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Ruang 6"
                                                    class="form-control "
                                                    type="text"
                                                    name="ruang_6"
                                                    placeholder="Enter Ruang 6"
                                                    />
                                                    <small v-show="errors.has('ruang_6')" class="form-text text-danger">
                                                        {{ errors.first('ruang_6') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('kantor')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="kantor">Kantor <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.kantor"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Kantor"
                                                    class="form-control "
                                                    type="text"
                                                    name="kantor"
                                                    placeholder="Enter Kantor"
                                                    />
                                                    <small v-show="errors.has('kantor')" class="form-text text-danger">
                                                        {{ errors.first('kantor') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('wc_guru')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="wc_guru">Wc Guru <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.wc_guru"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Wc Guru"
                                                    class="form-control "
                                                    type="text"
                                                    name="wc_guru"
                                                    placeholder="Enter Wc Guru"
                                                    />
                                                    <small v-show="errors.has('wc_guru')" class="form-text text-danger">
                                                        {{ errors.first('wc_guru') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('wc_siswa')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="wc_siswa">Wc Siswa <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.wc_siswa"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Wc Siswa"
                                                    class="form-control "
                                                    type="text"
                                                    name="wc_siswa"
                                                    placeholder="Enter Wc Siswa"
                                                    />
                                                    <small v-show="errors.has('wc_siswa')" class="form-text text-danger">
                                                        {{ errors.first('wc_siswa') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button class="btn btn-primary"  :disabled="errors.any()" type="submit">
                                            <i class="load-indicator">
                                                <clip-loader :loading="saving" color="#fff" size="15px"></clip-loader>
                                            </i>
                                            {{submitbuttontext}}
                                            <i class="fa fa-send"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </template>
    <script>
	var SaranaAddComponent = Vue.component('saranaAdd', {
		template : '#saranaAdd',
		mixins: [AddPageMixin],
		props:{
			pagename : {
				type : String,
				default : 'sarana',
			},
			routename : {
				type : String,
				default : 'saranaadd',
			},
			apipath : {
				type : String,
				default : 'sarana/add',
			},
		},
		data : function() {
			return {
				id : {
					type : String,
					default : '',
				},
				data : {
					ruang_1: '',ruang_2: '',ruang_3: '',ruang_4: '',ruang_5: '',ruang_6: '',kantor: '',wc_guru: '',wc_siswa: '',
				},
			}
		},
		computed: {
			pageTitle: function(){
				return 'Add New Sarana';
			},
		},
		methods: {
			actionAfterSave : function(response){
				this.$root.$emit('requestCompleted' , this.msgaftersave);
				this.$router.push('/sarana');
			},
			resetForm : function(){
				this.data = {ruang_1: '',ruang_2: '',ruang_3: '',ruang_4: '',ruang_5: '',ruang_6: '',kantor: '',wc_guru: '',wc_siswa: '',};
				this.$validator.reset();
			},
		},
		mounted : function() {
		},
	});
	</script>
