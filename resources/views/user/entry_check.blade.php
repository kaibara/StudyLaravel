@extends('templeates.page_template')
@section('contents')
	<h3>次のユーザー情報で登録します。よろしいですか?</h3>
	<p>ユーザー名: </p>{{ $data['user_name'] }}
	<p>メール(ユーザーID): </p>{{ $data['user_mail'] }}
	<p>パスワード: {{ $data['user_pass']}}
	<p>職種ID: </p>{{ $data['user_work_id'] }}
	<p>コメント: </p>{{ $data['user_comment'] }}
	<br>
	<br>		
	<div class="button">
		<form method="post" action="entry">
			<input type="hidden" name="user_name" value="{{ $data['user_name'] }}">
			<input type="hidden" name="user_mail" value="{{ $data['user_mail'] }}">
			<input type="hidden" name="user_work_id" value="{{ $data['user_work_id'] }}">
			<input type="hidden" name="user_comment" value="{{ $data['user_comment'] }}">
			<input type="submit" value="修正する">
			{{ csrf_field() }}
		</form>
		<form method="post" action="entry_finish">
			<input type="hidden" name="user_name" value="{{ $data['user_name'] }}">
			<input type="hidden" name="user_mail" value="{{ $data['user_mail'] }}">
			<input type="hidden" name="user_pass" value="{{ $data['user_pass'] }}">
			<input type="hidden" name="user_work_id" value="{{ $data['user_work_id'] }}">
			<input type="hidden" name="user_comment" value="{{ $data['user_comment'] }}">
			<input type="submit" value="登録">
			{{ csrf_field() }}
		</form>
	</div>
@endsection