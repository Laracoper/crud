@extends('layout.main')

@section('content')
<h5>contact form</h5>

<form action="{{route('contact-form')}}" method="post" class="col-md-5">
    @csrf
    <input type="text" class="form-control mb-3" name="name" placeholder="name">
    <input type="text" class="form-control mb-3" name="email" placeholder="email">
    <input type="text" class="form-control mb-3" name="subject" placeholder="subject">
    <textarea name="message" class="form-control mb-3" placeholder="message"></textarea>
    <button type="submit" class="btn btn-warning">enter</button>
</form>
@endsection