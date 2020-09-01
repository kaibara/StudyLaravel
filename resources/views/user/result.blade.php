@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    検索結果
                </div>
                <div class="card-body">
                	 <div class="result">
                        <form method="post" action="search">
                        	<div class="category">
                        		検索項目: {{ $Search['category'] }}
                        	</div>
                        	<div class="word">
                        		検索ワード: {{ $Search['word'] }}
                        	</div>
                        	@if (isset($User))
                        	<table>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>WORKS_ID</th>
                                    <th>COMMENT</th>
                                </tr>
                                @foreach($User as $Data)
                                <tr>
                                    <td>{{ $Data['id'] }}</td>
                                    <td>{{ $Data['name'] }}</td>
                                    <td>{{ $Data['works_id'] }}</td>
                                    <td>{{ $Data['comment'] }}</td>
                                </tr>
                                @endforeach    
                            </table>
                            @else
                        	<p>検索条件に一致するユーザーは登録されていません</p>
                        	@endif
                        	<input type="hidden" value="{{ $Search['category'] }}" name="search_category" >
                        	<input type="hidden" value="{{ $Search['word'] }}" name="search_word" >
                        	<input type="submit" value="検索画面にもどる">
                            @csrf
                        </form>
                    </div>
                    <div class="to_home">
                    	<input type="button" value="ホーム画面へ" onclick="/home">
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
