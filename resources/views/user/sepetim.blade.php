@extends('frontEnd/layouts.layouts')

@section('content')
<div class="main-wrapper">
        




    <div class="breadcrumb-area section-ptb" style="background: url(https://admin.karachiflora.com/assets/Upload/Banner/84845792-7c58-4db8-9d7c-3dd559e6f8ba.jpg) repeat scroll 0 0;background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="breadcrumb-title">Sepet</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="../home/index.html">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Sepet</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- main-content-wrap start -->
    <div class="main-content-wrap section-ptb cart-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="cart.html#" class="cart-table">
                        <div class="table-content table-responsive">
                            <table id="cart-table" class="table">
                                <thead>
                                    <tr>
                                        <th class="plantmore-product-thumbnail">Resim</th>
                                        <th class="cart-product-name">Ad</th>
                                        <th class="plantmore-product-price">Fiyat</th>
                                        <th class="plantmore-product-quantity">Miktar</th>
                                        <th class="plantmore-product-subtotal">Toplam Fiyat</th>
                                        <th class="plantmore-product-remove">Kaldır</th>
                                    </tr>
                                </thead>
                                <tbody class="cart-items">
                                    @php $total = 0
                                    @endphp
                                    @foreach($sepetArray as $sepet)
                                    <tr>
                                        <td class="plantmore-product-thumbnail"><img class="cart-img" src="{{ asset('flowerImages/' . $sepet['flowerName'] . '/anaResim/' . $sepet['anaResim'] . '') }}" alt=""></td>
                                        <td class="plantmore-product-name"><p>{{$sepet['flowerName']}}</p></td>
                                        <td class="plantmore-product-price"><span class="amount">{{$sepet['price']}}</span></td>
                                        <td class="plantmore-product-quantity">{{$sepet['flowerAdet']}}</td>
                                        @php 
                                        $fiyat = $sepet['flowerAdet'] * $sepet['price'];
                                        $total += $fiyat;
                                        @endphp
                                        <td class="product-subtotal"><span class="amount totalprice">{{$fiyat}}</span></td>
                                        <td class="plantmore-product-remove"><a class="inline-block" href="{{ route('user.sepetDelete', ['id' => $sepet['id']]) }}"
                                            onclick="return confirm('Delete ! Are you sure ?')">
                                            <svg width="20" height="20" viewbox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.33333 15C8.55435 15 8.76631 14.9122 8.92259 14.7559C9.07887 14.5996 9.16667 14.3877 9.16667 14.1667V9.16666C9.16667 8.94564 9.07887 8.73368 8.92259 8.5774C8.76631 8.42112 8.55435 8.33332 8.33333 8.33332C8.11232 8.33332 7.90036 8.42112 7.74408 8.5774C7.5878 8.73368 7.5 8.94564 7.5 9.16666V14.1667C7.5 14.3877 7.5878 14.5996 7.74408 14.7559C7.90036 14.9122 8.11232 15 8.33333 15ZM16.6667 4.99999H13.3333V4.16666C13.3333 3.50362 13.0699 2.86773 12.6011 2.39889C12.1323 1.93005 11.4964 1.66666 10.8333 1.66666H9.16667C8.50363 1.66666 7.86774 1.93005 7.3989 2.39889C6.93006 2.86773 6.66667 3.50362 6.66667 4.16666V4.99999H3.33333C3.11232 4.99999 2.90036 5.08779 2.74408 5.24407C2.5878 5.40035 2.5 5.61231 2.5 5.83332C2.5 6.05434 2.5878 6.2663 2.74408 6.42258C2.90036 6.57886 3.11232 6.66666 3.33333 6.66666H4.16667V15.8333C4.16667 16.4964 4.43006 17.1322 4.8989 17.6011C5.36774 18.0699 6.00363 18.3333 6.66667 18.3333H13.3333C13.9964 18.3333 14.6323 18.0699 15.1011 17.6011C15.5699 17.1322 15.8333 16.4964 15.8333 15.8333V6.66666H16.6667C16.8877 6.66666 17.0996 6.57886 17.2559 6.42258C17.4122 6.2663 17.5 6.05434 17.5 5.83332C17.5 5.61231 17.4122 5.40035 17.2559 5.24407C17.0996 5.08779 16.8877 4.99999 16.6667 4.99999ZM8.33333 4.16666C8.33333 3.94564 8.42113 3.73368 8.57741 3.5774C8.73369 3.42112 8.94565 3.33332 9.16667 3.33332H10.8333C11.0543 3.33332 11.2663 3.42112 11.4226 3.5774C11.5789 3.73368 11.6667 3.94564 11.6667 4.16666V4.99999H8.33333V4.16666ZM14.1667 15.8333C14.1667 16.0543 14.0789 16.2663 13.9226 16.4226C13.7663 16.5789 13.5543 16.6667 13.3333 16.6667H6.66667C6.44565 16.6667 6.23369 16.5789 6.07741 16.4226C5.92113 16.2663 5.83333 16.0543 5.83333 15.8333V6.66666H14.1667V15.8333ZM11.6667 15C11.8877 15 12.0996 14.9122 12.2559 14.7559C12.4122 14.5996 12.5 14.3877 12.5 14.1667V9.16666C12.5 8.94564 12.4122 8.73368 12.2559 8.5774C12.0996 8.42112 11.8877 8.33332 11.6667 8.33332C11.4457 8.33332 11.2337 8.42112 11.0774 8.5774C10.9211 8.73368 10.8333 8.94564 10.8333 9.16666V14.1667C10.8333 14.3877 10.9211 14.5996 11.0774 14.7559C11.2337 14.9122 11.4457 15 11.6667 15Z"
                                                    fill="#E85444"></path>
                                            </svg>
                                        </a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="coupon-all">
    
                                    <div class="coupon2">
                                        <a href="{{route('flower')}}" class="btn continue-btn">Alışverişe Devam Et</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ml-auto">
                                <div class="cart-page-total">
                                    <h2>Sipatiş toplam fiyat</h2>
                                    <ul>
                                        <li><strong class="">Total</strong> <span class=""></span>{{$total}} ₺</li>
                                    </ul>
                                    <a href="{{route('user.sepetOnayla')}}" id="check-btn" class="proceed-checkout-btn" >Siparişe Devam Et</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- main-content-wrap end -->
    
        </div>
    
@endsection