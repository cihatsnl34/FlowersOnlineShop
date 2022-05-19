<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home Page</title>
    <meta name="robots" content="noindex, follow" />
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('Front/image/favicon.ico') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('Front/css/vendor/bootstrap.min.css') }}">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('Front/css/vendor//css/vendor/ionicons.min.css')}}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('Front/css/plugins/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('Front/css/plugins/animation.css')}}">
    <link rel="stylesheet" href="{{ asset('Front/css/plugins/jqueryui.min.css')}}">
    <link href="{{ asset('Front/css/plugins/flag-icon.min.css')}}" rel="stylesheet" />

    <!-- CSS-->
    <link rel="stylesheet" href="{{ asset('Front/css/style.css')}}">
    <!-- jQuery JS -->
    <script src="{{ asset('Front/js/vendor/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('Front/js/custom.js')}}"></script>
    <style>
        @media only screen and (max-width: 479px) {
            .container-topheader {
                width: 100% !important;
            }
        }

        .prod-detail img {
            height: auto;
            width: 100%;
            object-fit: contain;
            margin: auto;
        }

        @media only screen and (max-width: 480px) {

            .Feature-tiem>a img,
            .product-image>a img {
                height: auto;
                min-height: 165px;
                max-height: 165px;
            }

            .shop-item>a img {
                height: auto !important;
                min-height: 165px;
                max-height: 165px;
            }
        }

        .hovereffect {
            width: 100%;
            overflow: hidden;
            position: relative;
            text-align: center;
            cursor: default;
            border-radius: 5px;
        }

        .hovereffect:hover img {
            -ms-transform: scale(2.2);
            -webkit-transform: scale(2.2);
            transform: scale(2.2);
        }

        .hovereffect img {
            display: block;
            position: relative;
            -webkit-transition: all .4s linear;
            transition: all 1.2s linear;
        }
    </style>


</head>

<body>
   
   @include('_header')
   @include('_slider') 
   @include('_footer') 

    <style>
        .modal-content {
            border-radius: 1rem
        }

        .modal-content:hover {
            box-shadow: 2px 2px 2px black
        }

        .b1 {
            background-color: #2b84be;
            box-shadow: 0px 4px #337095;
            font-size: 17px
        }

        .r3 {
            color: #c1c1c1;
            font-weight: 500
        }
    </style>
    <div class="modal fade" id="staticBackdrop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content p-4 text-center">
                <h3 id="modalTitle" style=" color: #009688; font-family: 'AlexBrush';"></h3>
                <div>
                    <img id="modalImg" src="index.html" />
                </div>
                <p class="r3 px-md-5 px-sm-1" id="modalDescription"></p>
                <div class="text-center mb-3"> <a class="btn btn-primary rounded-pill b1"
                        style=" background: #009688; color: white;" id="modalButton">View Details</a> </div>

            </div>
        </div>
    </div>

    <script type="text/javascript">
        (function() {
            var options = {
                whatsapp: "+923002920640", // WhatsApp number
                call_to_action: "Message us", // Call to action
                position: "right", // Position may be 'right' or 'left'
                pre_filled_message: "How can i help you", // WhatsApp pre-filled message
            };
            var proto = document.location.protocol,
                host = "getbutton.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- JS -->
    <script src="{{ asset('Front/js/product-menu.js')}}"></script>
    <!-- Modernizer JS -->
    <script src="{{ asset('Front/js/vendor/modernizr-3.6.0.min.js')}}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('Front/js/vendor/popper.min.js')}}"></script>
    <script src="{{ asset('Front/js/vendor/bootstrap.min.js')}}"></script>

    <!-- Slick Slider JS -->
    <script src="{{ asset('Front/js/plugins/slick.min.js')}}"></script>
    <!--  Jquery ui JS -->
    <script src="{{ asset('Front/js/plugins/jqueryui.min.js')}}"></script>
    <!--  Scrollup JS -->
    <script src="{{ asset('Front/js/plugins/scrollup.min.js')}}"></script>
    <script src="{{ asset('Front/js/plugins/ajax-contact.js')}}"></script>

    <script src="{{ asset('Front/js/cookie/js.cookie.js')}}"></script>
    <script src="{{ asset('Front/js/cookie/js.cookie.min.js')}}"></script>

    <!-- Main JS -->
    <script src="{{ asset('Front/js/main.js')}}"></script>


    <script>
        function CountDownTimer() {
            var currency = localStorage.getItem("currency");
            var html = '';
            var item = [];

            html += '<div class="bg-deal section-ptb d-lg-block d-none">' +
                '<div class="container w-100">' +
                '<div class="row align-items-center">' +
                '<div class="col-lg-12">' +
                '<div class="section-title text-center">' +
                '<h2 class="text-default"><span class="font-weight-lighter">Deals of</span> The Month</h2>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="row ">'


            for (var i = 0; i < item.length; i++) {


                html += '<div class="col-md-6">' +
                    '<div class="card my-3 ">' +
                    '<div class="card-body row">' +
                    '<div class="align-self-center col-sm-5 col-4">' +
                    '<img src="https://admin.karachiflora.com/' + item[i].DealImage +
                    '" style="height: 200px; object-fit: contain;" />' +
                    '</div>' +
                    '<div class=" align-self-center col-8 col-sm-7">' +
                    '<p class="card-text mt-3 mb-0">' + item[i].Title + ' </p>' +
                    '<div class="price-box">' +
                    '<span class="price-regular font-weight-bolder">' + currency + item[i].DiscountedPrice + '</span>' +
                    '</div>' +
                    '<a href="https://www.karachiflora.com/product/productdetails?ItemID=' & #32;+&# 32;
                item[i].ItemID & #32;+'" class= "mt-0 mb-0 btn btn-small card-link btn-deal3" > Get Deal < /a>' +
                '<div class="countdown-titmer ">' +
                '<h5 class="offer-text">' + item[i].Description + '</h5>' +
                    '<div class="product-countdown" data-countdown="2020/04/25">' +
                    '<div class="single-countdown"><span id="Days-' + item[i].DealID +
                    '" class="single-countdown__time">00</span><span class="single-countdown__text">Days</span></div>' +
                    '<div class="single-countdown"><span id="Hours-' + item[i].DealID +
                    '" class="single-countdown__time">00</span><span class="single-countdown__text">Hours</span></div>' +
                    '<div class="single-countdown"><span id="Mins-' + item[i].DealID +
                    '" class="single-countdown__time">00</span><span class="single-countdown__text">Mins</span></div>' +
                    '<div class="single-countdown"><span id="Secs-' + item[i].DealID +
                    '" class="single-countdown__time">00</span><span class="single-countdown__text">Secs</span></div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>'

                counter(item[i].EndDate, item[i].DealID);

            }
            html += '</div>' +
                '</div>' +
                '</div>'
            if (item.length > 0) {
                $(".deal-row").html(html);
            }



            function counter(EndDate, id) {


                var end = new Date(EndDate);


                var _second = 1000;
                var _minute = _second * 60;
                var _hour = _minute * 60;
                var _day = _hour * 24;
                var timer;

                function showRemaining() {
                    var now = new Date();
                    var distance = end - now;
                    if (distance < 0) {

                        clearInterval(timer);


                        return;
                    }
                    var days = Math.floor(distance / _day);
                    var hours = Math.floor((distance % _day) / _hour);
                    var minutes = Math.floor((distance % _hour) / _minute);
                    var seconds = Math.floor((distance % _minute) / _second);

                    document.getElementById("Days-" + id).innerHTML = days;
                    document.getElementById("Hours-" + id).innerHTML = hours;
                    document.getElementById("Mins-" + id).innerHTML = minutes;
                    document.getElementById("Secs-" + id).innerHTML = seconds;
                }
                timer = setInterval(showRemaining, 1000);
            }

        };
    </script>

    <script>
        $(document).ready(function() {
            var Category = [];
            var SubCategory = [];
            var Color = [];
            $('input[name="Category"]').click(function() {
                if ($(this).prop("checked") == true) {
                    Category.push($(this).val());

                } else {
                    Category.splice($(this).val(), 1);
                }
            });
            $('input[name="Color"]').click(function() {
                if ($(this).prop("checked") == true) {
                    Color.push($(this).val());
                } else {
                    Color.splice($(this).val(), 1);
                }
            });
            $('input[name="SubCategory"]').click(function() {
                if ($(this).prop("checked") == true) {
                    SubCategory.push($(this).val());
                } else {
                    SubCategory.splice($(this).val(), 1);
                }
            });
            $(".filterOn").click(function() {

                var Searchtxt = $(".Seachtxt").val();
                var MinPrice = $(".min-price").val();
                var MaxPrice = $(".max-price").val();
                var SortID = 0;

                var CategoryIDs = Category.join();
                var SubCategoryIDs = SubCategory.join();
                var ColorIDs = Color.join();
                window.location.href = '/shop/shop?Category=""&CategoryIDs=' + CategoryIDs +
                    '&SubCategoryIDs=' + SubCategoryIDs + '&ColorIDs=' + ColorIDs + '&MinPrice=' +
                    MinPrice + '&MaxPrice=' + MaxPrice + '&Searchtext=' + Searchtxt + '&SortID=' + SortID +
                    '';

            });
        });
    </script>


    <script>
        var input = document.getElementById("search");
        input.addEventListener("keyup", function(event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                document.getElementById("search-btn").click();
            }
        });

        window.onscroll = function() {
        myFunction()
        };

        var header = document.getElementById("Head");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("nav-fixed-top");
            } else {
                header.classList.remove("nav-fixed-top");
            }
        }

        function Search() {
            var Searchtxt = $("#search").val();


            window.location.href = '/shop/shop?Category=""&CategoryIDs=' + '' + '&SubCategoryIDs=' + "" + '&ColorIDs=' +
                '' + '&MinPrice=' + 'RS0' + '&MaxPrice=' + 'RS50000' + '&Searchtext=' + Searchtxt + '&SortID=' + 0 + '';
        }
    </script>


</body>

</html>