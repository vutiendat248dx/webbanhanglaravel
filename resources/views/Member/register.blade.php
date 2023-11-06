<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Đăng Ký</h1>
                            </div>
                            <form method="POST" action="{{route('register')}}" class="user">
                                @csrf
                                <div class="form-group">

                                    <input type="text" name="fullname" class="form-control form-control-user" placeholder="Họ và tên...">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="phonenumber" class="form-control form-control-user" placeholder="Số điện thoại...">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="address" class="form-control form-control-user" placeholder="Địa chỉ...">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control form-control-user" placeholder="Email...">
                                </div>
                                <div class="form-group">

                                    <input type="password" name="password" class="form-control form-control-user" placeholder="Mật khẩu...">
                                </div>
                                <input type="submit" value="Đăng ký" class="btn btn-primary btn-user btn-block">
                                </input>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

</body>

</html>