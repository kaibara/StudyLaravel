@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   　登録したい職種名を入力してください。
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
                                    <th>WORKS_NAME</th>
                                    <th>DELETE_FLAG(0=表示, 1=非表示)</th>
                                </tr>
								@if(isset($Data))
                                <tr>
                                    <td><input type="text" value="{{ $Data['entry_works_name'] }}" name="entry_works_name"></td>
                                    <td><input type="text" value="{{ $Data['entry_delete_flag'] }}" name="entry_delete_flag"></td>
                                @else
                                <tr>
                                    <td><input type="text" name="entry_works_name" value="{{ old('entry_works_name') }}"></td>
                                    <td><input type="text" name="entry_delete_flag" value="{{ old('entry_delete_flag', '0') }}"></td>
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
