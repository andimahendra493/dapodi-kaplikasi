    <template id="saranaView">
        <section class="page-component">
            <div v-if="showheader" class="bg-light p-3 mb-3">
                <div class="container">
                    <div class="row ">
                        <div  class="col-12 comp-grid" :class="setGridSize">
                            <h3 class="record-title">View  Sarana</h3>
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
                                                    <th class="title"> Id Sarana :</th>
                                                    <td class="value"> {{ data.id_sarana }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Ruang 1 :</th>
                                                    <td class="value"> {{ data.ruang_1 }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Ruang 2 :</th>
                                                    <td class="value"> {{ data.ruang_2 }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Ruang 3 :</th>
                                                    <td class="value"> {{ data.ruang_3 }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Ruang 4 :</th>
                                                    <td class="value"> {{ data.ruang_4 }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Ruang 5 :</th>
                                                    <td class="value"> {{ data.ruang_5 }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Ruang 6 :</th>
                                                    <td class="value"> {{ data.ruang_6 }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Kantor :</th>
                                                    <td class="value"> {{ data.kantor }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Wc Guru :</th>
                                                    <td class="value"> {{ data.wc_guru }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Wc Siswa :</th>
                                                    <td class="value"> {{ data.wc_siswa }} </td>
                                                </tr>
                                            </tbody>
                                            <!-- Table Body End -->
                                        </table>
                                    </div>
                                    <div v-if="editbutton || deletebutton || exportbutton" class="py-3">
                                        <span >
                                            <router-link class="btn btn-sm btn-info has-tooltip" v-if="editbutton"  :to="'/sarana/edit/'  + data.id_sarana">
                                            <i class="fa fa-edit"></i> 
                                            </router-link>
                                            <button @click="deleteRecord" class="btn btn-sm btn-danger" v-if="deletebutton" :to="'/sarana/delete/' + data.id_sarana">
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
	var SaranaViewComponent = Vue.component('saranaView', {
		template : '#saranaView',
		mixins: [ViewPageMixin],
		props: {
			pagename: {
				type : String,
				default : 'sarana',
			},
			routename : {
				type : String,
				default : 'saranaview',
			},
			apipath: {
				type : String,
				default : 'sarana/view',
			},
		},
		data: function() {
			return {
				data : {
					default :{
						id_sarana: '',ruang_1: '',ruang_2: '',ruang_3: '',ruang_4: '',ruang_5: '',ruang_6: '',kantor: '',wc_guru: '',wc_siswa: '',
					},
				},
			}
		},
		computed: {
			pageTitle: function(){
				return 'View  Sarana';
			},
		},
		methods :{
			resetData : function(){
				this.data = {
					id_sarana: '',ruang_1: '',ruang_2: '',ruang_3: '',ruang_4: '',ruang_5: '',ruang_6: '',kantor: '',wc_guru: '',wc_siswa: '',
				}
			},
		},
	});
	</script>
