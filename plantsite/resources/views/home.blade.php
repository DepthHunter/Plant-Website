<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Plantsite</title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.css">

    <link rel="stylesheet" href="/assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="/assets/css/lightbox.css">

</head>

<body>



<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->



                    <a  class="menu-trigger">
                        <span>Menu</span>
                    </a>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Главная</a></li>
                        <li class="scroll-to-section"><a href="#about">О нас</a></li>


                        <li class="scroll-to-section"><a href="#menu">Каталог</a></li>


                        <li class="scroll-to-section"><a href="#reservation">Контакты</a></li>

                        <li>

                            @if (Route::has('login'))
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                    @auth
                                    <li>   <x-app-layout>

                                        </x-app-layout>
                                    </li>
                                    @else
                                        <li> <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Логин</a></li>

                                        @if (Route::has('register'))
                                            <li>  <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Регистрация</a></li>
                                        @endif
                                    @endauth
                                </div>
                            @endif

                        </li>
                    </ul>

                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
<div id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="left-content">
                    <div class="inner-content">

                        <h6>Украсьте свой дом</h6>
                        <div class="main-white-button scroll-to-section">
                            <a href="#menu">Заказать</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="main-banner header-text">
                    <div class="Modern-Slider">
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="/assets/images/slide-01.jpg" alt="">
                            </div>
                        </div>
                        <!-- // Item -->
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="/assets/images/slide-02.jpg" alt="">
                            </div>
                        </div>
                        <!-- // Item -->
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="/assets/images/slide-03.jpg" alt="">
                            </div>
                        </div>
                        <!-- // Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** About Area Starts ***** -->
<section class="section" id="about">
    <div class="container">



                    <div class="section-heading">
                        <h6>О нас</h6>
                        <h2>Добро пожаловать в мир природы и красоты в онлайн-магазине растений и цветов!</h2>
                    </div>


                </div>
            </div>
    <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="thumb">
                            <img src="/assets/images/27d7aa68-a6b8-4001-a15b-5a2b6bf65d4e.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="right-content">
                            <h4 class="white-line">Наш магазин предлагает широкий ассортимент растений и цветов для тех, кто ценит красоту природы и стремится преобразить свой дом или сад в уютное зеленое пространство. Мы предлагаем не только разнообразные виды качественных растений, но и профессиональные советы по их уходу, чтобы ваш сад или дом всегда были наполнены свежестью и живостью.</h4>
                            <p>Разнообразие растений: От красочных цветов до экзотических растений, у нас есть что-то для каждого. Рассада, крупные растения, цветущие экземпляры или декоративные растения - выбор за вами.

                                Садовые аксессуары и удобства: Мы также предлагаем различные товары и аксессуары, такие как горшки разных размеров и форм, средства для удобрения, инструменты для садоводства и многое другое.

                                Советы и рекомендации: Наша команда экспертов готова поделиться советами по уходу за растениями, чтобы вы смогли создать зеленые оазисы в своем доме или саду, сохраняя их красоту и здоровье.

                                Доставка и удобство: Мы стремимся предоставить удобный опыт покупок, включая доставку по вашему выбору и удобные методы оплаты, чтобы сделать вашу покупку как можно более приятной и беззаботной.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
</section>
<!-- ***** About Area Ends ***** -->

@include("plant")


<!-- ***** Reservation Us Area Starts ***** -->
<section class="section" id="reservation">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>Свяжитесь с нами</h6>
                        <h2>Здесь вы можете позвонить по номеру или написать на почту</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="phone">
                                <i class="fa fa-phone"></i>
                                <h4>Телефонный номер</h4>
                                <span><a href="#">87074930318</a><br><a href="#">87074930318</a></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="message">
                                <i class="fa fa-envelope"></i>
                                <h4>Электронная почта</h4>
                                <span><a href="#">example@company.com</a><br><a href="#">example@company.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>Оставьте свой отзыв</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" id="name" placeholder="Имя" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="surname" type="text" id="surname"  placeholder="Фамилия" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Ваш адрес почты" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="phone" type="text" id="phone" placeholder="Номер Телефона" required="">
                                </fieldset>
                            </div>


                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button-icon">Make A Reservation</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Reservation Area Ends ***** -->

