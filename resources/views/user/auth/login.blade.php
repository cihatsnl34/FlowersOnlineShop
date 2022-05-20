@extends('frontEnd/layouts.layouts')
@section("content")

<div class="breadcrumb-area section-ptb" style="background: url(https://admin.karachiflora.com/assets/Upload/Banner/b8d0f2db-7e53-400e-b44c-1e05f06e9dce.jpg) repeat scroll 0 0;background-size:cover;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="breadcrumb-title">Uye Giris  </h2>
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="checkout.html">Anasayfa</a></li>
                    <li class="breadcrumb-item active">Hesap</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- main-content-wrap start -->
<div class="main-content-wrap section-ptb login-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <!-- login-register-tab-list start -->
                    <div class="login-register-tab-list nav">
                        <a class="active" href="{{route('user.login')}}">
                            <h4> Giriş Yap </h4>
                        </a>
                        <a href="{{route('register')}}">
                            <h4> Kayıt Ol </h4>
                        </a>
                    </div>
                    <!-- login-register-tab-list end -->
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="{{ route('user.userlogin') }}" method="post" class="needs-validation" novalidate>
                                        @csrf
                                        <div class="login-input-box">
                                            <div class="form-group">
                                                <input type="email" class="form-control mb-0" name="email" placeholder=" Email " required>
                                                <div class="valid-feedback">Geçerli.</div>
                                                <div class="invalid-feedback">Geçersiz.</div>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control mb-0" name="password" placeholder="Password" required>
                                                <div class="valid-feedback">Geçerli.</div>
                                                <div class="invalid-feedback">Geçersiz.</div>
                                            </div>

                                        </div>
                                        <div class="button-box d-flex flex-column">
                                            
                                            <div class="d-flex justify-content-between">
                                                <button class="btn btn-default-opposite flex-shrink-1 login-btn px-3 py-2" id="login-btn" type="submit"><span>Giriş Yap</span></button>
                                                
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- main-content-wrap end -->

@endsection