@extends('layouts.site')
@section('title', 'Груповые тренеровки')
@section('content')
    <section class="page-section directions">
        <div class="container">
            <div class="directions__top">
                <h1 class="title directions__title">Групповые тренировки</h1>
                <!-- <p class="subtitle directions__subtitle">спортивное направление - групповые тренировки</p> -->
                <a class="directions__link" href="{{route('schedule')}}">
                    <span>Смотреть расписание</span>
                </a>
            </div>
            <ul class="directions__list">
                <li class="directions__item">
                    <div class="item-directions">
                        <div class="item-directions__img">
                            <img src="/assets/img/directions-07--big.jpg" alt="Кроссфит">
                        </div>
                        <div class="item-directions__info">
                            <h3 class="item-directions__title">Кроссфит</h3>
                            <p class="item-directions__text">Интервальная тренировка высокой интенсивности на силу и выносливость, состоящая из разнообразных анаэробных упражнений, элементов гиревого спорта, пауэрлифтинга, гимнастики, тяжелой атлетики и упражнений с собственным
                                весом </p>
                            <button class="button item-directions__btn"></button>
                        </div>
                    </div>
                    <div class="popup-directions" data-modal="directions">
                        <div class="popup-directions__wrapper" data-modal-wrapper>
                            <div class="popup-directions__content" data-modal-content>
                                <button class="popup-directions__close" data-modal-close aria-label="Закрыть модальное окно">
                                    <svg class="icon">
                                        <use xlink:href="/assets/img/sprite.svg#close"></use>
                                    </svg>
                                </button>
                                <div class="popup-directions__img">
                                    <img src="/assets/img/directions-07--big.jpg" alt="КРОССФИТ">
                                </div>
                                <div class="popup-directions__info">
                                    <p class="popup-directions__title">Кроссфит</p>
                                    <div class="popup-directions__text">
                                        <p>Кроссфит — вид интервальных тренировок высокой интенсивности, направленных на развитие силы и выносливости. Каждая тренировка состоит из различных комбинаций анаэробных упражнений, элементов гиревого спорта,
                                            пауэрлифтинга, плиометрики, гимнастики, тяжелой атлетики и упражнений с собственным весом. Кроссфит продвигается и как система физических упражнений, и как соревновательный вид спорта. </p>
                                        <p>Задача кроссфита — оптимизация физического состояния человека в десяти направлениях: сердечно-сосудистая, дыхательная и мышечная выносливость, сила, гибкость, мощность, скорость, координация, ловкость, точность
                                            и баланс в пространстве. </p>
                                        <p>Для занятий используется самый разный инвентарь и тренажеры: гантели и штанги, скакалки и эспандеры, турники, гири, мячи, гребные тренажеры. Некоторые спортсмены также используют колеса от грузовых автомобилей
                                            и кувалды в своих тренировках, однако такой подход считается травмоопасным, поэтому в тренировочных залах к нему не прибегают.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="directions__item">
                    <div class="item-directions">
                        <div class="item-directions__img">
                            <img src="/assets/img/directions-08--big.jpg" alt="Круговая тренировка">
                        </div>
                        <div class="item-directions__info">
                            <h3 class="item-directions__title">Круговая тренировка</h3>
                            <p class="item-directions__text">Высокоинтенсивный метод тренировок, направленный на максимально эффективное сжигание жира и улучшение рельефа тела, включает многосуставные упражнения и позволяет прорабатывать все основные группы мышц </p>
                            <button class="button item-directions__btn"></button>
                        </div>
                    </div>
                    <div class="popup-directions" data-modal="directions">
                        <div class="popup-directions__wrapper" data-modal-wrapper>
                            <div class="popup-directions__content" data-modal-content>
                                <button class="popup-directions__close" data-modal-close aria-label="Закрыть модальное окно">
                                    <svg class="icon">
                                        <use xlink:href="/assets/img/sprite.svg#close"></use>
                                    </svg>
                                </button>
                                <div class="popup-directions__img">
                                    <img src="/assets/img/directions-08--big.jpg" alt="Круговая тренировка">
                                </div>
                                <div class="popup-directions__info">
                                    <p class="popup-directions__title">Круговая тренировка</p>
                                    <div class="popup-directions__text">
                                        <p>Круговая тренировка — это высокоинтенсивный метод тренировок, направленный на максимально эффективное сжигание жира и улучшение рельефа тела. Это направление включает в себя многосуставные упражнения и позволяет
                                            прорабатывать все основные группы мышц.</p>
                                        <p>Такие тренировки проходят по заранее подготовленной тренером схеме, которая повторяется по кругу несколько раз. Например, у вас будет 3 круга по 7 упражнений, в каждом из которых по 15-30 повторений. Отдых
                                            между кругами будет 2-3 минуты, а между упражнениями — 10-15 секунд. Это позволяет телу работать на пределе своих возможностей, постепенно улучшая физические показатели.</p>
                                        <p>По причине своей энергозатратности круговые тренировки подходят наилучшим образом для снижения веса или улучшения общей физической формы, но не для набора мышечной массы. Такие тренировки стоит выбрать людям,
                                            которых не привлекают классические кардио-нагрузки из-за своей монотонности. При круговых тренировках комбинируется разная деятельность, что не просто не дает заскучать, но и равномерно развивает все
                                            физические показатели.</p>
                                        <p>Что удобно — тренировки можно собирать по принципу конструктора, комбинируя самые полезные и любимые упражнения. Вы всегда сможете создать для себя идеальный план занятий, которые доставляют вам максимальное
                                            удовольствие.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="directions__item">
                    <div class="item-directions">
                        <div class="item-directions__img">
                            <img src="/assets/img/directions-09--big.jpg" alt="RealRyder">
                        </div>
                        <div class="item-directions__info">
                            <h3 class="item-directions__title">RealRyder</h3>
                            <p class="item-directions__text">Тренировка на специальных велотренажерах, которые симулируют гонку на реальном велосипеде: во время езды велосипед наклоняется в стороны, а руль свободно поворачивается, что создает дополнительную нагрузку </p>
                            <button class="button item-directions__btn"></button>
                        </div>
                    </div>
                    <div class="popup-directions" data-modal="directions">
                        <div class="popup-directions__wrapper" data-modal-wrapper>
                            <div class="popup-directions__content" data-modal-content>
                                <button class="popup-directions__close" data-modal-close aria-label="Закрыть модальное окно">
                                    <svg class="icon">
                                        <use xlink:href="/assets/img/sprite.svg#close"></use>
                                    </svg>
                                </button>
                                <div class="popup-directions__img">
                                    <img src="/assets/img/directions-09--big.jpg" alt="RealRyder">
                                </div>
                                <div class="popup-directions__info">
                                    <p class="popup-directions__title">RealRyder</p>
                                    <div class="popup-directions__text">
                                        <p>RealRyder — одно из самых молодых тренировочных направлений, суть которого заключается в тренировке на динамичных велотренажерах, моделирующих гонку на реальном велосипеде. То есть, во время тренировки велосипед
                                            наклоняется в стороны, а руль свободно поворачивается, что создает дополнительную нагрузку на все группы мышц.</p>
                                        <p>Такой подход добавляет азарта и создает ощущение настоящей велогонки, сжигая при этом максимальное количества калорий. RealRyder сочетает в себе работу с балансом, пилатес и кардио, обеспечивая функциональную
                                            тренировку всего организма.</p>
                                        <p>Сайкл в том или ином виде отлично развивает дыхательную, сердечно-сосудистую и мышечную выносливость, поддерживает тело в тонусе и значительно улучшает настроение после каждого заезда.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- <li class="directions__item"> -->
                    <!-- <div class="item-directions"> -->
                        <!-- <div class="item-directions__img"> -->
                            <!-- <img src="/assets/img/directions-10--big.jpg" alt="Йога"> -->
                        <!-- </div> -->
                        <!-- <div class="item-directions__info"> -->
                            <!-- <h3 class="item-directions__title">Йога</h3> -->
                            <!-- <p class="item-directions__text">Целая система оздоровления комплексного оздоровления организма через выполнение физических упражнений, дыхательных техник и концентрацию внимания, направленных на улучшение силы, гибкости и баланса</p> -->
                            <!-- <button class="button item-directions__btn"></button> -->
                        <!-- </div> -->
                    <!-- </div> -->
                    <!-- <div class="popup-directions" data-modal="directions"> -->
                        <!-- <div class="popup-directions__wrapper" data-modal-wrapper> -->
                            <!-- <div class="popup-directions__content" data-modal-content> -->
                                <!-- <button class="popup-directions__close" data-modal-close aria-label="Закрыть модальное окно"> -->
                                    <!-- <svg class="icon"> -->
                                        <!-- <use xlink:href="/assets/img/sprite.svg#close"></use> -->
                                    <!-- </svg> -->
                                <!-- </button> -->
                                <!-- <div class="popup-directions__img"> -->
                                    <!-- <img src="/assets/img/directions-10--big.jpg" alt="Йога"> -->
                                <!-- </div> -->
                                <!-- <div class="popup-directions__info"> -->
                                    <!-- <p class="popup-directions__title">Йога</p> -->
                                    <!-- <div class="popup-directions__text"> -->
                                        <!-- <p>Йога — комплексная система оздоровления организма при помощи физических упражнений, дыхательных техник и концентрации внимания на своем теле, ощущениях и мыслях. Практики направлены на развитие силы, гибкости, -->
                                            <!-- работу с физическим и ментальным балансом. </p> -->
                                        <!-- <p>Изначально это была чисто духовная практика, но со временем она начала трансформироваться и адаптироваться под задачи современных людей, постепенно смещая акцент в сторону работы с телом, а не духом.</p> -->
                                        <!-- <p>Этот вид физических нагрузок отлично помогает в борьбе со стрессом, учит замедляться и обращать внимание на настоящее. Йога восстанавливает эмоциональный фон, благоприятно влияет на гормональный баланс, -->
                                            <!-- нормализует сон и укрепляет физическое здоровье. Такая нагрузка отлично подойдет тем, кто не любит или не может работать с тяжелыми весами или сложными интервальными тренировками.</p> -->
                                        <!-- <p>При этом йога — это не совсем спорт, а скорее личная практика, направленная на работу с телом и внутренним миром. Это отличный инструмент для восстановления баланса в своей жизни и развития самодисциплины. -->
                                            <!-- Для занятий вам потребуется только собственное тело, спортивный коврик и при желании — компания единомышленников.</p> -->
                                    <!-- </div> -->
                                <!-- </div> -->
                            <!-- </div> -->
                        <!-- </div> -->
                    <!-- </div> -->
                <!-- </li> -->
            </ul>
        </div>
    </section>
@endsection
@section('js')
    <style>
        .item-directions {
            height: auto !important;
        }
    </style>
@endsection
