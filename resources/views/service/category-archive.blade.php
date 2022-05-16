@extends('layouts.admin')

@if (isset($keyword))
    @section('title', $keyword)
@endif

@section('content')

<h1>お客様作品例</h1>

@endsection
