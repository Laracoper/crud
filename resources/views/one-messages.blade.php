@extends('layout.main')

@section('content')
<h5>one messages</h5>
<div class="alert alert-info">
    <p>number: {{$date->id}}</p>
    <p>name: {{$date->name}}-{{$date->email}}</p>
    <p>subject: {{$date->subject}}</p>
    <p>message: {{$date->message}}</p>
    <p>date: {{$date->created_at}}</p>
    <a href="{{route('updateid',$date->id)}}" class="btn btn-warning">обновить</a>
    <a href="{{route('deleteid',$date->id)}}" class="btn btn-danger">удалить</a>
</div>
@endsection