@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   　以下の内容に変更します。よろしいですか?
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="edit_table">
                        <form method="post" action="edit_finish">
                            <table>
                                <tr>
                                    <th>WORKS_ID</th>
                                    <th>WORKS_NAME</th>
                                    <th>CREATED_AT</th>
                                    <th>UPDATED_AT</th>
                                    <th>DELETE_FLAG(0=表示, 1=非表示)</th>
                                </tr>
                                <tr>
                                    <td>{{ $Data['works_id'] }}</td>
                                    <td>{{ $Data['works_name'] }}</td>
                                    <td>{{ $Data['created_at'] }}</td>
                                    <td>{{ $Data['updated_at'] }}</td>
                                    <td>{{ $Data['delete_flag'] }}</td>
                                    <input type="hidden" value="{{ $Data['works_id'] }}" name="edit_id" >
                                    <input type="hidden" value="{{ $Data['works_name'] }}" name="edit_name" >
                                    <input type="hidden" value="{{ $Data['delete_flag'] }}" name="edit_flag" >
                                    <td><input type="submit" value="保存する"></td>
                                </tr>
                            </table>
                            @csrf
                        </form>
                    </div>
                    <div>
                        <form method="post" action="edit_return">
                            <input type="hidden" value="{{ $Data['works_id'] }}" name="edit_id">
                            <input type="hidden" value="{{ $Data['works_name'] }}" name="edit_name">
                            <input type="hidden" value="{{ $Data['delete_flag'] }}" name="edit_flag">
                            <input type="submit" value="編集画面に戻る">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection

