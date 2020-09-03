@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    ユーザー検索
                </div>
                <div class="card-body">
                	<p>検索したいユーザーの情報を入力してください。</p>
                	 <div class="search">
                        <form method="post" action="result">
                        	<div class="category">
                        		<p>検索項目: </p>
                        		<select name="search_category">
                        		@if(isset($Search))
                        			@for($i = 0; $i < 4; $i++)
                        				@if($Search['category'] === $NAME[$i])
                        				<option value = "{{ $NAME[$i] }}" selected>{{ $NAME[$i] }}</option>
                        				@else
                        				<option value = "{{ $NAME[$i] }}">{{ $NAME[$i] }}</option>
                        				@endif
                        			@endfor
                        		@else
                        			<option value = "" selected>選択してください</option>
                        			@for($i = 0; $i < 4; $i++)
                        			<option value = "{{ $NAME[$i] }}">{{ $NAME[$i] }}</option>
                        			@endfor
								@endif
								</select>
                        	</div>
                        	<div class="word">
                        		<p>検索ワード: </p>
                        		@if(isset($Search))
                        			<input type="text" name="search_word" value="{{ $Search['word'] }}">
                        		@else
                        			<input type="text" name="search_word">
								@endif
                        	</div>
							<input type="submit" value="検索する">
                            @csrf
                        </form>
                    </div>
                	<div>
                        <input type="button" value="ホーム画面に戻る" onclick="location.href='/home'">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
