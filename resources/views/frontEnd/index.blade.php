@extends('frontEnd/layouts.layouts')

@section('content')
    @include('frontEnd.layouts._slider')
    <div class=" bg-workflow py-5 d-lg-block ">
        <div class="container">

            <div class="row ">
                <div class="col-lg-3 col-md-6 py-3">
                    <img class="flow-img" src="{{ asset('Front')}}/images/workflow/flower.png">
                    <p class="pt-30 px-3 text-center text-white">Çiçeğinizi seçin ve web sitesinde siparişe tıklayın.</p>
                    <img class="arrow" src="{{ asset('Front')}}/images/workflow/arrow.png">
                </div>
                <div class="col-lg-3 col-md-6 py-3">
                    <img class="flow-img" src="{{ asset('Front')}}/images/workflow/form.png">
                    <p class="pt-30 px-3 text-center text-white">Sipariş veri formunuzu doldurun ve her şeyin uyduğundan emin olun.</p>
                    <img class="arrow" src="{{ asset('Front')}}/images/workflow/arrow.png">
                </div>
                <div class="col-lg-3 col-md-6 py-3">
                    <img class="flow-img" src="{{ asset('Front')}}/images/workflow/card.png">
                    <p class="pt-30 px-3 text-center text-white">
                        Kapıda ödeme ile ilk görün sonra alın.</p>
                    <img class="arrow" src="{{ asset('Front')}}/images/workflow/arrow.png">
                </div>
                <div class="col-lg-3 col-md-6 py-3">
                    <img class="flow-img" src="{{ asset('Front')}}/images/workflow/bus.png">
                    <p class="pt-30 px-3 text-center text-white">Çiçekleriniz işlenip adresinize teslime hazır.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="porduct-area section-pt section-pb-60 prod-banner">

        <div class="container w-100">
            <div class="row">
                <div class="col-lg-12">

                    <div class="section-title text-center">

                        <div class="d-flex justify-content-between mb-3 ">
                            <div class="p-2">
                                <h2 class="text-default "><span class="font-weight-lighter">Bütün</span> Ürünler</h2>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>

            <div class="row product-active d-lg-block d-none product-two-row-4">
                @foreach ($flowerList as $flower)
                     <div class="col-lg-12">
                    <div class="single-product-wrap">
                        <div class="product-image card hovereffect">
                            <a href="{{route('flowerDetails',['id' => $flower->id])}}"><img style="height: 150px;width:300px ;"
                                    src="{{ asset('flowerImages/' . $flower->flowerName . '/anaResim/' . $flower->anaResim . '')}}"
                                    ></a>



                        </div>
                        <div class="product-content">

                            <h3>

                                <a href="{{route('flowerDetails',['id' => $flower->id])}}">{{$flower->flowerName}}</a>
                            </h3>

                            <div class="price-box">
                                <span class="new-price mx-0 ">{{$flower->price}} ₺
                                    </span>
                            </div>
                            <h3>
                                @auth('user')
                                <a href="#" style="color:black;" class="">Sepete Ekle</a><br>
                                @endauth
                            </h3>
                        </div>
                    </div>
                </div>
                @endforeach
               


            </div>
            <div class="col-md-12 text-center my-4 pt-lg-5">
                <a href="{{route('flower')}}"
                    class="btn btn-default  btn-large" tabindex="0"><span>Hepsini Gör</span></a>
            </div>

            <div class="row all-products d-flex d-lg-none">

                <div class="col-md-12 text-center my-4 pt-lg-5">
                    <a href="{{route('flower')}}"
                        class="btn btn-default  btn-large" tabindex="0"><span>Hepsini Gör</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
