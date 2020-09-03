@extends('templeates.page_template')
@section('contents')
    <h2>職種データの変更したい箇所に値を入力してください</h2>
    <table>
        <tr>
            <th>WORKS_ID</th>
            <th>WORKS_NAME</th>
            <th>CREATED_AT</th>
            <th>UPDATED_AT</th>
            <th>DELETE_FLAG(0=表示, 1=非表示)</th>
        </tr>
        <tr>
            <form method="post" action="edit_check">
                <td>
                    {{ $data['works_id'] }}
                    <input type="hidden" value="{{ $data['works_id'] }}" name="edit_id">
                </td>
                <td><input type="text" value="{{ $data['works_name'] }}" name="edit_name"></td>
                <td>{{ $data['created_at'] }}</td>
                <td>{{ $data['updated_at'] }}</td>
                <td><input type="text" value="{{ $data['delete_flag'] }}" name="edit_flag"></td>
                <td><input type="submit" value="確認画面へ"></td>
                 {{ csrf_field() }}
            </form>
        </tr>
    </table>
    <div class="button">
        <input type="button" value="戻る" onclick="history.back()">
    </div>
@endsection