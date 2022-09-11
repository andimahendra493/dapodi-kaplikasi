    <template id="profil_penggunaAdd">
        <section class="page-component">
            <div v-if="showheader" class="bg-light p-3 mb-3">
                <div class="container">
                    <div class="row ">
                        <div  class="col-12 comp-grid" :class="setGridSize">
                            <h3 class="record-title">Add New Profil Pengguna</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="pb-2 mb-3 border-bottom">
                <div class="container">
                    <div class="row ">
                        <div  class="col-md-7 comp-grid" :class="setGridSize">
                            <div  class=" animated fadeIn">
                                <form enctype="multipart/form-data" @submit="save" class="form form-default" action="profil_pengguna/add" method="post">
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
	var Profil_PenggunaAddComponent = Vue.component('profil_penggunaAdd', {
		template : '#profil_penggunaAdd',
		mixins: [AddPageMixin],
		props:{
			pagename : {
				type : String,
				default : 'profil_pengguna',
			},
			routename : {
				type : String,
				default : 'profil_penggunaadd',
			},
			apipath : {
				type : String,
				default : 'profil_pengguna/add',
			},
		},
		data : function() {
			return {
				id : {
					type : String,
					default : '',
				},
				data : {
					nama: '',nip: '',jk: '',alamat: '',
				},
			}
		},
		computed: {
			pageTitle: function(){
				return 'Add New Profil Pengguna';
			},
		},
		methods: {
			actionAfterSave : function(response){
				this.$root.$emit('requestCompleted' , this.msgaftersave);
				this.$router.push('/profil_pengguna');
			},
			resetForm : function(){
				this.data = {nama: '',nip: '',jk: '',alamat: '',};
				this.$validator.reset();
			},
		},
		mounted : function() {
		},
	});
	</script>
