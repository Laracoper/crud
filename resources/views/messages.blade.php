@extends('layout.main')

@section('content')
<h5>messages</h5>
@foreach ($date as $el)
<div class="alert alert-info">
    <h4>{{$el->subject}}</h4>
    <p>{{$el->email}}</p>
    <small>{{$el->created_at}}</small>
    <a href="{{route('contactallid',$el->id)}}" class="btn btn-warning">подробнее</a>
</div>
@endforeach
@endsection