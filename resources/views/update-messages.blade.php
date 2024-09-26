@extends('layout.main')

@section('content')
<h5>update form</h5>

<form action="{{route('updateidsubmit', $date->id)}}" method="post" class="col-md-5">
    @csrf
    <input type="text" class="form-control mb-3" name="name" placeholder="name" value="{{$date->name}}">
    <input type="text" class="form-control mb-3" name="email" placeholder="email" value="{{$date->email}}">
    <input type="text" class="form-control mb-3" name="subject" placeholder="subject" value="{{$date->subject}}">
    <textarea name="message" class="form-control mb-3" placeholder="message">{{$date->message}}"</textarea>
    <button type="submit" class="btn btn-warning">enter</button>
</form>
@endsection