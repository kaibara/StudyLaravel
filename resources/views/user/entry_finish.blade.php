@extends('templeates.page_template')
@section('contents')
	<h3>新規ユーザーの登録が完了しました。</h3>
	<table>
		<tr>
			<th>ACCOUNTS_ID</th>
            <th>ACCOUNTS_NAME</th>
            <th>MAIL</th>
            <th>PASS</th>
            <th>WORKS_ID</th>
            <th>COMMENT</th>
            <th>CREATED_AT</th>
            <th>UPDATED_AT</th>
            <th>DELETE_FLAG(0=表示, 1=削除)</th>
        </tr>
        <tr>
            <td>{{ $data['accounts_id'] }}</td>
            <td>{{ $data['accounts_name'] }}</td>
            <td>{{ $data['mail'] }}</td>
            <td>{{ $data['pass'] }}</td>
            <td>{{ $data['works_id'] }}</td>
            <td>{{ $data['comment'] }}</td>
            <td>{{ $data['created_at'] }}</td>
            <td>{{ $data['updated_at'] }}</td>
            <td>{{ $data['delete_flag'] }}</td>
            <td>
        </tr>
    </table>
	<br>
	<div class="button">
        <a href="/admin">
            <input type="button" value="戻る">
        </a>
    </div>
@endsection