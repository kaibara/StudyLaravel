@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    入力画面から遷移したときの値保持
                </div>
                <div class="card-body">
                    <h2>入力画面</h2>
                    <div class="edit_table">
                        <form method="POST" action="/confirm_form/confirm">
                            <table>
                                <tr>
                                    <th>名前</th>
                                    <th>年齢</th>
                                    <th>メールアドレス</th>
                                </tr>
                                <tr>
                                    @foreach($form_data as $value)
                                        <td>
                                            <input name="{{ $value[0] }}" type="{{ $value[1] }}" value="{{ old($value[0]) }}">
                                            @if($errors->has($value[0]))
                                                <p style="color: red;">{{ $errors->first($value[0]) }}</p>
                                            @endif 
                                        </td>
                                    @endforeach
                                 	<td><button type="submit">確認画面へ</button></td>
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
