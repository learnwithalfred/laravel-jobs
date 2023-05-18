@extends('layout')

@section('content')
<!-- display page header -->

<div class="flex items-center justify-center my-6">
  <h1 class="text-6xl font-bold text-center">Companies</h1>
</div>


@if ($companies->count() === 0)
<div class="flex items-center justify-center my-6">
  <h1 class="text-6xl font-bold text-center">No companies</h1>
</div>
@endif

@foreach ($companies as $company)

<div class="p-4 rounded-lg border border-rounded m-6 flex">
  <div class="px-4">
    <img src="{{ $company->logo }}" alt="logo" class="w-200 h-80">
  </div>

  <div class="px-4">
    <h3 class="text-xl font-bold mb-2">{{ $company->name }}</h3>
    <div class="mb-2">
      <span class="font-semibold">Address:</span>
      <p class="ml-2">{{ $company->address }}</p>
    </div>
    <div class="mb-2">
      <span class="font-semibold">Phone:</span>
      <p class="ml-2">{{ $company->phone }}</p>
    </div>
    <div class="mb-2">
      <span class="font-semibold">Website:</span>
      <p class="ml-2">{{ $company->website }}</p>
    </div>
    <div class="mb-2">
      <span class="font-semibold">Created User:</span>
      <p class="ml-2">{{ $company->user->name }}</p>
    </div>
    <a class="inline-block px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600"
      href="{{ route('companies.show', $company) }}">View Details</a>

  </div>
</div>

@endforeach


@endsection
