    <template id="dashbordAdd">
        <section class="page-component">
            <div v-if="showheader" class="bg-light p-3 mb-3">
                <div class="container">
                    <div class="row align-items-end">
                        <div  class="col-12 comp-grid" :class="setGridSize">
                            <h3 class="record-title">Add New Dashbord</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="pb-2 mb-3 border-bottom">
                <div class="container">
                    <div class="row ">
                        <div  class="col-md-7 comp-grid" :class="setGridSize">
                            <div  class=" animated fadeIn">
                                <form enctype="multipart/form-data" @submit="save" class="form form-default" action="dashbord/add" method="post">
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
	var DashbordAddComponent = Vue.component('dashbordAdd', {
		template : '#dashbordAdd',
		mixins: [AddPageMixin],
		props:{
			pagename : {
				type : String,
				default : 'dashbord',
			},
			routename : {
				type : String,
				default : 'dashbordadd',
			},
			apipath : {
				type : String,
				default : 'dashbord/add',
			},
		},
		data : function() {
			return {
				id : {
					type : String,
					default : '',
				},
				data : {
				},
			}
		},
		computed: {
			pageTitle: function(){
				return 'Add New Dashbord';
			},
		},
		methods: {
			actionAfterSave : function(response){
				this.$root.$emit('requestCompleted' , this.msgaftersave);
				this.$router.push('/dashbord');
			},
			resetForm : function(){
				this.data = {};
				this.$validator.reset();
			},
		},
		mounted : function() {
		},
	});
	</script>
