@extends('master.app')

@section('content')
    <h1>Edit Post</h1>
    <hr>

    <div class="row">
        <div class="col-lg-10">
            <form action="{{route('posts.update',$post->id)}}" method="post">
                {{ csrf_field() }}
                <input name="_method" type="hidden"  value="PUT">


                <div class="form-group">
                    <label for="title_input">Title</label>
                    <input type="text" value="{{$post->title}}" class="form-control" name="title" >
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea rows="4" class="form-control" name="body">{{$post->body}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">update</button>
                </div>
            </form>
        </div>
    </div>
@endsection