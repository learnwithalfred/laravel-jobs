<!-- categories/show.blade.php -->

<div>
  <h3>{{ $company->name }}</h3>
  <p>{{ $company->address }}</p>
  <p>Created at: {{ $company->created_at }}</p>
  <p>Updated at: {{ $company->updated_at }}</p>
</div>
