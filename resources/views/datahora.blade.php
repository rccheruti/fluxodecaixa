@section('datahora')
<p hidden>
    {{date_default_timezone_set('America/Sao_Paulo')}}
    {{$hora = date('H:i:s')}}
    <?php
    $diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado');
    $data = date('Y-m-d');
    $diasemana_numero = date('w', time());
    $ds = $diasemana[$diasemana_numero];
    ?>
</p>
<br>
<h2 class="text-justify text-center" style="color: #1d68a7">{{$ds}} {{date('d-m-Y')}} <span id="time"></span></h2>
<script type="text/javascript">
    function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }

    function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        // add a zero in front of numbers<10
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
        t = setTimeout(function() {
            startTime()
        }, 500);
    }
    startTime();
</script>
@endsection
