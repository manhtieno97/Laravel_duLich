<!DOCTYPE html>
<html lang="en">
    
<!--Designed By ALpha-->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <base href="{{asset('backend')}}/">
        <!-- Vendor styles -->
        <link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">
        

        <!-- App styles -->
        <link rel="stylesheet" href="css/app.min.css">
    </head>

    <body data-sa-theme="1">
        <div class="login">

            <!-- Login -->
            <div class="login__block active" id="l-login">
                <div class="login__block__header">
                    <i class="zmdi zmdi-account-circle"></i>
                    Hi there! Please Sign in

                    {{-- <div class="actions actions--inverse login__block__actions">
                        <div class="dropdown">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-register" href="#">Create an account</a>
                                <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-forget-password" href="#">Forgot password?</a>
                            </div>
                        </div>
                    </div> --}}
                </div>

                
                    <div class="login__block__body">
                    <form method="post" action="{{ route('post_login')}}" class="form" >
                            @csrf
                            <div class="form-group">
                                <input type="text" name="email" class="form-control text-center" placeholder="Email Address" value="{{ old('email')}}">
                                <p class="text-danger">{{ $errors->first('email') }}</p>
                            </div>
        
                            <div class="form-group">
                                <input type="password" name="password" class="form-control text-center" placeholder="Password" value="{{ old('password')}}">
                                <p class="text-danger">{{ $errors->first('password') }}</p>
                            </div>
                            <div class="form-group">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="remember" value="remember">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description"> Remember Me</span>
                                </label>
                            </div>
                            <button class="btn btn--icon login__block__btn" type="submit"><i class="zmdi zmdi-long-arrow-right"></i></button>
                    </form>
                    </div>
                
            </div>


{{-- 

            <!-- Register -->
            <div class="login__block" id="l-register">
                <div class="login__block__header">
                    <i class="zmdi zmdi-account-circle"></i>
                    Create an account

                    <div class="actions actions--inverse login__block__actions">
                        <div class="dropdown">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-login" href="#">Already have an account?</a>
                                <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-forget-password" href="#">Forgot password?</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="login__block__body">
                    <div class="form-group">
                        <input type="text" class="form-control text-center" placeholder="Name">
                    </div>

                    <div class="form-group form-group--centered">
                        <input type="text" class="form-control text-center" placeholder="Email Address">
                    </div>

                    <div class="form-group form-group--centered">
                        <input type="password" class="form-control text-center" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Accept the license agreement</span>
                        </label>
                    </div>

                    <a href="index-2.html" class="btn btn--icon login__block__btn"><i class="zmdi zmdi-plus"></i></a>
                </div>
            </div>

            <!-- Forgot Password -->
            <div class="login__block" id="l-forget-password">
                <div class="login__block__header">
                    <i class="zmdi zmdi-account-circle"></i>
                    Forgot Password?

                    <div class="actions actions--inverse login__block__actions">
                        <div class="dropdown">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-login" href="#">Already have an account?</a>
                                <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-register" href="#">Create an account</a>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="login__block__body">
                    <p class="mb-5">Lorem ipsum dolor fringilla enim feugiat commodo sed ac lacus.</p>

                    <div class="form-group">
                        <input type="text" class="form-control text-center" placeholder="Email Address">
                    </div>

                    <a href="index-2.html" class="btn btn--icon login__block__btn"><i class="zmdi zmdi-check"></i></a>
                </div> --}}
            </div>
        </div>


        <!-- Javascript -->
        <!-- Vendors -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>
    </body>

<!--Designed By ALpha-->
</html>