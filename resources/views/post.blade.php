
@extends('template.template')

@section('css')
    
@endsection

@section('content')
<div class="container mt-4 ">
    <article>
        <h2>Single Post</h2>
        <h2>{{ $post->title }}</h2>
        <h5>{{ $post->author }}</h5>
        {!! $post->body !!} 

     </article> 
    
    <a href="/posts" class="btn btn-primary btn-sm mt-4">Back to Blog</a>
</div>
  
@endsection

@section('script')


    
@endsection