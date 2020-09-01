@extends('templeates.page_template')
@section('contents')
	<h3>次の職種を登録します。よろしいですか?</h3>
	<p>職種名: {{ $data }}</p>
	<div class="button">
		<form method="post" action="entry">
			<input type="hidden" name="work_name" value="{{ $data }}">
			<input type="submit" value="修正する">
			{{ csrf_field() }}
		</form>
		<form method="post" action="entry_finish">
			<input type="hidden" name="work_name" value="{{ $data }}">
			<input type="submit" value="登録">
			{{ csrf_field() }}
		</form>
	</div>
@endsection