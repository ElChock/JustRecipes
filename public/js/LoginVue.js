new Vue({
    el: "#formularioRegistro",
    data: {

        usuario: { "correo": "", "contraseña": "" },
        usuarioLogin: "holi"

    },
    methods: {
        loginUser: function() {
            var usuarioVue = this.usuario;
            axios.post("/vueLogin", usuarioVue).then(function(response) {
                    console.log(response);
                    //window.location = response.data;
                })
                .catch(function(error) {
                    console.log(error);
                });
        }
    },
    mounted: function() {
        this.$nextTick(function() {
            axios.post("vueLogin").then(function(response) {

                })
                .catch(function(error) {
                    console.log(error)
                });
        })
    }
});