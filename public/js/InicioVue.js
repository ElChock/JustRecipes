new Vue({
    el: "#cuenta",
    data: {
        receta: { "nombre": "", "id": "", "dificultad": "", "porciones": "", "tiempoPreparacion": "", "descripcion": "" },
        usuario: { "nombre": "", "id": "" }

    },
    mounted() {

        var usuarioVue = this.usuario;
        axios.post("/vueLoginStatus").then(function(response) {
                user = response;
                console.log(response);
                usuarioVue.nombre = user.data[0].nombre;
                usuarioVue.id = user.data[0].id;
            })
            .catch(function(error) {
                console.log(error)
            });
        this.mostrarRecetas();

    },
    methods: {
        mostrarRecetas() {
            var recetaVue = this.receta;
            axios.post("vueRecetaTodas").then(function(response) {

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
                        "</tr>" +
                        "<tr id=ocultar>" +
                        "<td id=calificacion colspan=2><img src=/imagenes/calificacion.png alt=></td>" +
                        "</tr>" +
                        "<tr id=ocultar>" +
                        "<td class=handlee_font>Receta por:</td>" +
                        "<td class=roboto_font id=usuario_receta colspan=2 >Jovy</td>" +
                        "</tr>" +
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