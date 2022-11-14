function index() {
 this.ini = function () {
 	console.log("Iniciando...");
        this.getIndicadores();
        this.getDatosGraficas();

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
                  'rgba(255, 159, 64, 1)'
              ],
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
              borderWidth: 3
                            },
                        
                        ]
                    }
                });
            }
        });
    }

}

var oIndex = new index();
setTimeout(function () { oIndex.ini(); }, 100);
