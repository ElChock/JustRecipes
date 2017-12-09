new Vue({
    el: "#formReceta",
    data: {
        receta: { "nombre": "", "id": "", "dificultad": "", "idUsuario": "", "porciones": "", "tiempoPreparacion": "", "descripcion": "", ingredientesReceta: [], pasosReceta: [] },
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
            if (idReceta) {
                var recetaVue = this.receta;
                axios.post("/vueReceta", { idReceta }, config).then(function(response) {
                        recetaVue.nombre = response.data.nombre;
                        recetaVue.dificultad = response.data.dificultad;
                        recetaVue.porciones = response.data.porciones;
                        recetaVue.tiempoPreparacion = response.data.tiempo;
                        recetaVue.descripcion = response.data.descripcion;
                        recetaVue.id = response.data.id;
                        recetaVue.idUsuario = response.data.idUsuario;

                        for (let index = 0; index < response.data.ingredientes.length; index++) {
                            recetaVue.ingredientesReceta.push(response.data.ingredientes[index]);
                            $("#tabla tbody tr:eq(0)").clone().removeClass('fila_base').appendTo("#tabla tbody");
                        }
                        for (let index = 0; index < response.data.pasos.length; index++) {
                            recetaVue.pasosReceta.push(response.data.pasos[index]);
                            $("#tabla_pasos tbody tr:eq(0)").clone().removeClass('fila_base_pasos').appendTo("#tabla_pasos tbody");
                        }

                        var ingredientesList = document.getElementById('tabla').childNodes;
                        var pasosList = document.getElementById('tabla_pasos').childNodes;
                        for (let index = 0; index < recetaVue.ingredientesReceta.length; index++) {
                            ingredientesList[2].childNodes[index + 2].childNodes[2].childNodes[0].value = recetaVue.ingredientesReceta[index].nombre;

                        }
                        for (let index = 0; index < recetaVue.pasosReceta.length; index++) {
                            pasosList[2].childNodes[index + 2].childNodes[2].childNodes[0].value = recetaVue.pasosReceta[index].descripcion;

                        }
                    })
                    .catch(function(error) {
                        console.log(error)
                    });
            }
        });

    },
    methods: {
        CrearReceta: function() {
            var config = {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }
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
            if (!recetaVue.id) {
                axios.post("/vueCrearReceta", recetaVue, config).then(function(response) {
                        console.log(response);
                    })
                    .catch(function(error) {
                        console.log(error)
                    });
            } else {

                axios.post("/vueActualizarReceta", recetaVue, config).then(function(response) {
                        console.log(response);
                    })
                    .catch(function(error) {
                        console.log(error)
                    });
            }


        }
    }
});