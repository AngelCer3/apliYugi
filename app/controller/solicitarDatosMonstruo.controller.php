<script>
    /* $(document).ready(() => { */
        /* $.ajax({
            url: "./app/model/process/leerDatosMonstruo.process.php",
            type: "GET",
            success: (result => {
                console.log(result)
            }),
            error: ({

            })
        }) */
        let tabla = $('#Monstruos').DataTable({
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "ajax": './app/model/process/leerDatosMonstruo.process.php',
            "columns": [
                {
                    "data": "id"
                },
                {
                    "data": "imagen"
                },
                {
                    "data": "nombre"
                },
                {
                    "data": "descripcion"
                },
                {
                    "data": "ataque"
                },
                {
                    "data": "defensa"
                },
                {
                    "data": "tipo"
                },
                {
                    "data": "tipoMarco"
                },
                {
                    "data": "nivel"
                },
                {
                    "data": "atributo"
                },
            ]
        });
    /* }) */
</script>