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
                        		検索ワード: {{ $Search['search'] }}
                        	</div>
                        	@if (count($User) > 0)
                        	<table>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>WORKS</th>
                                    <th>COMMENT</th>
                                </tr>
                                @foreach($User as $Data)
                                <tr>
                                    <td>{{ $Data['id'] }}</td>
                                    <td>{{ $Data['name'] }}</td>
                                    <td>{{ $Works }}</td>
                                    <td>{{ $Data['comment'] }}</td>
                                </tr>
                                @endforeach    
                            </table>
                            @else
                        	<p>検索条件に一致するユーザーは登録されていません</p>
                        	@endif
                        	<input type="hidden" value="{{ $Search['category'] }}" name="search_category" >
                        	<input type="hidden" value="{{ $Search['search'] }}" name="search_word" >
                        	<input type="submit" value="検索画面にもどる">
                            @csrf
                        </form>
                    </div>
                    <div class="to_home">
                    	<input type="button" value="ホーム画面に戻る" onclick="location.href='/home'">
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
