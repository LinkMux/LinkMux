<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="icon" type="image/png" href="favicon-128x128.png" sizes="16x16 32x32 64x64 128x128">

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    <title>Login | LinkMux</title>
</head>
<body>
<div class="vertical-center h-100">
    <div class="form-login text-center">
        <h1>Link MUX</h1>
        <p>Welcome back</p>
        <form>
            <div class="form-group">
                <label for="inputEmail" class="sr-only">Email</label>
                <input type="email" id="inputEmail" class="form-control" required autofocus/>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control" required/>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-primary">Login</button>
            </div>
            <a href="#">建立帳號</a>
        </form>
    </div>
</div>
</body>
</html>
