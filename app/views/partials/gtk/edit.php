    <template id="gtkEdit">
        <section class="page-component">
            <div v-if="showheader" class="bg-light p-3 mb-3">
                <div class="container">
                    <div class="row ">
                        <div  class="col-12 comp-grid" :class="setGridSize">
                            <h3 class="record-title">Edit  Gtk</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="pb-2 mb-3 border-bottom">
                <div class="container">
                    <div class="row ">
                        <div  class="col-md-7 comp-grid" :class="setGridSize">
                            <div  class=" animated fadeIn">
                                <form  v-show="!loading" enctype="multipart/form-data" @submit="update()" class="form form-default" :action="'gtk/edit/' + data.id" method="post">
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
                                    <div class="form-group " :class="{'has-error' : errors.has('nip')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="nip">Nip <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.nip"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Nip"
                                                    class="form-control "
                                                    type="text"
                                                    name="nip"
                                                    placeholder="Enter Nip"
                                                    />
                                                    <small v-show="errors.has('nip')" class="form-text text-danger">
                                                        {{ errors.first('nip') }}
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
                                                    <dataselect
                                                        v-model="data.jk"
                                                        data-vv-value-path="data.jk"
                                                        data-vv-as="Jk"
                                                        v-validate="{required:true}"
                                                        placeholder="Select A Value ... " name="jk" :multiple="false" 
                                                        :datasource="jkOptionList"
                                                        >
                                                    </dataselect>
                                                    <small v-show="errors.has('jk')" class="form-text text-danger">{{ errors.first('jk') }}</small>
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
                                    <div class="form-group " :class="{'has-error' : errors.has('tgl_lahir')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="tgl_lahir">Tgl Lahir <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.tgl_lahir"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Tgl Lahir"
                                                    class="form-control "
                                                    type="text"
                                                    name="tgl_lahir"
                                                    placeholder="Enter Tgl Lahir"
                                                    />
                                                    <small v-show="errors.has('tgl_lahir')" class="form-text text-danger">
                                                        {{ errors.first('tgl_lahir') }}
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
                                    <div class="form-group " :class="{'has-error' : errors.has('status')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="status">Status <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.status"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Status"
                                                    class="form-control "
                                                    type="text"
                                                    name="status"
                                                    placeholder="Enter Status"
                                                    />
                                                    <small v-show="errors.has('status')" class="form-text text-danger">
                                                        {{ errors.first('status') }}
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
	var GtkEditComponent = Vue.component('gtkEdit', {
		template : '#gtkEdit',
		mixins: [EditPageMixin],
		props: {
			pagename : {
				type : String,
				default : 'gtk',
			},
			routename : {
				type : String,
				default : 'gtkedit',
			},
			apipath : {
				type : String,
				default : 'gtk/edit',
			},
		},
		data: function() {
			return {
				data : { nama: '',nik: '',nip: '',jk: '',tempat_lahir: '',tgl_lahir: '',alamat: '',status: '', },
				jkOptionList: ["Laki-Laki","Perempuan"],
			}
		},
		computed: {
			pageTitle: function(){
				return 'Edit  Gtk';
			},
		},
		methods: {
			actionAfterUpdate : function(response){
				this.$root.$emit('requestCompleted' , this.msgafterupdate);
				if(!this.ismodal){
					this.$router.push('/gtk');
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
