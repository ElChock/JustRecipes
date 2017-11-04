new Vue({
    el: "#formularioRegistro",
    data: {

        usuario: { "correo": "", "contraseña": "" }

    },
    methods: {
        loginUser: function() {
            var usuarioVue = this.usuario;
            // this.$http.post('/vueUser', input).then((response) => {
            //     this.newItem = { 'nombre': '', 'correo': '', "contraseña": "" };
            //     toastr.success('Item Created Successfully.', 'Success Alert', { timeOut: 5000 });
            // }, (response) => {
            //     toastr.success(response.data, 'Success Alert', { timeOut: 5000 });

            // });
            axios.post("/vueLogin", usuarioVue).then(function(response) {
                    console.log(response);
                })
                .catch(function(error) {
                    console.log(error);
                });
        }
    }
});