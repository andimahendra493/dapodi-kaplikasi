    <template id="berandaAdd">
        <section class="page-component">
            <div v-if="showheader" class="bg-light p-3 mb-3">
                <div class="container">
                    <div class="row ">
                        <div  class="col-12 comp-grid" :class="setGridSize">
                            <h3 class="record-title">Add New Beranda</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="pb-2 mb-3 border-bottom">
                <div class="container">
                    <div class="row ">
                        <div  class="col-md-7 comp-grid" :class="setGridSize">
                            <div  class=" animated fadeIn">
                                <form enctype="multipart/form-data" @submit="save" class="form form-default" action="beranda/add" method="post">
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
	var BerandaAddComponent = Vue.component('berandaAdd', {
		template : '#berandaAdd',
		mixins: [AddPageMixin],
		props:{
			pagename : {
				type : String,
				default : 'beranda',
			},
			routename : {
				type : String,
				default : 'berandaadd',
			},
			apipath : {
				type : String,
				default : 'beranda/add',
			},
		},
		data : function() {
			return {
				id : {
					type : String,
					default : '',
				},
				data : {
					beranda: '',
				},
			}
		},
		computed: {
			pageTitle: function(){
				return 'Add New Beranda';
			},
		},
		methods: {
			actionAfterSave : function(response){
				this.$root.$emit('requestCompleted' , this.msgaftersave);
				this.$router.push('/beranda');
			},
			resetForm : function(){
				this.data = {beranda: '',};
				this.$validator.reset();
			},
		},
		mounted : function() {
		},
	});
	</script>
