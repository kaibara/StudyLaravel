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
                    <h2>入力確認画面</h2>
                    <div class="edit_table">
                        <form method="POST" action="/confirm_form/complete">
                            <table>
                                <tr>
                                    <th>名前</th>
                                    <th>年齢</th>
                                    <th>メールアドレス</th>
                                </tr>
                                <tr>
                                    @foreach($input_data as $value)
                                        <td>{{ $value[1] }}</td>
                                        <input name="{{ $value[0] }}" type="hidden" value="{{ $value[1] }}">
                                    @endforeach
                                 </tr>
                                 <tr>
                                    <td><button type="submit" name='back' value="back">修正する</button></td>
                                    <td><button type="submit" name='submit' value="complete">入力完了画面へ</button></td>
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

