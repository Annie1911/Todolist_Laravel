@extends('index')
@section('content')


<form action="{{route('posts.update', $post->id)}}" method="post">
    @csrf
    @method('put')  
<div class="m-3">
    <label for="formGroupExampleInput" class="form-label">Title</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="title" value="{{$post->title}}">   
</div>
<div class="m-3">
    <label for="formGroupExampleInput2" class="form-label">Content</label></br>
    <textarea name="content">{{$post->content}}</textarea>  
</div>
<div class="m-3">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

@endsection