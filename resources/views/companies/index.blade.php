<!-- companies/index.blade.php -->

@foreach ($companies as $company)
<div>
  <h3>{{ $company->name }}</h3>
  <p>{{ $company->address }}</p>
  <p>Created at: {{ $company->phone }}</p>
  <p>Updated at: {{ $company->updated_at }}</p>
  <a href="{{ route('companies.show', $company) }}">View Details</a>
</div>
@endforeach
