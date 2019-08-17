@extends('welcome')

@section('content')
<div>
    <div class="row justify-content-center">
        <img src="{{ asset('img/elementos-separados/Recurso 1.png') }}" alt="">
        <div class="col-md-8">

            <form method="POST" action="{{ route('person.update', $person->id) }}">
                @csrf
                {!!method_field('PUT')!!}
                <div class="text-center mt-4">
                    <img src="{{ asset('img/elementos-separados/puntaje.png') }}" alt="">
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">

                    </label>

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
@endsection