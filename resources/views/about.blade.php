@extends('layouts.site')
@section('title', 'О нас')
@section('content')
    <section class="page-section about">
        <div class="container">
            <div class="about__inner">
                <div class="about__info">
                    <h1 class="title about__title">О нашем клубе</h1>
                    <p class="subtitle about__subtitle">Everest</p>
                    <div class="about__images about__images--mobile">
                        <img src="/assets/img/about-01.png" alt="Зал">
                        <img src="/assets/img/about-02.png" alt="Зал">
                    </div>
                    <div class="about__text">
                        <p>Спортивный клуб EVEREST — это клуб единоборств с современным тренажерным залом и зоной кроссфита. На площади около 1 000 м<sup>2</sup> расположены зоны отдыха, просторные раздевалки с парными и оборудованные залы, которые станут отличной
                            тренировочной площадкой как для профессиональных спортсменов, так и для всех, кому близок спортивный образ жизни. </p>
                        <p>Одна их важных целей клуба — развитие детско-юношеского спорта. Под руководством профессиональных тренеров юные спортсмены растут, тренируются и идут к своим победам, а командный дух, поездки на сборы и соревнования помогают
                            им на этом пути.</p>
                    </div>
                </div>
                <div class="about__images about__images--desktop">
                    <img src="/assets/img/about-01.png" alt="Зал">
                    <img src="/assets/img/about-02.png" alt="Зал">
                </div>
            </div>
        </div>
    </section>
    <section class="conditions section">
        <div class="container">
            <h2 class="conditions__title small-title">Условия и оборудование</h2>
            <ul class="conditions__list">
                <li class="conditions__item item-conditions">
                    <div class="item-conditions__img">
                        <img src="/assets/img/conditions-01.png" alt="Тренажерный зал">
                    </div>
                    <div class="item-conditions__info">
                        <h3 class="item-conditions__title">Тренажерный зал</h3>
                        <div class="item-conditions__content">
                            <p>В нашем клубе вас ожидает профессионально оборудованный тренажерный зал площадью более 300 м<sup>2</sup>. Широкая линейка тренажеров FOREMAN для силовых упражнений на все группы мышц, кардио-зона с панорамным видом и велотренажерами
                                RealRyder, а также тренировочный блок для кроссфита, функциональных и круговых тренировок — все это вы найдете здесь.</p>
                            <p>В зале клуба EVEREST есть все необходимое для тренировок: резинки, гантели, мячи, гири, платформы. А самое главное — рядом всегда находятся профессиональные тренеры, готовые помочь советом и ответить на ваши вопросы.</p>
                        </div>
                    </div>
                </li>
                <li class="conditions__item item-conditions">
                    <div class="item-conditions__img">
                        <img src="/assets/img/gallery-01.png" alt="Зал единоборств">
                    </div>
                    <div class="item-conditions__info">
                        <h3 class="item-conditions__title">Зал единоборств</h3>
                        <div class="item-conditions__content">
                            <p>Просторный зал, специально спроектированный для занятий различными видами единоборств, расположился в нашем клубе на площади почти 350 м<sup>2</sup>. Для групповых и индивидуальных тренировок мы предусмотрели полноразмерный 6-метровый
                                ринг, зону с десятью боксерскими мешками разной массы и протяженным рукоходом, а также большое количество свободного пространства для выполнения упражнений или тренировок с собственным весом.</p>
                            <p>По периметру помещения расположены маты для обеспечения безопасности спортсменов, а зеркальная стена позволяет наглядно отрабатывать технику. Доступен полный набор необходимого инвентаря: перчатки, лапы, мячи, скакалки,
                                резинки.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="conditions__item item-conditions">
                    <div class="item-conditions__img">
                        <img src="/assets/img/IMG_8669.jpg" alt="Групповые программы">
                    </div>
                    <div class="item-conditions__info">
                        <h3 class="item-conditions__title">Групповые программы</h3>
                        <div class="item-conditions__content">
                            <p>Приобретая пакеты тренировок или абонемент на посещения клуба EVEREST, вы получаете доступ к групповым тренировкам по разным направлениям: кроссфит, фитнес, функциональный тренинг, сайкл, программа для поддержания
                                здоровья спины. Испытайте все направления, а затем выберите то, что подходит вам больше всего, либо комбинируйте программы между собой для получения максимального результата.</p>
                            <p>Тренировки проходят в одном из оборудованных залов клуба в зависимости от выбранной программы. Мы предоставляем весь необходимый для тренировок инвентарь.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="conditions__item item-conditions">
                    <div class="item-conditions__img">
                        <img src="/assets/img/gallery-03.png" alt="Зона отдыха и удобства">
                    </div>
                    <div class="item-conditions__info">
                        <h3 class="item-conditions__title">Удобства и зона отдыха</h3>
                        <div class="item-conditions__content">
                            <p>В клубе EVEREST мы предусмотрели множество мелочей для вашего комфортного тренинга и времяпровождения. Мы стремимся к тому, чтобы дух клуба, а вместе с ним стремление к победам, преодоление ограничений и возможностей,
                                вера в свои силы, поддерживали вас на каждом шагу вашего пути.</p>
                            <p>Для посетителей клуба доступно множество удобств: гардероб во входной зоне, просторные раздевалки, оборудованные фенами и электронными замками для сохранности ваших вещей, душевые и хаммамы, в том числе, отдельная комната
                                для детских групп. Для родителей наших юных воспитанников при входе расположена комфортная зона ожидания. К вашим услугам также массажный кабинет, где вас всегда ждут профессиональные мастера, и фитнес-бар, в котором
                                можно подкрепиться перед или после тренировки.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="gallery section">
        <div class="container">
            <h2 class="small-title gallery__title">Фотогалерея</h2>
        </div>
        <div class="gallery-slider slider">
            <div class="container">
                <div class="swiper ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a class="gallery-slider__item" data-fslightbox="gallery" onclick="zoom(0)">
                                <img src="/assets/img/gallery-01.jpg" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="gallery-slider__item" data-fslightbox="gallery" onclick="zoom(1)">
                                <img src="/assets/img/gallery-02.jpg" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="gallery-slider__item" data-fslightbox="gallery" onclick="zoom(2)">
                                <img src="/assets/img/gallery-03.jpg" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="gallery-slider__item" data-fslightbox="gallery" onclick="zoom(3)">
                                <img src="/assets/img/gallery-01.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-navigation slider__navigation">
                    <button class="gallery-slider__prev slider__prev slider__btn">
                        <svg class="icon">
                            <use xlink:href="/assets/img/sprite.svg#chevron"></use>
                        </svg>
                    </button>
                    <button class="gallery-slider__next slider__next slider__btn">
                        <svg class="icon">
                            <use xlink:href="/assets/img/sprite.svg#chevron"></use>
                        </svg>
                    </button>
                </div>
                <div class="swiper-pagination gallery-slider__pagination slider__pagination"></div>
            </div>
        </div>
    </section>
    <section class="section vacancies pb-big" style="display: none;">
        <div class="container">
            <h2 class="small-title vacancies__title">Вакансии</h2>
            <div class="vacancies-slider slider">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="vacancies-item" data-open-modal="vacancies-01">
                                <h3 class="vacancies-item__title">Тренер по боксу</h3>
                                <p class="vacancies-item__descr">Следует отметить, что сложившаяся структура организации говорит о возможностях анализа существующих паттернов поведения. (Fish text)</p>
                                <button class="button item-articles__btn" onclick="$('#order_type').val('Вакансии: тренер по боксу')" data-open-modal="request"></button>
                                <!-- <button class="button vacancies-item__btn" >Связаться</button> -->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="vacancies-item" data-open-modal="vacancies-02">
                                <h3 class="vacancies-item__title">Фитнес тренер</h3>
                                <p class="vacancies-item__descr">Следует отметить, что сложившаяся структура организации говорит о возможностях анализа существующих паттернов поведения. (Fish text)</p>
                                <button class="button item-articles__btn" onclick="$('#order_type').val('Вакансии: тренер по фитносу')" data-open-modal="request"></button>
                                <!-- <button class="button vacancies-item__btn" onclick="$('#order_type').val('Вакансии: тренер по фитносу')" data-open-modal="request">Связаться</button> -->
                            </div>
                        </div>
                        <div class="swiper-slide" data-open-modal="vacancies-03">
                            <div class="vacancies-item">
                                <h3 class="vacancies-item__title">Администратор</h3>
                                <p class="vacancies-item__descr">Следует отметить, что сложившаяся структура организации говорит о возможностях анализа существующих паттернов поведения. (Fish text)</p>
                                <button class="button item-articles__btn" onclick="$('#order_type').val('Вакансии: администратор')" data-open-modal="request"></button>
                                <!-- <button class="button vacancies-item__btn" onclick="$('#order_type').val('Вакансии: администратор')" data-open-modal="request">Связаться</button> -->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="vacancies-item" data-open-modal="vacancies-04">
                                <h3 class="vacancies-item__title">Тренер по каратэ</h3>
                                <p class="vacancies-item__descr">Следует отметить, что сложившаяся структура организации говорит о возможностях анализа существующих паттернов поведения. (Fish text)</p>
                                    <button class="button item-articles__btn" onclick="$('#order_type').val('Вакансии: тренер по каратэ')" data-open-modal="request"></button>
                                <!-- <button class="button vacancies-item__btn" onclick="$('#order_type').val('Вакансии: тренер по каратэ')" data-open-modal="request">Связаться</button> -->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="vacancies-item" data-open-modal="vacancies-01">
                                <h3 class="vacancies-item__title">Тренер по боксу</h3>
                                <p class="vacancies-item__descr">Следует отметить, что сложившаяся структура организации говорит о возможностях анализа существующих паттернов поведения. (Fish text)</p>
                                <button class="button item-articles__btn" onclick="$('#order_type').val('Вакансии: тренер по боксу')" data-open-modal="request"></button>
                                <!-- <button class="button vacancies-item__btn" onclick="$('#order_type').val('Вакансии: тренер по боксу')" data-open-modal="request">Связаться</button> -->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="vacancies-item" data-open-modal="vacancies-01">
                                <h3 class="vacancies-item__title">Тренер по боксу</h3>
                                <p class="vacancies-item__descr">Следует отметить, что сложившаяся структура организации говорит о возможностях анализа существующих паттернов поведения. (Fish text)</p>
                                <button class="button item-articles__btn" onclick="$('#order_type').val('Вакансии: тренер по боксу')" data-open-modal="request"></button>
                                <!-- <button class="button vacancies-item__btn" onclick="$('#order_type').val('Вакансии: тренер по боксу')" data-open-modal="request">Связаться</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-navigation vacancies-slider__navigation">
                    <button class="vacancies-slider__prev slider__prev slider__btn">
                        <svg class="icon">
                            <use xlink:href="/assets/img/sprite.svg#chevron"></use>
                        </svg>
                    </button>
                    <button class="vacancies-slider__next slider__next slider__btn">
                        <svg class="icon">
                            <use xlink:href="/assets/img/sprite.svg#chevron"></use>
                        </svg>
                    </button>
                </div>
                <div class="swiper-pagination slider__pagination vacancies-slider__pagination"></div>
            </div>
        </div>
    </section>
    <div class="popup-vacancies" data-modal="vacancies-01">
        <div class="popup-vacancies__wrapper" data-modal-wrapper>
            <div class="popup-vacancies__content" data-modal-content>
                <button class="popup-vacancies__close" data-modal-close aria-label="Закрыть модальное окно">
                    <svg class="icon">
                        <use xlink:href="/assets/img/sprite.svg#close"></use>
                    </svg>
                </button>
                <div class="popup-vacancies__info">
                    <p class="popup-vacancies__title">Тренер по боксу</p>
                    <div class="popup-vacancies__text">
                        <p>Интервальная тренировка высокой интенсивности на силу и выносливость, состоящие из разнообразных анаэробных упражнений, элементов гиревого спорта, пауэрлифтинга, гимнастики, тяжелой атлетики и упражнений с собственным весом.
                            Интервальная тренировка высокой интенсивности на силу и выносливость, состоящие из разнообразных анаэробных упражнений, элементов гиревого спорта, пауэрлифтинга, гимнастики, тяжелой атлетики и упражнений с собственным
                            весом </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-vacancies" data-modal="vacancies-02">
        <div class="popup-vacancies__wrapper" data-modal-wrapper>
            <div class="popup-vacancies__content" data-modal-content>
                <button class="popup-vacancies__close" data-modal-close aria-label="Закрыть модальное окно">
                    <svg class="icon">
                        <use xlink:href="/assets/img/sprite.svg#close"></use>
                    </svg>
                </button>
                <div class="popup-vacancies__info">
                    <p class="popup-vacancies__title">Фитнес тренер</p>
                    <div class="popup-vacancies__text">
                        <p>Интервальная тренировка высокой интенсивности на силу и выносливость, состоящие из разнообразных анаэробных упражнений, элементов гиревого спорта, пауэрлифтинга, гимнастики, тяжелой атлетики и упражнений с собственным весом.
                            Интервальная тренировка высокой интенсивности на силу и выносливость, состоящие из разнообразных анаэробных упражнений, элементов гиревого спорта, пауэрлифтинга, гимнастики, тяжелой атлетики и упражнений с собственным
                            весом </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-vacancies" data-modal="vacancies-03">
        <div class="popup-vacancies__wrapper" data-modal-wrapper>
            <div class="popup-vacancies__content" data-modal-content>
                <button class="popup-vacancies__close" data-modal-close aria-label="Закрыть модальное окно">
                    <svg class="icon">
                        <use xlink:href="/assets/img/sprite.svg#close"></use>
                    </svg>
                </button>
                <div class="popup-vacancies__info">
                    <p class="popup-vacancies__title">Администратор</p>
                    <div class="popup-vacancies__text">
                        <p>Интервальная тренировка высокой интенсивности на силу и выносливость, состоящие из разнообразных анаэробных упражнений, элементов гиревого спорта, пауэрлифтинга, гимнастики, тяжелой атлетики и упражнений с собственным весом.
                            Интервальная тренировка высокой интенсивности на силу и выносливость, состоящие из разнообразных анаэробных упражнений, элементов гиревого спорта, пауэрлифтинга, гимнастики, тяжелой атлетики и упражнений с собственным
                            весом </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-vacancies" data-modal="vacancies-04">
        <div class="popup-vacancies__wrapper" data-modal-wrapper>
            <div class="popup-vacancies__content" data-modal-content>
                <button class="popup-vacancies__close" data-modal-close aria-label="Закрыть модальное окно">
                    <svg class="icon">
                        <use xlink:href="/assets/img/sprite.svg#close"></use>
                    </svg>
                </button>
                <div class="popup-vacancies__info">
                    <p class="popup-vacancies__title">Тренер по каратэ</p>
                    <div class="popup-vacancies__text">
                        <p>Интервальная тренировка высокой интенсивности на силу и выносливость, состоящие из разнообразных анаэробных упражнений, элементов гиревого спорта, пауэрлифтинга, гимнастики, тяжелой атлетики и упражнений с собственным весом.
                            Интервальная тренировка высокой интенсивности на силу и выносливость, состоящие из разнообразных анаэробных упражнений, элементов гиревого спорта, пауэрлифтинга, гимнастики, тяжелой атлетики и упражнений с собственным
                            весом </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="overlay-gallery">
        <button class="nav__close" style="z-index: 100;" data-modal-close="" aria-label="Закрыть модальное окно" onclick="hide_gallery()">
            <svg class="icon">
                <use xlink:href="/assets/img/sprite.svg#close"></use>
            </svg>
        </button>
        <div class="container">
            <div class="swiper ">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a class="gallery-slider__item" data-fslightbox="gallery">
                            <img src="/assets/img/gallery-01.png" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="gallery-slider__item" data-fslightbox="gallery">
                            <img src="/assets/img/gallery-02.png" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="gallery-slider__item" data-fslightbox="gallery">
                            <img src="/assets/img/gallery-03.png" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="gallery-slider__item" data-fslightbox="gallery">
                            <img src="/assets/img/gallery-01.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="swiper-navigation">
                    <button id="overlay-button-prev" class="slider__prev slider__btn">
                        <svg class="icon">
                            <use xlink:href="/assets/img/sprite.svg#chevron"></use>
                        </svg>
                    </button>
                    <button id="overlay-button-next" class="slider__next slider__btn">
                        <svg class="icon">
                            <use xlink:href="/assets/img/sprite.svg#chevron"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <style>
        #overlay-gallery .nav__close{
            left: unset!important;
            right: 175px!important;
        }
        
        .item-articles__btn{
            right: 30px;
        }
        
        .item-articles__btn::after{
            background-color: #00000000;
            background-image: url(/assets/img/icons/arrow.svg);
            box-shadow: none;
        }
    </style>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var zoom = function(index) {
            overlayGallery.slideTo(index);
            document.getElementById("overlay-gallery").style.opacity = "1";
            document.getElementById("overlay-gallery").style.pointerEvents = "all";
        }
        var hide_gallery = function() {
            document.getElementById("overlay-gallery").style.opacity = "0";
            document.getElementById("overlay-gallery").style.pointerEvents = "none";
        }
        var overlayGallery = new Swiper("#overlay-gallery .swiper", {
            centeredSlides: true,
            slidesPerView: 1,
            spaceBetween: 100,
            navigation: {
                nextEl: "#overlay-button-next",
                prevEl: "#overlay-button-prev",
            },
        });
    </script>
@endsection
