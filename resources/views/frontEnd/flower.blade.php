@extends('frontEnd/layouts.layouts')
@section('content')
    <div class="main-wrapper">
        <div class="breadcrumb-area section-ptb"
            style="background: url(https://admin.karachiflora.com/assets/Upload/Banner/b8d0f2db-7e53-400e-b44c-1e05f06e9dce.jpg) repeat scroll 0 0;background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="breadcrumb-title">Cicekler </h2>
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="../home/index.html">Anasayfa</a></li>
                            <li class="breadcrumb-item active">Çiçekler</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="mySidenav" class="sidenav border shadow">
            <div class="d-flex justify-content-between">
                <div class="px-3">
                    <h5> </h5>
                </div>
                <div class="px-3">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                </div>
            </div>

        </div>
        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "290px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>


        <div class="main-content-wrap shop-page section-ptb">
            <div class="container w-100">
                <div class="row">
                    <div class="col-lg-12 order-1 order-lg-2">
                        <div class="shop-product-wrap">
                            <div class="row all-items">
                                @foreach ($flowerList as $flower)
                                    <div class="col-lg-4 col-6">

                                        <div class="product-image card hovereffect">
                                            <a href="{{route('flowerDetails',['id' => $flower->id])}}"><img
                                                    style="height: 150px;width:300px ;"
                                                    src="{{ asset('flowerImages/' . $flower->flowerName . '/anaResim/' . $flower->anaResim . '') }}"></a>



                                        </div>
                                        <div class="product-content">

                                            <h3>

                                                <a
                                                    href="{{route('flowerDetails',['id' => $flower->id])}}">{{ $flower->flowerName }}</a>
                                            </h3>

                                            <div class="price-box">
                                                <span class="new-price mx-0 ">{{ $flower->price }} ₺
                                                </span>
                                            </div>
                                            <h3>
                                                
                                            </h3>
                                        </div>

                                    </div>
                                @endforeach
                            </div>
                            <div id="LoadProduct" class="shop-products-wrap">

                            </div>
                            <div id="divLoader" class="mx-auto w-100 text-center p-5" style="display:none;">
                                <img class="mr-3" src="../Content/assets/images/item-load.gif"
                                    style="width: 33px;" /> <span class="text-warning">Loading ...</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
