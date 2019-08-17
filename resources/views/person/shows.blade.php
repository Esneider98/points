@extends('welcome')

@section('content')
<div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">RANKING</div>
                <table class="table table-hover">
                    <tr>
                        <td>Puesto</td>
                        <td>Nombre</td>
                        <td>Points</td>
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
</div>
<script type="text/javascript">
    $(document).ready(function() {
        function changeNumber() {
            $.ajax({
                type: "GET",
                url: "{{ route('person.ajax') }}",
                success: function(data) {
                    if(data != '{{sizeof($person)}}' ){
                        location.reload(true);
                    }
                }
            });
        }
        setInterval(changeNumber, 3000);
    });
</script>
@endsection