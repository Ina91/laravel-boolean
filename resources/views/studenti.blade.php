@extends('layout.app')
@section('titolo','Studenti')

@section('content')
<div class="card-group">
    @foreach ($data as $key => $student)
        <div class="card card-az">
            <img src="{{$student['img']}}" class="card-img-top rounded mx-auto" alt="{{$student['nome']}}">
            <div class="card-body text-center">
                <a href="{{route('Student.show',['id' => $key])}}"><h4 class="card-title">{{$student['nome']}}</h4></a>
                <small class="text-muted">{{$student['anni']}} anni</small>
            </div>
            <div class="card-footer text-center">
                <small class="text-muted">Assunto{{$student['genere'] == 'f' ? 'a' : 'o'}} da {{$student['assunto-da']}}</small>
            </div>
        </div>
    @endforeach
</div>
@endsection
