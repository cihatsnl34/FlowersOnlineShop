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
<div class="main-content-wrap section-ptb login-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <!-- login-register-tab-list start -->
                    <div class="login-register-tab-list nav">
                        <a  href="{{route('user.login')}}">
                            <h4> Giriş Yap</h4>
                        </a>
                        <a class="active" href="{{route('register')}}">
                            <h4> Kayıt Ol </h4>
                        </a>
                    </div>
                    <!-- login-register-tab-list end -->
                    <div class="tab-content">
                        <div id="lg2" >
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="{{route('register')}}" method="post" class="needs-validation" novalidate name="myform">
                                        @csrf
                                        <div class="login-input-box">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control mb-0" placeholder="İsim Soyisim" required>
                                                <div class="valid-feedback">Valid.</div>
                                                <div class="invalid-feedback">Invalid.</div>
                                            </div>
                                           
                                            <div class="form-group">
                                                <input name="email" placeholder="Email" class="form-control mb-0" type="email" required>
                                                <div class="valid-feedback">Valid.</div>
                                                <div class="invalid-feedback">Invalid.</div>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control mb-0" placeholder="Şifre" required>
                                                <div class="valid-feedback">Valid.</div>
                                                <div class="invalid-feedback">Invalid.</div>
                                            </div>
                                           
                                        </div>
                                        <div class="button-box">
                                            <button class="register-btn btn btn-default-opposite" type="submit"><span>Kayıt Ol</span></button>
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
@endsection
