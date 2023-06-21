<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>
<body>
    <form action="/template" method="get">
        @csrf
            <div class="container h-100 ">
                <div class="row h-50 d-flex justify-content-center align-items-center">
               <div class="col-md-4 py-4">
                    <h2 class="pw-bold text-center">LOGIN</h2>
                    <div class="col-md-3">
                    <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="email" name="email" id="email"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" id="password"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="LOGIN" class="form-control btn btn-primary"></td>
                    </tr>
                </table>
                <a href="/register"> register</a>
                </form>
            </div>
        </div>
 </body>
</html>
