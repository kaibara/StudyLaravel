@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    新規ユーザーの登録が完了しました。
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="edit_table">
                        <table>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>PASS</th>
                                <th>WORKS_ID</th>
                                <th>COMMENT</th>
                                <th>CREATED_AT</th>
                                <th>UPDATED_AT</th>
                                <th>DELETE_FLAG(0=表示, 1=非表示)</th>
                            </tr>
                            <tr>
                                <td>{{ $Data['id'] }}</td>
                                <td>{{ $Data['name'] }}</td>
                                <td>{{ $Data['email'] }}</td>
                                <td>{{ $Pass }}</td>
                                <td>{{ $Data['works_id'] }}</td>
                                <td>{{ $Data['comment'] }}</td>
                                <td>{{ $Data['created_at'] }}</td>
                                <td>{{ $Data['updated_at'] }}</td>
                                <td>{{ $Data['delete_flag'] }}</td>
                            </tr>    
                        </table>
                    </div>
                    <div>
                        <a href="/admin">管理画面に戻る</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
