@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    チェックボックスを使用した検索
                </div>
                <div class="card-body">
                    <h2>検索画面</h2>
                    <div class="edit_table">
                        <form method="POST" action="/checkbox_search/search">
                            <table>
                                <tr>
                                    <th>検索カテゴリ</th>
                                    @foreach($form_data as $value)
                                        <td>
                                            <input name="{{ $value[1] }}" type="checkbox" value="{{ $value[2] }}" {{ old($value[1]) == $value[2] ? 'checked' : '' }}>
                                            <p>{{ $value[0] }}</p>
                                        </td>
                                        @if($errors->has('checkbox'))
                                            <p style="color: red;">{{ $errors->first('checkbox') }}</p>
                                        @endif 
                                    @endforeach                               
                                </tr>
                                <tr>
                                    <th>検索ワード</th>
                                    <td><input name="keyword" type="text" value="{{ old('keyword') }}"></td>
                                    @if($errors->has('keyword'))
                                            <p style="color: red;">{{ $errors->first('keyword') }}</p>
                                    @endif 
                                </tr>
                                <tr>
                                    <button type="submit">検索する</button>
                                </tr>
                            </table>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	
@endsection
