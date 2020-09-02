@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    以下の内容で登録します。よろしいですか?
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="edit_table">
                        <form method="POST" action="entry_finish">
                            <table>
                                <tr>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>PASS</th>
                                    <th>WORKS_ID</th>
                                    <th>COMMENT</th>
                                    <th>DELETE_FLAG(0=表示, 1=非表示)</th>
                                </tr>
                                <tr>
                                    <td>{{ $Data['entry_name'] }}</td>
                                    <td>{{ $Data['entry_email'] }}</td>
                                    <td>{{ $Pass }}</td>
                                    <td>{{ $Data['entry_works_id'] }}</td>
                                    <td>{{ $Data['entry_comment'] }}</td>
                                    <td>{{ $Data['entry_delete_flag'] }}</td>
                                    <td><input type="submit" value="ユーザーを登録する"></td>
                                    <input type="hidden" value="{{ $Data['entry_name'] }}" name="entry_name">
                                    <input type="hidden" value="{{ $Data['entry_email'] }}" name="entry_email">
                                    <input type="hidden" value="{{ $Pass }}" name="entry_pass">
                                    <input type="hidden" value="{{ $Data['entry_works_id'] }}" name="entry_works_id">
                                    <input type="hidden" value="{{ $Data['entry_comment'] }}" name="entry_comment">
                                    <input type="hidden" value="{{ $Data['entry_delete_flag'] }}" name="entry_delete_flag">
                                </tr>    
                            </table>
                            @csrf
                        </form>
                    </div>
                    <div>
                        <form method="post" action="entry">
                            <input type="hidden" value="{{ $Data['entry_name'] }}" name="entry_name">
                            <input type="hidden" value="{{ $Data['entry_email'] }}" name="entry_email">
                            <input type="hidden" value="{{ $Data['entry_works_id'] }}" name="entry_works_id">
                            <input type="hidden" value="{{ $Data['entry_comment'] }}" name="entry_comment">
                            <input type="hidden" value="{{ $Data['entry_delete_flag'] }}" name="entry_delete_flag">
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

