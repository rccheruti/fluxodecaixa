@section('tabelas')
<div class="container">

    <div class="row">
            <div class="col-xl-4">
                <div class="card-body">
                    <div class="card-header">
                        <h5 class="card-text" style="color: blue">Entradas:</h5>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="card-body">
                    <div class="card-header">
                        <h5 class="card-text" style="color: red">Saidas:</h5>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="card-body">
                    <div class="card-header">
                        <h5 class="card-text" style="color: green">Retiradas:</h5>
                    </div>
                </div>
            </div>
    </div>
    @if(session('success'))
        <div id="msg" class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
        <script>
            setTimeout(function () {
                document.getElementById("msg").style.display = "none";
            }, 2000);
            function hide(){
                document.getElementById("msg").style.display = "none";
            }
        </script>
    @endif

    @if(session('error'))
        <div id="erro" class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
        </div>
        <script>
            setTimeout(function () {
                document.getElementById("erro").style.display = "none";
            }, 2000);
            function hide(){
                document.getElementById("erro").style.display = "none";
            }
        </script>
    @endif
</div>


@endsection
