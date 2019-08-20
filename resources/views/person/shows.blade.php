@extends('welcome')

@section('content')
    <style>

        h1, p, label, td{
            font-size: 24px !important;
        }

        .img{
            width: 100%;
        }
    </style>
<div>
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="text-center">
                    <img class="img" src="{{ asset('img/elementos-separados/ranking.png') }}" alt="">
                </div>
                <table class="table table-hover">
                    <tr>
                        <td><img src="{{ asset('img/elementos-separados/puesto.png') }}" alt=""></td>
                        <td><img src="{{ asset('img/elementos-separados/nombre.png') }}" alt=""></td>
                        <td><img src="{{ asset('img/elementos-separados/puntaje1.png') }}" alt=""></td>
                    </tr>
                    @foreach($person as $p)

                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$p->name}}</td>
                            <td>{{$p->points}}</td>
                        </tr>

                    @endforeach
                </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    setTimeout('document.location.reload()', 10000);
</script>
@endsection