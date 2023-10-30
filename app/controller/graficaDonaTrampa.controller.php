<script>
    const consultaGeneral = () => {
        $.ajax({
            url: "./app/model/process/graficaTrampas.process.php",
            type: "GET",
            success: (res) => {
                console.log(res)
                let ctx = document.getElementById('graficaTrampa').getContext('2d');
                new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: [
                            "Normal",
                            "Continuous",
                            "Counter"
                        ],
                        datasets: [{
                            data: jQuery.parseJSON(res),
                            backgroundColor: [
                                '#ffd60a',
                                '#f4a261',
                                '#0077b6',
                            ],
                        }],
                    },
                });
            },
        })

    }
    consultaGeneral();
</script>