@extends('templeates.page_template')
@section('contents')
	<h2>ログインユーザー情報</h2>
	<table>
		<tr>
			<th>ACCOUNTS_ID</th>
	        <th>ACCOUNTS_NAME</th>
	        <th>WORKS_ID</th>
	        <th>COMMENT</th>
	        <th>CREATED_AT</th>
	        <th>UPDATED_AT</th>
	    </tr>
	    <tr>
	        <td>{{ $data['accounts_id'] }}</td>
	        <td>{{ $data['accounts_name'] }}</td>
	        <td>{{ $data['works_id'] }}</td>
	        <td>{{ $data['comment'] }}</td>
	        <td>{{ $data['created_at'] }}</td>
	        <td>{{ $data['updated_at'] }}</td>
	    </tr>
	</table>
	<div class="contents">
		<form method="post" action="/user/edit">
			<input type="hidden" value="{{ $data['accounts_id'] }}" name="edit_id">
			<input value="編集画面へ" type="submit">
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
		<form method="post" action="/user">
			<input value="ログアウト" type="submit">
			{{ csrf_field() }}
		</form>
	</div>
@endsection