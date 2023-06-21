<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>
<body>
    <div class="container">
        <div class="row">
            <div class="col col-md-6"></div>
            <form action="/login" method="POST">
            @csrf
            <div class="container h-100 ">
                <div class="row h-50 d-flex justify-content-center align-items-center">
               <div class="col-md-4 py-4">
                    <h2 class="pw-bold text-center">REGISTER</h2>
                    <div class="col-md-3">
                <div class="mb-3">
                    <label for="ExampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" name="name" class="form-label" id="nama" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="ExampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="from-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="ExampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-label" id="password">
                </div>
                <button type="submit" class="btn btn-primary">submit</button>
            </form>
        </div>
    </div>
</body>
</html>
