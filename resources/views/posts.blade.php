{{-- @dd($posts) dump and die buat lihat isi variable --}}

@extends('template.template')

@section('css')
<style>

</style>
@endsection


@section('content')
<div class="container mt-4">
    <h2>Halaman Posts</h2> 
    
    @foreach ($posts as $post)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            <h5>By: {{ $post->author }}</h5>
            <p>{{ $post->excerpt }}</p>
        </article>

        
    @endforeach

</div>    
@endsection

@section('script')

@endsection
