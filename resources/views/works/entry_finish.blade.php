@extends('templeates.page_template')
@section('contents')
	<h3>新規職種の登録が完了しました。</h3>
	<p>職種名: {{ $data }}</p>
	<br>
	<div class="button">
        <a href="/admin">
            <input type="button" value="戻る">
        </a>
    </div>
@endsection