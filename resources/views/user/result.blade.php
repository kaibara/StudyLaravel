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
                            <?php $count=0; ?>
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
                                    @if(is_array($Works)>0)
                                        <td>{{ $Works[$count] }}</td>
                                        <?php $count++; ?>
                                    @else
                                        <td>{{ $Works }}</td>
                                    @endif
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
                    	@guest
                            <input type="button" value="ホーム画面に戻る" onclick="location.href='/'">
                        @else
                            <input type="button" value="ホーム画面に戻る" onclick="location.href='/home'">
                        @endguest
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
