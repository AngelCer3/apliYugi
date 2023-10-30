<script>
  const consultaGeneral = () => {
    $.ajax({
      url: "./app/model/process/graficaMonstruos.process.php",
      type: "GET",
      success: (res) => {
        console.log(res)
        let ctx = document.getElementById('graficaMonstruo').getContext('2d');
        new Chart(ctx, {
          type: 'doughnut',
          data: {
            labels: [
              "normal",
              "effect",
              "ritual",
              "fusion",
              "synchro",
              "xyz",
              "normal_pendulum",
              "effect_pendulum",
              "ritual_pendulum",
              "fusion_pendulum",
              "synchro_pendulum",
              "xyz_pendulum"
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
                '#fcf6bd',
                '#e07a5f',
                '#a9def9',
                '#c8b6ff',
                '#edede9',
                '#001d3d',
              ],
            }],
          },
        });
      },
    })

  }
  consultaGeneral();


  /* let resultados = ;

  let nombresMonstruos = resultados.map(monstruo => monstruo.tipo);
  let valoresMonstruos = resultados.map(monstruo => 1); // Puedes establecer un valor fijo o realizar un recuento aquí

  var ctx = document.getElementById('graficaMonstruo').getContext('2d');
  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: nombresMonstruos,
      datasets: [{
        data: valoresMonstruos,
        backgroundColor: [
          'red',
          'blue',
          'green',
          'pink',
          'dark',
          'yellow',
          'purple',
          'cyan'
        ],
      }],
    },
  }); */
</script>