new Vue({
    el: "#headerRegistro",
    data: {
        receta: { "id": "", "nombre": "", "porciones": "","dificultad":"","descripcion":"","tiempo":"", }
    },
    methods: {
        createUser: function() {
            //var usuarioVue = this.usuario;
            axios.post("/vueMisRecetas").then(function(response) {
                    console.log(response);
                })
                .catch(function(error) {
                    console.log(error);
                });
        }
    }
});