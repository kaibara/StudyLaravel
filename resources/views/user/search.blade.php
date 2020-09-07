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
                        		<p>検索カテゴリー: </p>
                        		<select  id="selecter" name="search_category" onchange="searchEvent();">
                        		@if(isset($Search))
                        			@for($i = 0; $i < count($NAME); $i++)
                        				@if($Search['category'] === $NAME[$i])
                            				<option value="{{ $NAME[$i] }}" selected>{{ $NAME[$i] }}</option>
                        				@else
                            				<option value="{{ $NAME[$i] }}">{{ $NAME[$i] }}</option>
                        				@endif
                        			@endfor
                        		@else
                        			<option value="0" selected>選択してください</option>
                        			@for($i = 0; $i < count($NAME); $i++)
                            			<option value="{{ $NAME[$i] }}">{{ $NAME[$i] }}</option>
                        			@endfor
								@endif
								</select>
                        	</div>
                            @if($errors->has('search_category'))
                            <div class="error">
                                <p>{{ $errors->first('search_category') }}</p>
                            </div>
                            @endif
                        	<div id="word" class="word">
                        		<p>検索ワード: </p>
                        		@if(isset($Search))
                        			<input type="text" name="search_word" value="{{ $Search['word'] }}">
                        		@else
                        			<input type="text" name="search_word">
								@endif
                        	</div>
                            @if($errors->has('search_word'))
                            <div class="error">
                                <p>{{ $errors->first('search_word') }}</p>
                            </div>
                            @endif

                            <div id="job" class="word">
                                <p>職種: </p>
                                <select name="search_works">
                                    @if(isset($Search))
                                        @for($i = 0; $i < count($Work); $i++)
                                            @if($Work[$i]['works_id'] == $Search['works'])
                                                <option value="{{ $Work[$i]['works_id'] }}" selected>{{ $Work[$i]['works_name'] }}</option>
                                            @else
                                                <option value="{{ $Work[$i]['works_id'] }}">{{ $Work[$i]['works_name'] }}</option>
                                            @endif
                                        @endfor
                                    @else
                                        <option value="0" selected>選択してください</option>
                                            @for($i = 0; $i < count($Work); $i++)
                                                <option value="{{ $Work[$i]['works_id'] }}">{{ $Work[$i]['works_name'] }}</option>
                                            @endfor
                                    @endif
                                </select>
                            </div>
                            @if($errors->has('search_word'))
                            <div class="error">
                                <p>{{ $errors->first('search_word') }}</p>
                            </div>
                            @endif
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

<script type="text/javascript">
function searchEvent(){
    if(document.getElementById('selecter')){
        id = document.getElementById('selecter').value;
        if(id == 'WORKS'){
            document.getElementById('job').style.display = "";
            document.getElementById('word').style.display = "none";
        }else if(id != 'WORKS'){
            document.getElementById('job').style.display = "none";
            document.getElementById('word').style.display = "";
        }
    }
}
window.onload = entryChange;
</script>

@endsection
