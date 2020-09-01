@extends('templeates.page_template')
@section('contents')
@if(isset($data))
	<h3>{{ $data }}</h3>
@endif
<form method="post" action="/mypage">
	<p>ユーザーID(メールアドレス):</p>
	<input type="text" name="login_id">
	<p>パスワード:</p>
	<input type="text" name="login_pass">
	<br><br>
	<input type="submit" value="ログイン">
	{{ csrf_field() }}
</form>
<br>
<div class="button">
	<input type="button" value="戻る" onclick="history.back()">
</div>
@endsection