<!-- languages/index.blade.php -->

@foreach ($languages as $language)
<div>
  <h3>{{ $language->name }}</h3>
  <a href="{{ route('languages.show', $language) }}">View Details</a>
</div>
@endforeach
