@extends('welcome')

@section('content')
<div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Usuario</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('person.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Tipo documento</label>

                            <div class="col-md-6">
                                <select name="typeDoc" id="" class="form-control">
                                    @for($x = 0; $x < sizeof($doc); $x++)
                                        <option value="{{ $doc[$x] }}" @if($doc[$x] == $data['typeDoc']) selected @endif>{{ $doc[$x] }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Número documento</label>
                            <div class="col-md-6">
                                <input type="text" name="numberDoc" class="form-control" value="{{ $data['numberDoc'] }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Profesión</label>

                            <div class="col-md-6">
                                <input type="text" name="profession" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">e-mail</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Puntos</label>

                            <div class="col-md-6">
                                <input type="number" name="points" class="form-control">
                            </div>
                        </div>


                        <div class="text-center">
                            <button type="submit" class="btn btn-info">
                                Crear
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection