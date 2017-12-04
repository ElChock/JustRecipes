new Vue({
    el: "#lista_recetas",
    data: {
        receta: []
    },
    mounted: function() {
        this.$nextTick(function() {
            let config = {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }
            var nombre = getParameterByName("nombre");
            if (!nombre) {
                var recetaVue = this.receta;
                axios.post("/vueMisRecetas").then(function(response) {
                        for (let index = 0; index < response.data.length; index++) {
                            recetaVue.push(response.data[index]);
                        }   
                        console.log(recetaVue);
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
            } else {
                var recetaVue = this.receta;
                axios.post("/vueBuscarReceta", { nombre }).then(function(response) {
                        for (let index = 0; index < response.data.length; index++) {
                            recetaVue.push(response.data[index]);
                        }
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
            }
        })

    },
    methods: {
        vueEliminarReceta: function(id) {
            console.log(id);
            axios.post("vueEliminarReceta", { id }).then(function(response) {
                console.log(response);
            }).catch(function(error) {
                cosole.log(error)
            })
        }
    }

});