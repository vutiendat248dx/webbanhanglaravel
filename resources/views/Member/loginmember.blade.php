<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Simple Login Form Example</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
        }

        body {
            background: #e35869;
            font-family: 'Rubik', sans-serif;
        }

        .login-form {
            background: #fff;
            width: 500px;
            margin: 65px auto;
            display: -webkit-box;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column;
            border-radius: 4px;
            box-shadow: 0 2px 25px rgba(0, 0, 0, 0.2);
        }

        .login-form h1 {
            padding: 35px 35px 0 35px;
            font-weight: 300;
        }

        .login-form .content {
            padding: 35px;
            text-align: center;
        }

        .login-form .input-field {
            padding: 12px 5px;
        }

        .login-form .input-field input {
            font-size: 16px;
            display: block;
            font-family: 'Rubik', sans-serif;
            width: 100%;
            padding: 10px 1px;
            border: 0;
            border-bottom: 1px solid #747474;
            outline: none;
            -webkit-transition: all .2s;
            transition: all .2s;
        }

        .login-form .input-field input::-webkit-input-placeholder {
            text-transform: uppercase;
        }

        .login-form .input-field input::-moz-placeholder {
            text-transform: uppercase;
        }

        .login-form .input-field input:-ms-input-placeholder {
            text-transform: uppercase;
        }

        .login-form .input-field input::-ms-input-placeholder {
            text-transform: uppercase;
        }

        .login-form .input-field input::placeholder {
            text-transform: uppercase;
        }

        .login-form .input-field input:focus {
            border-color: #222;
        }

        .login-form a.link {
            text-decoration: none;
            color: #747474;
            letter-spacing: 0.2px;
            text-transform: uppercase;
            display: inline-block;
            margin-top: 20px;
        }

        .login-form .action {
            display: -webkit-box;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-direction: row;
        }
    </style>
</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="login-form">
        <form method="POST" action="{{route('checkloginmember')}}">
            @csrf
            <h1>Đăng nhập</h1>
            <div class="content">
                <div class="input-field">
                    <input type="text" name="email" placeholder="email" autocomplete="nope">
                </div>
                <div class="input-field">
                    <input type="password" name="password" placeholder="password" autocomplete="new-password">
                </div>
                <a href="#" class="link">Forgot Your Password?</a>
                <div class="action">
                    <a class="btn btn-primary btn-user btn-block" href="{{route('registermember')}}">Đăng ký</a>
                    <button class="btn btn-primary btn-user btn-block">Đăng nhập</button>
                </div>
            </div>
        </form>
    </div>
    <!-- partial -->
    <script>
        let form = document.querySelecter('form');

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            return false;
        });
    </script>
</body>

</html>