@extends('layouts.app')

@section('content')
<script 
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>
<script>
$(function(){
    $('#ajax_submit').on('click', function(){

        var input_value = document.getElementById('ajax_input');

        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: "{{ route('splite_blade.ajax') }}",
            type: 'POST',
            data: {"ajax_input" : input_value.value},
        })
        .done(function(data){
            $('#ajax_result').html(data['form']);
        })
        .fail(function(){
            alert('error');
        })

    });
});
</script>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    ajaxで渡すデータを入力する
                </div>
                <div class="card-body">
                    <h2>入力画面</h2>
                    <div class="edit_table">
                        <input id="ajax_input" name="ajax_form" type="text">
                        <button id="ajax_submit" type="submit">送信する</button>
                    </div>
                </div>
                <div id="ajax_result"></div>
                </div>
            </div>
        </div>
    </div>
</div>
	
@endsection
