//Vue.http.headers.common['X-CSRF-TOKEN'] = $("#token").attr("value");
//Vue.prototype.$http = axios;

new Vue({
    el: "#formularioRegistro",
    data: {
        message: "este es el titulo dinamico",
        usuario: { "nombre": "", "correo": "", "contraseña": "" },
        formErrors: {}
    },
    methods: {
        createUser: function() {
            var usuarioVue = this.usuario;
            // this.$http.post('/vueUser', input).then((response) => {
            //     this.newItem = { 'nombre': '', 'correo': '', "contraseña": "" };
            //     toastr.success('Item Created Successfully.', 'Success Alert', { timeOut: 5000 });
            // }, (response) => {
            //     toastr.success(response.data, 'Success Alert', { timeOut: 5000 });

            // });
            axios.post("/vueUser", usuarioVue).then(function(response) {
                    console.log(response);
                })
                .catch(function(error) {
                    console.log(error);
                });
        }
    }
});