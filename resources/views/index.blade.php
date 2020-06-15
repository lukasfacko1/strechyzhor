@extends('app')
<!doctype html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="{{asset('/img/icons/logo.png')}}"/>
    @section('style')
        <link rel="stylesheet" href="{{asset('/css/fullpage.css')}}">
        <link rel="stylesheet" href="{{asset('/css/lightbox.min.css')}}">
    @endsection
    @section('title', 'Strechy z hôr')

</head>
<body>
@section('content')
    <div id="preloader" class="preload">
        <div class="loading-logo">
            <div class="first-section">
                <img class="" src="{{asset('img/preloaderImg/upTriangle.png')}}" alt="imgTriange1">
            </div>
            <div class="second-section">
                <div class="second-section-1"> <img class="" src="{{asset('img/preloaderImg/leftBottomTriangle.png')}}" alt="imgTriange1"></div>
                <div class="second-section-2"> <img class="" src="{{asset('img/preloaderImg/rightBottomTriangle.png')}}" alt="imgTriange1"></div>
            </div>
            <div class="third-section">
                <h3>Loading</h3>
            </div>

        </div>
    </div>
    <div id="fullpage">
        <section class="section section1" id="section1ID">
            <div class="main-page">
                <div class="frame">
                    <div class="frame2">
                        <img class="logo" src="{{asset('img/icons/logo.png')}}" alt="imgLogo">
                        <p class="corner-text">Stojíme si za kvalitou našej práce</p>
                        <img class="triangle triangle-top-left" src="{{asset('img/icons/triangle.png')}}" alt="imgTriange1">
                        <img class="triangle triangle-bottom-right" src="{{asset('img/icons/triangleWhite.png')}}" alt="imgTriange2">

                        <div class="left-panel">
                            <div class="first-part"></div>
                            <div class="second-part">
                                <div class="icon"><a href="https://www.facebook.com/pg/Strechy-z-h%C3%B4r-2407118335993636/about/?ref=page_internal"><i class="fa fa-facebook-f"></i></a></div>
                                <div class="icon"><a href="mailto:strechyzhor@gmail.com"><i class="far fa-envelope-open"></i></a></div>
                                <div class="icon"><a href="tel:+421905291415"><i class="fas fa-phone-alt"></i></a></div>
                            </div>
                            <div class="third-part"></div>
                        </div>
                        <div class="right-panel">
                            <h1 class="main-title">Strechy z hôr</h1>
                            <p>Potrebujete skontrolovať strechu, popripade ju prerobiť?<br>
                                Urobiť okapové systémy alebo vymeniť strešné kritiny?<br>
                                Neváhajte nás kontaktovať...</p>
                            <div class="btn-contact-new">
                                <a href="mailto:strechyzhor@gmail.com"><svg><rect></rect></svg>Kontaktovať</a>
                            </div>

                            <div class="mobile-icons">
                                <a href=""><i class="fa fa-facebook-f"></i></a>
                                <a href=""><i class="far fa-envelope-open"></i></a>
                                <a href=""><i class="fas fa-phone-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="crossing"></div>
        </section>
        <section class="section second section2" id="section2ID">
            <div class="section2-left-text">
                <p>Strechy z hôr</p>
            </div>
            <div class="section2-container">
                <div class="section2-container-background-text">
                    <p>Strechy</p>
                    <p> z hôr</p>
                </div>
                <img class="triangle triangle-top-right" src="{{asset('img/icons/triangleWhite.png')}}" alt="imgTriange2">
                <div class="section2-title">
                    <div class="section2-title-line" data-aos="fade-right" data-aos-duration="1200">

                    </div>
                    <div class="section2-title-top" data-aos="fade-left">
                        <h2>Zaoberáme sa</h2>
                    </div>
                </div>
                <div class="section2-content">
                    <div class="section2-content-option">
                        <a class="section2-option" data-aos="fade-up">
                            <span><img class="arrow" src="{{asset('img/icons/arrow-24-32red.png')}}" alt="imgArrowOption"> Pokrývanie šikmých striech</span>
                            <ul class="section2-option-under">
                                <li><img class="little-arrow" src="{{asset('img/icons/arrow-24-32red.png')}}" alt="imgLittleArrowOption">Kompletné pokrývačské práce</li>
                                <li><img class="little-arrow" src="{{asset('img/icons/arrow-24-32red.png')}}" alt="imgLittleArrowOption">Montáž parozábrany, latovanie a pokladanie krytiny (škridla, plech )</li>
                                <li><img class="little-arrow" src="{{asset('img/icons/arrow-24-32red.png')}}" alt="imgLittleArrowOption">Poradenstvo, vypracovanie cenovej ponuky, dodanie materiálu a montáž</li>
                                <li><img class="little-arrow" src="{{asset('img/icons/arrow-24-32red.png')}}" alt="imgLittleArrowOption">Záruka 10+ rokov</li>
                            </ul>
                        </a>
                        <a class="section2-option" data-aos="fade-up">
                            <span><img class="arrow" src="{{asset('img/icons/arrow-24-32red.png')}}" alt="imgArrowOption"> Okapové systémy</span>
                            <ul class="section2-option-under">
                                <li><img class="little-arrow" src="{{asset('img/icons/arrow-24-32red.png')}}" alt="imgLittleArrowOption">Dodávka a montáž okapových systémov na nové stavby</li>
                                <li><img class="little-arrow" src="{{asset('img/icons/arrow-24-32red.png')}}" alt="imgLittleArrowOption">Oprava alebo kompletná výmena starých okapových systémov</li>
                            </ul>
                        </a>
                        <a class="section2-option" data-aos="fade-up">
                            <span><img class="arrow" src="{{asset('img/icons/arrow-24-32red.png')}}" alt="imgArrowOption"> Iskrová skúška</span>
                            <ul class="section2-option-under">
                                <li><img class="little-arrow" src="{{asset('img/icons/arrow-24-32red.png')}}" alt="imgLittleArrowOption">Iskrové skúšky striech a hydroizolácií</li>
                                <li><img class="little-arrow" src="{{asset('img/icons/arrow-24-32red.png')}}" alt="imgLittleArrowOption">Kontrola zvarov ihlovou skúškou</li>
                                <li><img class="little-arrow" src="{{asset('img/icons/arrow-24-32red.png')}}" alt="imgLittleArrowOption">Viac informácií cez tel. č. 0905 174 213</li>
                            </ul>
                        </a>
                        <a class="section2-option" data-aos="fade-up">
                            <span><img class="arrow" src="{{asset('img/icons/arrow-24-32red.png')}}" alt="imgArrowOption"> Hydroizolácie</span>
                            <ul class="section2-option-under">
                                <li><img class="little-arrow" src="{{asset('img/icons/arrow-24-32red.png')}}" alt="imgLittleArrowOption">Celoplošné natavenie modifikovaných SBS pásov, zváranie PVC fólie, lepenie EPDM fólie</li>
                                <li><img class="little-arrow" src="{{asset('img/icons/arrow-24-32red.png')}}" alt="imgLittleArrowOption">Zabezpečenie hydroizolácie aj spolu so zateplením pre zemné stavby, rovné a šikmé strechy</li>
                                <li><img class="little-arrow" src="{{asset('img/icons/arrow-24-32red.png')}}" alt="imgLittleArrowOption">Poradensto, vypracovanie cenovej ponuky, dodanie materiálu a montáž</li>
                                <li><img class="little-arrow" src="{{asset('img/icons/arrow-24-32red.png')}}" alt="imgLittleArrowOption">Záruka až 10 rokov</li>

                            </ul>
                        </a>
                        <a class="section2-option" data-aos="fade-up">
                            <span><img class="arrow" src="{{asset('img/icons/arrow-24-32red.png')}}" alt="imgArrowOption"> Klampiarske práce</span>
                            <ul class="section2-option-under">
                                <li><img class="little-arrow" src="{{asset('img/icons/arrow-24-32red.png')}}" alt="imgLittleArrowOption">Ohýbanie, výroba a montáž klampiarskych prvkov</li>
                            </ul>
                        </a>
                        <a class="section2-option" data-aos="fade-up">
                            <span><img class="arrow" src="{{asset('img/icons/arrow-24-32red.png')}}" alt="imgArrowOption"> Možnosť Prenájmu</span>
                            <ul class="section2-option-under">
                                <li><img class="little-arrow" src="{{asset('img/icons/arrow-24-32red.png')}}" alt="imgLittleArrowOption">Lešenia</li>
                            </ul>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section3 section third" id="section3ID">
            <div class="section3-right-text">
                <p>Galéria</p>
            </div>
            <div class="section3-gallery">
                <h2 data-aos="fade-up-right">Galéria</h2>
                <div class="section3-gallery-image" data-aos="fade-up" data-aos-duration="1000">
                    @foreach($gallery as $image)
                        <div class="img">
                            <a href="{{asset('img/galleryImages/'.$image->filename)}}" data-lightbox="mygallery" data-title="{{$image->desc}}"><img src="{{asset('img/galleryImages/'.$image->filename)}}" alt=""></a>
                        </div>
                    @endforeach
                </div>
                <div class="pagination">
                    <div class="prev">Prev</div>
                    <div class="page">Page <span class="page-num"></span></div>
                    <div class="next">Next</div>
                </div>
            </div>
        </section>
        <section class="section4 section fourth" id="section4ID">
            <div class="section4-contact" data-aos="fade-down-right">
                <h1>Kontakt</h1>
                <h2>Kontakt</h2>
            </div>
            <div class="section4-contact-info">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 animate-left" data-aos="fade-right" data-aos-delay="300">
                            <div class="info-contact iContact1">
                                <p>Adresa: Okružná 2057/16</p>
                                <p>Email: strechyzhor@gmail.com</p>
                                <p>Tel.: 0905 291 415</p>
                                <p class="contact-phone">0918 564 329</p>
                                <p class="contact-phone">0905 174 213</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 animate-right" data-aos="fade-right" data-aos-delay="600">
                            <div class="info-contact iContact2">
                                <p>IČ DPH: SK1040207069</p>
                                <p>DIČ: 1040207069</p>
                                <p>IČO: 47212144</p>
                            </div>
                            <p class="contact-person">Pavel Šoch</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">@Created by Lukáš Fačko</div>
        </section>
    </div>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{asset('/js/lightbox-plus-jquery.min.js')}}"></script>
    <script src="{{asset('/js/fullpage.js')}}"></script>
    <script type="text/javascript">

        $(document).ready(function($) {
            $('#preloader').delay(1000);
        });

        $(window).on('load', function() {
            $('#preloader').fadeOut();
            showItem();
            check();
        });
        window.addEventListener("load", () => {
            document.querySelector("body").classList.add("loaded");
        });
        AOS.init();
        (function($) {
            'use strict';
            // initialize fullPage
            $('#fullpage').fullpage({
                navigation: true,
                scrollingSpeed: 1000,
                keyboardScrolling: true,
                responsiveWidth: 768,
                responsiveHeight: 700,
                // afterLoad(_, index) {
                //     console.log(index.index);
                //     if (index.index === 1) {
                //         return
                //     }
                //     const $section = $('.section').eq(index.index - 1)
                //     $section.find('[data-aos]').addClass('aos-animate')
                // },
                onLeave: function(){
                    jQuery('.section [data-aos]').removeClass("aos-animate");
                },
                onSlideLeave: function(){
                    jQuery('.slide [data-aos]').removeClass("aos-animate");
                },
                afterSlideLoad: function(){
                    jQuery('.slide.active [data-aos]').addClass("aos-animate");
                },
                afterLoad: function(){
                    jQuery('.section.active [data-aos]').addClass("aos-animate");
                    //jQuery('.fp-table.active .aos-init').addClass('aos-animate');
                }
            });
        })(jQuery);

        //Gallery pagination
        const galleryItems = document.querySelector('.section3-gallery-image').children;
        const prev = document.querySelector('.prev');
        const next = document.querySelector('.next');
        const page = document.querySelector('.page-num');

        const maxItem = 8;
        let index = 1;

        const pagination = Math.ceil(galleryItems.length/maxItem);

        prev.addEventListener('click',function () {
            index--;
            check();
            showItem();
        });

        next.addEventListener('click',function () {
            index++;
            check();
            showItem();
        });

        function check() {
            if(index == pagination){
                next.classList.add('disabled');
            }else{
                next.classList.remove('disabled');
            }

            if(index == 1){
                prev.classList.add('disabled');
            }else{
                prev.classList.remove('disabled');
            }
        }

        function showItem() {
            for(let i = 0; i < galleryItems.length; i++){
                galleryItems[i].classList.remove('show');
                galleryItems[i].classList.add('hide');
                if(i >= (index*maxItem)-maxItem && i < (index*maxItem)){
                    galleryItems[i].classList.remove('hide');
                    galleryItems[i].classList.add('show');
                }
                page.innerHTML=index;
            }
        }

            $('.aos-init').removeClass('aos-animate');
        // $('.section2-title-top ').attr('data-aos','fade-up');
    </script>
@endsection
</body>
</html>
