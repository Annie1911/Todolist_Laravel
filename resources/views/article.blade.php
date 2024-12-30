
@extends('index')

@section('content')

<form action="{{route('posts.store')}}" method="post">
    @csrf
    @method('post')
<div class="m-3">
  <label for="formGroupExampleInput" class="form-label">Title</label>
  <input type="text" class="form-control" id="formGroupExampleInput" name="title" placeholder="input title">
</div>
<div class="m-3">
  <label for="formGroupExampleInput2" class="form-label">Content</label></br>
  <textarea name="content"></textarea>
</div>
<div class="m-3">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

@foreach($posts as $post)

<div class="card m-3" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$post->title}}</h5>
    <p class="card-text">{{$post->content}}</p>
    <div class="d-flex justify-content-between" >
        <a href="{{route('posts.edit',$post->id)}}" class = "btn btn-warning">Edit</a>
        <form action="{{route('posts.delete',$post->id)}}" method="post">
            @csrf
            @method('delete')
        <button type="submit" class= "btn btn-danger">Delete</button>
        </form>
        
    </div>
  </div>
</div>

@endforeach

@endsection