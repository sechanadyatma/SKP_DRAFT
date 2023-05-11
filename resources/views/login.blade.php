 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 9 | Login</title>
    {{-- CSS only --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
 </head>
 <style>
    .login-box {
        border: solid 1px;
        width: 500px;
        padding: 20px;
        box-sizing: border-box;
    }
 </style>
 <body>

    <div class="vh-100 d-flex justify-content-center align-items-center flex-column">
        <div class="login-box">
            @if (Session::has('status'))
                <div class="alert alert-danger" role="alert">
                        {{ Session::get('message') }}
                </div>
            
            @endif

            <form method="POST" action="">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
        <div class="mb-3">
            <button class="btn btn-primary form-control" type="submit">Login</button>
        </div>
        </form>
        </div>
    </div>
    {{-- javascript --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
 </body>
 </html>