<!DOCTYPE html>
<html lang="zh-TW">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="icon" type="image/png" href="favicon-128x128.png" sizes="16x16 32x32 64x64 128x128">

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <style>
            .right-box {
                background: #4980b5;
                color:#fff;
            }
        </style>
        <title>Login | LinkMux</title>
    </head>
    <body class="h-100">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-md-4">
                    <p><b>Login to acces your account</b></p>
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" id="inputEmail" name="email" class="form-control" required autofocus/>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" id="inputPassword" name="password" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <a href="#">Create an account</a>
                    </form>
                </div>
                <div class="col-md-8 d-none h-100 d-md-table right-box">  
                    <div class="d-table-cell align-middle">
                        <h1>Welcome to LinkMux</h1>
                    </div>
                </div>
            </div>    
        </div>
    </body>
</html>
