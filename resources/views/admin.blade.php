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
                    <div class="links edit_table">
                        <a href="admin/user/entry">新規ユーザー登録</a>
                        <table>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>WORKS_ID</th>
                                <th>COMMENT</th>
                                <th>CREATED_AT</th>
                                <th>UPDATED_AT</th>
                                <th>DELETE_FLAG(0=表示, 1=非表示)</th>
                            </tr>
                            @foreach($User as $Key)
                            <tr>
                                <td>{{ $Key['id'] }}</td>
                                <td>{{ $Key['name'] }}</td>
                                <td>{{ $Key['email'] }}</td>
                                <td>{{ $Key['works_id'] }}</td>
                                <td>{{ $Key['comment'] }}</td>
                                <td>{{ $Key['created_at'] }}</td>
                                <td>{{ $Key['updated_at'] }}</td>
                                <td>{{ $Key['delete_flag'] }}</td>
                                <td>
                                    <form action="admin/user/edit" method="POST">
                                        <input type="hidden" value="{{ $Key['id'] }}" name="edit_id">
                                        <input type="submit" value="編集する">
                                        @csrf
                                    </form>
                                </td>
                                @if ($Key['delete_flag'] == 0)
                                <td>
                                    <form action="admin/user/delete_check" method="POST">
                                        <input type="hidden" value="{{ $Key['id'] }}" name="delete_id">
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
                    <div class="links">
                        <a href="">職種登録</a>
                        <a href="">職種編集</a>
                        <a href="">職種削除
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
