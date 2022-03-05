@extends('layouts.site')
@section('title', 'Расписание')
@section('content')
    <section class="page-section schedule">
        <div class="container">
            <h1 class="title schedule__title">Расписание</h1>
            <p class="subtitle schedule__subtitle">расписание тренировок в зале</p>
            <ul class="schedule-colors">
                <li class="schedule-colors__item">
                    <span style="background-color:#CA151C">Цвет</span> BJJ
                </li>
                <li class="schedule-colors__item">
                    <span style="background-color:#9D9D9D">Цвет</span> Боевое самбо
                </li>
                <li class="schedule-colors__item">
                    <span style="background-color:#00AADF">Цвет</span> Карате 7-12
                </li>
                <li class="schedule-colors__item">
                    <span style="background-color:#EA6200">Цвет</span> ММА 4-6
                </li>
                <li class="schedule-colors__item">
                    <span style="background-color:#00C514">Цвет</span> Бокс дети 8-17
                </li>
                <li class="schedule-colors__item">
                    <span style="background-color:#A700E2">Цвет</span> ТАЙСКИЙ БОКС
                </li>
                <li class="schedule-colors__item">
                    <span style="background-color:#E18181">Цвет</span> Кикбоксинг
                </li>
            </ul>
            <form class="schedule-calendar">
                <div class="schedule-calendar__filters">
                    <div class="schedule-select">
                        <div class="schedule-select__top"> Направления </div>
                        <div class="schedule-select__body">
                            <label class="schedule-select__field">
                                <input class="visually-hidden" type="radio" name="direction" value="1">
                                <span class="schedule-select__label">BJJ</span>
                            </label>
                            <label class="schedule-select__field">
                                <input class="visually-hidden" type="radio" name="direction" value="2">
                                <span class="schedule-select__label">Боевое самбо</span>
                            </label>
                            <label class="schedule-select__field">
                                <input class="visually-hidden" type="radio" name="direction" value="3">
                                <span class="schedule-select__label">Каратэ</span>
                            </label>
                            <label class="schedule-select__field">
                                <input class="visually-hidden" type="radio" name="direction" value="4">
                                <span class="schedule-select__label">ММА</span>
                            </label>
                            <label class="schedule-select__field">
                                <input class="visually-hidden" type="radio" name="direction" value="5">
                                <span class="schedule-select__label">Бокс</span>
                            </label>
                            <label class="schedule-select__field">
                                <input class="visually-hidden" type="radio" name="direction" value="6">
                                <span class="schedule-select__label">Тайский бокс</span>
                            </label>
                            <label class="schedule-select__field">
                                <input class="visually-hidden" type="radio" name="direction" value="7">
                                <span class="schedule-select__label">Кикбоксинг</span>
                            </label>
                        </div>
                    </div>
                    <div class="schedule-select">
                        <div class="schedule-select__top"> Занятия </div>
                        <div class="schedule-select__body">
                            <label class="schedule-select__field">
                                <input class="visually-hidden" type="radio" name="club" value="1">
                                <span class="schedule-select__label">Для детей</span>
                            </label>
                            <label class="schedule-select__field">
                                <input class="visually-hidden" type="radio" name="club" value="2">
                                <span class="schedule-select__label">Взрослые</span>
                            </label>
                            <label class="schedule-select__field">
                                <input class="visually-hidden" type="radio" name="club" value="3">
                                <span class="schedule-select__label">Групповые занятия</span>
                            </label>
                        </div>
                    </div>
                    <div class="schedule-select">
                        <div class="schedule-select__top"> Тренеры </div>
                        <div class="schedule-select__body">
                            <label class="schedule-select__field">
                                <input class="visually-hidden" type="radio" name="coach" value="1">
                                <span class="schedule-select__label">Тренер1</span>
                            </label>
                            <label class="schedule-select__field">
                                <input class="visually-hidden" type="radio" name="coach" value="2">
                                <span class="schedule-select__label">Тренер2</span>
                            </label>
                            <label class="schedule-select__field">
                                <input class="visually-hidden" type="radio" name="coach" value="3">
                                <span class="schedule-select__label">Тренер3</span>
                            </label>
                            <label class="schedule-select__field">
                                <input class="visually-hidden" type="radio" name="coach" value="4">
                                <span class="schedule-select__label">Тренер4</span>
                            </label>
                            <label class="schedule-select__field">
                                <input class="visually-hidden" type="radio" name="coach" value="5">
                                <span class="schedule-select__label">Тренер5</span>
                            </label>
                            <label class="schedule-select__field">
                                <input class="visually-hidden" type="radio" name="coach" value="6">
                                <span class="schedule-select__label">Тренер6</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="schedule-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <p class="schedule-slider__date">
                                    <span>07 февраля</span> - <span>13 февраля</span>
                                </p>
                                <div class="schedule-slider__inner">
                                    <div class="schedule-slider__time">
                                        <div class="schedule-slider__time-item"></div>
                                    </div>
                                    <div class="tabs">
                                        <div class="tabs-nav">
                                            <button type="button" class="tabs-nav__button active" data-tabs-link="ПН">ПН</button>
                                            <button type="button" class="tabs-nav__button" data-tabs-link="ВТ">ВТ</button>
                                            <button type="button" class="tabs-nav__button" data-tabs-link="СР">СР</button>
                                            <button type="button" class="tabs-nav__button" data-tabs-link="ЧТ">ЧТ</button>
                                            <button type="button" class="tabs-nav__button" data-tabs-link="ПТ">ПТ</button>
                                            <button type="button" class="tabs-nav__button" data-tabs-link="СБ">СБ</button>
                                            <button type="button" class="tabs-nav__button" disabled data-tabs-link="ВС">ВС</button>
                                        </div>
                                        <div class="tabs-content">
                                            <div class="tabs-content__item active" data-tab="ПН">
                                                <div class="tabs-content__wrapper">
                                                    <div class="tabs-content__th">Понедельник</div>
                                                    <div class="tabs-content__td" data-start-time="09:30">
                                                        <span style="background-color:#CA151C;"></span>09:30-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="17:00">
                                                        <span style="background-color:#CA151C;"></span>17:00-18:00 BJJ дети 6-12 Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="18:00">
                                                        <span style="background-color:#EA6200;"></span>18:00-19:00 ММА 4-6 Тренер: Атакишиев И.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="18:00">
                                                        <span style="background-color:#00C514;"></span>18:00-19:00 Бокс дети 8-17 Щукин А.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="19:00">
                                                        <span style="background-color:#00C514;"></span>19:00-20:00 Бокс женский Щукин А.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="19:00">
                                                        <span style="background-color:#EA6200;"></span>19:00-20:00 ММА 7-13 Тренер: Атакишиев И.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="20:00">
                                                        <span style="background-color:#00C514;"></span>20:00-21:30 Бокс взрослые Щукин А.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="20:30">
                                                        <span style="background-color:#EA6200;"></span>20:30-22:00 ММА 14+ Тренер: Атакишиев И.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tabs-content__item" data-tab="ВТ">
                                                <div class="tabs-content__wrapper">
                                                    <div class="tabs-content__th">Вторник</div>
                                                    <div class="tabs-content__td" data-start-time="16:00">
                                                        <span style="background-color:#9D9D9D;"></span>16:00-17:30 Боевое самбо Тренер: Сиренко А.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="17:00">
                                                        <span style="background-color:#00AADF;"></span>17:00-18:00 Карате 7-12 Тренер: Бойчев С.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="18:00">
                                                        <span style="background-color:#EA6200;"></span>18:00-19:00 ММА 4-6 Тренер: Атакишиев И.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="18:00">
                                                        <span style="background-color:#00AADF;"></span>18:00-19:00 Карате 5-7 Тренер: Бойчев С.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="19:00">
                                                        <span style="background-color:#CA151C;"></span>19:00-20:30 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="19:00">
                                                        <span style="background-color:#EA6200;"></span>19:00-20:00 ММА 7-13 Тренер: Атакишиев И.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="19:00">
                                                        <span style="background-color:#E18181;"></span>19:00-20:30 Кикбоксинг Тренер: Балашов Л.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="20:30">
                                                        <span style="background-color:#A700E2;"></span>20:30-22:00 ТАЙСКИЙ БОКС Тренер: Лысиков Д.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="20:30">
                                                        <span style="background-color:#EA6200;"></span>20:30-22:00 ММА 14+ Тренер: Атакишиев И.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tabs-content__item" data-tab="СР">
                                                <div class="tabs-content__wrapper">
                                                    <div class="tabs-content__th">Среда</div>
                                                    <div class="tabs-content__td" data-start-time="09:30">
                                                        <span style="background-color:#CA151C;"></span>09:30-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="17:00">
                                                        <span style="background-color:#CA151C;"></span>17:00-18:00 BJJ дети 6-12 Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="18:00">
                                                        <span style="background-color:#EA6200;"></span>18:00-19:00 ММА 4-6 Тренер: Атакишиев И.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="18:00">
                                                        <span style="background-color:#00C514;"></span>18:00-19:00 Бокс дети 8-17 Щукин А.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="19:00">
                                                        <span style="background-color:#00C514;"></span>19:00-20:00 Бокс женский Щукин А.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="19:00">
                                                        <span style="background-color:#EA6200;"></span>19:00-20:00 ММА 7-13 Тренер: Атакишиев И.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="20:00">
                                                        <span style="background-color:#00C514;"></span>20:00-21:30 Бокс взрослые Щукин А.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="20:30">
                                                        <span style="background-color:#EA6200;"></span>20:30-22:00 ММА 14+ Тренер: Атакишиев И.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tabs-content__item" data-tab="ЧТ">
                                                <div class="tabs-content__wrapper">
                                                    <div class="tabs-content__th">Четверг</div>
                                                    <div class="tabs-content__td" data-start-time="16:00">
                                                        <span style="background-color:#9D9D9D;"></span>16:00-17:30 Боевое самбо Тренер: Сиренко А.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="17:00">
                                                        <span style="background-color:#00AADF;"></span>17:00-18:00 Карате 7-12 Тренер: Бойчев С.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="18:00">
                                                        <span style="background-color:#EA6200;"></span>18:00-19:00 ММА 4-6 Тренер: Атакишиев И.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="18:00">
                                                        <span style="background-color:#00AADF;"></span>18:00-19:00 Карате 5-7 Тренер: Бойчев С.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="19:00">
                                                        <span style="background-color:#CA151C;"></span>19:00-20:30 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="19:00">
                                                        <span style="background-color:#EA6200;"></span>19:00-20:00 ММА 7-13 Тренер: Атакишиев И.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="19:00">
                                                        <span style="background-color:#E18181;"></span>19:00-20:30 Кикбоксинг Тренер: Балашов Л.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="20:30">
                                                        <span style="background-color:#A700E2;"></span>20:30-22:00 ТАЙСКИЙ БОКС Тренер: Лысиков Д.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="20:30">
                                                        <span style="background-color:#EA6200;"></span>20:30-22:00 ММА 14+ Тренер: Атакишиев И
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tabs-content__item" data-tab="ПТ">
                                                <div class="tabs-content__wrapper">
                                                    <div class="tabs-content__th">Пятница</div>
                                                    <div class="tabs-content__td" data-start-time="09:30">
                                                        <span style="background-color:#CA151C;"></span>09:30-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="17:00">
                                                        <span style="background-color:#CA151C;"></span>17:00-18:00 BJJ дети 6-12 Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="18:00">
                                                        <span style="background-color:#EA6200;"></span>18:00-19:00 ММА 4-6 Тренер: Атакишиев И.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="18:00">
                                                        <span style="background-color:#00C514;"></span>18:00-19:00 Бокс дети 8-17 Щукин А.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="19:00">
                                                        <span style="background-color:#00C514;"></span>19:00-20:00 Бокс женский Щукин А.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="19:00">
                                                        <span style="background-color:#EA6200;"></span>19:00-20:00 ММА 7-13 Тренер: Атакишиев И.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="20:00">
                                                        <span style="background-color:#00C514;"></span>20:00-21:30 Бокс взрослые Щукин А.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="20:30">
                                                        <span style="background-color:#EA6200;"></span>20:30-22:00 ММА 14+ Тренер: Атакишиев И.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tabs-content__item" data-tab="СБ">
                                                <div class="tabs-content__wrapper">
                                                    <div class="tabs-content__th">Суббота</div>
                                                    <div class="tabs-content__td" data-start-time="10:00">
                                                        <span style="background-color:#CA151C;"></span>10:00-11:30 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="11:00">
                                                        <span style=""></span>11:00-12:30 ТАЙСКИЙ БОКС Лысиков Д.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="12:00">
                                                        <span style="background-color:#00AADF;"></span>12:00-13:00 Каратэ Тренер: Бойчев С.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="15:00">
                                                        <span style=""></span>15:00-16:30 Кикбоксинг Тренер: Балашов Л.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="16:00">
                                                        <span style="background-color:#9D9D9D;"></span>16:00-17:30 Боевое самбо Тренер: Сиренко А.В.
                                                    </div>
                                                    <!-- <div class="tabs-content__td" data-start-time="20:30"><span
                                                  style="background-color:#9D9D9D;"></span>20:30-17:30 Боевое самбо Тренер: Сиренко А.В.</div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <p class="schedule-slider__date">
                                    <span>07 февраля</span> - <span>13 февраля</span>
                                </p>
                                <div class="schedule-slider__inner">
                                    <div class="schedule-slider__time">
                                        <div class="schedule-slider__time-item"></div>
                                    </div>
                                    <div class="tabs">
                                        <div class="tabs-nav">
                                            <button type="button" class="tabs-nav__button active" data-tabs-link="ПН">ПН</button>
                                            <button type="button" class="tabs-nav__button" data-tabs-link="ВТ">ВТ</button>
                                            <button type="button" class="tabs-nav__button" data-tabs-link="СР">СР</button>
                                            <button type="button" class="tabs-nav__button" data-tabs-link="ЧТ">ЧТ</button>
                                            <button type="button" class="tabs-nav__button" data-tabs-link="ПТ">ПТ</button>
                                            <button type="button" class="tabs-nav__button" data-tabs-link="СБ">СБ</button>
                                            <button type="button" class="tabs-nav__button" disabled data-tabs-link="ВС">ВС</button>
                                        </div>
                                        <div class="tabs-content">
                                            <div class="tabs-content__item active" data-tab="ПН">
                                                <div class="tabs-content__wrapper">
                                                    <div class="tabs-content__th">Понедельник</div>
                                                    <div class="tabs-content__td" data-start-time="09:30">
                                                        <span style="background-color:#CA151C;"></span>09:30-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="17:00">
                                                        <span style="background-color:#CA151C;"></span>17:00-18:00 BJJ дети 6-12 Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="18:00">
                                                        <span style="background-color:#EA6200;"></span>18:00-19:00 ММА 4-6 Тренер: Атакишиев И.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="18:00">
                                                        <span style="background-color:#00C514;"></span>18:00-19:00 Бокс дети 8-17 Щукин А.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="19:00">
                                                        <span style="background-color:#00C514;"></span>19:00-20:00 Бокс женский Щукин А.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="19:00">
                                                        <span style="background-color:#EA6200;"></span>19:00-20:00 ММА 7-13 Тренер: Атакишиев И.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="20:00">
                                                        <span style="background-color:#00C514;"></span>20:00-21:30 Бокс взрослые Щукин А.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="20:30">
                                                        <span style="background-color:#EA6200;"></span>20:30-22:00 ММА 14+ Тренер: Атакишиев И.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tabs-content__item" data-tab="ВТ">
                                                <div class="tabs-content__wrapper">
                                                    <div class="tabs-content__th">Вторник</div>
                                                    <div class="tabs-content__td" data-start-time="10:00">
                                                        <span style="background-color:#CA151C;"></span>10:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="17:00">
                                                        <span style="background-color:#CA151C;"></span>17:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="17:00">
                                                        <span style="background-color:#CA151C;"></span>17:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="19:00">
                                                        <span style="background-color:#CA151C;"></span>19:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="20:00">
                                                        <span style="background-color:#CA151C;"></span>20:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="20:00">
                                                        <span style="background-color:#CA151C;"></span>20:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="20:00">
                                                        <span style="background-color:#CA151C;"></span>20:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tabs-content__item" data-tab="СР">
                                                <div class="tabs-content__wrapper">
                                                    <div class="tabs-content__th">Среда</div>
                                                    <div class="tabs-content__td" data-start-time="09:00">
                                                        <span style="background-color:#CA151C;"></span>09:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="10:00">
                                                        <span style="background-color:#CA151C;"></span>10:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="18:00">
                                                        <span style="background-color:#CA151C;"></span>18:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="19:00">
                                                        <span style="background-color:#CA151C;"></span>19:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="20:00">
                                                        <span style="background-color:#CA151C;"></span>20:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="21:00">
                                                        <span style="background-color:#CA151C;"></span>21:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tabs-content__item" data-tab="ЧТ">
                                                <div class="tabs-content__wrapper">
                                                    <div class="tabs-content__th">Понедельник</div>
                                                    <div class="tabs-content__td" data-start-time="09:00">
                                                        <span style="background-color:#CA151C;"></span>09:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="17:00">
                                                        <span style="background-color:#CA151C;"></span>17:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="18:00">
                                                        <span style="background-color:#CA151C;"></span>18:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="19:00">
                                                        <span style="background-color:#CA151C;"></span>19:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="20:00">
                                                        <span style="background-color:#CA151C;"></span>20:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="21:00">
                                                        <span style="background-color:#CA151C;"></span>21:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tabs-content__item" data-tab="ПТ">
                                                <div class="tabs-content__wrapper">
                                                    <div class="tabs-content__th">Понедельник</div>
                                                    <div class="tabs-content__td" data-start-time="09:00">
                                                        <span style="background-color:#CA151C;"></span>09:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="17:00">
                                                        <span style="background-color:#CA151C;"></span>17:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="18:00">
                                                        <span style="background-color:#CA151C;"></span>18:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="19:00">
                                                        <span style="background-color:#CA151C;"></span>19:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="19:00">
                                                        <span style="background-color:#CA151C;"></span>19:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="19:00">
                                                        <span style="background-color:#CA151C;"></span>19:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="20:00">
                                                        <span style="background-color:#CA151C;"></span>20:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="21:00">
                                                        <span style="background-color:#CA151C;"></span>21:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tabs-content__item" data-tab="СБ">
                                                <div class="tabs-content__wrapper">
                                                    <div class="tabs-content__th">Понедельник</div>
                                                    <div class="tabs-content__td" data-start-time="09:00">
                                                        <span style="background-color:#CA151C;"></span>09:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="17:00">
                                                        <span style="background-color:#CA151C;"></span>17:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="18:00">
                                                        <span style="background-color:#CA151C;"></span>18:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="19:00">
                                                        <span style="background-color:#CA151C;"></span>19:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="20:00">
                                                        <span style="background-color:#CA151C;"></span>20:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                    <div class="tabs-content__td" data-start-time="20:00">
                                                        <span style="background-color:#CA151C;"></span>20:00-11:00 BJJ Тренер: Сопин М.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-navigation">
                        <button type="button" class="schedule-slider__prev slider__prev slider__btn">
                            <svg class="icon">
                                <use xlink:href="/assets/img/sprite.svg#chevron"></use>
                            </svg>
                        </button>
                        <button type="button" class="schedule-slider__next slider__next slider__btn">
                            <svg class="icon">
                                <use xlink:href="/assets/img/sprite.svg#chevron"></use>
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
