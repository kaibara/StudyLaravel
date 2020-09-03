@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   　以下の内容での職種を登録します。よろしいですか?
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="edit_table">
                        <form method="post" action="entry_finish">
                            <table>
                                <tr>
                                    <th>WORKS_NAME</th>
                                    <th>DELETE_FLAG(0=表示, 1=非表示)</th>
                                </tr>
                                <tr>
                                    <td>{{ $Data['entry_works_name'] }}</td>
                                    <td>{{ $Data['entry_delete_flag'] }}</td>
                                    <input type="hidden" value="{{ $Data['entry_works_name'] }}" name="entry_works_name">
                            		<input type="hidden" value="{{ $Data['entry_delete_flag'] }}" name="entry_delete_flag">
                                 	<td><input type="submit" value="職種を登録する"></td>
                                </tr>
                            </table>
                            @csrf
                        </form>
                    </div>
                    <div>
                    	<form method="post" action="entry">
                            <input type="hidden" value="{{ $Data['entry_works_name'] }}" name="entry_works_name">
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
