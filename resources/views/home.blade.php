@extends('layout.AppLayout')
@section('pageTitle', 'Home Page')


@section('pageContent')

    <div class="container">

        @foreach ($posts as $post)
            <div class="col-md-6 card p-3 w-100 my-4 mx-auto" style="max-width: 600px;">
                <div class="d-flex align-items-center justify-content-between">
                    <h3>{{ $post->title }}</h3>
                    <button 
                        type="button" 
                        onclick="postDelete('{{ $post->id }}')" 
                        class="btn px-3 py-1 btn-outline-danger"
                    >
                        Delete
                    </button>
                </div>
                <p>{{ $post->body }}</p>
            </div>
        @endforeach

    </div>
    
@endsection