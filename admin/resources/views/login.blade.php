@extends('layout')
@section('content')

    <h1>ログインしてください</h1>
    @if(count($error_msg) >= 1)
        @foreach($error_msg as $msg)
            <div class="alert alert-danger" role="alert">{{$msg}}</div>
        @endforeach
    @endif

    <form action="login" method="POST">
        <br />
        <div class="input-group col-xs-6">
            <span class="input-group-addon">アカウント名</span>
            <input name="account" type="text" class="form-control" placeholder="account">
        </div>
        <div class="input-group col-xs-6">
            <span class="input-group-addon">パスワード　</span>
            <input name="password" type="password" class="form-control" placeholder="password">
        </div>
        <button type="submit" class="btn btn-default">ログイン</button>
    </form>
@stop

