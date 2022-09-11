var bus = new Vue({});
var routes = [
  
	{ path: '/', name: 'home' , component: HomeComponent },

	{ path: '/beranda', name: 'berandalist', component: BerandaListComponent },
	{ path: '/beranda/(index|list)', name: 'berandalist' , component: BerandaListComponent },
	{ path: '/beranda/(index|list)/:fieldname/:fieldvalue', name: 'berandalist' , component: BerandaListComponent , props: true },
	{ path: '/beranda/view/:id', name: 'berandaview' , component: BerandaViewComponent , props: true},
	{ path: '/beranda/view/:fieldname/:fieldvalue', name: 'berandaview' , component: BerandaViewComponent , props: true },
	{ path: '/beranda/add', name: 'berandaadd' , component: BerandaAddComponent },
	{ path: '/beranda/edit/:id' , name: 'berandaedit' , component: BerandaEditComponent , props: true},
	{ path: '/beranda/edit', name: 'berandaedit' , component: BerandaEditComponent , props: true},

	{ path: '/gtk', name: 'gtklist', component: GtkListComponent },
	{ path: '/gtk/(index|list)', name: 'gtklist' , component: GtkListComponent },
	{ path: '/gtk/(index|list)/:fieldname/:fieldvalue', name: 'gtklist' , component: GtkListComponent , props: true },
	{ path: '/gtk/view/:id', name: 'gtkview' , component: GtkViewComponent , props: true},
	{ path: '/gtk/view/:fieldname/:fieldvalue', name: 'gtkview' , component: GtkViewComponent , props: true },
	{ path: '/gtk/add', name: 'gtkadd' , component: GtkAddComponent },
	{ path: '/gtk/edit/:id' , name: 'gtkedit' , component: GtkEditComponent , props: true},
	{ path: '/gtk/edit', name: 'gtkedit' , component: GtkEditComponent , props: true},

	{ path: '/jadwal', name: 'jadwallist', component: JadwalListComponent },
	{ path: '/jadwal/(index|list)', name: 'jadwallist' , component: JadwalListComponent },
	{ path: '/jadwal/(index|list)/:fieldname/:fieldvalue', name: 'jadwallist' , component: JadwalListComponent , props: true },
	{ path: '/jadwal/view/:id', name: 'jadwalview' , component: JadwalViewComponent , props: true},
	{ path: '/jadwal/view/:fieldname/:fieldvalue', name: 'jadwalview' , component: JadwalViewComponent , props: true },
	{ path: '/jadwal/add', name: 'jadwaladd' , component: JadwalAddComponent },
	{ path: '/jadwal/edit/:id' , name: 'jadwaledit' , component: JadwalEditComponent , props: true},
	{ path: '/jadwal/edit', name: 'jadwaledit' , component: JadwalEditComponent , props: true},

	{ path: '/profil_pengguna', name: 'profil_penggunalist', component: Profil_PenggunaListComponent },
	{ path: '/profil_pengguna/(index|list)', name: 'profil_penggunalist' , component: Profil_PenggunaListComponent },
	{ path: '/profil_pengguna/(index|list)/:fieldname/:fieldvalue', name: 'profil_penggunalist' , component: Profil_PenggunaListComponent , props: true },
	{ path: '/profil_pengguna/view/:id', name: 'profil_penggunaview' , component: Profil_PenggunaViewComponent , props: true},
	{ path: '/profil_pengguna/view/:fieldname/:fieldvalue', name: 'profil_penggunaview' , component: Profil_PenggunaViewComponent , props: true },
	{ path: '/profil_pengguna/add', name: 'profil_penggunaadd' , component: Profil_PenggunaAddComponent },
	{ path: '/profil_pengguna/edit/:id' , name: 'profil_penggunaedit' , component: Profil_PenggunaEditComponent , props: true},
	{ path: '/profil_pengguna/edit', name: 'profil_penggunaedit' , component: Profil_PenggunaEditComponent , props: true},

	{ path: '/rombongan', name: 'rombonganlist', component: RombonganListComponent },
	{ path: '/rombongan/(index|list)', name: 'rombonganlist' , component: RombonganListComponent },
	{ path: '/rombongan/(index|list)/:fieldname/:fieldvalue', name: 'rombonganlist' , component: RombonganListComponent , props: true },
	{ path: '/rombongan/view/:id', name: 'rombonganview' , component: RombonganViewComponent , props: true},
	{ path: '/rombongan/view/:fieldname/:fieldvalue', name: 'rombonganview' , component: RombonganViewComponent , props: true },
	{ path: '/rombongan/add', name: 'rombonganadd' , component: RombonganAddComponent },
	{ path: '/rombongan/edit/:id' , name: 'rombonganedit' , component: RombonganEditComponent , props: true},
	{ path: '/rombongan/edit', name: 'rombonganedit' , component: RombonganEditComponent , props: true},

	{ path: '/sarana', name: 'saranalist', component: SaranaListComponent },
	{ path: '/sarana/(index|list)', name: 'saranalist' , component: SaranaListComponent },
	{ path: '/sarana/(index|list)/:fieldname/:fieldvalue', name: 'saranalist' , component: SaranaListComponent , props: true },
	{ path: '/sarana/view/:id', name: 'saranaview' , component: SaranaViewComponent , props: true},
	{ path: '/sarana/view/:fieldname/:fieldvalue', name: 'saranaview' , component: SaranaViewComponent , props: true },
	{ path: '/sarana/add', name: 'saranaadd' , component: SaranaAddComponent },
	{ path: '/sarana/edit/:id' , name: 'saranaedit' , component: SaranaEditComponent , props: true},
	{ path: '/sarana/edit', name: 'saranaedit' , component: SaranaEditComponent , props: true},

	{ path: '/sekolah', name: 'sekolahlist', component: SekolahListComponent },
	{ path: '/sekolah/(index|list)', name: 'sekolahlist' , component: SekolahListComponent },
	{ path: '/sekolah/(index|list)/:fieldname/:fieldvalue', name: 'sekolahlist' , component: SekolahListComponent , props: true },
	{ path: '/sekolah/view/:id', name: 'sekolahview' , component: SekolahViewComponent , props: true},
	{ path: '/sekolah/view/:fieldname/:fieldvalue', name: 'sekolahview' , component: SekolahViewComponent , props: true },
	{ path: '/sekolah/add', name: 'sekolahadd' , component: SekolahAddComponent },
	{ path: '/sekolah/edit/:id' , name: 'sekolahedit' , component: SekolahEditComponent , props: true},
	{ path: '/sekolah/edit', name: 'sekolahedit' , component: SekolahEditComponent , props: true},

	{ path: '/siswa', name: 'siswalist', component: SiswaListComponent },
	{ path: '/siswa/(index|list)', name: 'siswalist' , component: SiswaListComponent },
	{ path: '/siswa/(index|list)/:fieldname/:fieldvalue', name: 'siswalist' , component: SiswaListComponent , props: true },
	{ path: '/siswa/view/:id', name: 'siswaview' , component: SiswaViewComponent , props: true},
	{ path: '/siswa/view/:fieldname/:fieldvalue', name: 'siswaview' , component: SiswaViewComponent , props: true },
	{ path: '/siswa/add', name: 'siswaadd' , component: SiswaAddComponent },
	{ path: '/siswa/edit/:id' , name: 'siswaedit' , component: SiswaEditComponent , props: true},
	{ path: '/siswa/edit', name: 'siswaedit' , component: SiswaEditComponent , props: true},

	{ path: '/home', name: 'home' , component: HomeComponent },
	{ path: '*', name: 'pagenotfound' , component: ComponentNotFound }
];

