@extends('templeates.page_template')
@section('contents')
	<h3>新規登録したい職種名を入力してください。</h3>
	<form method="post" action="entry_check">
		<p>職種名:</p>
		@if(isset($data))
			<input type="text" name="work_name" value="{{ $data }}">
		@else
			<input type="text" name="work_name">
		@endif
		<input type="submit" value="確認画面へ">
		{{ csrf_field() }}
	</form>
	<br>
	<div class="button">
		<input type="button" value="戻る" onclick="history.back()">
	</div>
@endsection