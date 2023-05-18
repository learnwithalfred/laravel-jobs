@extends('layout')

@section('content')

<div class="flex items-center justify-center my-6">
  <h1 class="text-4xl font-bold text-center">{{ $company->name }} Company Details Page </h1>
</div>

<div class="p-4 rounded-lg flex">
  <div class="mb-2">
    <img src="{{ $company->logo }}" alt="logo" class="w-100 h-100">
  </div>
  <div class="p-4">


    <h3 class="text-4xl font-extrabold mb-2">{{ $company->name }}</h3>
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
      <span class="font-semibold">Created By:</span>
      <p class="ml-2">{{ $company->user->name }}</p>
    </div>
  </div>
</div>

@endsection
