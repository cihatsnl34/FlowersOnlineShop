@extends('frontEnd/layouts.layouts')

@section('content')
<div class="main-wrapper">
        



    <div class="breadcrumb-area section-ptb" style="background: url(https://admin.karachiflora.com/assets/Upload/Banner/3fbaba4b-5656-4dd9-8f71-3d194ef81d9c.jpg) repeat scroll 0 0;background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="breadcrumb-title">Iletisim</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Anasayfa</a></li>
                        <li class="breadcrumb-item active">İletişim</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    
    <!-- Page Conttent -->
    <div class="page-content section-ptb contact-bg">
        <div class="container w-100">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-7 col-sm-12">
                    <div class="contact-infor">
                        <div class="contact-title">
                            <h3>İletişim</h3>
                        </div>
    
                        <div class="contact-address">
                            <ul>
                                <li>
                                    <strong>Adres :</strong> <span>
                                        acarlar mahallesi yörük sokak no 43 daire 5 turgutlu/manisa
                                    </span>
                                </li>
                                <li><strong>Email : </strong>deneme@gmail.com</li>
                                <li>
                                    <strong>Mobil Telefon :</strong> 0535342212
                                </li>
                            </ul>
                        </div>
                        <div class="work-hours">
                            <h5>Çalışma Saatleri</h5>
                            <p class="mb-1"><span><strong>Pazartesi &ndash; Cumartesi</strong> 11:00  &ndash; 23:00   </span> </p>
                            <p class="text-danger"><span><strong>Pazar </strong>: Kapalı</span> </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
    <!--// Page Conttent -->
    
        </div>
@endsection