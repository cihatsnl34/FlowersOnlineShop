@extends('frontEnd/layouts.layouts')

@section('content')
<div class="main-wrapper">
        
    <link href="../../Content/assets/css/DatePicker/bootstrap-datepicker3.css" rel="stylesheet" />
    <link href="../../Content/assets/css/DatePicker/bootstrap-datepicker3.min.css" rel="stylesheet" />
    <link href="../../Content/assets/css/DatePicker/bootstrap-datepicker3.standalone.css" rel="stylesheet" />
    <link href="../../Content/assets/css/DatePicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" />



    <div class="breadcrumb-area section-ptb" style="background: url(https://admin.karachiflora.com/assets/Upload/Banner/bafa7002-cf53-4831-8f8d-ee2c39f0eac1.jpg) repeat scroll 0 0;background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="breadcrumb-title">Siparis Onayla </h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="../../home/index.html">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Sipariş Onayla</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>

<!-- main-content-wrap start -->
<div class="main-content-wrap section-ptb checkout-page ">
    <div class="container w-100">
        
        <!-- checkout-details-wrapper start -->
        <div class="checkout-details-wrapper">
            <div class="row mb-105">
                <div class="col-lg-12 col-md-10 pt-50 pt-md-0 order-2 order-sm-2 order-md-1">
                    <!-- billing-details-wrap start -->
                    <div class="billing-details-wrap">
                        <form action="{{route('user.sepetOnayla')}}" method="POST" class="was-validated">
                            @csrf
                            <h3 class="shoping-checkboxt-title pb-1 mb-3">Adres Detay</h3>
                            
                            <div class="">
                               
                                
                               
                               


                                <div class="form-group">
                                    <label><span class="">Adres Giriniz</span></label>
                                    <textarea id="CardNotes" name="adres" class="form-control checkout-mess" rows="3" cols="5" required></textarea>
                                </div>

                                <div class="order-button-payment">
                                    <span>Kapıda Ödeme</span>
                                    <button onclick="return confirm('Satın almak istediğine emin misin ?')" type="submit" id="checkout" class="btn-place-order"><span>Satın Al</span></button>
                                    
                                    <p class="text-danger font-weight-bold text-center bg-category2 rounded mt-3 mb-2" id="payment-alert"></p>
                                    <p class="text-danger font-weight-bold" id="Text-Error"></p>
                                    <p class="text-danger font-weight-bold text-center bg-category2 rounded  " id="paypal-validation"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- billing-details-wrap end -->
                </div>
                
            </div>
        </div>
        <!-- checkout-details-wrapper end -->
    </div>
</div>
<!-- main-content-wrap end -->



    </div>
@endsection
