new Vue({
    el: "#formReceta",
    data: {
        receta: { "nombre": "", "id": "", "dificultad": "", "porciones": "", "tiempoPreparacion": "", "descripcion": "", ingredientesReceta: [], pasosReceta: [] },
        ingredientes: { "nombre": "" },
        paso: { "descripcion": "", "foto": "" }
    },
    methods: {
        CrearReceta: function() {
            console.log(this.receta);
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
            console.log(recetaVue);
            axios.post("/vueCrearReceta", recetaVue).then(function(response) {
                    console.log(response);
                })
                .catch(function(error) {
                    console.log(error)
                });
        }
    }
});