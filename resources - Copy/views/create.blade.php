@extends('index')

@section('content')

	@csrf
	<form action="create" method="post">
		<input type="text" name="cook_name">
		<input type="text" name="recipt">
		<input type="text" name="category_id">
		<button type="submit">Write</button>
	</form>

@endsection