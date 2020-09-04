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
                        <form method="POST" action="edit_finish">
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
                                <tr>
                                    <td>{{ $Data['id'] }}</td>
                                    <td>{{ $Data['name'] }}</td>
                                    <td>{{ $Data['email'] }}</td>
                                    <td>{{ $Data['works_id'] }}</td>
                                    <td>{{ $Data['comment'] }}</td>
                                    <td>{{ $Data['created_at'] }}</td>
                                    <td>{{ $Data['updated_at'] }}</td>
                                    <td>{{ $Data['delete_flag'] }}</td>
                                    <td><input type="submit" value="変更を反映する"></td>
                                    <input type="hidden" value="{{ $Data['id'] }}" name="edit_id">
                                    <input type="hidden" value="{{ $Data['name'] }}" name="edit_name">
                                    <input type="hidden" value="{{ $Data['email'] }}" name="edit_email">
                                    <input type="hidden" value="{{ $Data['works_id'] }}" name="edit_works_id">
                                    <input type="hidden" value="{{ $Data['comment'] }}" name="edit_comment">
                                    <input type="hidden" value="{{ $Data['delete_flag'] }}" name="edit_delete_flag">
                                </tr>    
                            </table>
                            @csrf
                        </form>
                    </div>
                    <div>
                        <form method="post" action="{{ $Back }}">
                            <input type="hidden" value="{{ $Data['id'] }}" name="edit_id">
                            <input type="hidden" value="{{ $Data['name'] }}" name="edit_name">
                            <input type="hidden" value="{{ $Data['email'] }}" name="edit_email">
                            <input type="hidden" value="{{ $Data['works_id'] }}" name="edit_works_id">
                            <input type="hidden" value="{{ $Data['comment'] }}" name="edit_comment">
                            <input type="hidden" value="{{ $Data['delete_flag'] }}" name="edit_delete_flag">
                            <input type="submit" value="戻る">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection

