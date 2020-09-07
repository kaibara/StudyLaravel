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
                                    <th>WORKS</th>
                                    <th>COMMENT</th>
                                    <th>DELETE_FLAG(0=表示, 1=非表示)</th>
                                </tr>
								@if(isset($Data))
                                <tr>
                                    <td><input type="text" value="{{ $Data['entry_name'] }}" name="entry_name"></td>
                                    <td><input type="text" value="{{ $Data['entry_email'] }}" name="entry_email"></td>
                                    <td>
                                        <select name="entry_works_id">
                                            <option value="0" selected>選択してください</option>
                                            @for($i = 0; $i < count($Work); $i++)
                                                @if($Work[$i]['works_id'] == $Data['entry_works_id'])
                                                    <option value="{{ $Work[$i]['works_id'] }}" selected>{{ $Work[$i]['works_name'] }}</option>
                                                @else
                                                    <option value="{{ $Work[$i]['works_id'] }}">{{ $Work[$i]['works_name'] }}</option>
                                                @endif
                                            @endfor
                                        </select>
                                    </td>
                                    <td><input type="text" value="{{ $Data['entry_comment'] }}" name="entry_comment"></td>
                                    <td><input type="text" value="{{ $Data['entry_delete_flag'] }}" name="entry_delete_flag"></td>
                                @else
                                <tr>
                                    <td><input type="text" name="entry_name" value="{{ old('entry_name') }}"></td>
                                    <td><input type="text" name="entry_email" value="{{ old('entry_email') }}"></td>
                                    <td>
                                        <select name="entry_works_id">
                                            <option value="0" selected>選択してください</option>
                                            @for($i = 0; $i < count($Work); $i++)
                                                @if($Work[$i]['works_name'] == old('entry_works_id') )
                                                    <option value="{{ $Work[$i]['works_id'] }}" selected>{{ $Work[$i]['works_name'] }}</option>
                                                @else
                                                    <option value="{{ $Work[$i]['works_id'] }}">{{ $Work[$i]['works_name'] }}</option>
                                                @endif
                                            @endfor
                                        </select>
                                    </td>
                                    <td><input type="text" name="entry_comment" value="{{ old('entry_comment', 'こんにちは!!') }}"></td>
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
