new Vue({
    el: "#cuenta",
    data: {
        usuario: { "nombre": "", "id": "" }

    },
    mounted: function() {
        this.$nextTick(function() {
            var usuarioVue = this.usuario;
            axios.post("/vueLoginStatus").then(function(response) {
                    user = response;
                    //console.log(user);
                    usuarioVue.nombre = user.data[0].nombre;
                    usuarioVue.id = user.data[0].id;
                })
                .catch(function(error) {
                    console.log(error)
                });
        })

    }
});