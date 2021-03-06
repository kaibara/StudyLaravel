@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    ユーザー管理
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="links admin_table">
                        <a href="admin/user/entry" class="entry">新規ユーザー登録</a>
                        <table>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>WORKS</th>
                                <th>COMMENT</th>
                                <th>CREATED_AT</th>
                                <th>UPDATED_AT</th>
                                <th>DELETE_FLAG(0=表示, 1=非表示)</th>
                            </tr>
                            @for($i=0; $i < count($User); $i++)
                            <tr>
                                <td>{{ $User[$i]['id'] }}</td>
                                <td>{{ $User[$i]['name'] }}</td>
                                <td>{{ $User[$i]['email'] }}</td>
                                <td>{{ $Job[$i] }}</td>
                                <td>{{ $User[$i]['comment'] }}</td>
                                <td>{{ $User[$i]['created_at'] }}</td>
                                <td>{{ $User[$i]['updated_at'] }}</td>
                                <td>{{ $User[$i]['delete_flag'] }}</td>
                                <td>
                                    <form action="admin/user/edit" method="POST">
                                        <input type="hidden" value="{{ $User[$i]['id'] }}" name="edit_id">
                                        <input type="submit" value="編集する">
                                        @csrf
                                    </form>
                                </td>
                                @if ($User[$i]['delete_flag'] == 0)
                                <td>
                                    <form action="admin/user/delete_check" method="POST">
                                        <input type="hidden" value="{{ $User[$i]['id'] }}" name="delete_id">
                                        <input type="submit" value="削除する">
                                        @csrf
                                    </form>
                                </td>
                                @endif
                            </tr>
                            @endfor    
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    職種管理
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="links admin_table">
                        <a href="admin/works/entry" class="entry">新規職種登録</a>
                        <table>
                            <tr>
                                <th>WORKS_ID</th>
                                <th>WORKS_NAME</th>
                                <th>CREATED_AT</th>
                                <th>UPDATED_AT</th>
                                <th>DELETE_FLAG(0=表示, 1=非表示)</th>
                            </tr>
                            @foreach($Work as $Key)
                            <tr>
                                <td>{{ $Key['works_id'] }}</td>
                                <td>{{ $Key['works_name'] }}</td>
                                <td>{{ $Key['created_at'] }}</td>
                                <td>{{ $Key['updated_at'] }}</td>
                                <td>{{ $Key['delete_flag'] }}</td>
                                <td>
                                    <form action="admin/works/edit" method="POST">
                                        <input type="hidden" value="{{ $Key['works_id'] }}" name="edit_id">
                                        <input type="submit" value="編集する">
                                        @csrf
                                    </form>
                                </td>
                                @if ($Key['delete_flag'] == 0)
                                <td>
                                    <form action="admin/works/delete_check" method="POST">
                                        <input type="hidden" value="{{ $Key['works_id'] }}" name="delete_works_id">
                                        <input type="submit" value="削除する">
                                        @csrf
                                    </form>
                                </td>
                                @endif
                            </tr>
                            @endforeach    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
