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
            var nombre = getParameterByName("nombre");
            var recetaVue = this.receta;
            axios.post("/vueBuscarReceta", { nombre }, config).then(function(response) {
                    for (let index = 0; index < response.data.length; index++) {
                        recetaVue.push(response.data[index]);
                    }
                })
                .catch(function(error) {
                    console.log(error);
                });

        })

    }
});