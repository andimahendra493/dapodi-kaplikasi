    <template id="rombonganAdd">
        <section class="page-component">
            <div v-if="showheader" class="bg-light p-3 mb-3">
                <div class="container">
                    <div class="row ">
                        <div  class="col-12 comp-grid" :class="setGridSize">
                            <h3 class="record-title">Add New Rombongan</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="pb-2 mb-3 border-bottom">
                <div class="container">
                    <div class="row ">
                        <div  class="col-md-7 comp-grid" :class="setGridSize">
                            <div  class=" animated fadeIn">
                                <form enctype="multipart/form-data" @submit="save" class="form form-default" action="rombongan/add" method="post">
                                    <div class="form-group " :class="{'has-error' : errors.has('kelas')}">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="kelas">Kelas <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input v-model="data.kelas"
                                                    v-validate="{required:true}"
                                                    data-vv-as="Kelas"
                                                    class="form-control "
                                                    type="text"
                                                    name="kelas"
                                                    placeholder="Enter Kelas"
                                                    />
                                                    <small v-show="errors.has('kelas')" class="form-text text-danger">
                                                        {{ errors.first('kelas') }}
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
	var RombonganAddComponent = Vue.component('rombonganAdd', {
		template : '#rombonganAdd',
		mixins: [AddPageMixin],
		props:{
			pagename : {
				type : String,
				default : 'rombongan',
			},
			routename : {
				type : String,
				default : 'rombonganadd',
			},
			apipath : {
				type : String,
				default : 'rombongan/add',
			},
		},
		data : function() {
			return {
				id : {
					type : String,
					default : '',
				},
				data : {
					kelas: '',
				},
			}
		},
		computed: {
			pageTitle: function(){
				return 'Add New Rombongan';
			},
		},
		methods: {
			actionAfterSave : function(response){
				this.$root.$emit('requestCompleted' , this.msgaftersave);
				this.$router.push('/rombongan');
			},
			resetForm : function(){
				this.data = {kelas: '',};
				this.$validator.reset();
			},
		},
		mounted : function() {
		},
	});
	</script>
