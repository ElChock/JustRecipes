new Vue({
    el: "#formReceta",
    data: {
        receta: { "nombre": "", "id": "", "dificultad": "","idUsuario":"", "porciones": "", "tiempoPreparacion": "", "descripcion": "", ingredientesReceta: [], pasosReceta: [] },
        ingredientes: { "nombre": "" },
        paso: { "descripcion": "", "foto": "" }
    },
    mounted: function() {
        this.$nextTick(function() {
            let config = {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }
            var idReceta = getParameterByName("idReceta");
            if (idReceta) {
                var recetaVue = this.receta;             
                axios.post("/vueReceta", { idReceta }).then(function(response) {
                    recetaVue.nombre = response.data.nombre;
                    recetaVue.dificultad = response.data.dificultad;
                    recetaVue.porciones = response.data.porciones;
                    recetaVue.tiempoPreparacion = response.data.tiempo;
                    recetaVue.descripcion = response.data.descripcion;
                    recetaVue.id=response.data.id;
                    recetaVue.idUsuario=response.data.idUsuario;
                    console.log(response);
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
            }
        });

    },
    methods: {
        CrearReceta: function() {
            var nombre = getParameterByName("nombre");

            var ingredientesList = document.getElementById('tabla').childNodes;
            var pasosList = document.getElementById('tabla_pasos').childNodes;
            var recetaVue = this.receta;

            //  tbody    arreglo i    columna     columna     input
            //console.log(ingredientesList[2].children[1].children[1].children[0].children[0].value);
            for (let index = 2; index < ingredientesList[2].childNodes.length; index++) {
                recetaVue.ingredientesReceta.push(ingredientesList[2].childNodes[index].childNodes[2].childNodes[0].value);

            }
            for (let index = 2; index < pasosList[2].childNodes.length; index++) {
                recetaVue.pasosReceta.push(pasosList[2].childNodes[index].childNodes[2].childNodes[0].value);

            }
            if(!recetaVue.id){
                axios.post("/vueCrearReceta", recetaVue).then(function(response) {
                    console.log(response);
                })
                .catch(function(error) {
                    console.log(error)
                });
            }else{

                axios.post("/vueActualizarReceta", recetaVue).then(function(response) {
                    console.log(response);
                })
                .catch(function(error) {
                    console.log(error)
                });
            }


        }
    }
});