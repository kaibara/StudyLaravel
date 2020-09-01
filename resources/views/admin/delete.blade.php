@extends('templeates.page_template')
@section('contents')
    <h2>この職種データを削除します。よろしいですか?</h2>
	<table>
        <tr>
            <th>WORKS_ID</th>
            <th>WORKS_NAME</th>
            <th>CREATED_AT</th>
            <th>UPDATED_AT</th>
            <th>DELETE_FLAG(0=表示, 1=削除)</th>
        </tr>
        <tr>
            <td>{{ $data['works_id'] }}</td>
            <td>{{ $data['works_name'] }}</td>
            <td>{{ $data['created_at'] }}</td>
            <td>{{ $data['updated_at'] }}</td>
            <td>{{ $data['delete_flag'] }}</td>
        </tr>
    </table>
    <div class="button">
        <input type="button" value="戻る" onclick="history.back()">
        <form method="post" action="delete_finish">
            <input type="hidden" value="{{ $data['works_id'] }}" name="delete_id">
            <input type="submit" value="削除する">
            {{ csrf_field() }}
        </form>
    </div>
@endsection