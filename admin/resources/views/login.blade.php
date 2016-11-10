@extends('layout')
@section('content')
    <h1>ログインしてください</h1>

    <form action="login" method="POST">
        <br />
        <div class="input-group col-xs-6">
            <span class="input-group-addon">アカウント名</span>
            <input type="text" class="form-control" placeholder="name">
        </div>
        <div class="input-group col-xs-6">
            <span class="input-group-addon">パスワード　</span>
            <input type="password" class="form-control" placeholder="pass">
        </div>
        <button type="submit" class="btn btn-default">ログイン</button>
    </form>
@stop

