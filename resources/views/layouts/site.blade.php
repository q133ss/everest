<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/assets/css/bundle.min.css">
    <link rel="stylesheet" href="/assets/css/vendors.min.css">
    <link rel="stylesheet" href="/assets/css/style.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body class="page page--index">
<div class="page__wrapper">
    <header class="header">
        <div class="container header__container">
            <button class="header-burger" data-open-modal="menu" aria-label="Открыть меню">
                <svg class="icon">
                    <use xlink:href="/assets/img/sprite.svg#burger"></use>
                </svg>
            </button>
            <a class="header__logo logo" href="/">
                <img src="/assets/img/logo.svg" alt="Everest">
            </a>
            <a class="contacts-item header__phone" href="tel:79213333840">
                <span class="contacts-item__text">+7 921 33 33 840</span>
                <span class="contacts-item__icon">
            <svg class="icon">
              <use xlink:href="/assets/img/sprite.svg#phone"></use>
            </svg>
          </span>
            </a>
            <div class="nav header__nav" data-modal="menu">
                <div class="nav__wrapper" data-modal-wrapper>
                    <div class="nav__content">
                        <button class="nav__close" data-modal-close aria-label="Закрыть модальное окно">
                            <svg class="icon">
                                <use xlink:href="/assets/img/sprite.svg#close"></use>
                            </svg>
                        </button>
                        <ul class="menu nav__menu">
                            <li>
                                <a href="{{route('about.index')}}">О клубе</a>
                            </li>
                            <li class="menu-dropdown">
                                <a href="#">Направления</a>
                                <ul>
                                    <li>
                                        <a href="{{route('solo')}}">Единоборства</a>
                                    </li>
                                    <li>
                                        <a href="{{route('group')}}">Групповые тренировки</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{route('trainer.index')}}">Тренеры</a>
                            </li>
                            <li>
                                <a href="{{route('news.index')}}">Новости и анонсы</a>
                            </li>
                            <li>
                                <a href="{{route('schedule')}}">Рассписание</a>
                            </li>
                            <li>
                                <a href="{{route('price.index')}}">Стоимость</a>
                            </li>
                            <li>
                                <a href="{{route('shop.index')}}">Магазин</a>
                            </li>
                            <li>
                                <a href="{{route('contact.index')}}">Контакты</a>
                            </li>
                        </ul>
                        <div class="nav__contacts">
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
                        <div class="nav__socials">
                            <a class="contacts-item" href="#" aria-label="Перейти в Instagram">
                                    <span class="contacts-item__icon">
                    <svg class="icon">
                      <use xlink:href="/assets/img/sprite.svg#instagram"></use>
                    </svg>
                  </span>
                            </a>
                            <a class="contacts-item" href="#" aria-label="Перейти в Вконтакте">
                                    <span class="contacts-item__icon">
                    <svg class="icon">
                      <use xlink:href="/assets/img/sprite.svg#vk"></use>
                    </svg>
                  </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        @yield('content')
    </main>
    <footer class="footer">
        <div class="container footer__container">
            <div class="footer__info">
                <address class="footer__address">Пр. Ветеранов, д. 169, к. 4 ТК «Солнечный» 3 этаж</address>
                <a class="footer__policy" href="/assets/policy.html">Политика конфедициальности</a>
            </div>
            <a class="logo footer__logo" href="/assets/">
                <img src="/assets/img/logo.svg" alt="Everest">
            </a>
            <div class="footer__inner">
                <div class="footer-contacts footer__contacts">
                    <a class="contacts-item footer-contacts__item" href="tel:79213333840">
                            <span class="contacts-item__icon">
                <svg class="icon">
                  <use xlink:href="/assets/img/sprite.svg#phone"></use>
                </svg>
              </span>
                        <span clas="contacts-item__text">+7 921 33 33 840</span>
                    </a>
                    <a class="contacts-item footer-contacts__item" href="tel:79313333890">
                            <span class="contacts-item__icon">
                <svg class="icon">
                  <use xlink:href="/assets/img/sprite.svg#phone"></use>
                </svg>
              </span>
                        <span clas="contacts-item__text">+7 931 33 33 890</span>
                    </a>
                </div>
                <div class="footer-socials">
                    <a class="contacts-item footer-socials__item" href="#" aria-label="Перейти в Instagram">
                            <span class="contacts-item__icon">
                <svg class="icon">
                  <use xlink:href="/assets/img/sprite.svg#instagram"></use>
                </svg>
              </span>
                    </a>
                    <a class="contacts-item footer-socials__item" href="#" aria-label="Перейти в Вконтакте">
                            <span class="contacts-item__icon">
                <svg class="icon">
                  <use xlink:href="/assets/img/sprite.svg#vk"></use>
                </svg>
              </span>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</div>
<div class="modal" data-modal="request">
    <div class="modal__wrapper" data-modal-wrapper>
        <div class="modal__content">
            <button class="modal__close" data-modal-close aria-label="Закрыть модальное окно">
                <svg class="icon">
                    <use xlink:href="/assets/img/sprite.svg#close"></use>
                </svg>
            </button>
            <p class="modal__title">Для записи на тренировку оставьте ниже свои контакты</p>
            <p class="modal__subtitle">Мы презвоним вам для уточнения деталей</p>
            <form class="form form-modal modal__form" action="#" method="POST">
                <label class="form-field">
                    <input class="form-field__input" id="order_name" type="text" name="name" placeholder="Имя" required>
                    <span class="form-field__placeholder">имя</span>
                </label>
                <label class="form-field">
                    <input class="form-field__input" id="order_phone" type="text" name="phone" placeholder="номер телефона" required>
                    <span class="form-field__placeholder">номер телефона</span>
                </label>
                <label class="form-field">
                    <input class="form-field__input" id="order_comment" type="text" name="name" placeholder="комментарий" required>
                    <span class="form-field__placeholder">коментарий <span>(необязательно)</span>
            </span>
                </label>
                <input type="hidden" id="order_type" value="">
                <div class="form-modal__btns">
                    <button class="button form-modal__submit" type="button" onclick="new_order($('#order_name').val(),$('#order_phone').val(),$('#order_comment').val(), $('#order_type').val())">Отправить</button>
                    <a class="button button--outline form-modal__call" href="tel:79213333840">Позвонить</a>
                    <a class="form-modal__privacy" href="/assets/policy.html">Политика конфедициальности</a>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
{{--<script src="/assets/js/main.min.js"></script>--}}
<script src="/assets/js/my.js"></script>
<script>
    function new_order(name,phone,comment,type){
        $.ajax({
            url: '{{route('orders.new')}}',
            type: "POST",
            data: {
                name:name,
                phone:phone,
                comment:comment,
                type:type
            },
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (data) => {
                console.log(data)
                $('.modal__close').click()
            },
            error: function(request, status, error) {
               alert(statusCode = request.responseText);
            }
        });
    }

    $(".nav__content .nav__menu li a").each(function () {
        var location2 = window.location.protocol + '//' + window.location.host + window.location.pathname;
        var link = this.href;
        if(link == location2){
            $(this).parent().addClass('current');
            $(this).parent().parent().parent().addClass('active');

        }
    });
</script>
@yield('js')
</body>

</html>
