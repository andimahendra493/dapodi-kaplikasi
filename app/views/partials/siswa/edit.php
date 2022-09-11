    <template id="siswaEdit">
        <section class="page-component">
            <div v-if="showheader" class="bg-light p-3 mb-3">
                <div class="container">
                    <div class="row ">
                        <div  class="col-12 comp-grid" :class="setGridSize">
                            <h3 class="record-title">Edit  Siswa</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="pb-2 mb-3 border-bottom">
                <div class="container">
                    <div class="row ">
                        <div  class="col-md-7 comp-grid" :class="setGridSize">
                            <div  class=" animated fadeIn">
                                <form  v-show="!loading" enctype="multipart/form-data" @submit="update()" class="form form-default" :action="'siswa/edit/' + data.id" method="post">
                                    <div class="form-group " :class="{'has-error' : errors.has('nama')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="nama">Nama <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.nama"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Nama"
                                                    class="form-control "
                                                    type="text"
                                                    name="nama"
                                                    placeholder="Enter Nama"
                                                    />
                                                    <small v-show="errors.has('nama')" class="form-text text-danger">
                                                        {{ errors.first('nama') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('nik')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="nik">Nik <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.nik"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Nik"
                                                    class="form-control "
                                                    type="text"
                                                    name="nik"
                                                    placeholder="Enter Nik"
                                                    />
                                                    <small v-show="errors.has('nik')" class="form-text text-danger">
                                                        {{ errors.first('nik') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('nis')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="nis">Nis <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.nis"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Nis"
                                                    class="form-control "
                                                    type="text"
                                                    name="nis"
                                                    placeholder="Enter Nis"
                                                    />
                                                    <small v-show="errors.has('nis')" class="form-text text-danger">
                                                        {{ errors.first('nis') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('nisn')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="nisn">Nisn <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.nisn"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Nisn"
                                                    class="form-control "
                                                    type="text"
                                                    name="nisn"
                                                    placeholder="Enter Nisn"
                                                    />
                                                    <small v-show="errors.has('nisn')" class="form-text text-danger">
                                                        {{ errors.first('nisn') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('jk')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="jk">Jk <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.jk"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Jk"
                                                    class="form-control "
                                                    type="text"
                                                    name="jk"
                                                    placeholder="Enter Jk"
                                                    />
                                                    <small v-show="errors.has('jk')" class="form-text text-danger">
                                                        {{ errors.first('jk') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('tempat_lahir')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="tempat_lahir">Tempat Lahir <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.tempat_lahir"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Tempat Lahir"
                                                    class="form-control "
                                                    type="text"
                                                    name="tempat_lahir"
                                                    placeholder="Enter Tempat Lahir"
                                                    />
                                                    <small v-show="errors.has('tempat_lahir')" class="form-text text-danger">
                                                        {{ errors.first('tempat_lahir') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('tanggal_lahir')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="tanggal_lahir">Tanggal Lahir <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.tanggal_lahir"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Tanggal Lahir"
                                                    class="form-control "
                                                    type="text"
                                                    name="tanggal_lahir"
                                                    placeholder="Enter Tanggal Lahir"
                                                    />
                                                    <small v-show="errors.has('tanggal_lahir')" class="form-text text-danger">
                                                        {{ errors.first('tanggal_lahir') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('alamat')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="alamat">Alamat <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.alamat"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Alamat"
                                                    class="form-control "
                                                    type="text"
                                                    name="alamat"
                                                    placeholder="Enter Alamat"
                                                    />
                                                    <small v-show="errors.has('alamat')" class="form-text text-danger">
                                                        {{ errors.first('alamat') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button @click="update()" :disabled="errors.any()" class="btn btn-primary" type="button">
                                            <i class="load-indicator"><clip-loader :loading="saving" color="#fff" size="14px"></clip-loader> </i>
                                            {{submitbuttontext}}
                                            <i class="fa fa-send"></i>
                                        </button>
                                    </div>
                                </form>
                                <div v-show="loading" class="load-indicator static-center">
                                    <span class="animator">
                                        <clip-loader :loading="loading" color="gray" size="20px">
                                        </clip-loader>
                                    </span>
                                    <h4 style="color:gray" class="loading-text"></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </template>
    <script>
	var SiswaEditComponent = Vue.component('siswaEdit', {
		template : '#siswaEdit',
		mixins: [EditPageMixin],
		props: {
			pagename : {
				type : String,
				default : 'siswa',
			},
			routename : {
				type : String,
				default : 'siswaedit',
			},
			apipath : {
				type : String,
				default : 'siswa/edit',
			},
		},
		data: function() {
			return {
				data : { nama: '',nik: '',nis: '',nisn: '',jk: '',tempat_lahir: '',tanggal_lahir: '',alamat: '', },
			}
		},
		computed: {
			pageTitle: function(){
				return 'Edit  Siswa';
			},
		},
		methods: {
			actionAfterUpdate : function(response){
				this.$root.$emit('requestCompleted' , this.msgafterupdate);
				if(!this.ismodal){
					this.$router.push('/siswa');
				}
			},
		},
		watch: {
			id: function(newVal, oldVal) {
				if(this.id){
					this.load();
				}
			},
			modelBind: function(){
				var binds = this.modelBind;
				for(key in binds){
					this.data[key]= binds[key];
				}
			},
			pageTitle: function(){
				this.SetPageTitle( this.pageTitle );
			},
		},
		created: function(){
			this.SetPageTitle(this.pageTitle);
		},
		mounted: function() {
			//this.load();
		},
	});
	</script>
