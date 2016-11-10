<!DOCTYPE html>
<html lang="ja">
    @include('header')
    <body>
        @include('nav')
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-3">
                    @include("sidemenu")
                </div>
                <div class="col-xs-9">
                    @yield("content")
                </div>
        </div>
    </body>
</html>
