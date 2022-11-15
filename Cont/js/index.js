function index() {
 this.ini = function () {
 	console.log("Iniciando...");
        this.getIndicadores();
        this.getDatosGraficas();
        this.getDatosGraficas2();

}
	  this.getIndicadores = function () {
        $.ajax({
            statusCode: {
                404: function () {
                    console.log("Esta página no existe");
                }
            },
            url: 'php/servidor.php',
            method: 'POST',
            data: {
                rq: "1"
                }
        }).done(function (datos) {
            //La lógica
            if (datos != '') {
                let etiquetas = new Array();
                let tVendidos = new Array();
                let coloresV = new Array();
                let coloresP = new Array();
                var jDatos = JSON.parse(datos);

                  for (let i in jDatos) {
                    etiquetas.push(jDatos[i].totalFecha);
                    tVendidos.push(jDatos[i].totalVendidos);
                    coloresV.push("#36004D");
                    coloresP.push("679B6B");
                  }

                var ctx = document.getElementById('Grafica1').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: etiquetas,
                        datasets: [
                            {
                                label: 'Ventas',
                                data: tVendidos,
                                backgroundColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 3)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(2, 159, 64, 1)',
                  'RGBA(0,227,80,1)'
              ],
              borderWidth: 3
                            },
                        
                        ]
                    }
                });

                
                var ctc = document.getElementById('Grafica3').getContext('2d');
                var myChart = new Chart(ctc, {
                    type: 'line',
                    data: {
                        labels: etiquetas,
                        datasets: [
                            {
                                label: 'Ventas',
                                data: tVendidos,
                                fill: false,
                                borderColor: 'rgb(75, 192, 192)',
              borderWidth: 3
                            },
                        
                        ]
                    }
                });
            }

        });
}

    this.getDatosGraficas = function () {
         $.ajax({
            statusCode: {
                404: function () {
                    console.log("Esta página no existe");
                }
            },
            url: 'php/servidor.php',
            method: 'POST',
            data: {
                rq: "2"
                }
        }).done(function (datos) {
            //La lógica
            if (datos != '') {
                let etiquetas = new Array();
                let tVendidos = new Array();
                let coloresV = new Array();
                let coloresP = new Array();
                var jDatos = JSON.parse(datos);

                  for (let i in jDatos) {
                    etiquetas.push(jDatos[i].totalFecha);
                    tVendidos.push(jDatos[i].totalVendidos);
                    coloresV.push("#36004D");
                    coloresP.push("#679B6B");
                  }

                var cta = document.getElementById('Grafica2').getContext('2d');
                var myChart = new Chart(cta, {
                    type: 'line',
                    data: {
                        labels: etiquetas,
                        datasets: [
                            {
                                label: 'Ventas',
                                data: tVendidos,
                                borderColor: coloresP,
                                tension: 0.2,
              borderWidth: 3
                            },
                        
                        ]
                    }
                });

                var ctp = document.getElementById('Grafica4').getContext('2d');
                var myChart = new Chart(ctp, {
                    type: 'doughnut',
                    data: {
                        labels: etiquetas,
                        datasets: [
                            {
                                label: 'Ventas',
                                data: tVendidos,
                                backgroundColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 3)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(2, 159, 64, 1)',
                  'RGBA(0,227,80,1)'
              ],
              borderWidth: 3
                            },
                        
                        ]
                    }
                });

            }
        });
    }

        this.getDatosGraficas2 = function () {
         $.ajax({
            statusCode: {
                404: function () {
                    console.log("Esta página no existe");
                }
            },
            url: 'php/servidor.php',
            method: 'POST',
            data: {
                rq: "3"
                }
        }).done(function (datos) {
            //La lógica
            if (datos != '') {
                let etiquetas = new Array();
                let tVendidos = new Array();
                let coloresV = new Array();
                let coloresP = new Array();
                var jDatos = JSON.parse(datos);

                  for (let i in jDatos) {
                    etiquetas.push(jDatos[i].totalFecha);
                    tVendidos.push(jDatos[i].totalVendidos);
                    coloresV.push("#36004D");
                    coloresP.push("#679B6B");
                  }

                var ctq = document.getElementById('Grafica5').getContext('2d');
                var myChart = new Chart(ctq, {
                    type: 'line',
                    data: {
                        labels: etiquetas,
                        datasets: [
                            {
                                label: 'Precios',
                                data: tVendidos,
                                fill: false,
                                borderColor: 'rgb(255,101,80,)',
                                tension: 0,
              borderWidth: 3

                            },
                        
                        ]
                    }

                });

                var ctm = document.getElementById('Grafica6').getContext('2d');
                var myChart = new Chart(ctm, {
                    type: 'doughnut',

                    data: {
                        labels: etiquetas,
                        datasets: [
                            {
                                label: 'Precios',
                                data: tVendidos,
                                backgroundColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 3)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(2, 159, 64, 1)',
                  'RGBA(0,227,80,1)'
              ],
              borderWidth: 3
                            },
                        
                        ]}


                });

            }

        });
    }

}

var oIndex = new index();
setTimeout(function () { oIndex.ini(); }, 100);
