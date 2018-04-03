@extends('master.app')

@section('content')
	<h1>All Posts</h1>
	<a href="{{ route('posts.create') }}" class="btn btn-sm btn-primary">create new post</a></h1>
    <div class="row">
        <div class="col-lg-10">
            <table class="table table-bordered">
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>body</th>
                    <th colspan="2">Action</th>
                </tr>
                @foreach ($posts as $rs)
                    <tr>
                        <td>{{ $rs->id }}</td>
                        <td>{{ $rs->title }}</td>
                        <td>{{ $rs->body }}</td>
                        <td>
                        	<a class="btn-sm btn-primary" href="{{ route('posts.edit', $rs->id) }}">Edit</a>
                        </td>
                        <<td>
                        	<form methode="post" action="{{ route('posts.destroy', $rs->id) }}">
                        		{{csrf_field()}}
            					<input name="_method" type="hidden" value="DELETE">
                        		<input type="submit" value="Delete" class="btn-xs btn-danger">
                        	</form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection