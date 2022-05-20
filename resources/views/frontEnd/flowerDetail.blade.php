@extends('frontEnd/layouts.layouts')
@section('content')
    <div class="main-wrapper">



        <style>
            @import url(https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

            .prod-detail-small {
                height: auto;
            }

            .pro_review:nth-child(3n) {
                padding-left: 0;
            }

            .modal-dialog {
                max-width: 600px;
            }

            .review_thumb {
                margin-right: 30px;
                min-width: 0%;
            }

            fieldset,
            label {
                margin: 0;
                padding: 0
            }

            body {
                margin: 20px
            }

            h1 {
                font-size: 1.5em;
                margin: 10px
            }

            .rating {
                border: none;
                margin-right: 49px
            }

            .myratings {
                font-size: 85px;
                color: green
            }

            .rating>[id^="star"] {
                display: none
            }

            .rating>label:before {
                margin: 5px;
                font-size: 2.25em;
                font-family: FontAwesome;
                display: inline-block;
                content: "\f005"
            }

            .rating>.half:before {
                content: "\f089";
                position: absolute
            }

            .rating>label {
                color: #ddd;
                float: right
            }

            .rating>[id^="star"]:checked~label,
            .rating:not(:checked)>label:hover,
            .rating:not(:checked)>label:hover~label {
                color: #FFD700
            }

            .rating>[id^="star"]:checked+label:hover,
            .rating>[id^="star"]:checked~label:hover,
            .rating>label:hover~[id^="star"]:checked~label,
            .rating>[id^="star"]:checked~label:hover~label {
                color: #FFED85
            }

            .reset-option {
                display: none
            }

            .reset-button {
                margin: 6px 12px;
                background-color: rgb(255, 255, 255);
                text-transform: uppercase
            }

            .mt-100 {
                margin-top: 100px
            }

        </style>

        <div class="breadcrumb-area section-ptb"
            style="background: url(https://admin.karachiflora.com/assets/Upload/Banner/a1e003e7-e0d8-4ca0-a202-b2f07c639cae.jpg) repeat scroll 0 0;background-size: cover;">
            <div class="container w-100">
                <div class="row">
                    <div class="col-12">
                        <h2 class="breadcrumb-title">Cicek Detayı </h2>
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="../home/index.html">Anasayfa</a></li>
                            <li class="breadcrumb-item active">Cicek Detay</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="main-content-wrap section-ptb product-details-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="product-details-images">
                            <div class="product_details_container">
                                <div class="product_big_images-top">
                                    <div class="portfolio-full-image tab-content">

                                        <div role="tabpanel" class="tab-pane active product-image-position prod-detail"
                                            id="FL-1">
                                            <a class="pop">
                                                <img src="{{ asset('flowerImages/' . $flower->flowerName . '/anaResim/' . $flower->anaResim . '') }}"
                                                    alt="#">
                                            </a>

                                        </div>
                                    </div>
                                </div>
                                <ul class="product_small_images-bottom horizantal-product-active nav" role="tablist">
                                    <li role="presentation" class="pot-small-img active">
                                        <a href="ProductDetails@ItemID=2328.html#FL-1" role="tab" data-toggle="tab">
                                            <img class="prod-detail-small"
                                                src="{{ asset('flowerImages/' . $flower->flowerName . '/anaResim/' . $flower->anaResim . '') }}"
                                                alt="small-image">
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 px-0 px-md-3">
                        <div class="product_details_info">

                            <h2 class="m-0">{{ $flower->flowerName }}</h2>

                            <ul class="pro_dtl_prize">
                                <li><span class=" mx-0">{{ $flower->price }} ₺</span></li>
                            </ul>
                            <div class="product-quantity-action">
                                <div class="prodict-statas"><span>Stok :</span></div>
                                <div class="product-quantity">

                                    <form action="{{route('user.sepetEkle',['id'=>$flower->id])}}" method="POST">
                                        @csrf
                                        <div class="product-quantity">
                                            <div class="cart-plus-minus">
                                                <input name ="stok"id="product-quantity" value="1" type="integer">
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>

                            <ul class="pro_dtl_btn">
                                @if ($errors->has('email'))
                                    
                                        <div class="alert alert-danger" role="alert">
                                            STOK YETERSİZDİR!!!
                                        </div>
                                        
                                    
                                @endif
                                
                                @auth('user')
                                <li><button type="submit"class="buy_now_btn addItemLS btnalert"
                                        data-toggle="modal">Sepete Ekle</button></li>
                                    </form>
                                @else 
                                
                                <li>
                                    <a href="{{route('user.login')}}"><button class="buy_now_btn addItemLS btnalert"
                                    data-toggle="modal">Giriş Yap</button></a></li>
                                </form>
                                @endauth
                            </ul>


                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-12">
                        <div class="product_details_tab_content tab-content">
                            <div class="product_tab_content tab-pane active" id="description" role="tabpanel">
                               
                            </div>
                            <div class="product_tab_content tab-pane" id="reviews" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- blog-details-wrapper -->
                                        <div class="col-lg-12 review_address_inner">
                                            <h5>Comments</h5>
                                            <div class="pro_review">
                                                <div class="review_thumb">
                                                    <img alt="review images" src="../Content/assets/images/usericon.jpg"
                                                        width="80px">
                                                </div>
                                                <div class="review_details">
                                                    <div class="review_info">
                                                        <h5>Rama khan</h5>
                                                    </div>

                                                    <div class="pro_rating d-flex ">
                                                        <ul class="product-rating d-flex">
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star-outline"></span></li>


                                                        </ul>

                                                    </div>
                                                    <p>Excellent customer service. Quality of product is 10/10
                                                        higly recommeded. On time delivery ❤❤
                                                        Thanks Karachi flora for making it so special❤</p>
                                                </div>

                                            </div>
                                            <div class="pro_review">
                                                <div class="review_thumb">
                                                    <img alt="review images" src="../Content/assets/images/usericon.jpg"
                                                        width="80px">
                                                </div>
                                                <div class="review_details">
                                                    <div class="review_info">
                                                        <h5>Imran </h5>
                                                    </div>

                                                    <div class="pro_rating d-flex ">
                                                        <ul class="product-rating d-flex">
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star-outline"></span></li>


                                                        </ul>

                                                    </div>
                                                    <p>Being an international customer I’m so satisfied with their customer
                                                        dealings, my delivery was done at the same day of ordering to
                                                        Karachi,Pakistan with fresh flowers and beautiful presentation ,
                                                        They have made me the happiest customer with their services and the
                                                        way they have been cooperating . I was personally assisted by Hina
                                                        and she has been an amazing person personally and professionally
                                                        both! Wish karachi Flora all the best. I wish I could give hundred
                                                        stars for the rating. ♥️♥️♥️&#128175;</p>
                                                </div>

                                            </div>
                                            <div class="pro_review">
                                                <div class="review_thumb">
                                                    <img alt="review images" src="../Content/assets/images/usericon.jpg"
                                                        width="80px">
                                                </div>
                                                <div class="review_details">
                                                    <div class="review_info">
                                                        <h5>Zohra Aftab</h5>
                                                    </div>

                                                    <div class="pro_rating d-flex ">
                                                        <ul class="product-rating d-flex">
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star-outline"></span></li>


                                                        </ul>

                                                    </div>
                                                    <p>Amazing service every time! 10/10 recommend</p>
                                                </div>

                                            </div>
                                            <div class="pro_review">
                                                <div class="review_thumb">
                                                    <img alt="review images" src="../Content/assets/images/usericon.jpg"
                                                        width="80px">
                                                </div>
                                                <div class="review_details">
                                                    <div class="review_info">
                                                        <h5>Sana Ansari</h5>
                                                    </div>

                                                    <div class="pro_rating d-flex ">
                                                        <ul class="product-rating d-flex">
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star-outline"></span></li>


                                                        </ul>

                                                    </div>
                                                    <p>Excellent Excellent Service. I had an amazing experience with them.
                                                        Delivered the present way before the requested time .Highly
                                                        recommended!!!!</p>
                                                </div>

                                            </div>
                                            <div class="pro_review">
                                                <div class="review_thumb">
                                                    <img alt="review images" src="../Content/assets/images/usericon.jpg"
                                                        width="80px">
                                                </div>
                                                <div class="review_details">
                                                    <div class="review_info">
                                                        <h5>tarekkhan</h5>
                                                    </div>

                                                    <div class="pro_rating d-flex ">
                                                        <ul class="product-rating d-flex">
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star"></span></li>


                                                        </ul>

                                                    </div>
                                                    <p>Surprisingly amazing! Excellent quality and customer service. Highly
                                                        recommended!</p>
                                                </div>

                                            </div>
                                            <div class="pro_review">
                                                <div class="review_thumb">
                                                    <img alt="review images" src="../Content/assets/images/usericon.jpg"
                                                        width="80px">
                                                </div>
                                                <div class="review_details">
                                                    <div class="review_info">
                                                        <h5>Sumaira</h5>
                                                    </div>

                                                    <div class="pro_rating d-flex ">
                                                        <ul class="product-rating d-flex">
                                                            <li><span class="ion-android-star-outline"></span></li>
                                                            <li><span class="ion-android-star-outline"></span></li>
                                                            <li><span class="ion-android-star-outline"></span></li>
                                                            <li><span class="ion-android-star-outline"></span></li>
                                                            <li><span class="ion-android-star-outline"></span></li>


                                                        </ul>

                                                    </div>
                                                    <p>Great customer service, beautiful flowers, happy consumer! &#128578;
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="pro_review">
                                                <div class="review_thumb">
                                                    <img alt="review images" src="../Content/assets/images/usericon.jpg"
                                                        width="80px">
                                                </div>
                                                <div class="review_details">
                                                    <div class="review_info">
                                                        <h5>Sabela</h5>
                                                    </div>

                                                    <div class="pro_rating d-flex ">
                                                        <ul class="product-rating d-flex">
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star"></span></li>


                                                        </ul>

                                                    </div>
                                                    <p>I had a great experience with karachi Flora- timely delivery,
                                                        beautiful flowers and excellent customer service karachi Flora -
                                                        thank you so much! I highly recommend this florist for same day
                                                        delivery!</p>
                                                </div>

                                            </div>
                                            <div class="pro_review">
                                                <div class="review_thumb">
                                                    <img alt="review images" src="../Content/assets/images/usericon.jpg"
                                                        width="80px">
                                                </div>
                                                <div class="review_details">
                                                    <div class="review_info">
                                                        <h5>Sameer khan</h5>
                                                    </div>

                                                    <div class="pro_rating d-flex ">
                                                        <ul class="product-rating d-flex">
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star"></span></li>


                                                        </ul>

                                                    </div>
                                                    <p>Impressed by the quality of the products. Excellent service. And
                                                        highly recommended.</p>
                                                </div>

                                            </div>
                                            <div class="pro_review">
                                                <div class="review_thumb">
                                                    <img alt="review images" src="../Content/assets/images/usericon.jpg"
                                                        width="80px">
                                                </div>
                                                <div class="review_details">
                                                    <div class="review_info">
                                                        <h5>Marui soomro</h5>
                                                    </div>

                                                    <div class="pro_rating d-flex ">
                                                        <ul class="product-rating d-flex">
                                                            <li><span class="ion-android-star-outline"></span></li>
                                                            <li><span class="ion-android-star-outline"></span></li>
                                                            <li><span class="ion-android-star-outline"></span></li>
                                                            <li><span class="ion-android-star-outline"></span></li>
                                                            <li><span class="ion-android-star-outline"></span></li>


                                                        </ul>

                                                    </div>
                                                    <p>Ordered a beautiful cupcakes and flower box and they were very kind
                                                        to take a last minute order and fulfill it. 10/10 for both service
                                                        and product and order process. Definitely ordering again. Highly
                                                        recommended</p>
                                                </div>

                                            </div>
                                            <div class="pro_review">
                                                <div class="review_thumb">
                                                    <img alt="review images" src="../Content/assets/images/usericon.jpg"
                                                        width="80px">
                                                </div>
                                                <div class="review_details">
                                                    <div class="review_info">
                                                        <h5>Shabeer kazmi</h5>
                                                    </div>

                                                    <div class="pro_rating d-flex ">
                                                        <ul class="product-rating d-flex">
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star"></span></li>
                                                            <li><span class="ion-android-star"></span></li>


                                                        </ul>

                                                    </div>
                                                    <p>Loved their bouquet absolutely beautiful &#128525;</p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="comments-reply-area">
                                                <h5 class="comment-reply-title mb-30">Leave a Reply</h5>
                                                <div class="comment-form-area">
                                                    <div class="comment-input">
                                                        <div class="row">

                                                            <div class="col-lg-12">
                                                                <p class="comment-form">
                                                                    <input id="Name" type="text" required="required"
                                                                        name="Name" placeholder="Name *">
                                                                </p>
                                                            </div>


                                                            <div class="col-lg-12 form-group">
                                                                <p class="comment-form-comment">
                                                                    <textarea id="Description" class="comment-notes" required="required" placeholder="Comment *"></textarea>
                                                                </p>
                                                            </div>
                                                            <div class="col-lg-12 d-flex">

                                                                <h4 class="pl-2">Rate us now </h4>

                                                                <fieldset class="rating text-center">
                                                                    <input type="radio" id="star5" name="rating"
                                                                        value="5" /><label class="full"
                                                                        for="star5" title="Awesome - 5 stars"></label>
                                                                    <input type="radio" id="star4half" name="rating"
                                                                        value="4.5" /><label class="half"
                                                                        for="star4half"
                                                                        title="Pretty good - 4.5 stars"></label>
                                                                    <input type="radio" id="star4" name="rating"
                                                                        value="4" /><label class="full"
                                                                        for="star4" title="Pretty good - 4 stars"></label>
                                                                    <input type="radio" id="star3half" name="rating"
                                                                        value="3.5" /><label class="half"
                                                                        for="star3half" title="Meh - 3.5 stars"></label>
                                                                    <input type="radio" id="star3" name="rating"
                                                                        value="3" /><label class="full"
                                                                        for="star3" title="Meh - 3 stars"></label>
                                                                    <input type="radio" id="star2half" name="rating"
                                                                        value="2.5" /><label class="half"
                                                                        for="star2half"
                                                                        title="Kinda bad - 2.5 stars"></label>
                                                                    <input type="radio" id="star2" name="rating"
                                                                        value="2" /><label class="full"
                                                                        for="star2" title="Kinda bad - 2 stars"></label>
                                                                    <input type="radio" id="star1half" name="rating"
                                                                        value="1.5" /><label class="half"
                                                                        for="star1half" title="Meh - 1.5 stars"></label>
                                                                    <input type="radio" id="star1" name="rating"
                                                                        value="1" /><label class="full"
                                                                        for="star1" title="Sucks big time - 1 star"></label>
                                                                    <input type="radio" id="starhalf" name="rating"
                                                                        value="0.5" /><label class="half"
                                                                        for="starhalf"
                                                                        title="Sucks big time - 0.5 stars"></label>
                                                                    <input type="radio" class="reset-option"
                                                                        name="rating" value="reset" />
                                                                </fieldset>
                                                            </div>

                                                            <div class="col-lg-12">
                                                                <div class="comment-form-submit">
                                                                    <button class="comment-submit"
                                                                        onclick="submitReview(); return false;">SUBMIT</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--// blog-details-wrapper -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" style="z-index: 16000161 !important;" id="gift">
            <div class="modal-dialog  modal-lg modal-dialog-centered modal-dialog-scrollable">
               
            </div>
        </div>

        <div class="modal  fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-md modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title border-0"></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img src="ProductDetails@ItemID=2328.html" class="imagepreview">
                    </div>
                </div>
            </div>
        </div>
        <script>
            var qty = 1;
            $('#product-quantity').on('change', function() {
                qty = this.value;
            });

            function cartclick() {
                var pnote = $('#ProNote').val();
                debugger;
                if ($('#double').is(':checked')) {
                    addtocart(2328, 'KF 002 - Double', 'assets/Upload/Item/48bf315c-c7ff-44d0-8fb5-c9462664817a.jpg', 0, qty,
                        pnote);
                    toast('Item Added to Cart', 1);
                } else {
                    if (0 == 0 || 0 == null) {
                        addtocart(2328, 'KF 002', 'assets/Upload/Item/48bf315c-c7ff-44d0-8fb5-c9462664817a.jpg', 3800, qty,
                            pnote);
                        toast('Item Added to Cart', 1);
                    } else {
                        addtocart(2328, 'KF 002', 'assets/Upload/Item/48bf315c-c7ff-44d0-8fb5-c9462664817a.jpg', 0, qty, pnote);
                        toast('Item Added to Cart', 1);
                    }
                }
            }

            function wishlistclick() {
                if ($('#double').is(':checked')) {
                    addtoWishlist(2328, 'KF 002 - Double', 'assets/Upload/Item/48bf315c-c7ff-44d0-8fb5-c9462664817a.jpg', 0,
                        'False', qty);
                    toast('Item Added to wishlist', 1);
                } else {
                    if (0 == 0 || 0 == null) {
                        addtoWishlist(2328, 'KF 002', 'assets/Upload/Item/48bf315c-c7ff-44d0-8fb5-c9462664817a.jpg', 3800,
                            'False', qty);
                        toast('Item Added to wishlist', 1);
                    } else {
                        addtoWishlist(2328, 'KF 002', 'assets/Upload/Item/48bf315c-c7ff-44d0-8fb5-c9462664817a.jpg', 0, 'False',
                            qty);
                        toast('Item Added to wishlist', 1);
                    }
                }
            }

            function GotoCartPage() {
                window.location.href = '/order/cart/';
            }

            $(function() {
                $('.pop').on('click', function() {
                    $('.imagepreview').attr('src', $(this).find('img').attr('src'));
                    $('#imagemodal').modal('show');
                });
            });
            $(document).ready(function() {

                //$("input[type='radio']").click(function () {
                //    var sim = $("input[type='radio']:checked").val();
                //    //alert(sim);
                //    if (sim < 3) { $('.myratings').css('color', 'red'); $(".myratings").text(sim); } else { $('.myratings').css('color', 'green'); $(".myratings").text(sim); }
                //});
            });

            function submitReview() {

                var sim = $("input[type='radio']:checked").val();

                var review = new Object();
                review.Name = $('#Name').val();
                review.Email = "";
                //$('#Email').val();
                review.Contact = 1;
                review.Description = $('#Description').val();
                review.StatusID = 1;
                review.Stars = sim == undefined ? 0 : sim;
                review.ItemID = getParameterByName('ItemID');

                var reviewData = JSON.stringify({
                    'data': review
                });
                if (validate()) {

                    $.ajax({
                        type: "POST",
                        url: '/Product/PostProductReview',
                        data: reviewData,
                        contentType: 'application/json; charset=utf-8',
                        dataType: 'json',
                        success: function(data) {

                            if (data.data > 0) {
                                toast("Thankyou for your comments", 1);
                                window.location.reload();
                            } else {

                            }
                        },
                        error: function(xhr, textStatus, errorThrown) {

                        }
                    });
                }
            }

            function validate() {
                var flag = true;
                if ($("#Name").val() == '' || $("#Description").val() == '' || $("input[type='radio']:checked").val() ==
                    undefined) {
                    toast("Necessary field are required for review", 2);
                    flag = false;
                }
                return flag;
            }

            function getParameterByName(name) {
                var regexS = "[\\?&]" + name + "=([^&#]*)",
                    regex = new RegExp(regexS),
                    results = regex.exec(window.location.search);
                if (results == null) {
                    return "";
                } else {
                    return decodeURIComponent(results[1].replace(/\+/g, " "));
                }
            }
        </script>

    </div>
@endsection
