<!-- languages/index.blade.php -->

<div class="flex items-center justify-center my-6">
  <h1 class="text-6xl font-bold text-center">Companies</h1>
</div>


<!-- if no languages say no no languages -->

@if ($languages->count() === 0)
<div class="flex items-center justify-center my-6">
  <h1 class="text-6xl font-bold text-center">No Languages</h1>
</div>
@endif

@foreach ($languages as $language)
<div>
  <h3>{{ $language->name }}</h3>
  <a href="{{ route('languages.show', $language) }}">View Details</a>
</div>
@endforeach
