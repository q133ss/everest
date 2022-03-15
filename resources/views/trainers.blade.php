@extends('layouts.site')
@section('title', 'Тренеры')
@section('content')
    <section class="page-section coaches">
        <div class="container">
            <h1 class="coaches__title title">Тренеры</h1>
            <p class="subtitle coaches__subtitle">Тренеры нашего зала</p>
            <div class="coaches-slider slider">
                <div class="gradient"></div>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach($trainers as $trainer)
                        <div class="swiper-slide">
                            <div class="coaches-item">
                                <div class="coaches-item__img">
                                    <img src="{{$trainer->photo}}" alt="{{$trainer->name}}">
                                </div>
                                <div class="coaches-item__info">
                                    <p class="coaches-item__name">{{$trainer->name}}</p>
                                    <div class="coaches-item__inner">
                                        <p class="coaches-item__point">Квалификация — {!! $trainer->qua !!}</p>
                                        <p class="coaches-item__point">Стаж — {{$trainer->stage}}</p>
                                        <p class="coaches-item__point">Возрастная категория: {{$trainer->age_category}}</p>
                                        <p class="coaches-item__point">Основные направления: {{$trainer->directions}}</p>
                                    </div>
                                    <div class="coaches-item__photo">
                                        <img src="{{$trainer->photo}}" alt="">
                                    </div>
                                    <div class="coaches-item__content">
                                        <div class="coaches-accordion" data-accordion="coaches">
                                            <div class="coaches-accordion__top" data-accordion-top>
                                                <p>Читать о тренере</p>
                                            </div>
                                            <div class="coaches-accordion__body" data-accordion-body>
                                                <div class="coaches-accordion__body-content">
                                                    <p>Профессиональные достижения:
                                                        {!! $trainer->achievements !!}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="coaches-item__btns">
                                        <button class="button coaches-item__request" onclick="$('#order_type').val('Запись к тренеру: {{$trainer->name}}')" data-open-modal="request">Записаться</button>
                                        <a class="button button--outline coaches-item__link" href="{{route('schedule.trainer', $trainer->id)}}">Расписание</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

