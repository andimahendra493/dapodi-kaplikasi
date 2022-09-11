    <template id="sekolahEdit">
        <section class="page-component">
            <div v-if="showheader" class="bg-light p-3 mb-3">
                <div class="container">
                    <div class="row ">
                        <div  class="col-12 comp-grid" :class="setGridSize">
                            <h3 class="record-title">Edit  Sekolah</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="pb-2 mb-3 border-bottom">
                <div class="container">
                    <div class="row ">
                        <div  class="col-md-7 comp-grid" :class="setGridSize">
                            <div  class=" animated fadeIn">
                                <form  v-show="!loading" enctype="multipart/form-data" @submit="update()" class="form form-default" :action="'sekolah/edit/' + data.id" method="post">
                                    <div class="form-group " :class="{'has-error' : errors.has('nama_sekolah')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="nama_sekolah">Nama Sekolah <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.nama_sekolah"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Nama Sekolah"
                                                    class="form-control "
                                                    type="text"
                                                    name="nama_sekolah"
                                                    placeholder="Enter Nama Sekolah"
                                                    />
                                                    <small v-show="errors.has('nama_sekolah')" class="form-text text-danger">
                                                        {{ errors.first('nama_sekolah') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('npsn')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="npsn">Npsn <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.npsn"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Npsn"
                                                    class="form-control "
                                                    type="text"
                                                    name="npsn"
                                                    placeholder="Enter Npsn"
                                                    />
                                                    <small v-show="errors.has('npsn')" class="form-text text-danger">
                                                        {{ errors.first('npsn') }}
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
                                                    <dataselect
                                                        v-model="data.status"
                                                        data-vv-value-path="data.status"
                                                        data-vv-as="Status"
                                                        v-validate="{required:true}"
                                                        placeholder="Select A Value ... " name="status" :multiple="false" 
                                                        :datasource="statusOptionList"
                                                        >
                                                    </dataselect>
                                                    <small v-show="errors.has('status')" class="form-text text-danger">{{ errors.first('status') }}</small>
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
                                    <div class="form-group " :class="{'has-error' : errors.has('kecamatan')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="kecamatan">Kecamatan <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <dataselect
                                                        v-model="data.kecamatan"
                                                        data-vv-value-path="data.kecamatan"
                                                        data-vv-as="Kecamatan"
                                                        v-validate="{required:true}"
                                                        placeholder="Select A Value ... " name="kecamatan" :multiple="false" 
                                                        :datasource="kecamatanOptionList"
                                                        >
                                                    </dataselect>
                                                    <small v-show="errors.has('kecamatan')" class="form-text text-danger">{{ errors.first('kecamatan') }}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('kabupaten')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="kabupaten">Kabupaten <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.kabupaten"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Kabupaten"
                                                    class="form-control "
                                                    type="text"
                                                    name="kabupaten"
                                                    placeholder="Enter Kabupaten"
                                                    />
                                                    <small v-show="errors.has('kabupaten')" class="form-text text-danger">
                                                        {{ errors.first('kabupaten') }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group " :class="{'has-error' : errors.has('provinsi')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="provinsi">Provinsi <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.provinsi"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Provinsi"
                                                    class="form-control "
                                                    type="text"
                                                    name="provinsi"
                                                    placeholder="Enter Provinsi"
                                                    />
                                                    <small v-show="errors.has('provinsi')" class="form-text text-danger">
                                                        {{ errors.first('provinsi') }}
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
	var SekolahEditComponent = Vue.component('sekolahEdit', {
		template : '#sekolahEdit',
		mixins: [EditPageMixin],
		props: {
			pagename : {
				type : String,
				default : 'sekolah',
			},
			routename : {
				type : String,
				default : 'sekolahedit',
			},
			apipath : {
				type : String,
				default : 'sekolah/edit',
			},
		},
		data: function() {
			return {
				data : { nama_sekolah: '',npsn: '',status: '',alamat: '',kecamatan: '',kabupaten: '',provinsi: '', },
				statusOptionList: ["Negeri","Swasta"],
				kecamatanOptionList: ["Batu Layar","KGerung","Gunung Sari","Kuripan","Labuapi","Lembar","Lingsar","Narmada","Sekotong","Kediri"],
			}
		},
		computed: {
			pageTitle: function(){
				return 'Edit  Sekolah';
			},
		},
		methods: {
			actionAfterUpdate : function(response){
				this.$root.$emit('requestCompleted' , this.msgafterupdate);
				if(!this.ismodal){
					this.$router.push('/sekolah');
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
