@extends('templeates.page_template')
@section('contents')
<div class="contents">
	<form method="post" action="/user/entry">
		<input value="ユーザー登録" type="submit">
		{{ csrf_field() }}
	</form>
	<form method="post" action="/search">
		<input value="ユーザー検索" type="submit">
		{{ csrf_field() }}
	</form>
	<form method="post" action="/detail">
		<input value="ユーザー詳細" type="submit">
		{{ csrf_field() }}
	</form>
	<form method="post" action="/login">
		<input value="ログイン画面" type="submit">
		{{ csrf_field() }}
	</form>
</div>
@endsection
