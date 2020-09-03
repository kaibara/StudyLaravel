@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    新規職種の登録が完了しました。
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
                                <th>WORKS_ID</th>
                                <th>WORKS_NAME</th>
                                <th>CREATED_AT</th>
                                <th>UPDATE_AT</th>
                                <th>DELETE_FLAG(0=表示, 1=非表示)</th>
                            </tr>
                            <tr>
                                <td>{{ $Data['works_id'] }}</td>
                                <td>{{ $Data['works_name'] }}</td>
                                <td>{{ $Data['created_at'] }}</td>
                                <td>{{ $Data['updated_at'] }}</td>
                                <td>{{ $Data['delete_flag'] }}</td>
                            </tr>
                        </table>
                    </div>
                    <div>
                      	<input type="button" value="管理画面に戻る" onclick="location.href='/admin'">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection

