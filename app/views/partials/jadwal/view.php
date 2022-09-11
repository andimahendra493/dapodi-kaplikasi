    <template id="jadwalView">
        <section class="page-component">
            <div v-if="showheader" class="bg-light p-3 mb-3">
                <div class="container">
                    <div class="row ">
                        <div  class="col-12 comp-grid" :class="setGridSize">
                            <h3 class="record-title">View  Jadwal</h3>
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
                                                    <th class="title"> Id Jadwal :</th>
                                                    <td class="value"> {{ data.id_jadwal }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Senin :</th>
                                                    <td class="value"> {{ data.senin }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Selasa :</th>
                                                    <td class="value"> {{ data.selasa }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Rabu :</th>
                                                    <td class="value"> {{ data.rabu }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Kamis :</th>
                                                    <td class="value"> {{ data.kamis }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Jumat :</th>
                                                    <td class="value"> {{ data.jumat }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Sabtu :</th>
                                                    <td class="value"> {{ data.sabtu }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Minggu :</th>
                                                    <td class="value"> {{ data.minggu }} </td>
                                                </tr>
                                            </tbody>
                                            <!-- Table Body End -->
                                        </table>
                                    </div>
                                    <div v-if="editbutton || deletebutton || exportbutton" class="py-3">
                                        <span >
                                            <router-link class="btn btn-sm btn-info has-tooltip" v-if="editbutton"  :to="'/jadwal/edit/'  + data.id_jadwal">
                                            <i class="fa fa-edit"></i> 
                                            </router-link>
                                            <button @click="deleteRecord" class="btn btn-sm btn-danger" v-if="deletebutton" :to="'/jadwal/delete/' + data.id_jadwal">
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
	var JadwalViewComponent = Vue.component('jadwalView', {
		template : '#jadwalView',
		mixins: [ViewPageMixin],
		props: {
			pagename: {
				type : String,
				default : 'jadwal',
			},
			routename : {
				type : String,
				default : 'jadwalview',
			},
			apipath: {
				type : String,
				default : 'jadwal/view',
			},
		},
		data: function() {
			return {
				data : {
					default :{
						id_jadwal: '',senin: '',selasa: '',rabu: '',kamis: '',jumat: '',sabtu: '',minggu: '',
					},
				},
			}
		},
		computed: {
			pageTitle: function(){
				return 'View  Jadwal';
			},
		},
		methods :{
			resetData : function(){
				this.data = {
					id_jadwal: '',senin: '',selasa: '',rabu: '',kamis: '',jumat: '',sabtu: '',minggu: '',
				}
			},
		},
	});
	</script>
