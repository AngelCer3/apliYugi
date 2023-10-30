<script>
    const consultaGeneral = () => {
        $.ajax({
            url: "./app/model/process/graficaMagias.process.php",
            type: "GET",
            success: (res) => {
                console.log(res)
                let ctx = document.getElementById('graficaMagias').getContext('2d');
                new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: [
                            "Normal",
                            "Field",
                            "Continuous",
                            "Quick-Play",
                            "Equip",
                            "Ritual"
                        ],
                        datasets: [{
                            data: jQuery.parseJSON(res),
                            backgroundColor: [
                                '#ffd60a',
                                '#f4a261',
                                '#0077b6',
                                '#7209b7',
                                '#ffffff',
                                '#000000',
                            ],
                        }],
                    },
                });
            },
        })

    }
    consultaGeneral();
</script>