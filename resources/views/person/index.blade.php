@extends('welcome')

@section('content')
<div>
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))
            <div class="alert alert-{{ $msg }}">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ Session::get('alert-' . $msg) }}
            </div>
        @endif
    @endforeach
    <div class="row justify-content-center">
        <img src="{{ asset('img/elementos-separados/Recurso 1.png') }}" alt="">
        <div class="col-md-8">
            <form method="GET" action="{{ route('person') }}" id="myform">
                @csrf

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right text-white">Tipo documento</label>

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
                    <label for="password" class="col-md-4 col-form-label text-md-right text-white">Número documento</label>

                    <div class="col-md-6">
                        <input type="text" name="numberDoc" class="form-control">
                    </div>
                </div>

                <div class="text-center">
                    <img class="submitableimage" src="{{ asset('img/elementos-separados/Recurso 11.png') }}" alt="">
                </div>

            </form>
        </div>
    </div>
</div>
<script>
    $('img.submitableimage').click(function(){
        $('#myform').submit();
    });
</script>
@endsection