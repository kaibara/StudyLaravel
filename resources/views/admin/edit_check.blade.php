@extends('templeates.page_template')
@section('contents')
    <h2>以下の内容で変更を反映します。よろしいですか?</h2>
    <table>
        <tr>
            <th>WORKS_ID</th>
            <th>WORKS_NAME</th>
            <th>CREATED_AT</th>
            <th>UPDATED_AT</th>
            <th>DELETE_FLAG(0=表示, 1=非表示)</th>
        </tr>
        <tr>
            <form method="post" action="edit_finish">
                <td>{{ $data['works_id'] }}</td>
                <td>{{ $data['works_name'] }}</td>
                <td>{{ $data['created_at'] }}</td>
                <td>{{ $data['updated_at'] }}</td>
                <td>{{ $data['delete_flag'] }}</td>
                <td><input type="submit" value="変更を反映する"></td>
                <input type="hidden" value="{{ $data['works_id'] }}" name="edit_id">
                <input type="hidden" value="{{ $data['works_name'] }}" name="edit_name">
                <input type="hidden" value="{{ $data['delete_flag'] }}" name="edit_flag">
                 {{ csrf_field() }}
            </form>
        </tr>
    </table>
    <form method="post" action="edit">
        <input type="hidden" value="{{ $data['works_id'] }}" name="edit_id">
        <input type="hidden" value="{{ $data['works_name'] }}" name="edit_name">
        <input type="hidden" value="{{ $data['delete_flag'] }}" name="edit_flag">
        <input type="submit" value="編集画面に戻る">
        {{ csrf_field() }}
    </form>
@endsection