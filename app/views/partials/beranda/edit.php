    <template id="berandaEdit">
        <section class="page-component">
            <div v-if="showheader" class="bg-light p-3 mb-3">
                <div class="container">
                    <div class="row ">
                        <div  class="col-12 comp-grid" :class="setGridSize">
                            <h3 class="record-title">Edit  Beranda</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="pb-2 mb-3 border-bottom">
                <div class="container">
                    <div class="row ">
                        <div  class="col-md-7 comp-grid" :class="setGridSize">
                            <div  class=" animated fadeIn">
                                <form  v-show="!loading" enctype="multipart/form-data" @submit="update()" class="form form-default" :action="'beranda/edit/' + data.id" method="post">
                                    <div class="form-group " :class="{'has-error' : errors.has('beranda')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="beranda">Beranda <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.beranda"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Beranda"
                                                    class="form-control "
                                                    type="text"
                                                    name="beranda"
                                                    placeholder="Enter Beranda"
                                                    />
                                                    <small v-show="errors.has('beranda')" class="form-text text-danger">
                                                        {{ errors.first('beranda') }}
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
	var BerandaEditComponent = Vue.component('berandaEdit', {
		template : '#berandaEdit',
		mixins: [EditPageMixin],
		props: {
			pagename : {
				type : String,
				default : 'beranda',
			},
			routename : {
				type : String,
				default : 'berandaedit',
			},
			apipath : {
				type : String,
				default : 'beranda/edit',
			},
		},
		data: function() {
			return {
				data : { beranda: '', },
			}
		},
		computed: {
			pageTitle: function(){
				return 'Edit  Beranda';
			},
		},
		methods: {
			actionAfterUpdate : function(response){
				this.$root.$emit('requestCompleted' , this.msgafterupdate);
				if(!this.ismodal){
					this.$router.push('/beranda');
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
