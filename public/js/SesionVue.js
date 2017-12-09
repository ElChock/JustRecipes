new Vue({
    el: "#cuenta",
    data: {
        usuario: { "nombre": "", "id": "" }
    },
    mounted: function() {
        this.$nextTick(function() {
            var config = {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }
            var usuarioVue = this.usuario;
            axios.post("/vueLoginStatus", "", config).then(function(response) {
                    user = response;
                    console.log(user);

                    if (user.data[0]) {
                        usuarioVue.nombre = user.data[0].nombre;
                        usuarioVue.id = user.data[0].id;
                    } else {
                        window.location.replace("/");
                    }

                })
                .catch(function(error) {
                    console.log(error)
                });
        })

    }
});