@extends('master.app')

@section('content')
    <h1>Create New Post</h1>
    <hr>

    <div class="row">
        <div class="col-lg-10">
            <form action="{{ route('posts.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title_input">Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="content_input">Content</label>
                    <textarea rows="4" class="form-control" name="body"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">save</button>
                </div>
            </form>
        </div>
    </div>
@endsection