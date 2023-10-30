<script>
    const datos = [];
    const datos2 = [];
    const datos3 = [];
    const consultaGeneral = () => {
        $.ajax({
            async: false,
            url: "./public/js/yugiapi/cardinfo.json",
            type: "GET",
            success: (res) => {
                res.data.map((carta) => {
                    if ((carta.type == "Spell Card")) {
                        datos2.push({
                            'nombre': carta.name,
                            'descripcion': carta.desc,
                            'tipo': carta.type,
                            'imagen': carta.card_images[0].image_url,
                            'race': carta.race
                        })
                    } else if ((carta.type == "Trap Card")) {
                        datos3.push({
                            'nombre': carta.name,
                            'descripcion': carta.desc,
                            'tipo': carta.type,
                            'imagen': carta.card_images[0].image_url,
                            'race': carta.race
                        })
                    } else {
                        if (!(carta.type == "Skill Card") && !(carta.type == "Link Monster")) {
                            datos.push({
                                'nombre': carta.name,
                                'descripcion': carta.desc,
                                'tipo': carta.type,
                                'tipoMarco': carta.frameType,
                                'ataque': carta.atk,
                                'defensa': carta.def,
                                'nivel': carta.level,
                                'atributo': carta.attribute,
                                'imagen': carta.card_images[0].image_url
                            })
                        }
                    }
                })
            },
        })

        //console.log(datos)
    }


    const enviaDatos = () => {
        consultaGeneral();
        $.ajax({
            url: "./app/model/process/enviarDatosMounstro.process.php",
            data: {
                datosMounstro: JSON.stringify(datos)
            },
            type: "POST",
            success: (result) => {
                
            },
            error: () => {

            }
        })
    }
    const enviaDatos2 = () => {
        consultaGeneral();
        $.ajax({
            url: "./app/model/process/enviarDatosMagias.process.php",
            data: {
                datosMagias: JSON.stringify(datos2)
            },
            type: "POST",
            success: (result) => {
                
            },
            error: () => {

            }
        })
    }
    const enviaDatos3 = () => {
        consultaGeneral();
        $.ajax({
            url: "./app/model/process/enviarDatosTrampas.process.php",
            data: {
                datosTrampas: JSON.stringify(datos3)
            },
            type: "POST",
            success: (result) => {
                Swal.fire({
                    text: 'Datos insertados correctamente',
                    icon: "success",
                    timer: 2000,
                })
            },
            error: () => {

            }
        })
    }

    const eliminarDatos = () => {
        Swal.fire({
            icon: 'question',
            text: "Quieres borrar los datos?",
            showConfirmButton: 'Si',
            showCancelButton: 'No',
        }).then(result => {
            if (result) {
                $.ajax({
                    url: './app/model/process/deleteDatos.process.php',
                    success: (result) => {
                        Swal.fire({
                            text: 'Datos Eliminados correctamente',
                            icon: "success",
                            showConfirmButton: 'ok'
                        })
                    },
                })
            }
        })
    }

    $('#btnCargar').click(() => {
        enviaDatos();
        enviaDatos2();
        enviaDatos3();
    });
    $('#btnEliminar').click(() => {
        eliminarDatos();
    })
</script>