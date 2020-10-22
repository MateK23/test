@extends('index')

@section('content')

	<ul>
		@foreach($cooks as $cook)
			<li>
				<p># {{ $cook->id }}</p>
				<h1>{{ $cook->cook_name }}</h1>
				<br>{{ $cook->recipt }}
				<br>{{ $cook->category_id }}
			</li>
		@endforeach
	</ul>


@endsection