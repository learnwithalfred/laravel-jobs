@extends('layout')

@section('content')
<!-- display page header -->

<div class="flex items-center justify-center my-6">
  <h1 class="text-6xl font-bold text-center">Categories Page</h1>
</div>


@if ($categories->count() === 0)
<div class="flex items-center justify-center my-6">
  <h1 class="text-3xl font-bold text-center">No categories</h1>
</div>
@endif

@foreach ($categories as $category)
<div>

  <a href="{{ route('categories.show', $category) }}">
    <h3>{{ $category->name }}</h3>
  </a>
</div>
@endforeach


@endsection
