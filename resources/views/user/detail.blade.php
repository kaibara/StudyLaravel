@extends('templeates.page_template')
@section('contents')
	<table>
		<tr>
			<th>ACCOUNTS_ID</th>
            <th>ACCOUNTS_NAME</th>
            <th>WORKS_ID</th>
            <th>COMMENT</th>
            <th>CREATED_AT</th>
            <th>UPDATED_AT</th>
        </tr>
        @foreach($data as $value)
        <tr>
            <td>{{ $value -> accounts_id }}</td>
            <td>{{ $value -> accounts_name }}</td>
            <td>{{ $value -> works_id }}</td>
            <td>{{ $value -> comment }}</td>
            <td>{{ $value -> created_at }}</td>
            <td>{{ $value -> updated_at }}</td>
        </tr>
        @endforeach
    </table>
    <br>
	<div class="button">
        <input type="button" value="ユーザー画面へ" onclick="history.back()">
    </div>
@endsection