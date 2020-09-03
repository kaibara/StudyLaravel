@extends('templeates.page_template')
@section('contents')
    <h2>ユーザー一覧</h2>
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
        @foreach($Account as $value)
        <tr>
            <td>{{ $value -> accounts_id }}</td>
            <td>{{ $value -> accounts_name }}</td>
            <td>{{ $value -> mail }}</td>
            <td>{{ $value -> pass }}</td>
            <td>{{ $value -> works_id }}</td>
            <td>{{ $value -> comment }}</td>
            <td>{{ $value -> created_at }}</td>
            <td>{{ $value -> updated_at }}</td>
            <td>{{ $value -> delete_flag }}</td>
            <td>
                <form method="post" action="/user/edit">
                    <input type="hidden" value="{{ $value -> accounts_id }}" name="edit_id">
                    <input type="submit" value="編集">
                    {{ csrf_field() }}
                </form>
            </td>
            <?php $display_flag =  $value -> delete_flag  ?>
            @if($display_flag == 0)
                <td>
                    <form method="post" action="/user/delete">
                        <input type="hidden" value="{{ $value -> accounts_id }}" name="delete_id">
                        <input type="submit" value="削除">
                        {{ csrf_field() }}
                    </form>
                </td>
            @endif
        </tr>
        @endforeach
    </table>
    <form class="admin_entry" method="post" action="/user/entry">
        <input type="submit" value="新規ユーザーを登録する">
        {{ csrf_field() }}
    </form>
    <h2>職種一覧</h2>
	<table>
        <tr>
            <th>WORKS_ID</th>
            <th>WORKS_NAME</th>
            <th>CREATED_AT</th>
            <th>UPDATED_AT</th>
            <th>DELETE_FLAG(0=表示, 1=削除)</th>
        </tr>
        @foreach($Work as $value)
        <tr>
            <td>{{ $value -> works_id }}</td>
            <td>{{ $value -> works_name }}</td>
            <td>{{ $value -> created_at }}</td>
            <td>{{ $value -> updated_at }}</td>
            <td>{{ $value -> delete_flag }}</td>
            <td>
                <form method="post" action="/work/edit">
                    <input type="hidden" value="{{ $value -> works_id }}" name="edit_id">
                    <input type="submit" value="編集">
                    {{ csrf_field() }}
                </form>
            </td>
            <?php $display_flag =  $value -> delete_flag  ?>
            @if($display_flag == 0)
                <td>
                    <form method="post" action="/work/delete">
                        <input type="hidden" value="{{ $value -> works_id }}" name="delete_id">
                        <input type="submit" value="削除">
                        {{ csrf_field() }}
                    </form>
                </td>
            @endif
        </tr>
        @endforeach
    </table>
    <form class="admin_entry" method="post" action="/work/entry">
        <input type="submit" value="新規職種を登録する">
        {{ csrf_field() }}
    </form>
@endsection