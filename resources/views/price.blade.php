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
                            <li class="item-prices__point"> Абонемент "ГОД": <span>17 000 ₽</span>
                            </li>
                            <li class="item-prices__point"> Абонемент "ПОЛГОДА": <span>10 000 ₽</span>
                            </li>
                            <li class="item-prices__point"> Абонемент "3 МЕСЯЦА": <span>8 000 ₽</span>
                            </li>
                            <li class="item-prices__point"> Абонемент "1 МЕСЯЦ": <span>4 000 ₽</span>
                            </li>
                            <li class="item-prices__point"> Абонемент "ГОД утренний": <span>12 000 ₽</span>
                            </li>
                        </ul>
						<p class="item-prices__scriptum">Все абонементы включают:
							<br/>- 1 тренировка кроссфит
							<br/>- 1 персональная тренировка в тренажерном зале
							<br/>- 1 персональная тренировка в зале единоборств
							<br/>- посещение турецкой парной
							<br/>- посещение зала единоборств (вне групповых тренировок)
						</p>
                        <button class="button item-prices__btn" onclick="$('#order_type').val('Абонимент: Тренажёрный зал')" data-open-modal="request">Записаться</button>
                    </div>
                </li>
                <li class="prices__item">
                    <div class="item-prices">
                        <div class="item-prices__logo">
                            <img src="/assets/img/logo.svg" alt="Everest" aria-hidden="true">
                        </div>
                        <p class="item-prices__title">Секции "Взрослые"</p>
                        <ul class="item-prices__list">
                            <li class="item-prices__point"> Пакет "8 ЗАНЯТИЙ": <span>3 500 ₽</span>
                            </li>
                            <li class="item-prices__point"> Пакет "12 ЗАНЯТИЙ": <span>4 500 ₽</span>
                            </li>
                            <li class="item-prices__point"> Пакет "16 ЗАНЯТИЙ": <span>5 500 ₽</span>
                            </li>
                            <li class="item-prices__point"> Пакет "20 ЗАНЯТИЙ": <span>6 500 ₽</span>
                            </li>
                        </ul>
						<p class="item-prices__scriptum">Каждый пакет включает:
							<br/>- посещение секций в зале единоборств
							<br/>- посещение секций в тренажерном зале
							<br/>- посещение тренажерного зала с 12 до 16 часов ежедневно
							<br/>- посещение турецкой парной
						</p>
                        <button class="button item-prices__btn" onclick="$('#order_type').val('Абонимент: Зал единоборств')" data-open-modal="request">Записаться</button>
                    </div>
                </li>
                <li class="prices__item">
                    <div class="item-prices">
                        <div class="item-prices__logo">
                            <img src="/assets/img/logo.svg" alt="Everest" aria-hidden="true">
                        </div>
                        <p class="item-prices__title">Секции единоборств "Дети"</p>
                        <ul class="item-prices__list">
                            <li class="item-prices__point"> Пакет "8 ЗАНЯТИЙ": <span>3 500 ₽</span>
                            </li>
                            <li class="item-prices__point"> Пакет "12 ЗАНЯТИЙ": <span>4 000 ₽</span>
                            </li>
                            <li class="item-prices__point"> Пакет "16 ЗАНЯТИЙ": <span>5 000 ₽</span>
                            </li>
                            <li class="item-prices__point"> Пакет "20 ЗАНЯТИЙ": <span>6 000 ₽</span>
                            </li>
                        </ul>
                        <button class="button item-prices__btn" onclick="$('#order_type').val('Абонимент: Индивидуальные тренеровки')" data-open-modal="request">Записаться</button>
                    </div>
                </li>
                <li class="prices__item">
                    <div class="item-prices">
                        <div class="item-prices__logo">
                            <img src="/assets/img/logo.svg" alt="Everest" aria-hidden="true">
                        </div>
                        <p class="item-prices__title">Персональная тренировка</p>
                        <ul class="item-prices__list">
                            <li class="item-prices__point"> Разовая тренировка: <span>от 1 800 ₽</span>
                            </li>
                            <li class="item-prices__point"> Пакет "5 ТРЕНИРОВОК": <span>от 8 000 ₽</span>
                            </li>
                            <li class="item-prices__point"> Пакет "10 ТРЕНИРОВОК": <span>от 15 000 ₽</span>
                            </li>
                        </ul>
                        <p class="item-prices__scriptum">*Цены зависят от выбранного Вами тренера</p>
                        <button class="button item-prices__btn" onclick="$('#order_type').val('Абонимент: Индивидуальные тренеровки')" data-open-modal="request">Записаться</button>
                    </div>
                </li>
            </ul>
			<div class="about__text" style="margin-top: 50px;">
				<p>Информация, представленная на сайте, не является публичной офертой</p>
			</div>
        </div>
    </section>
@endsection
