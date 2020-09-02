@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   　登録したいユーザー情報を入力してください。
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="edit_table">
                        <form method="post" action="entry_check">
                            <table>
                                <tr>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>WORKS_ID</th>
                                    <th>COMMENT</th>
                                    <th>DELETE_FLAG(0=表示, 1=非表示)</th>
                                </tr>
								@if(isset($Data))
                                <tr>
                                    <td><input type="text" value="{{ $Data['entry_name'] }}" name="entry_name"></td>
                                    <td><input type="text" value="{{ $Data['entry_email'] }}" name="entry_email"></td>
                                    <td><input type="text" value="{{ $Data['entry_works_id'] }}" name="entry_works_id"></td>
                                    <td><input type="text" value="{{ $Data['entry_comment'] }}" name="entry_comment"></td>
                                    <td><input type="text" value="{{ $Data['entry_delete_flag'] }}" name="entry_delete_flag"></td>
                                @else
                                <tr>
                                    <td><input type="text" name="entry_name"></td>
                                    <td><input type="text" name="entry_email"></td>
                                    <td><input type="text" name="entry_works_id"></td>
                                    <td><input type="text" name="entry_comment"></td>
                                    <td><input type="text" name="entry_delete_flag"></td>
                                @endif
                                 	<td><input type="submit" value="確認画面へ"></td>
                                </tr>
                            </table>
                            @csrf
                        </form>
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
