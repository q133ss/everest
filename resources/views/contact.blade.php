@extends('layouts.site')
@section('title', 'Контакты')
@section('content')
    <section class="page-section contacts">
        <div class="container">
            <h1 class="title contacts__title">Контакты</h1>
            <p class="subtitle contacts__subtitle">Связаться с нами</p>
            <div class="contacts__inner">
                <div class="contacts__info">
                    <div class="group-contacts contacts__group">
                        <p class="group-contacts__title">телефон:</p>
                        <div class="group-contacts__inner">
                            <a class="contacts-item" href="tel:79213333840">
                    <span class="contacts-item__icon">
                      <svg class="icon">
                        <use xlink:href="/assets/img/sprite.svg#phone"></use>
                      </svg>
                    </span>
                                <span class="contacts-item__text">+7 921 33 33 840</span>
                            </a>
                            <a class="contacts-item" href="tel:79313333890">
                    <span class="contacts-item__icon">
                      <svg class="icon">
                        <use xlink:href="/assets/img/sprite.svg#phone"></use>
                      </svg>
                    </span>
                                <span class="contacts-item__text">+7 931 33 33 890</span>
                            </a>
                        </div>
                    </div>
                    <div class="group-contacts contacts__group contacts__group--email">
                        <p class="group-contacts__title">e-mail:</p>
                        <div class="group-contacts__inner">
                            <a class="contacts-item" href="mailto:info@everest.ru">
								<span class="contacts-item__icon">
								  <svg class="icon">
									<use xlink:href="/assets/img/sprite.svg#mail"></use>
								  </svg>
								</span>
                                <span class="contacts-item__text">everest-sg@yandex.ru</span>
                            </a>
                        </div>
                    </div>
                    <div class="group-contacts contacts__group">
                        <p class="group-contacts__title">Адрес:</p>
                        <div class="group-contacts__inner">
                            <p class="contacts-item">
								<span class="contacts-item__icon">
								  <svg class="icon">
									<use xlink:href="/assets/img/sprite.svg#location"></use>
								  </svg>
								</span>
                                <span class="contacts-item__text">Пр. Ветеранов, д. 169, к. 4<br/>ТК «Солнечный» 3 этаж</span>
                            </p>
                        </div>
                    </div>
                    <div class="group-contacts contacts__group">
                        <p class="group-contacts__title">график работы:</p>
                        <div class="group-contacts__inner">
                            <p class="contacts-item">
								<span class="contacts-item__icon">
								  <!-- <svg class="icon"> -->
									<!-- <use xlink:href="/assets/img/clock.svg"></use> -->
								  <!-- </svg> -->
								  <img src="/assets/img/clock.png" width="16px" height="16px" />
								</span>
								<span class="contacts-item__text">Пн-Пт: 7:00 - 23:00
								  <br>Сб-Вс: 8:00 - 22.30
								</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="contacts__map">
                    <a class="contacts-item contacts-item--accent contacts-item--underline" target="_blank" href="https://yandex.ru/maps/-/CCU5jZCwHA">
                        <span class="contacts-item__text">Перейти в яндекс карты</span>
                        <span class="contacts-item__icon">
                  <svg class="icon">
                    <use xlink:href="/assets/img/sprite.svg#location"></use>
                  </svg>
                </span>
                    </a>
                    <div class="contacts__map-iframe" id="map">
                        <!-- <div style="position:relative;overflow:hidden;"><a
                      href="https://yandex.ru/maps/org/everest/50973682739/?utm_medium=mapframe&utm_source=maps"
                      style="color:#eee;font-size:12px;position:absolute;top:0px;">Everest</a><a
                      href="https://yandex.ru/maps/2/saint-petersburg/category/sports_club_group/184107297/?utm_medium=mapframe&utm_source=maps"
                      style="color:#eee;font-size:12px;position:absolute;top:14px;">Спортивный клуб, секция в
                      Санкт‑Петербурге</a><a
                      href="https://yandex.ru/maps/2/saint-petersburg/category/workout_center/41430094175/?utm_medium=mapframe&utm_source=maps"
                      style="color:#eee;font-size:12px;position:absolute;top:28px;">Спортивный, тренажёрный зал в
                      Санкт‑Петербурге</a><iframe src="https://yandex.ru/map-widget/v1/-/CCU5Z6w9wB" width="560" height="400"
                      frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
@endsection
