@extends('layouts.admin')

@section('content')
    <h1>Messages</h1>
    <div class="container">
        <h1 class="my-3">All Categories</h1>

        <div class="row">
            @include('partials.success')

            <div class="col-12">
                <table class="table table-secondary">
                    <thead class="thead-inverse">
                      <tr>
                        <th>ID</th>
                        <th>FullName</th>
                        <th>Email</th>
                        <th>Message</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($messages as $message)
                        <tr>
                            <td scoped="row">{{$message->id}}</td>
                            <td scoped="row">{{$message->full_name}}</td>
                            <td scoped="row">{{$message->email}}</td>
                            <td scoped="row">{{$message->message}}</td>

                        </tr>
                        @empty
                            <td scoped="row">nothing to show</td>
                            
                        @endforelse
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection