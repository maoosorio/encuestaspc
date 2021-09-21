@extends('layouts.master')
@section('principal')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">1.- Ya había visto el logotipo de protección civil</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="donutChart1"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">3.- Medios por dónde se enteró.</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="donutChart3"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">5.- ¿Usted considera que el lugar en el que se ubica su casa está totalmente libre de riesgos de inundaciones o está totalmente en riesgo de sufrir inundaciones?</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="donutChart5"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">7.- Y, ¿qué me dice de sus vecinos, ellos sí han sufrido algún tipo de inundación?</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="donutChart7"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">9.- En los últimos cinco años, ¿su vivienda ha sufrido algún deslave?</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="donutChart9"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">11.- ¿Qué tan resistente es su hogar para soportar un sismo?</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="donutChart11"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">13.- En su opinión ¿Cómo ha sido el trabajo de las autoridades de PC en caso de sismo?</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="donutChart13"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">15.- ¿Cómo ha sido la reacción de las autoridades ante el problema de las inundaciones?</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="donutChart15"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">2.- Ha visto o escuchado alguna campaña publicitaria de Protección Civil.</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="donutChart2"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">4.- En su opinión, ¿Qué tan preparada está la población para enfrentar un desastre provocado por fenómenos naturales?</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="donutChart4"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">6.- En los últimos cinco años, ¿su vivienda ha sufrido algún tipo de inundación?</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="donutChart6"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">8.- Y, ¿cómo es la situación en casos de deslaves, está totalmente libre de riesgo de deslave o totalmente en riesgo?</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="donutChart8"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">10.- Y, ¿qué me dice de sus vecinos, ellos sí han sufrido algún tipo de deslave?</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="donutChart10"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">12.- En su opinión, ¿cómo ha sido el trabajo que han realizado las autoridades de Protección Civil en la temporada de lluvias pasada?</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="donutChart12"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">14.- ¿Qué tanto ha trabajado el gobierno del estado para evitar que ocurran desastres?</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="donutChart14"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">16.- ¿Qué tan efectiva ha sido la ayuda que el gobierno del estado ha brindado a las víctimas de desastres?</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="donutChart16"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
        $(function () {
          var donutChartCanvas1 = $('#donutChart1').get(0).getContext('2d')
          var donutData1        = {
            labels: [
                'Lo conoce y lo identifica plenamente ',
                'Lo conoce y lo identifica parcialmente ',
                'Lo conoce pero no lo identifica ',
                'Nunca lo había visto antes '
            ],
            datasets: [
              {
                data: [60,30,6,4],
                backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef']
              }
            ]
          }
          var donutOptions1     = {
            maintainAspectRatio : false,
            responsive : true,
            // legend :{
            // display : false
            // }
          }
          new Chart(donutChartCanvas1, {
            type: 'doughnut',
            data: donutData1,
            options: donutOptions1
          })

          var donutChartCanvas2 = $('#donutChart2').get(0).getContext('2d')
          var donutData2        = {
            labels: [
                'Si',
                'No'
            ],
            datasets: [
              {
                data: [30,70],
                backgroundColor : ['#00a65a','#f56954']
              }
            ]
          }
          var donutOptions2     = {
            maintainAspectRatio : false,
            responsive : true,
            // legend :{
            // display : false
            // }
          }
          new Chart(donutChartCanvas2, {
            type: 'pie',
            data: donutData2,
            options: donutOptions2
          })

          var donutChartCanvas3 = $('#donutChart3').get(0).getContext('2d')
          var donutData3        = {
            labels: [
                'TV',
                'Radio',
                'Folleto',
                'Exterior',
                'Periódico',
                'Revista',
                'Perifoneo',
                'No se ha enterado'
            ],
            datasets: [
              {
                data: [20,15,5,2,10,10,15,23],
                backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de','#6610f2','#e83e8c']
              }
            ]
          }
          var donutOptions3     = {
            maintainAspectRatio : false,
            responsive : true,
            legend :{
            display : false
            }
          }
          new Chart(donutChartCanvas3, {
            type: 'bar',
            data: donutData3,
            options: donutOptions3
          })

          var donutChartCanvas4 = $('#donutChart4').get(0).getContext('2d')
          var donutData4        = {
            labels: [
                'Muy preparada',
                'Preparada',
                'Algo Preparada',
                'Poco Preparada',
                'Nada Preparada',
                'No Sabe'
            ],
            datasets: [
              {
                data: [15,35,25,10,10,5],
                backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de']
              }
            ]
          }
          var donutOptions4     = {
            maintainAspectRatio : false,
            responsive : true,
            // legend :{
            // display : false
            // }
          }
          new Chart(donutChartCanvas4, {
            type: 'doughnut',
            data: donutData4,
            options: donutOptions4
          })
          
          var donutChartCanvas5 = $('#donutChart5').get(0).getContext('2d')
          var donutData5        = {
            labels: [
                'Totalmente libre',
                'Más o menos libre',
                'Más o menos riesgo',
                'Totalmente en riesgo',
                'No Sabe'
            ],
            datasets: [
              {
                data: [25,35,25,10,5],
                backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc']
              }
            ]
          }
          var donutOptions5     = {
            maintainAspectRatio : false,
            responsive : true,
            // legend :{
            // display : false
            // }
          }
          new Chart(donutChartCanvas5, {
            type: 'pie',
            data: donutData5,
            options: donutOptions5
          })

          var donutChartCanvas6 = $('#donutChart6').get(0).getContext('2d')
          var donutData6        = {
            labels: [
                'No sabe',
                'Si',
                'No'
            ],
            datasets: [
              {
                data: [10,50,40],
                backgroundColor : ['#3c8dbc','#00a65a','#f56954']
              }
            ]
          }
          var donutOptions6     = {
            maintainAspectRatio : false,
            responsive : true,
            legend :{
            display : false
            }
          }
          new Chart(donutChartCanvas6, {
            type: 'bar',
            data: donutData6,
            options: donutOptions6
          })

          var donutChartCanvas7 = $('#donutChart7').get(0).getContext('2d')
          var donutData7        = {
            labels: [
                'No sabe',
                'Si',
                'No'
            ],
            datasets: [
              {
                data: [15,55,30],
                backgroundColor : ['#3c8dbc','#00a65a','#f56954']
              }
            ]
          }
          var donutOptions7     = {
            maintainAspectRatio : false,
            responsive : true,
            // legend :{
            // display : false
            // }
          }
          new Chart(donutChartCanvas7, {
            type: 'doughnut',
            data: donutData7,
            options: donutOptions7
          })

          var donutChartCanvas8 = $('#donutChart8').get(0).getContext('2d')
          var donutData8        = {
            labels: [
                'Totalmente libre',
                'Más o menos libre',
                'Más o menos riesgo',
                'Totalmente en riesgo',
                'No Sabe'
            ],
            datasets: [
              {
                data: [35,15,20,20,10],
                backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc']
              }
            ]
          }
          var donutOptions8     = {
            maintainAspectRatio : false,
            responsive : true,
            // legend :{
            // display : false
            // }
          }
          new Chart(donutChartCanvas8, {
            type: 'pie',
            data: donutData8,
            options: donutOptions8
          })

          var donutChartCanvas9 = $('#donutChart9').get(0).getContext('2d')
          var donutData9        = {
            labels: [
                'No sabe',
                'Si',
                'No'
            ],
            datasets: [
              {
                data: [30,50,20],
                backgroundColor : ['#3c8dbc','#00a65a','#f56954']
              }
            ]
          }
          var donutOptions9     = {
            maintainAspectRatio : false,
            responsive : true,
            legend :{
            display : false
            }
          }
          new Chart(donutChartCanvas9, {
            type: 'bar',
            data: donutData9,
            options: donutOptions9
          })

          var donutChartCanvas10 = $('#donutChart10').get(0).getContext('2d')
          var donutData10        = {
            labels: [
                'No sabe',
                'Si',
                'No'
            ],
            datasets: [
              {
                data: [5,25,70],
                backgroundColor : ['#3c8dbc','#00a65a','#f56954']
              }
            ]
          }
          var donutOptions10     = {
            maintainAspectRatio : false,
            responsive : true,
            // legend :{
            // display : false
            // }
          }
          new Chart(donutChartCanvas10, {
            type: 'doughnut',
            data: donutData10,
            options: donutOptions10
          })

          var donutChartCanvas11 = $('#donutChart11').get(0).getContext('2d')
          var donutData11        = {
            labels: [
                'Muy resistente',
                'Resistente',
                'Algo resistente',
                'Poco resistente',
                'Nada resistente',
                'No sabe'
            ],
            datasets: [
              {
                data: [5,20,10,30,15,20],
                backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de']
              }
            ]
          }
          var donutOptions11     = {
            maintainAspectRatio : false,
            responsive : true,
            // legend :{
            // display : false
            // }
          }
          new Chart(donutChartCanvas11, {
            type: 'pie',
            data: donutData11,
            options: donutOptions11
          })

          var donutChartCanvas12 = $('#donutChart12').get(0).getContext('2d')
          var donutData12        = {
            labels: [
                'Muy bueno',
                'Bueno',
                'Regular',
                'Malo',
                'Muy malo',
                'No sabe'
            ],
            datasets: [
              {
                data: [15,10,20,10,5,40],
                backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de']
              }
            ]
          }
          var donutOptions12     = {
            maintainAspectRatio : false,
            responsive : true,
            legend :{
            display : false
            }
          }
          new Chart(donutChartCanvas12, {
            type: 'bar',
            data: donutData12,
            options: donutOptions12
          })

          var donutChartCanvas13 = $('#donutChart13').get(0).getContext('2d')
          var donutData13        = {
            labels: [
                'Muy bueno',
                'Bueno',
                'Regular',
                'Malo',
                'Muy malo',
                'No sabe'
            ],
            datasets: [
              {
                data: [25,10,10,20,15,20],
                backgroundColor : ['#f56954', '#00a65a', '#f39c13', '#00c0ef', '#3c8dbc', '#d2d6de']
              }
            ]
          }
          var donutOptions13     = {
            maintainAspectRatio : false,
            responsive : true,
            // legend :{
            // display : false
            // }
          }
          new Chart(donutChartCanvas13, {
            type: 'doughnut',
            data: donutData13,
            options: donutOptions13
          })

          var donutChartCanvas14 = $('#donutChart14').get(0).getContext('2d')
          var donutData14        = {
            labels: [
                'No sabe',
                'Nada',
                'Poco',
                'Mucho'
            ],
            datasets: [
              {
                data: [30,20,45,5],
                backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef']
              }
            ]
          }
          var donutOptions14     = {
            maintainAspectRatio : false,
            responsive : true,
            // legend :{
            // display : false
            // }
          }
          new Chart(donutChartCanvas14, {
            type: 'pie',
            data: donutData14,
            options: donutOptions14
          })

          var donutChartCanvas15 = $('#donutChart15').get(0).getContext('2d')
          var donutData15        = {
            labels: [
                'Inmediata',
                'Rápida',
                'Lenta',
                'Muy lenta',
                'No sabe'
            ],
            datasets: [
              {
                data: [22,18,10,35,15],
                backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc']
              }
            ]
          }
          var donutOptions15     = {
            maintainAspectRatio : false,
            responsive : true,
            legend :{
            display : false
            }
          }
          new Chart(donutChartCanvas15, {
            type: 'bar',
            data: donutData15,
            options: donutOptions15
          })

          var donutChartCanvas16 = $('#donutChart16').get(0).getContext('2d')
          var donutData16        = {
            labels: [
                'Efectiva / Muy efectiva',
                'Algo / Poco efectiva',
                'Nada efectiva',
                'No sabe'
            ],
            datasets: [
              {
                data: [25,30,15,30],
                backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef']
              }
            ]
          }
          var donutOptions16     = {
            maintainAspectRatio : false,
            responsive : true,
            // legend :{
            // display : false
            // }
          }
          new Chart(donutChartCanvas16, {
            type: 'doughnut',
            data: donutData16,
            options: donutOptions16
          })

        })

      </script>
@endsection
