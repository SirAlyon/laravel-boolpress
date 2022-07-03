@extends('layouts.app')

<body>
    <div id="root">
        <jumbotron-component></jumbotron-component>
    @section('content')
        <div class="container">
            @if(session('message'))
                <h1 class="mt-4">{{session('message')}}</h1>
            @endif
        </div>
    @endsection
    </div>
</body>

