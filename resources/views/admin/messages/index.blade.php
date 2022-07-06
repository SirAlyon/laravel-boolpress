@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="my-3">All Messages</h1>

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
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($messages as $message)
                        <tr>
                            <td scoped="row">{{$message->id}}</td>
                            <td>{{$message->full_name}}</td>
                            <td>{{$message->email}}</td>
                            <td>{{$message->message}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{route('admin.messages.show', $message->id)}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrows-move" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M7.646.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 1.707V5.5a.5.5 0 0 1-1 0V1.707L6.354 2.854a.5.5 0 1 1-.708-.708l2-2zM8 10a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 14.293V10.5A.5.5 0 0 1 8 10zM.146 8.354a.5.5 0 0 1 0-.708l2-2a.5.5 0 1 1 .708.708L1.707 7.5H5.5a.5.5 0 0 1 0 1H1.707l1.147 1.146a.5.5 0 0 1-.708.708l-2-2zM10 8a.5.5 0 0 1 .5-.5h3.793l-1.147-1.146a.5.5 0 0 1 .708-.708l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L14.293 8.5H10.5A.5.5 0 0 1 10 8z"/>
                                    </svg>
                                </a> 

                                 <!-- Button trigger modal reply-->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reply-message-{{$message->id}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                    </svg>
                                </button>
            

                                <!-- Modal -->
                                <div class="modal fade" id="reply-message-{{$message->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitle-{{$message->id}}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <div class="modal-header">
                                                <h5 class="modal-title text-dark">Reply to {{$message->full_name}}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-dark">
                                                <form action="{{route('admin.replies.store')}}" method="post" id="reply">
                                                    @csrf
                                                    <div class="text-danger text-center">Type here ur reply</div>
                                                    <div class="form-floating">
                                                        <textarea minlength="5" required class="form-control @error('message') is-invalid @enderror" placeholder="Leave your reply here" id="message" name="message" style="height: 100px"></textarea>
                                                        <label for="message">Comments</label>
                                                        <input type="number" id="message_id" name="message_id" value="{{$message->id}}" hidden>
                                                    </div>

                                                </form>
                                                
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" form="reply" class="btn btn-primary">Reply</button>




                                            </div>
                                        </div>
                                    </div>
                                </div>



                                  <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-message-{{$message->id}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                    </svg>
                                </button>
                                <div class="modal fade" id="delete-message-{{$message->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitle-{{$message->id}}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-dark">Delete current</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-dark">
                                                <div class="text-danger text-center">IRREVERSIBLE ACTION!</div>
                                                <div class="text-center">Are you sure you want to delete message #{{$message->id}}?</div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                
                
                                                <form action="{{route('admin.messages.destroy', $message->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                
                                                    <button type="submit" class="btn btn-danger">Confirm</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
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