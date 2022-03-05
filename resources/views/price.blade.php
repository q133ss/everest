@extends('layouts.site')
@section('title', 'Стоимость')
@section('content')
    <section class="page-section prices">
        <div class="container">
            <h1 class="title prices__title">Стоимость</h1>
            <p class="subtitle prices__subtitle">Варианты и стоимость абонементов в нашем зале</p>
            <ul class="prices__list">
                <li class="prices__item">
                    <div class="item-prices">
                        <div class="item-prices__logo">
                            <img src="/assets/img/logo.svg" alt="Everest" aria-hidden="true">
                        </div>
                        <p class="item-prices__title">Тренажёрный зал</p>
                        <ul class="item-prices__list">
                            <li class="item-prices__point"> Абонемент “ГОД” - <span>17. 000 руб.</span>
                            </li>
                            <li class="item-prices__point"> Абонемент “ГОД” - <span>17. 000 руб.</span>
                            </li>
                            <li class="item-prices__point"> Абонемент “ГОД” - <span>17. 000 руб.</span>
                            </li>
                            <li class="item-prices__point"> Абонемент “ГОД” - <span>17. 000 руб.</span>
                            </li>
                            <li class="item-prices__point"> Абонемент “ГОД УТРЕННИЙ” - <span>17. 000 руб.</span>
                            </li>
                        </ul>
                        <button class="button item-prices__btn" onclick="$('#order_type').val('Абонимент: Тренажёрный зал')" data-open-modal="request">Записаться</button>
                    </div>
                </li>
                <li class="prices__item">
                    <div class="item-prices">
                        <div class="item-prices__logo">
                            <img src="/assets/img/logo.svg" alt="Everest" aria-hidden="true">
                        </div>
                        <p class="item-prices__title">Зал единоборств</p>
                        <ul class="item-prices__list">
                            <li class="item-prices__point"> Пакет “8 ЗАНЯТИЙ” - <span>3. 500 руб.</span>
                            </li>
                            <li class="item-prices__point"> Пакет “12 ЗАНЯТИЙ” - <span>4. 000 руб.</span>
                            </li>
                            <li class="item-prices__point"> Пакет “16 ЗАНЯТИЙ” - <span>5. 000 руб.</span>
                            </li>
                            <li class="item-prices__point"> Пакет “20 ЗАНЯТИЙ” - <span>6. 000 руб.</span>
                            </li>
                        </ul>
                        <p class="item-prices__scriptum">*Пакет приобретается к определенному тренеру</p>
                        <button class="button item-prices__btn" onclick="$('#order_type').val('Абонимент: Зал единоборств')" data-open-modal="request">Записаться</button>
                    </div>
                </li>
                <li class="prices__item">
                    <div class="item-prices">
                        <div class="item-prices__logo">
                            <img src="/assets/img/logo.svg" alt="Everest" aria-hidden="true">
                        </div>
                        <p class="item-prices__title">Индивидуальыне тренировки</p>
                        <ul class="item-prices__list">
                            <li class="item-prices__point"> Разовая тренировка - <span>1. 800 руб.</span>
                            </li>
                            <li class="item-prices__point"> Пакет “5 ТРЕНИРОВОК” - <span>8. 000 руб.</span>
                            </li>
                            <li class="item-prices__point"> Пакет “10 ТРЕНИРОВОК” - <span>15. 000 руб.</span>
                            </li>
                        </ul>
                        <p class="item-prices__scriptum">*Пакет приобретается к определенному тренеру</p>
                        <button class="button item-prices__btn" onclick="$('#order_type').val('Абонимент: Индивидуальные тренеровки')" data-open-modal="request">Записаться</button>
                    </div>
                </li>
            </ul>
        </div>
    </section>
@endsection
