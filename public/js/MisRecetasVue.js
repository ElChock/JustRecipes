new Vue({
    el: "#lista_recetas",
    data: {
        receta: []
    },
    mounted: function() {
        this.$nextTick(function() {
            var config = {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }

            var recetaVue = this.receta;
            axios.post("/vueMisRecetas").then(function(response) {
                    for (let index = 0; index < response.data.length; index++) {
                        recetaVue.push(response.data[index]);
                    }
                })
                .catch(function(error) {
                    console.log(error);
                });

        })

    },
    methods: {
        vueEliminarReceta: function(id) {
            var config = {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }
            axios.post("vueEliminarReceta", { id }, config).then(function(response) {
                console.log(response);
            }).catch(function(error) {
                cosole.log(error)
            })
        }
    }

});