<!-- ***** Menu Area Starts ***** -->
<section class="section" id="offers">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>Каталог</h6>
                    <h2>Акция все по 1000</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row" id="tabs">
                    <div class="col-lg-12">
                        <div class="heading-tabs">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-3">
                                    <ul>
                                        <li><a href='#tabs-1'><img src="/assets/images/image 7.png" alt="">Офисные</a></li>
                                        <li><a href='#tabs-2'><img src="/assets/images/image8.png" alt="">Домашние</a></li>
                                        <li><a href='#tabs-3'><img src="/assets/images/image9.png" alt="">Огородные</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <section class='tabs-content'>
                            <article id='tabs-1'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="/assets/images/tab-item-01.png" alt="">
                                                        <h4>Замиокулькас</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>1000</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="/assets/images/tab-item-02.png" alt="">
                                                        <h4>Драцена Лемон Лайм</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>1000</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="/assets/images/tab-item-03.png" alt="">
                                                        <h4>Аспидистра</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>1000</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="right-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="/assets/images/tab-item-04.png" alt="">
                                                        <h4>Спатифиллум</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>1000</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="/assets/images/tab-item-05.png" alt="">
                                                        <h4>Сансевиерия</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>1000</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="/assets/images/tab-item-06.png" alt="">
                                                        <h4>Антуриум</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>1000</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article id='tabs-2'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="/assets/images/tab-item-04.png" alt="">
                                                        <h4>Спатифиллум</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>1000</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="/assets/images/tab-item-05.png" alt="">
                                                        <h4>Сансевиерия</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>1000</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="/assets/images/tab-item-06.png" alt="">
                                                        <h4>Антуриум</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>1000</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="right-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="/assets/images/tab-item-01.png" alt="">
                                                        <h4>Замиокулькас</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>1000</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="/assets/images/tab-item-02.png" alt="">
                                                        <h4>Драцена Лемон Лайм</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>1000</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="/assets/images/tab-item-03.png" alt="">
                                                        <h4>Аспидистра</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>1000</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article id='tabs-3'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="/assets/images/tab-item-05.png" alt="">
                                                        <h4>Спатифиллум</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>1000</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="/assets/images/tab-item-03.png" alt="">
                                                        <h4>Драцена Лемон Лайм</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>1000</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="/assets/images/tab-item-02.png" alt="">
                                                        <h4>Аспидистра</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>1000</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="right-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="/assets/images/tab-item-06.png" alt="">
                                                        <h4>Замиокулькас</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>1000</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="/assets/images/tab-item-01.png" alt="">
                                                        <h4>Сансевиерия</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>1000</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="/assets/images/tab-item-04.png" alt="">
                                                        <h4>Антуриум</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>1000</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Chefs Area Ends ***** -->

<!-- ***** Footer Start ***** -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xs-12">
                <div class="right-text-content">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="/assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="/assets/js/popper.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="/assets/js/owl-carousel.js"></script>
<script src="/assets/js/accordions.js"></script>
<script src="/assets/js/datepicker.js"></script>
<script src="/assets/js/scrollreveal.min.js"></script>
<script src="/assets/js/waypoints.min.js"></script>
<script src="/assets/js/jquery.counterup.min.js"></script>
<script src="/assets/js/imgfix.min.js"></script>
<script src="/assets/js/slick.js"></script>
<script src="/assets/js/lightbox.js"></script>
<script src="/assets/js/isotope.js"></script>

<!-- Global Init -->
<script src="/assets/js/custom.js"></script>
<script>

    // $(function() {
    //     var selectedClass = "";
    //     $("p").click(function(){
    //         selectedClass = $(this).attr("data-rel");
    //         $("#portfolio").fadeTo(50, 0.1);
    //         $("#portfolio div").not("."+selectedClass).fadeOut();
    //         setTimeout(function() {
    //             $("."+selectedClass).fadeIn();
    //             $("#portfolio").fadeTo(50, 1);
    //         }, 500);
    //
    //     });
    // });

</script>
</body>
</html>
