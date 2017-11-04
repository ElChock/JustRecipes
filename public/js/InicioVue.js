new Vue({
    el: "#cuenta",
    data: {
        usuario: { "nombre": "123", "id": "" }
    },
    mounted: function() {
        this.$nextTick(function() {
            axios.post("/vueLoginStatus").then(function(response) {
                    //console.log(this.usuario.nombre);
                    //this.usuario.nombre = "yolo";
                    console.log(response);
                })
                .catch(function(error) {
                    console.log(error)
                });
        })
    }
});