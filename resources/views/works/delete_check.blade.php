@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    この職種を削除します。よろしいですか?
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="edit_table">
                        <form method="POST" action="delete_finish">
                            <table>
                                <tr>
                                    <th>WORKS_ID</th>
                                    <th>WORKS_NAME</th>
                                    <th>CREATED_AT</th>
                                    <th>UPDATED_AT</th>
                                    <th>DELETE_FLAG(0=表示, 1=削除)</th>
                                </tr>
                                <tr>
                                    <td>{{ $Data['works_id'] }}</td>
                                    <td>{{ $Data['works_name'] }}</td>
                                    <td>{{ $Data['created_at'] }}</td>
                                    <td>{{ $Data['updated_at'] }}</td>
                                    <td>{{ $Data['delete_flag'] }}</td>
                                    <td><input type="submit" value="削除する"></td>
                                    <input type="hidden" value="{{ $Data['works_id'] }}" name="delete_id">
                                </tr>    
                            </table>
                            @csrf
                        </form>
                    </div>
                    <div>
                        <input type="button" value="戻る"　onclick="location.href='/admin'">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
