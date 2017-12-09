new Vue({
    el: "#receta",
    data: {
        receta: { "nombre": "", "id": "", "dificultad": "", "porciones": "", "tiempoPreparacion": "", "descripcion": "", ingredientesReceta: [], pasosReceta: [] },
        ingredientes: { "nombre": "" },
        paso: { "descripcion": "", "foto": "" }
    },
    mounted: function() {
        this.$nextTick(function() {
            var config = {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }
            var idReceta = getParameterByName("idReceta");
            //            console.log(idReceta);
            var recetaVue = this.receta;
            axios.post("/vueReceta", { idReceta }, config).then(function(response) {
                    //console.log(response);
                    recetaVue.nombre = response.data.nombre;
                    recetaVue.dificultad = response.data.dificultad;
                    recetaVue.porciones = response.data.porciones;
                    recetaVue.tiempoPreparacion = response.data.tiempo;
                    recetaVue.descripcion = response.data.descripcion;
                    for (let index = 0; index < response.data.ingredientes.length; index++) {
                        recetaVue.ingredientesReceta.push(response.data.ingredientes[index]);
                        //console.log(response.data.ingredientes[index]);
                    }
                    for (let index = 0; index < response.data.pasos.length; index++) {
                        recetaVue.pasosReceta.push(response.data.pasos[index]);
                    }
                    // console.log(response.data.ingredientes.length);
                    //console.log(recetaVue);
                })
                .catch(function(error) {
                    console.log(error)
                });
        })
    }
});

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
};