@extends('layouts.site')
@section('title', 'Главная')
@section('content')
    <section class="hero">
        <div class="hero__background">
            <img src="/assets/img/hero-bg.jpg" alt="" aria-hidden="true">
        </div>
        <div class="container hero__container">
            <div class="hero__inner">
                <h1 class="visually-hidden">Спортивный клуб EVEREST</h1>
                <h2 class="hero__title"> HIT THE TOP <span>На пути к вершине</span>
                </h2>
                <div class="hero__text">
                    <p>Спортивный клуб EVEREST — это клуб единоборств с современным тренажерным залом и зоной кроссфита. </p>
                    <p>В нашем клубе есть все, что нужно для эффективных тренировок — опытные тренеры, современные тренажеры и дружная атмосфера.</p>
                </div>
                <div class="hero__btns">
                    <button class="button hero__btn-request" data-open-modal="request" onclick="$('#order_type').val('Заявка с главной')">Записаться на тренировку</button>
                    <a class="button button--outline hero__btn-about" href="{{route('about.index')}}">О клубе</a>
                </div>
                <a class="hero__scroll" href="#we-have">
                    <svg width="24" height="35" viewBox="0 0 24 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 8L12 19L23 8" stroke="white" stroke-opacity="0.5" stroke-width="1.2" />
                        <path d="M1 1L12 12L23 1" stroke="white" stroke-opacity="0.2" stroke-width="1.2" />
                        <path d="M1 16L12 27L23 16" stroke="white" stroke-width="1.2" />
                        <path d="M1 23L12 34L23 23" stroke="#CA151C" stroke-opacity="0.9" stroke-width="1.2" />
                    </svg>
                    <span>Прокрутите вниз</span>
                </a>
            </div>
        </div>
        <div class="hero__img">
            <svg width="1496" height="804" viewBox="0 0 1496 804" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1179.31 0L1558.07 126.598L1185.72 18.2481C1007.49 131.839 760.45 310.316 760.45 310.316L590.129 258.393L0 762.453L590.129 243.317L760.45 295.163L860.595 220.926L970.621 141.939L1179.31 0Z" fill="#CA151C" />
                <path opacity="1" fill-rule="evenodd" clip-rule="evenodd" d="M1183.62 11.2856L1552.33 135.288L1181.74 28.1395C1004.94 142.924 761.076 328.139 761.076 328.139L592.115 275.671L6.69519 785.024L587.571 257.194L761.076 310.257L865.323 235.41L969.57 157.993L1183.62 11.2856Z" fill="#CA151C" fill-opacity="1" />
                <path opacity="1" fill-rule="evenodd" clip-rule="evenodd" d="M1182.18 27.9882L1558.07 147.765L1184.5 47.9732C1006.27 162.625 760.45 347.626 760.45 347.626L590.129 295.219L0 803.984L592.056 275.677L760.45 328.508L969.301 175.779L1182.18 27.9882Z" fill="#CA151C" fill-opacity="1" />
            </svg>
            <img src="/assets/img/hero-img.png" alt="" aria-hidden="true">
        </div>
    </section>
    <section class="section we-have we-have--index" id="we-have">
        <div class="container">
            <h2 class="section-title we-have__title">У нас:</h2>
            <ul class="we-have__list">
                <li class="we-have__item item-we-have">
                    <div class="item-we-have__icon">
                        <svg class="icon">
                            <use xlink:href="/assets/img/sprite.svg#we-have-01"></use>
                        </svg>
                    </div>
                    <p> Зона единоборств,
                        <br> ринг
                    </p>
                </li>
                <li class="we-have__item item-we-have">
                    <div class="item-we-have__icon">
                        <svg class="icon">
                            <use xlink:href="/assets/img/sprite.svg#we-have-02"></use>
                        </svg>
                    </div>
                    <p> Тренажерный зал,
                        <br> инвертарь
                    </p>
                </li>
                <li class="we-have__item item-we-have">
                    <div class="item-we-have__icon">
                        <svg class="icon">
                            <use xlink:href="/assets/img/sprite.svg#we-have-03"></use>
                        </svg>
                    </div>
                    <p> Зона
                        <br> кардио-тренировок
                    </p>
                </li>
                <li class="we-have__item item-we-have">
                    <div class="item-we-have__icon">
                        <svg class="icon">
                            <use xlink:href="/assets/img/sprite.svg#we-have-04"></use>
                        </svg>
                    </div>
                    <p> Зона
                        <br> кроссфита
                    </p>
                </li>
                <li class="we-have__item item-we-have">
                    <div class="item-we-have__icon">
                        <svg class="icon">
                            <use xlink:href="/assets/img/sprite.svg#we-have-05"></use>
                        </svg>
                    </div>
                    <p> Взрослые
                        <br> и детские группы
                    </p>
                </li>
                <li class="we-have__item item-we-have">
                    <div class="item-we-have__icon">
                        <svg class="icon">
                            <use xlink:href="/assets/img/sprite.svg#we-have-06"></use>
                        </svg>
                    </div>
                    <p> Турецские парные
                        <br> в раздевалках
                    </p>
                </li>
                <li class="we-have__item item-we-have">
                    <div class="item-we-have__icon">
                        <svg class="icon">
                            <use xlink:href="/assets/img/sprite.svg#we-have-07"></use>
                        </svg>
                    </div>
                    <p> Индивидуальные
                        <br> тренировки
                    </p>
                </li>
                <li class="we-have__item item-we-have">
                    <div class="item-we-have__icon">
                        <svg class="icon">
                            <use xlink:href="/assets/img/sprite.svg#we-have-08"></use>
                        </svg>
                    </div>
                    <p> Фитнес-бар,
                        <br> зона отдыха
                    </p>
                </li>
                <li class="we-have__item item-we-have">
                    <div class="item-we-have__icon">
                        <svg class="icon">
                            <use xlink:href="/assets/img/sprite.svg#we-have-09"></use>
                        </svg>
                    </div>
                    <p> Секции
                        <br> по 10 направлениям
                    </p>
                </li>
                <li class="we-have__item item-we-have">
                    <div class="item-we-have__icon">
                        <svg class="icon">
                            <use xlink:href="/assets/img/sprite.svg#we-have-10"></use>
                        </svg>
                    </div>
                    <p> Массажный
                        <br> кабинет
                    </p>
                </li>
            </ul>
        </div>
    </section>
    <section class="section sport-clubs">
        <div class="container">
            <h2 class="section-title sport-clubs__title">Секции</h2>
            <ul class="sport-clubs__list">
                <li class="sport-clubs__item">
                    <a class="sport-clubs-card" href="{{route('group')}}">
                        <div class="sport-clubs-card__img">
                            <img src="/assets/img/sport-clubs-01.jpg" alt="" aria-hidden="true">
                        </div>
                        <p class="sport-clubs-card__title">Групповые программы</p>
                    </a>
                </li>
                <li class="sport-clubs__item">
                    <a class="sport-clubs-card" href="{{route('solo')}}">
                        <div class="sport-clubs-card__img">
                            <img src="/assets/img/sport-clubs-02.jpg" alt="" aria-hidden="true">
                        </div>
                        <p class="sport-clubs-card__title">Единоборства</p>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="section instagram pb-big">
        <div class="container">
            <div class="instagram__top">
                <h2 class="section-title instagram__title">Следите за жизнью клуба</h2>
                <p class="instagram__subtitle">следите за нашими постами и сторис в инстаграм</p>
                <a class="contacts-item contacts-item--accent instagram__link" href="https://www.instagram.com/everest_sg/">
                    <span class="contacts-item__text">Перейти в профиль</span>
                    <span class="contacts-item__icon">
                <svg class="icon">
                  <use xlink:href="/assets/img/sprite.svg#instagram"></use>
                </svg>
              </span>
                </a>
            </div>
            <div class="instagram__box">
                <!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="https://cdn.lightwidget.com/widgets/2c587bed8d31532d918d79ae82fb5291.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>            </div>
        </div>
    </section>
@endsection
