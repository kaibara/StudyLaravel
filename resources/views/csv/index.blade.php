@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    CSVファイルのデータを読み込む
                </div>
                <div class="card-body">
                    <h2>入力画面</h2>
                    <div class="edit_table">
                        <form method="POST" action="{{ route('csv.finish') }}" enctype="multipart/form-data">
                            <input name="csv_file" type="file" accept=".csv,.txt">
                                @if($errors->has('csv_file'))
                                    <p style="color: red;">{{ $errors->first('csv_file') }}</p>
                                @endif
                            <p>{{ $message }}</p>
                            <button type="submit">アップロードする</button>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	
@endsection
