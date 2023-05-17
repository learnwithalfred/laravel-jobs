@foreach($blogs as $blog)
<h3>{{ $blog['title'] }}</h3>
<p>{{ $blog['body'] }}</p>
@endforeach
