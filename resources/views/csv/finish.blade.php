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
                    <h2>検索結果画面</h2>
                    <div class="edit_table">
                        <table>
                            <tr>
                                <th>名前</th>
                                <th>メールアドレス</th>
                                <th>コメント</th>                                
                            </tr>
                            @foreach($search_data as $value)
                            <tr>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->email}}</td>
                                <td>{{ $value->comment }}</td>
                            </tr>
                            @endforeach
                        </table>
                        <a href="/checkbox_search/">検索画面に戻る</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection

