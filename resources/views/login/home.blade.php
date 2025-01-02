@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">Home Page</h1>
    </div>
@if($p)
    <center>
    <h2>Pemilihan terakhir : {{ $p->nama_kegiatan }}</h2>
    <h3>Countdown</h3>
    <h3><div id="countdown"></div></h3>
    <br>
    <h3>Total voter : {{$v}} &emsp; Voter memilih : <span style="color: green;">{{$v1}}</span> &emsp; Voter tidak memilih : <span style="color: red;">{{$v0}}</span></h3>
    </center>

    <h3>Count Kandidat : </h3>
    <ul>
      @foreach($k as $k)
      <li>No urut {{ $k->no_urut }}&emsp;{{ $k->nama }} : {{$c[$k->no_urut]}}</li>
        @foreach($akt as $x)
        <li style='list-style-type: none;'>&emsp;&emsp;{{ $x }}: {{ $xakt[$k->no_urut][$x] }}</li>
        @endforeach
      @endforeach
    </ul>

 <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.2/dist/chart.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

      <!-- <h3>Quick Count</h3>
  <div class='chart left' id='liveCount' ></div>

 <script src="https://code.highcharts.com/highcharts.js"></script>
 <script type="text/javascript">
                  Highcharts.chart('liveCount',{
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: {!! json_encode($p->nama_kegiatan) !!}
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    accessibility: {
                        point: {
                            valueSuffix: '%'
                        }
                    },
                    plotOptions: {
                        pie: {
                          colors: [
                                '#A12568', 
                                '#FEC260',
                                '#2A0944',
                                '#24CBE5', 
                                '#64E572', 
                                '#FF9655', 
                                '#FFF263', 
                                '#6AF9C4'
                              ],
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: false
                            },
                            showInLegend: true
                        }
                    },
                    series: [{
                        name: 'Kandidat',
                        colorByPoint: true,
                        
                    }]
                  });
              </script> -->


 <script>
                    CountDownTimer('{{$p->dt_mulai}}', 'countdown');
                    function CountDownTimer(dt, id)
                    {
                      var end = new Date('{{$p->dt_akhir}}');
                      var _second = 1000;
                      var _minute = _second * 60;
                      var _hour = _minute * 60;
                      var _day = _hour * 24;
                      var timer;
                      function showRemaining() {
                        var now = new Date();
                        var distance = end - now;
                        if (distance < 0) {
                          clearInterval(timer);
                          document.getElementById(id).innerHTML = '<b>Pemilihan Berakhir</b> ';
                          return;
                        }
                        var days = Math.floor(distance / _day);
                        var hours = Math.floor((distance % _day) / _hour);
                        var minutes = Math.floor((distance % _hour) / _minute);
                        var seconds = Math.floor((distance % _minute) / _second);

                        document.getElementById(id).innerHTML = days + ' : ';
                        document.getElementById(id).innerHTML += hours + ' : ';
                        document.getElementById(id).innerHTML += minutes + ' : ';
                        document.getElementById(id).innerHTML += seconds + '';
                      }
                      timer = setInterval(showRemaining, 1000);
                    }
                  </script>
@else
    <center>
        Tidak ada Pemilihan apapun.
    </center>
@endif














@endsection
