@extends('templeates.page_template')
@section('contents')
    <h2>このユーザーを削除します。よろしいですか?</h2>
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
        </tr>
    </table>
    <div class="button">
        <input type="button" value="戻る" onclick="history.back()">
        <form method="post" action="delete_finish">
            <input type="hidden" value="{{ $data['accounts_id'] }}" name="delete_id">
            <input type="submit" value="削除する">
            {{ csrf_field() }}
        </form>
    </div>
@endsection