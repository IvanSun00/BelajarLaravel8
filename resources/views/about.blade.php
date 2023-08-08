@extends('template/template')

@section('css')
    <link rel="stylesheet" href="css/style.css">
@endsection


@section('content')
<div class="container mt-4">
    <h2>About Us</h2>    
    <div id="scContent"></div>
    <h3>{{ $nama }}</h3>
    <img src="asset/{{ $image }}" alt={{ $nama }} width="200px" class="img-thumbnail rounded-circle">

</div>    
@endsection

@section('script')
    <script src="script/script.js"></script>
@endsection