{{--                        <div class="swiper-slide">--}}
{{--                            <div class="coaches-item">--}}
{{--                                <div class="coaches-item__img">--}}
{{--                                    <img src="/assets/img/coaches-01.png" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="coaches-item__info">--}}
{{--                                    <p class="coaches-item__name">Лысиков Даниил Артемьевич</p>--}}
{{--                                    <div class="coaches-item__inner">--}}
{{--                                        <p class="coaches-item__point">Национальный государственный университет физической культуры, спорта и здоровья имени П. Ф. Лесгафта</p>--}}
{{--                                        <p class="coaches-item__point">Стаж — 3 года</p>--}}
{{--                                        <p class="coaches-item__point">Возрастная категория: 14+, взрослые</p>--}}
{{--                                        <p class="coaches-item__point">Основные направления: тайский бокс</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="coaches-item__photo">--}}
{{--                                        <img src="/assets/img/coaches-01.png" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="coaches-item__content">--}}
{{--                                        <div class="coaches-accordion" data-accordion="coaches">--}}
{{--                                            <div class="coaches-accordion__top" data-accordion-top>--}}
{{--                                                <p>Читать о тренере</p>--}}
{{--                                            </div>--}}
{{--                                            <div class="coaches-accordion__body" data-accordion-body>--}}
{{--                                                <div class="coaches-accordion__body-content">--}}
{{--                                                    <p>Профессиональные достижения:--}}
{{--                                                        <br> - чемпион СПБ по Тайскому боксу 2017 г.--}}
{{--                                                        <br> - чемпион ЦФО и СЗФО по Тайскому боксу 2017 г.--}}
{{--                                                        <br> - чемпион СПБ по Тайскому боксу 2019 г.--}}
{{--                                                        <br> - чемпион Ленинградской области по Тайскому боксу 2019 г.--}}
{{--                                                        <br> - призёр Кубка СПБ по Кикбоксингу 2019 г.--}}
{{--                                                        <br> - призёр Кубка Консульства Королевства Тайланд 2019 г.--}}
{{--                                                        <br> - обладатель Кубка СПБ по Тайскому боксу 2021 г.--}}
{{--                                                        <br> - призёр Чемпионата СПБ по Тайскому боксу 2021 г.--}}
{{--                                                        <br> Профессиональные навыки: знания в области анатомии, физиологии, педагогики--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="coaches-item__btns">--}}
{{--                                        <button class="button coaches-item__request" onclick="$('#order_type').val('Запись к тренеру: Лысиков Даниил Артемьевич')" data-open-modal="request">Записаться</button>--}}
{{--                                        <a class="button button--outline coaches-item__link" href="./schedule.html">Расписание</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="coaches-item">--}}
{{--                                <div class="coaches-item__img">--}}
{{--                                    <img src="/assets/img/coaches-02.png" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="coaches-item__info">--}}
{{--                                    <p class="coaches-item__name">Атакишиев Имран Ильхамоглы</p>--}}
{{--                                    <div class="coaches-item__inner">--}}
{{--                                        <p class="coaches-item__point">Квалификация — тренер по ММА</p>--}}
{{--                                        <p class="coaches-item__point">Стаж — 10 лет</p>--}}
{{--                                        <p class="coaches-item__point">Возрастная категория: 4+, взрослые</p>--}}
{{--                                        <p class="coaches-item__point">Основные направления: ММА, рукопашный бой, боевое самбо, универсальный бой</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="coaches-item__photo">--}}
{{--                                        <img src="/assets/img/coaches-02.png" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="coaches-item__content">--}}
{{--                                        <div class="coaches-accordion" data-accordion="coaches">--}}
{{--                                            <div class="coaches-accordion__top" data-accordion-top>--}}
{{--                                                <p>Читать о тренере</p>--}}
{{--                                            </div>--}}
{{--                                            <div class="coaches-accordion__body" data-accordion-body>--}}
{{--                                                <div class="coaches-accordion__body-content">--}}
{{--                                                    <p>Профессиональные достижения:--}}
{{--                                                        <br> - многократный призер и чемпион Санкт-Петербурга и международных соревнований--}}
{{--                                                        <br> - КМС по универсальному бою--}}
{{--                                                        <br> - КМС по ушу-саньда--}}
{{--                                                        <br> - КМС по профессиональному боевому самбо--}}
{{--                                                        <br> - КМС по рукопашному бою--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="coaches-item__btns">--}}
{{--                                        <button class="button coaches-item__request" data-open-modal="request" onclick="$('#order_type').val('Запись к тренеру: Атакишиев Имран Ильхамоглы')">Записаться</button>--}}
{{--                                        <a class="button button--outline coaches-item__link" href="./schedule.html">Расписание</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="coaches-item">--}}
{{--                                <div class="coaches-item__img">--}}
{{--                                    <img src="/assets/img/coaches-03.png" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="coaches-item__info">--}}
{{--                                    <p class="coaches-item__name">Бойчев Сергей Иванович</p>--}}
{{--                                    <div class="coaches-item__inner">--}}
{{--                                        <p class="coaches-item__point">Квалификация — тренер по боксу</p>--}}
{{--                                        <p class="coaches-item__point">Образование — Высшее, СПБГУ</p>--}}
{{--                                        <p class="coaches-item__point">Стаж — 23 года</p>--}}
{{--                                        <p class="coaches-item__point">Возрастная категория: 4+, взрослые</p>--}}
{{--                                        <p class="coaches-item__point">Основные направления: каратэ WKF, кикбоксинг, рукопашный бой</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="coaches-item__photo">--}}
{{--                                        <img src="/assets/img/coaches-03.png" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="coaches-item__content">--}}
{{--                                        <div class="coaches-accordion" data-accordion="coaches">--}}
{{--                                            <div class="coaches-accordion__top" data-accordion-top>--}}
{{--                                                <p>Читать о тренере</p>--}}
{{--                                            </div>--}}
{{--                                            <div class="coaches-accordion__body" data-accordion-body>--}}
{{--                                                <div class="coaches-accordion__body-content">--}}
{{--                                                    <p>Профессиональные достижения:--}}
{{--                                                        <br> - призер СПБ и ЛО--}}
{{--                                                        <br> - призер г. Выборг.--}}
{{--                                                        <br> - коричневый пояс каратэ.--}}
{{--                                                        <br> Профессиональные навыки: знание основ анатомии, ведение групповых и индивидуальных занятий, применение элементов легкой атлетики в тренировках--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="coaches-item__btns">--}}
{{--                                        <button class="button coaches-item__request" onclick="$('#order_type').val('Запись к тренеру: Бойчев Сергей Иванович')" data-open-modal="request">Записаться</button>--}}
{{--                                        <a class="button button--outline coaches-item__link" href="./schedule.html">Расписание</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="coaches-item">--}}
{{--                                <div class="coaches-item__img">--}}
{{--                                    <img src="/assets/img/balashov.jpg" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="coaches-item__info">--}}
{{--                                    <p class="coaches-item__name">Балашов Леонид Игоревич</p>--}}
{{--                                    <div class="coaches-item__inner">--}}
{{--                                        <p class="coaches-item__point">Образование — Национальный государственный университет физической культуры, спорта и здоровья имени П. Ф. Лесгафта</p>--}}
{{--                                        <p class="coaches-item__point">Квалификация — мастер спорта, инструктор по рукопашному бою</p>--}}
{{--                                        <p class="coaches-item__point">Стаж — 7 лет</p>--}}
{{--                                        <p class="coaches-item__point">Возрастная категория: взрослые</p>--}}
{{--                                        <p class="coaches-item__point">Основные направления: кикбоксинг, рукопашный бой</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="coaches-item__photo">--}}
{{--                                        <img src="/assets/img/balashov.jpg" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="coaches-item__content">--}}
{{--                                        <div class="coaches-accordion" data-accordion="coaches">--}}
{{--                                            <div class="coaches-accordion__top" data-accordion-top>--}}
{{--                                                <p>Читать о тренере</p>--}}
{{--                                            </div>--}}
{{--                                            <div class="coaches-accordion__body" data-accordion-body>--}}
{{--                                                <div class="coaches-accordion__body-content">--}}
{{--                                                    <p>Профессиональные достижения:--}}
{{--                                                        <br> - 2-х кратный победитель первенства мира по универсальному бою--}}
{{--                                                        <br> - серебряный призер чемпионата Европы по универсальному бою--}}
{{--                                                        <br> Профессиональные навыки: знание основ психологии, умение работать с учетом индивидуальных качеств человека, знание анатомии, физиологии человека--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="coaches-item__btns">--}}
{{--                                        <button class="button coaches-item__request" onclick="$('#order_type').val('Запись к тренеру: Балашов Леонид Игоревич')" data-open-modal="request">Записаться</button>--}}
{{--                                        <a class="button button--outline coaches-item__link" href="./schedule.html">Расписание</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="coaches-item">--}}
{{--                                <div class="coaches-item__img">--}}
{{--                                    <img src="/assets/img/coaches-05.png" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="coaches-item__info">--}}
{{--                                    <p class="coaches-item__name">Сиренко Андрей Владиславович</p>--}}
{{--                                    <div class="coaches-item__inner">--}}
{{--                                        <p class="coaches-item__point">Обзразование — Высшее педагогическое </p>--}}
{{--                                        <p class="coaches-item__point">Квалификация — педагог доп. образования по спортивно-боевым единоборствам</p>--}}
{{--                                        <p class="coaches-item__point">Стаж - с 1982 года</p>--}}
{{--                                        <p class="coaches-item__point">Возрастная категория: любая</p>--}}
{{--                                        <p class="coaches-item__point">Основные направления: рукопашный бой, СБЕ, боевое самбо</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="coaches-item__photo">--}}
{{--                                        <img src="/assets/img/coaches-05.png" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="coaches-item__content">--}}
{{--                                        <div class="coaches-accordion" data-accordion="coaches">--}}
{{--                                            <div class="coaches-accordion__top" data-accordion-top>--}}
{{--                                                <p>Читать о тренере</p>--}}
{{--                                            </div>--}}
{{--                                            <div class="coaches-accordion__body" data-accordion-body>--}}
{{--                                                <div class="coaches-accordion__body-content">--}}
{{--                                                    <p>Профессиональные достижения:--}}
{{--                                                        <br> - 5 мастеров спорта--}}
{{--                                                        <br> - 15 призеров и победителей в первенстве мира и Европы по универсальному бою и ушу-саньда--}}
{{--                                                        <br> Профессиональные навыки: МС СССР по борьбе--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="coaches-item__btns">--}}
{{--                                        <button class="button coaches-item__request" onclick="$('#order_type').val('Запись к тренеру: Сиренко Андрей Владиславович')" data-open-modal="request">Записаться</button>--}}
{{--                                        <a class="button button--outline coaches-item__link" href="./schedule.html">Расписание</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="coaches-item">--}}
{{--                                <div class="coaches-item__img">--}}
{{--                                    <img src="/assets/img/coaches-06.png" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="coaches-item__info">--}}
{{--                                    <p class="coaches-item__name">Сопин Михаил Евгеньевич</p>--}}
{{--                                    <div class="coaches-item__inner">--}}
{{--                                        <p class="coaches-item__point">Обзразование — Современная Гуманитарная Академия (Финансовый менеджмент) </p>--}}
{{--                                        <p class="coaches-item__point">Квалификация — тренер по Бразильскому джиу джитсу</p>--}}
{{--                                        <p class="coaches-item__point">Стаж - 3 года</p>--}}
{{--                                        <p class="coaches-item__point">Возрастная категория: 6+, взрослые</p>--}}
{{--                                        <p class="coaches-item__point">Основные направления: Бразильское джиу-джитсу / греплинг</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="coaches-item__photo">--}}
{{--                                        <img src="/assets/img/coaches-06.png" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="coaches-item__content">--}}
{{--                                        <div class="coaches-accordion" data-accordion="coaches">--}}
{{--                                            <div class="coaches-accordion__top" data-accordion-top>--}}
{{--                                                <p>Читать о тренере</p>--}}
{{--                                            </div>--}}
{{--                                            <div class="coaches-accordion__body" data-accordion-body>--}}
{{--                                                <div class="coaches-accordion__body-content">--}}
{{--                                                    <p>Профессиональные достижения:--}}
{{--                                                        <br> - участник региональных и международных соревнованиях по БЖЖ--}}
{{--                                                        <br> - подготовка спортсменов к соревнованиям--}}
{{--                                                        <br> Профессиональные навыки: знание базовых основ борьбы в партере, болевые и удушающие приемы при помощи одежды, рук, ног, основы гимнастики и растяжки, основы общего физического развития--}}
{{--                                                        для борьбы--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="coaches-item__btns">--}}
{{--                                        <button class="button coaches-item__request" onclick="$('#order_type').val('Запись к тренеру: Сопин Михаил Евгеньевич')" data-open-modal="request">Записаться</button>--}}
{{--                                        <a class="button button--outline coaches-item__link" href="./schedule.html">Расписание</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="coaches-item">--}}
{{--                                <div class="coaches-item__img">--}}
{{--                                    <img src="/assets/img/coaches-07.png" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="coaches-item__info">--}}
{{--                                    <p class="coaches-item__name">Щукин Анатолий Владимирович</p>--}}
{{--                                    <div class="coaches-item__inner">--}}
{{--										<p class="coaches-item__point">Обзразование — ГАОУ ВО ЛО «Ленинградский государственный университет им. А.С. Пушкина», педагогическое образование, факультет физической культуры</p>--}}
{{--                                        <p class="coaches-item__point">Квалификация — тренер по боксу</p>--}}
{{--                                        <p class="coaches-item__point">Стаж - 6 лет</p>--}}
{{--                                        <p class="coaches-item__point">Возрастная категория: 7+, взрослые</p>--}}
{{--                                        <p class="coaches-item__point">Основные направления: Бокс</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="coaches-item__photo">--}}
{{--                                        <img src="/assets/img/coaches-07.png" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="coaches-item__content">--}}
{{--                                        <div class="coaches-accordion" data-accordion="coaches">--}}
{{--                                            <div class="coaches-accordion__top" data-accordion-top>--}}
{{--                                                <p>Читать о тренере</p>--}}
{{--                                            </div>--}}
{{--                                            <div class="coaches-accordion__body" data-accordion-body>--}}
{{--                                                <div class="coaches-accordion__body-content">--}}
{{--                                                    <p>Профессиональные достижения:--}}
{{--                                                        <br> - кандидат в мастера спорта по боксу--}}
{{--                                                        <br> - финалист чемпионата ДФО 2013 г.--}}
{{--                                                        <br> - победитель и призёр первенств ДФО 2008-2012 г.--}}
{{--                                                        <br> - победитель международного турнира памяти М.К. Нагуляна г. Адлер 2009, 2010, 2011 г.--}}
{{--                                                        <br> - двукратный призёр Всероссийского турнира памяти Сахарова г. Владивосток,--}}
{{--                                                        <br> - чемпион кубка России по шахбоксу 2021 г.--}}
{{--                                                        <br> Профессиональные навыки: организация и проведение тренировок и спортивной подготовки по боксу, выстраивание тренировочных циклов, работа с детьми и школьными группами--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="coaches-item__btns">--}}
{{--                                        <button class="button coaches-item__request" onclick="$('#order_type').val('Запись к тренеру: Щукин Анатолий Владимирович')" data-open-modal="request">Записаться</button>--}}
{{--                                        <a class="button button--outline coaches-item__link" href="./schedule.html">Расписание</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="coaches-item">--}}
{{--                                <div class="coaches-item__img">--}}
{{--                                    <img src="/assets/img/coaches-08.png" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="coaches-item__info">--}}
{{--                                    <p class="coaches-item__name">Егоров Олег Владимирович</p>--}}
{{--                                    <div class="coaches-item__inner">--}}
{{--                                        <p class="coaches-item__point">Образование — Педагогический колледж фитнеса</p>--}}
{{--                                        <p class="coaches-item__point">Квалификация — персональный тренер тренажерного зала</p>--}}
{{--                                        <p class="coaches-item__point">Стаж - с 2015 г.</p>--}}
{{--                                        <p class="coaches-item__point">Возрастная категория: взрослые</p>--}}
{{--                                        <p class="coaches-item__point">Основные направления: силовой и функциональный тренинг в тренажёрном зале</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="coaches-item__photo">--}}
{{--                                        <img src="/assets/img/coaches-08.png" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="coaches-item__content">--}}
{{--                                        <div class="coaches-accordion" data-accordion="coaches">--}}
{{--                                            <div class="coaches-accordion__top" data-accordion-top>--}}
{{--                                                <p>Читать о тренере</p>--}}
{{--                                            </div>--}}
{{--                                            <div class="coaches-accordion__body" data-accordion-body>--}}
{{--                                                <div class="coaches-accordion__body-content">--}}
{{--                                                    <p>Профессиональные достижения:--}}
{{--                                                        <br> - сертифицированный инструктор Animal Flow — фитнес-направление, совмещающее в себе элементы нескольких видов активностей: йоги, функционального тренинга, пилатеса, стрейтчинга, спортивной--}}
{{--                                                        гимнастики, капоэйры и брейк-данса--}}
{{--                                                        <br> Профессиональные навыки: снижение веса/набор массы, основы правильного питания, техника выполнения упражнений, реабилитация после травм и при наличии ограничений на тренировки--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="coaches-item__btns">--}}
{{--                                        <button class="button coaches-item__request" onclick="$('#order_type').val('Запись к тренеру: Егоров Олег Владимирович')" data-open-modal="request">Записаться</button>--}}
{{--                                        <a class="button button--outline coaches-item__link" href="./schedule.html">Расписание</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                    </div>
                </div>
                <div class="swiper-navigation coaches-slider__navigation">
                    <button class="coaches-slider__prev slider__prev slider__btn">
                        <svg class="icon">
                            <use xlink:href="/assets/img/sprite.svg#chevron"></use>
                        </svg>
                    </button>
                    <button class="coaches-slider__next slider__next slider__btn">
                        <svg class="icon">
                            <use xlink:href="/assets/img/sprite.svg#chevron"></use>
                        </svg>
                    </button>
                </div>
                <div class="swiper-pagination coaches-slider__pagination"></div>
            </div>
        </div>
    </section>
@endsection
