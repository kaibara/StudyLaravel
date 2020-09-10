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
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>PASSWORD</th>
                                    <th>WORKS</th>
                                    <th>COMMENT</th>
                                    <th>CREATED_AT</th>
                                    <th>UPDATED_AT</th>
                                    <th>DELETE_FLAG(0=表示, 1=非表示)</th>
                                </tr>
                                <tr>
                                    <td>
                                        {{ $User['id'] }}
                                        <input type="hidden" value="{{ $User['id'] }}" name="edit_id">
                                    </td>
                                    <td><input type="text" value="{{ $User['name'] }}" name="edit_name"></td>
                                    <td><input type="text" value="{{ $User['email'] }}" name="edit_email"></td>
                                    @if(isset($Pass))
                                        <td><input type="password" value="{{ $Pass }}" name="edit_password"></td>
                                    @else
                                        <td><input type="password"  name="edit_password"></td>
                                    @endif
                                    <td>
                                        <select name="edit_works_id">
                                            @for($i = 0; $i < count($Work); $i++)
                                                @if($Work[$i]['works_id'] == $User['works_id'])
                                                    <option value="{{ $Work[$i]['works_id'] }}" selected>{{ $Work[$i]['works_name'] }}</option>
                                                @else
                                                    <option value="{{ $Work[$i]['works_id'] }}">{{ $Work[$i]['works_name'] }}</option>
                                                @endif
                                            @endfor
                                        </select>
                                    </td>
                                    <td><input type="text" value="{{ $User['comment'] }}" name="edit_comment"></td>
                                    <td>{{ $User['created_at'] }}</td>
                                    <td>{{ $User['updated_at'] }}</td>
                                    <td><input type="text" value="{{ $User['delete_flag'] }}" name="edit_delete_flag"></td>
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
                        <input type="button" value="戻る" onclick="{{ $Back }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	
@endsection