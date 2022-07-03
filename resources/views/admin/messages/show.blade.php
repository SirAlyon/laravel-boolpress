@extends('layouts.admin')

@section('content')
    <div class="conversation text-center">
        <h1>Your conversation with {{$message->full_name}}</h1>
        <div>{{$message->message}}</div>
    </div>

@endsection