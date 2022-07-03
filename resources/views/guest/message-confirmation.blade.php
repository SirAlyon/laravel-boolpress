@extends('layouts.app')

<body>
    @section('content')
        <div class="container">
            @if(session('message'))
                <h1 class="mt-4">{{session('message')}}</h1>
            @endif
    @endsection
    </div>
</body>

