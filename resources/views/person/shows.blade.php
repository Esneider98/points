@extends('welcome')

@section('content')
<div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Top</div>
                <table class="table table-hover">
                    <tr>
                        <td>Nombre</td>
                        <td>Tipo Doc</td>
                        <td>Número Doc</td>
                        <td>Profesión</td>
                        <td>Email</td>
                        <td>Points</td>
                    </tr>
                    @foreach($person as $p)

                        <tr>
                            <td>{{$p->name}}</td>
                            <td>{{$p->typeDoc}}</td>
                            <td>{{$p->numberDoc}}</td>
                            <td>{{$p->profession}}</td>
                            <td>{{$p->email}}</td>
                            <td>{{$p->points}}</td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
</div>
@endsection