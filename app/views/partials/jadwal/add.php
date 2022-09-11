    <template id="jadwalAdd">
        <section class="page-component">
            <div v-if="showheader" class="bg-light p-3 mb-3">
                <div class="container">
                    <div class="row ">
                        <div  class="col-12 comp-grid" :class="setGridSize">
                            <h3 class="record-title">Add New Jadwal</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="pb-2 mb-3 border-bottom">
                <div class="container">
                    <div class="row ">
                        <div  class="col-md-7 comp-grid" :class="setGridSize">
                            <div  class=" animated fadeIn">
                                <form enctype="multipart/form-data" @submit="save" class="form form-default" action="jadwal/add" method="post">
                                    <div class="form-group " :class="{'has-error' : errors.has('senin')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="senin">Senin <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.senin"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Senin"
                                                    class="form-control "
                                                    type="text"
                                                    name="senin"
                                                    placeholder="Enter Senin"
                                                    />
                                                    <small v-show="errors.has('senin')" class="form-text text-danger">
                                                        {{ errors.first('senin') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('selasa')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="selasa">Selasa <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.selasa"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Selasa"
                                                    class="form-control "
                                                    type="text"
                                                    name="selasa"
                                                    placeholder="Enter Selasa"
                                                    />
                                                    <small v-show="errors.has('selasa')" class="form-text text-danger">
                                                        {{ errors.first('selasa') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('rabu')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="rabu">Rabu <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.rabu"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Rabu"
                                                    class="form-control "
                                                    type="text"
                                                    name="rabu"
                                                    placeholder="Enter Rabu"
                                                    />
                                                    <small v-show="errors.has('rabu')" class="form-text text-danger">
                                                        {{ errors.first('rabu') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('kamis')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="kamis">Kamis <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.kamis"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Kamis"
                                                    class="form-control "
                                                    type="text"
                                                    name="kamis"
                                                    placeholder="Enter Kamis"
                                                    />
                                                    <small v-show="errors.has('kamis')" class="form-text text-danger">
                                                        {{ errors.first('kamis') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('jumat')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="jumat">Jumat <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.jumat"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Jumat"
                                                    class="form-control "
                                                    type="text"
                                                    name="jumat"
                                                    placeholder="Enter Jumat"
                                                    />
                                                    <small v-show="errors.has('jumat')" class="form-text text-danger">
                                                        {{ errors.first('jumat') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('sabtu')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="sabtu">Sabtu <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.sabtu"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Sabtu"
                                                    class="form-control "
                                                    type="text"
                                                    name="sabtu"
                                                    placeholder="Enter Sabtu"
                                                    />
                                                    <small v-show="errors.has('sabtu')" class="form-text text-danger">
                                                        {{ errors.first('sabtu') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('minggu')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="minggu">Minggu <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.minggu"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Minggu"
                                                    class="form-control "
                                                    type="text"
                                                    name="minggu"
                                                    placeholder="Enter Minggu"
                                                    />
                                                    <small v-show="errors.has('minggu')" class="form-text text-danger">
                                                        {{ errors.first('minggu') }}
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
	var JadwalAddComponent = Vue.component('jadwalAdd', {
		template : '#jadwalAdd',
		mixins: [AddPageMixin],
		props:{
			pagename : {
				type : String,
				default : 'jadwal',
			},
			routename : {
				type : String,
				default : 'jadwaladd',
			},
			apipath : {
				type : String,
				default : 'jadwal/add',
			},
		},
		data : function() {
			return {
				id : {
					type : String,
					default : '',
				},
				data : {
					senin: '',selasa: '',rabu: '',kamis: '',jumat: '',sabtu: '',minggu: '',
				},
			}
		},
		computed: {
			pageTitle: function(){
				return 'Add New Jadwal';
			},
		},
		methods: {
			actionAfterSave : function(response){
				this.$root.$emit('requestCompleted' , this.msgaftersave);
				this.$router.push('/jadwal');
			},
			resetForm : function(){
				this.data = {senin: '',selasa: '',rabu: '',kamis: '',jumat: '',sabtu: '',minggu: '',};
				this.$validator.reset();
			},
		},
		mounted : function() {
		},
	});
	</script>
