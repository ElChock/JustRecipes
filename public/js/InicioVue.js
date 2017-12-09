new Vue({
    el: "#recetas",
    data: {
        receta: { "nombre": "", "id": "", "dificultad": "", "porciones": "", "tiempoPreparacion": "", "descripcion": "" }
    },
    mounted: function() {
        {

            this.mostrarRecetas();

        }
    },
    methods: {
        mostrarRecetas() {
            var config = {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }
            var recetaVue = this.receta;
            axios.post("vueRecetaTodas", "", config).then(function(response) {

                recetaVue = response.data;

                var recetaHtml = "";
                for (let index = 0; index < recetaVue.length; index++) {
                    var receta = recetaVue[index];

                    recetaHtml += "<div class=receta>" +
                        "<table cellspacing=5>" +
                        "<tr>" +
                        "<td rowspan=7 id=imagen_receta ><img src=/imagenes/pizza.jpg alt=></td>" +
                        "<td colspan=2><a href=/mostrarReceta?idReceta=" + receta.id + ">" + receta.nombre + "</a></td>" +
                        "</tr>" +
                        "<tr id=ocultar>" +
                        "<td colspan=2><hr></td>" +
                        "<td rowspan=5><textarea name=comentarios></textarea></td>" +
                        "</tr>" +
                        "<tr id=ocultar>" +
                        "<td colspan=1 class=handlee_font id=datos >Tiempo de Preparación: </td>" +
                        "<td class=roboto_font id=datos_receta >" + receta.tiempo + "</td>" +
                        "</tr>" +
                        "<tr id=ocultar>" +
                        " <td class=handlee_font>Porciónes: </td>" +
                        "<td class=roboto_font>" + receta.porciones + "</td>" +
                        "</tr>" +
                        "<tr id=ocultar>" +
                        "<td class=handlee_font>Dificultad: </td>" +
                        "<td class=roboto_font>" + receta.dificultad + "</td>" +


                        "</table>" +
                        "</div>"
                }
                $("#recetas").append(recetaHtml);

            }).catch(function(error) {
                console.log(error)
            });
        }
    }

});