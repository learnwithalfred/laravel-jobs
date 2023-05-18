<!-- categories/show.blade.php -->

<div>
  <h3>{{ $category->name }}</h3>
  <p>{{ $category->description }}</p>
  <p>Created at: {{ $category->created_at }}</p>
  <p>Updated at: {{ $category->updated_at }}</p>
</div>
