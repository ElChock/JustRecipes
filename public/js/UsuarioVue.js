new Vue({
    el: "#formularioRegistro",
    data: {
        usuario: { "nombre": "", "correo": "", "contraseña": "" }
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
                    //window.location.replace("/inicio");
                })
                .catch(function(error) {
                    console.log(error);
                });
        }
    }
});