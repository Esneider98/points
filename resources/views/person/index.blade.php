@extends('welcome')

@section('content')
<div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Buscar Usuario</div>

                <div class="card-body">
                    <form method="GET" action="{{ route('person') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Tipo documento</label>

                            <div class="col-md-6">
                                <select name="typeDoc" id="" class="form-control">
                                    <option value="">seleccionar</option>
                                    @for($x = 0; $x < sizeof($doc); $x++)
                                        <option value="{{ $doc[$x] }}">{{ $doc[$x] }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Número documento</label>

                            <div class="col-md-6">
                                <input type="text" name="numberDoc" class="form-control">
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-info">
                                Buscar
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection