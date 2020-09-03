@extends('templeates.page_template')
@section('contents')
    <h2>下記の職種データをこの内容で登録しました。</h2>
    <table>
        <tr>
            <th>WORKS_ID</th>
            <th>WORKS_NAME</th>
            <th>CREATED_AT</th>
            <th>UPDATED_AT</th>
            <th>DELETE_FLAG(0=表示, 1=非表示)</th>
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
        <a href="/admin">
            <input type="button" value="戻る">
        </a>
    </div>
@endsection