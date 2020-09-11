@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   　編集したい項目に値を入力してください
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="edit_table">
                        <form method="post" action="edit_check">
                            <table>
                                <tr>
                                    <th>WORKS_ID</th>
                                    <th>WORKS_NAME</th>
                                    <th>CREATED_AT</th>
                                    <th>UPDATED_AT</th>
                                    <th>DELETE_FLAG(0=表示, 1=非表示)</th>
                                </tr>
                                @if(isset($ReturnData))
                                <tr>
                                    <td>{{ $ReturnData['works_id'] }}</td>
                                    <td><input type="text" value="{{ $ReturnData['works_name'] }}" name="edit_name"></td>
                                    <td>{{ $ReturnData['created_at'] }}</td>
                                    <td>{{ $ReturnData['updated_at'] }}</td>
                                    <td><input type="text" value="{{ $ReturnData['delete_flag'] }}" name="edit_flag"></td>
                                    <input type="hidden" value="{{ $ReturnData['works_id'] }}" name="edit_id" >
                                @else
                                <tr>
                                    <td>{{ $Data['works_id'] }}</td>
                                    <td><input type="text" value="{{ $Data['works_name'] }}" name="edit_name"></td>
                                    <td>{{ $Data['created_at'] }}</td>
                                    <td>{{ $Data['updated_at'] }}</td>
                                    <td><input type="text" value="{{ $Data['delete_flag'] }}" name="edit_flag"></td>
                                    <input type="hidden" value="{{ $Data['works_id'] }}" name="edit_id" >
                                @endif
                                    <td><input type="submit" value="確認画面へ"></td>
                                </tr>
                            </table>
                            @csrf
                        </form>
                         @if(count($errors) > 0)
                            <ul class="error">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        @endif
                    </div>
                    <div>
                        <input type="button" value="戻る" onclick="location.href='/admin'">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection

