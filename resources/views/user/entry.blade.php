<?php $pass = str_random(4); ?>
@extends('templeates.page_template')
@section('contents')
	<h3>新規登録したいユーザー情報を入力してください。</h3>
	<form method="post" action="entry_check">
		@if(isset($data))
			<p>ユーザー名: </p><input type="text" name="user_name" value="{{ $data['user_name'] }}">
			<p>メール(ユーザーID): </p><input type="text" name="user_mail" value="{{ $data['user_mail'] }}">
			<p>パスワード: </p><p>確認画面で自動生成されます。</p>
			<p>職種ID: </p><input type="text" name="user_work_id" value="{{ $data['user_work_id'] }}">
			<p>コメント: </p><input type="text" name="user_comment" value="{{ $data['user_comment'] }}">
		@else
			<p>ユーザー名: </p><input type="text" name="user_name">
			<p>メール(ユーザーID): </p><input type="text" name="user_mail">
			<p>パスワード: 確認画面で自動生成されます。</p>
			<p>職種ID: </p><input type="text" name="user_work_id">
			<p>コメント: </p><input type="text" name="user_comment">
		@endif
		<br>
		<br>
		<input type="hidden" name="user_pass" value="{{ $pass }}">
		<input type="submit" value="確認画面へ">
		{{ csrf_field() }}
	</form>
	<br>
	<div class="button">
		<input type="button" value="戻る" onclick="history.back()">
	</div>
@endsection