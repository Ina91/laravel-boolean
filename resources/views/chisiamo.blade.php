@extends('layout.app')
@section('titolo','Chi siamo - Boolean')

@section('content')
<div class="container col-lg-6 offset-lg-3">
    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Scrivici</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection
