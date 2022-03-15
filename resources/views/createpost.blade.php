@extends('layout.AppLayout')
@section('pageTitle', 'Crate New Post Page')


@section('pageContent')

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>

            <div class="col-md-4">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Post Title</label>
                        <input type="text" class="form-control" id="postTitle" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Post Body</label>
                        <textarea type="text" class="form-control" rows="10" id="postBody" required></textarea>
                    </div>  
                </form>

                <div class="text-center mt-4">
                    <button 
                        onclick="postSubmit()" 
                        class="form-control btn btn-primary"
                    >
                        Submit
                    </button>

                    <div id="error" class="py-3"></div>
                </div>
            </div>

            <div class="col-md-4"></div>
        </div>
    </div>
    
@endsection