<div class="modal fadein" id="modal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <!DOCTYPE html>
                <html>
                    <head>
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">

                        <!-- MATERIAL DESIGN ICONIC FONT -->
                        <link rel="stylesheet" href="{{ asset('assets/frontend/login/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">

                        <!-- STYLE CSS -->
                        <link rel="stylesheet" href="{{ asset('assets/frontend/login/css/style.css') }}">
                    </head>

                    <body>
                        <div class="inner">
                            <div class="image-holder">
                                <img src="{{ asset('assets/login/images/furniture.jpg') }}" alt="">
                            </div>
                            <div>
                            <p id="alert_success"></p>
                            <form id="formlogin" style="width:155%" method="post" action="{{ url('/customerlogin')}}">
                                {{ csrf_field() }}
                                <h3>Login Form</h3>
                                <div class="form-wrapper">
                                    <input type="text" placeholder="Email Address" name="email" class="form-control-template">
                                    <i class="zmdi zmdi-email"></i>
                                </div>
                                <div class="form-wrapper">
                                    <input type="password" placeholder="Password" name="password" class="form-control-template">
                                    <i class="zmdi zmdi-lock"></i>
                                </div>
                                <a id="create_account">create account</a>
                                <button id="btn-post">
                                    <i class="zmdi zmdi-arrow-right"></i>
                                </button>
                            </form>
                            <form id="formregister" style="display:none; width:120%;">
                                <i class="zmdi zmdi-arrow-left" style="height:30px; width:50px;" id="backformlogin">  Back</i>
                                <h3>Registration Form</h3>
                                <div class="form-wrapper">
                                    <input type="text" placeholder="Username" name="nama" class="form-control-template">
                                    <i class="zmdi zmdi-account"></i>
                                </div>
                                <div class="form-wrapper">
                                    <input type="text" placeholder="Email Address" name="email" class="form-control-template">
                                    <i class="zmdi zmdi-email"></i>
                                </div>
                                <div class="form-wrapper">
                                    <input type="text" placeholder="No Telp" name="no_tlp" class="form-control-template">
                                    <i class="zmdi zmdi-phone"></i>
                                </div>
                                <div class="form-wrapper">
                                    <textarea name="alamat" id="alamat" cols="30" rows="10" placeholder="Alamat" class="form-control-template"></textarea>
                                    <i class="zmdi zmdi-address"></i>
                                </div>
                                <div class="form-wrapper">
                                    <input type="password" placeholder="Password" name="password" class="form-control-template">
                                    <i class="zmdi zmdi-lock"></i>
                                </div>
                                {{-- <div class="form-wrapper">
                                    <input type="password" placeholder="Confirm Password" name="confirm_password" class="form-control-template">
                                    <i class="zmdi zmdi-lock"></i>
                                </div> --}}
                            </form>
                             <div class="button_register" style="display: none;">
                                <button id="btn-post2">
                                    Register
                                    <i class="zmdi zmdi-arrow-right"></i>
                                </button>
                            </div>
                            {{-- <button id="btn-post">
                                <i class="zmdi zmdi-arrow-right"></i>
                            </button> --}}
                            </div>
                        </div>

                    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
                </html>
            </div>
        </div>
    </div>
</div>