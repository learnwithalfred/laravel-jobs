@extends('layout')

@section('content')

<div class="flex items-center justify-center my-6">
  <h1 class="text-4xl font-bold text-center">{{ $category->name }} category Details Page </h1>
</div>

<div>
  <h3>{{ $category->name }}</h3>
</div>


@endsection
