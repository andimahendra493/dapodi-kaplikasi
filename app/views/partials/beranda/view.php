    <template id="berandaView">
        <section class="page-component">
            <div v-if="showheader" class="bg-light p-3 mb-3">
                <div class="container">
                    <div class="row ">
                        <div  class="col-12 comp-grid" :class="setGridSize">
                            <h3 class="record-title">View  Beranda</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="pb-2 mb-3 border-bottom">
                <div class="container">
                    <div class="row ">
                        <div  class="col-md-12 comp-grid" :class="setGridSize">
                            <div  class=" animated fadeIn">
                                <div v-show="!loading">
                                    <div ref="datatable" id="datatable">
                                        <table class="table table-hover table-borderless table-striped">
                                            <!-- Table Body Start -->
                                            <tbody>
                                                <tr>
                                                    <th class="title"> Id Beranda :</th>
                                                    <td class="value"><router-link :to="'/beranda/view/' +  data.id_beranda">{{data.id_beranda}}</router-link></td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Beranda :</th>
                                                    <td class="value"> {{ data.beranda }} </td>
                                                </tr>
                                            </tbody>
                                            <!-- Table Body End -->
                                        </table>
                                    </div>
                                    <div v-if="editbutton || deletebutton || exportbutton" class="py-3">
                                        <span >
                                            <router-link class="btn btn-sm btn-info has-tooltip" v-if="editbutton"  :to="'/beranda/edit/'  + data.id_beranda">
                                            <i class="fa fa-edit"></i> 
                                            </router-link>
                                            <button @click="deleteRecord" class="btn btn-sm btn-danger" v-if="deletebutton" :to="'/beranda/delete/' + data.id_beranda">
                                            <i class="fa fa-times"></i> </button>
                                        </span>
                                        <button @click="exportRecord" class="btn btn-sm btn-primary" v-if="exportbutton">
                                            <i class="fa fa-save"></i> 
                                        </button>
                                    </div>
                                </div>
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
	var BerandaViewComponent = Vue.component('berandaView', {
		template : '#berandaView',
		mixins: [ViewPageMixin],
		props: {
			pagename: {
				type : String,
				default : 'beranda',
			},
			routename : {
				type : String,
				default : 'berandaview',
			},
			apipath: {
				type : String,
				default : 'beranda/view',
			},
		},
		data: function() {
			return {
				data : {
					default :{
						id_beranda: '',beranda: '',
					},
				},
			}
		},
		computed: {
			pageTitle: function(){
				return 'View  Beranda';
			},
		},
		methods :{
			resetData : function(){
				this.data = {
					id_beranda: '',beranda: '',
				}
			},
		},
	});
	</script>
