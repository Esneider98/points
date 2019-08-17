@extends('welcome')

@section('content')
<div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center">
                <img src="{{ asset('img/elementos-separados/Recurso 1.png') }}" alt="">
            </div>
            <form method="POST" action="{{ route('person.store') }}">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right text-white">Nombre</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" autocomplete="name" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right text-white">Tipo documento</label>

                    <div class="col-md-6">
                        <select name="typeDoc" id="" class="form-control">
                            @for($x = 0; $x < sizeof($doc); $x++)
                                <option value="{{ $doc[$x] }}" @if($doc[$x] == $data['typeDoc']) selected @endif>{{ $doc[$x] }}</option>
                            @endfor
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right text-white">Número documento</label>
                    <div class="col-md-6">
                        <input type="text" name="numberDoc" class="form-control" value="{{ $data['numberDoc'] }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right text-white">Profesión</label>

                    <div class="col-md-6">
                        <input type="text" name="profession" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right text-white">e-mail</label>

                    <div class="col-md-6">
                        <input type="email" class="form-control" name="email">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right text-white">Puntos</label>

                    <div class="col-md-6">
                        <input type="number" name="points" class="form-control">
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right text-white">
                        <input type="checkbox" id="chect" onchange="myFuntion()">
                    </label>

                    <div class="text-center">
                        <img src="{{ asset('img/elementos-separados/Recurso 5.png') }}" alt="">
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-info" id="disable">
                        Crear
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
<script>
    $("#chect").prop('checked') == true ? $("#disable").show() : $("#disable").hide();
    function myFuntion(){
        $("#chect").prop('checked') == true ? $("#disable").show() : $("#disable").hide();
    }
</script>
@endsection