new Vue({
    el: "#lista_recetas",
    data: {
        receta: []


    },
    mounted: function() {
        this.$nextTick(function() {
            var nombre = getParameterByName("nombre");
            if (!nombre) {
                var recetaVue = this.receta;
                axios.post("/vueMisRecetas").then(function(response) {
                        for (let index = 0; index < response.data.length; index++) {
                            recetaVue.push(response.data[index]);
                        }
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
            } else {
                axios.post("/vueBuscarReceta", { nombre }).then(function(response) {
                        //console.log(response);
                        var recetaVue = response.data;
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

function getReceta(response) {
    recetaVue = response.data;
    var recetaHtml = "";
    var btnEliminar = "btn btn-danger btn-sm";
    for (let index = 0; index < recetaVue.length; index++) {
        var receta = recetaVue[index];

        recetaHtml += "<div class=receta>" +
            "<form id=formularioEliminar v-on:submit.prevent=vueEliminarReceta?idReceta=5  method=post enctype=multipart/form-data> " +
            "<table cellspacing=5>" +
            "<tr>" +
            "<td rowspan=7 id=imagen_receta ><img src=/imagenes/pizza.jpg alt=></td>" +
            "<td colspan=2><a href=/mostrarReceta?idReceta=" + receta.id + ">" + receta.nombre + "</a><button name=eliminar type=submit id=eliminar class=" + btnEliminar + ">Eliminar </button></td > " +
            "</tr>" +
            "<tr id=ocultar>" +
            "<td colspan=2><hr></td>" +
            "<td rowspan=5><textarea ></textarea></td>" +
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
            "</form>" +
            "</div>"
    }
    return recetaHtml;
}

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
};