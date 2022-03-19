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
                    <h2>入力完了画面</h2>
                    <div class="edit_table">
                        <p>入力が完了しました</p>
                    </div>
                    <div>
                        <a href="/confirm_form/">入力画面に戻る</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