var router = new VueRouter({
	routes:routes,
	linkExactActiveClass:'active',
	linkActiveClass:'active',
	//mode:'history'
});
router.beforeEach(function(to, from, next) {
	document.body.className = to.name;
	
	next();

});
var config = {
	errorBagName: 'errors', // change if property conflicts
	fieldsBagName: 'fields', 
	delay: 0, 
	locale: '', 
	dictionary: null, 
	strict: true, 
	classes: false, 
	classNames: {
		touched: 'touched', // the control has been blurred
		untouched: 'untouched', // the control hasn't been blurred
		valid: 'valid', // model is valid
		invalid: 'invalid', // model is invalid
		pristine: 'pristine', // control has not been interacted with
		dirty: 'dirty' // control has been interacted with
	},
	events: 'input|blur',
	inject: true,
	validity: false,
	aria: true,
	i18n: null, // the vue-i18n plugin instance,
	i18nRootKey: 'validations', // the nested key under which the validation messsages will be located
};

Vue.use(VeeValidate,config);
Vue.http.interceptors.push(function(request, next) {
	next(function(response){
		if(response.status == 401 ) {
			if(this.$route.name != 'index'){
				window.location = "/"
				//this.$router.push('index');
			}
		}
		else if(response.status == 403 ) {
			alert(response.statusText);
			window.location = 'errors/forbidden';
		}
	});
});
Vue.mixin({
	data: function() {
		return {
			get ActiveUser() {
				return ActiveUser
			}
		}
	},
	methods: {
		SetPageTitle: function(title, pagename){
			document.title = title;
		},
		setPhotoUrl: function(src, width,height){
			var newSrc = 'helpers/timthumb.php?src=' + src;
			if(width){
				newSrc = newSrc + '&w=' + width
			}
			if(height){
				newSrc = newSrc + '&h=' + height	
			}
			return  newSrc;
		},
		exportPage: function(pagehtml , reporttitle){
			var form = document.getElementById("exportform");
			document.getElementById("exportformdata").value = pagehtml ;
			document.getElementById("exportformtitle").value = reporttitle ;
			form.submit();
		}
	}
});

var app = new Vue({
	el: '#app',
	router: router,
	data:{
		showPageError : false,
		pageErrorMsg : '',
		pageErrorStatus : '',
		modalComponentName: '',
		modalComponentProps: '',
		popoverTarget : '',
		showModalView : false,
		showFlash : false,
		flashMsg : '',
	},
	watch : {
		'$route': function(){
			this.pageErrorMsg = '' ;
			this.showPageError = false ;
		},
	},
	mounted : function(){
		this.$on('requestCompleted' ,  function (msg) {
			this.showModal = false;
			if(msg){
				this.showFlash = 3 ;
				this.flashMsg = msg ;
			}
			bus.$emit('refresh');
		});
		this.$on('requestError' ,  function (response) {
			this.pageErrorMsg = response.bodyText ;
			this.pageErrorStatus = response.statusText ;
			this.showPageError = true ;
		})
		
		this.$on('showPageModal' ,  function (props) {
			if(props.page){
				this.modalComponentName = props.page;
				delete props.page;
				props.resetgrid = true; // reset columns so that page components will fit well
				this.modalComponentProps = props;
				this.showModalView = true;
			}
			else{
				console.error("No Page Defined")
			}
		})
		
		this.$on('showPopOver' ,  function (props) {
			if(props.page && props.target){
				this.modalComponentName = props.page;
				this.popoverTarget = props.target;
				delete props.page;
				delete props.target;
				props.resetgrid=true;
				this.modalComponentProps = props;
			}
			else{
				console.error("No Page or Target  Defined")
			}
		})
		
		this.$on('showListModal' ,  function (arr) {
			this.modalComponentName = arr[0];
			this.modalFieldName = arr[1];
			this.modalFieldValue = arr[2];
			this.showModalList = true;
		})
	}
});


Vue.filter('toUSD', function (value) {
	return '$'+ value;
});
Vue.filter('upper', function (value) {
	return value.toUpperCase();
});
Vue.filter('lower', function (value) {
	return value.toLowerCase();
});
Vue.filter('proper', function (value) {
	return value.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
});
Vue.filter('truncate', function (text, length, suffix) {
	return text.substring(0, length) + suffix;
});
Vue.filter('toFixed', function (price, limit) {
	return price.toFixed(limit);
});
Vue.filter('makeRead', function (str) {
	return str.replace(/[-_]/g, " ");
});
Vue.filter('humanDate', function (datestr) {
	var timeStamp = new Date(datestr);
	return timeStamp.toDateString();
});
Vue.filter('humanTime', function (datestr) {
	var timeStamp = new Date(datestr);
	return timeStamp.toLocaleTimeString();
});

Vue.filter('toLocaleString', function (val) {
	return val.toLocaleString();
});
