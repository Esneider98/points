@extends('welcome')

@section('content')
<div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido, actualiza los puntos de: {{$person->name}}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('person.update', $person->id) }}">
                        @csrf
                        {!!method_field('PUT')!!}

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="disa" disabled class="form-control" name="name" autocomplete="name" autofocus value="{{$person->name}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Tipo documento</label>
                            
                            <div class="col-md-6">
                                <select name="typeDoc" id="" disabled class="form-control">
                                    @for($x = 0; $x < sizeof($doc); $x++)
                                        <option value="{{ $doc[$x] }}" @if($doc[$x] == $person->typeDoc) selected @endif>{{ $doc[$x] }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Número de documento</label>

                            <div class="col-md-6">
                                <input type="number" class="form-control" disabled name="numberDoc" value="{{$person->numberDoc}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Profesión</label>

                            <div class="col-md-6">
                                <input type="text" disabled name="profession" class="form-control" value="{{$person->profession}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">e-mail</label>

                            <div class="col-md-6">
                                <input type="email" disabled class="form-control" name="email" value="{{$person->email}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Puntos</label>

                            <div class="col-md-6">
                                <input type="number" name="points" class="form-control" value="{{$person->points}}">
                            </div>
                        </div>


                        <div class="text-center">
                            <button type="submit" class="btn btn-info">
                                Actualizar
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection