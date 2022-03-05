@extends('layouts.site')
@section('title', 'Единоборства')
@section('content')
    <section class="page-section directions">
        <div class="container">
            <div class="directions__top">
                <h1 class="title directions__title">Единоборства</h1>
                <p class="subtitle directions__subtitle">спортивнон направление - единоборства</p>
                <a class="directions__link" href="{{route('schedule')}}">
                    <span>Смотреть расписание</span>
                </a>
            </div>
            <ul class="directions__list">
                <li class="directions__item">
                    <div class="item-directions">
                        <div class="item-directions__img">
                            <img src="/assets/img/directions-01--big.jpg" alt="ММА">
                        </div>
                        <div class="item-directions__info">
                            <h3 class="item-directions__title">ММА</h3>
                            <p class="item-directions__text">Cмешанный вид единоборств, полноконтактный, с применением ударной техники и элементов борьбы как в стойке, так и в партере</p>
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
                                    <img src="/assets/img/directions-01--big.jpg" alt="КРОССФИТ">
                                </div>
                                <div class="popup-directions__info">
                                    <p class="popup-directions__title">MMA</p>
                                    <div class="popup-directions__text">
                                        <p>ММА — смешанный вид боевых искусств, который сочетает в себе множество техник, направлений и школ единоборств. В процессе поединка происходит как полноконтактный бой, где применяется ударная техника, так
                                            и борьба в стойке или в партере. Именно такая комбинация делает этот вид единоборств наиболее зрелищным.</p>
                                        <p>Однако не стоит путать это направление с боями без правил. Каждый поединок проходит по установленному регламенту. Запрещено более 30 приемов и действий, которые могут привести к травмам — например, удары
                                            в позвоночник или горло. За нарушение правил спортсмена отстраняют или дисквалифицируют.</p>
                                        <p>Каждый поединок ММА длится от 3 до 5 раундов, продолжительностью по 5 минут. Все спортсмены разделяются на весовые категории, а во время боя используются капы для защиты зубов и специальные перчатки, смягчающие
                                            удар. ММА часто путают с UFC, но последнее — это всего лишь один из самых известных и престижных чемпионатов, посвященных боевым искусствам. UFC — это возможность узнать, как выглядит ММА со стороны.
                                            Это направление — одно из самых быстро развивающихся видов спорта. Дисциплина ежегодно набирает все большую популярность как среди спортсменов, так и зрителей.</p>
                                        <p>Тренировки включают в себя развитие выносливости и силы, отработку техники приемов атаки или защиты. Также проходит работа в парах, спарринг и упражнения на снарядах.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="directions__item">
                    <div class="item-directions">
                        <div class="item-directions__img">
                            <img src="/assets/img/directions-02--big.jpg" alt="БОКС">
                        </div>
                        <div class="item-directions__info">
                            <h3 class="item-directions__title">БОКС</h3>
                            <p class="item-directions__text">Контактный вид единоборств, в котором спортсмены наносят друг другу удары только кулаками в боксерских перчатках и только выше пояса </p>
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
                                    <img src="/assets/img/directions-02--big.jpg" alt="БОКС">
                                </div>
                                <div class="popup-directions__info">
                                    <p class="popup-directions__title">БОКС</p>
                                    <div class="popup-directions__text">
                                        <p>Бокс — контактный вид единоборств, в котором спортсмены наносят друг другу удары только выше пояса и только при помощи рук. Бой проходит в специальных перчатках, обеспечивающих безопасность спортсмена и
                                            его соперника. Для защиты зубов, челюсти и десен используются специальные капы.</p>
                                        <p>Поединок проходит в 12 раундов длительностью 3 минуты, а весь бой контролируется рефери, который всегда находится на ринге. Победу присуждают спортсмену, который набрал больше очков или сбил соперника с
                                            ног так, что тот не смог подняться в течение 10 секунд. В отдельных случаях поединок прекращается, если один из спортсменов получил травму, не позволяющую продолжать бой (технический нокаут). </p>
                                        <p>В боксе также существует ряд запрещенных приемов и ударов. За нарушение правил боя спортсмену грозит снятие очков или полная дисквалификация.</p>
                                        <p>Существует несколько стилей боксирования, и в процессе тренировок каждый спортсмен самостоятельно выбирает, какой именно ему стоит оттачивать в совершенстве. При подготовке боксеров внимание уделяется развитию
                                            всего тела, а не только рук. Важны кардио-тренировки, поскольку бокс требует выносливости. Тренировки состоят из силовых нагрузок, отработки техники нанесения ударов и защиты, упражнений в парах и на
                                            снарядах, спарринга.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="directions__item">
                    <div class="item-directions">
                        <div class="item-directions__img">
                            <img src="/assets/img/directions-03--big.jpg" alt="КИКБОКСИНГ">
                        </div>
                        <div class="item-directions__info">
                            <h3 class="item-directions__title">КИКБОКСИНГ</h3>
                            <p class="item-directions__text">Один из видов контактного единоборства, объединивший в себе технику кулачного боя и ударов ногами </p>
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
                                    <img src="/assets/img/directions-03--big.jpg" alt="КИКБОКСИНГ">
                                </div>
                                <div class="popup-directions__info">
                                    <p class="popup-directions__title">КИКБОКСИНГ</p>
                                    <div class="popup-directions__text">
                                        <p>Кикбоксинг — вид спортивных контактных единоборств, который сочетает в себе технику кулачного боя и удары ногами, характерные для восточных боевых искусств. Также существует ряд приемов, присущих только
                                            для этого вида спорта.</p>
                                        <p>Поединок проходит только в полной экипировке, которую перед началом боя проверяет рефери. </p>
                                        <p>Каждый спортсмен обязан надеть: </p>
                                        <ul>
                                            <li>защитный шлем и капу;</li>
                                            <li>футы для защиты стоп; </li>
                                            <li>накладки на голени;</li>
                                            <li>защитную паховую раковину;</li>
                                            <li>эластичные бинты на руки;</li>
                                            <li>боксерские перчатки;</li>
                                            <li>для женщин также предусмотрен грудной протектор.</li>
                                        </ul>
                                        <p>Бой длится в среднем 3 раунда по 2-3 минуты. У профессиональных спортсменов на крупных соревнованиях бывает до 10 раундов. За 1 раунд можно использовать только 6 ударов ногой, иначе бойцу будет вынесено
                                            предупреждение.
                                        </p>
                                        <p>Программа тренировок по кикбоксингу включает в себя силовые и кардио-упражнения, а также отработку техники ударов и защиты, работу на снарядах, спарринги и технику «бой с тенью», когда спортсмен отрабатывает
                                            удары перед зеркалом на вымышленном противнике. При подготовке спортсмена стараются равномерно развить мышечный корсет, выносливость, скорость и технику владения приемами.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="directions__item">
                    <div class="item-directions">
                        <div class="item-directions__img">
                            <img src="/assets/img/directions-04--big.jpg" alt="Бразильское джиу-джитсу">
                        </div>
                        <div class="item-directions__info">
                            <h3 class="item-directions__title">Бразильское джиу-джитсу</h3>
                            <p class="item-directions__text">Cмешанный вид единоборств, боевое искусство и международное спортивное единоборство,основой которого является борьба в партере</p>
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
                                    <img src="/assets/img/directions-04--big.jpg" alt="Бразильское джиу-джитсу">
                                </div>
                                <div class="popup-directions__info">
                                    <p class="popup-directions__title">Бразильское джиу-джитсу</p>
                                    <div class="popup-directions__text">
                                        <p>Бразильское джиу-джитсу — международное спортивное единоборство и боевое искусство, основанное на борьбе в партере (на земле), а также болевых и удушающих приемах. Изучать это направление можно как для самозащиты,
                                            поскольку в нем даже человек слабого телосложения может обыграть более массивного противника, так и для участия в спортивных соревнованиях или подготовке к участию в ММА.</p>
                                        <p>Бой основан на переводе противника на землю и последующей борьбе в этой плоскости при помощи специальных приемов. Как только один из спортсменов падает на землю, он теряет преимущество. Суть поединка — заставить
                                            соперника сдаться или просто его обезвредить, в зависимости от вида джиу-джитсу. Удары в этой борьбе не используются. Также существует ряд приемов, которые запрещены или ограничены к использованию во
                                            избежание травмирования спортсменов.</p>
                                        <p>На тренировках проходит как силовая, так и кардио-подготовка, но основное внимание уделяется отработке тренировочных техник на несопротивляющемся партнёре, то есть, с помощью ограниченного спарринга. После
                                            того, как спортсмен достигает определенного уровня подготовки, подключается полный спарринг, где разрешается использовать всей техники джиу-джитсу.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="directions__item">
                    <div class="item-directions">
                        <div class="item-directions__img">
                            <img src="/assets/img/directions-05--big.jpg" alt="Самбо">
                        </div>
                        <div class="item-directions__info">
                            <h3 class="item-directions__title">Самбо</h3>
                            <p class="item-directions__text">вид спортивного единоборства, а также комплексная система самообороны без оружия на основе техник дзюдо </p>
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
                                    <img src="/assets/img/directions-05--big.jpg" alt="Самбо">
                                </div>
                                <div class="popup-directions__info">
                                    <p class="popup-directions__title">Самбо</p>
                                    <div class="popup-directions__text">
                                        <p>Самбо — это не только вид спортивных единоборств, но и полноценная система для самообороны без использования оружия, основанная на техниках дзюдо и джиу-джитсу. Это одно из немногих единоборств, разработанное
                                            российскими спортсменами.</p>
                                        <p>Существует два направления самбо: спортивное и боевое. В первом случае основная задача спортсмена заключается в качественной демонстрации бросовой техники или болевых приемов, а во втором оценивается способность
                                            спортсмена максимально быстро и эффективно обезвредить противника и лишить его возможности сопротивляться. В процессе тренировочного боя запрещено использование любых удушающих приемов.</p>
                                        <p>У самбо есть своя философия, которая заключается не только в изучении спецприемов, но и в воспитании у спортсмена морально-волевых качеств, которые помогут ему не только на ринге, но и в обычной жизни.</p>
                                        <p>Чтобы стать хорошим самбистом, нужно уделять время не только отработке техники и приемов, но и всестороннему физическому развитию — от силы, ловкости и скорости напрямую зависит эффективность в бою. Программа
                                            тренировок включает силовые и кардио-нагрузки, а также отработку бросковой и ударной техники, отработку приемов обезоруживания противника (при необходимости) и спарринг.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="directions__item">
                    <div class="item-directions">
                        <div class="item-directions__img">
                            <img src="/assets/img/directions-06--big.jpg" alt="Карате">
                        </div>
                        <div class="item-directions__info">
                            <h3 class="item-directions__title">Карате</h3>
                            <p class="item-directions__text">Японское боевое искусство, которое представляет собой систему защиты и нападения </p>
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
                                    <img src="/assets/img/directions-06--big.jpg" alt="Карате">
                                </div>
                                <div class="popup-directions__info">
                                    <p class="popup-directions__title">Карате</p>
                                    <div class="popup-directions__text">
                                        <p>Карате — традиционное японское боевое искусство, основанное на системе защиты и нападения. В поединке контакт между противниками минимален, а весь бой выстроен на выверенных мощных ударах руками или ногами,
                                            которые наносятся в жизненно важные участки тела. При этом существует ряд ударов и приемов, запрещенных к использованию. Это сделано с целью обеспечения безопасности спортсменов. </p>
                                        <p>Соревнования по карате проходят в трех направлениях: </p>
                                        <ul>
                                            <li>свободный бой (кумитэ);</li>
                                            <li>демонстрация упражнений (ката);</li>
                                            <li>разбивание неподвижных предметов (тамешивари). </li>
                                        </ul>
                                        <p>Большая часть свободных боев проходит в спортивном, а не боевом направлении. Спортсменам запрещено использовать атакующие и боковые приемы, нельзя задействовать колени и локти, а передвижение возможно только
                                            с помощью прыжков, похожих на боксерские.</p>
                                        <p>Кумитэ — это спарринг между двумя спортсменами, который проводится по определенным правилам.</p>
                                        <p>Ката — это процесс последовательная демонстрация спортсменом стоек, технических движений и различных приемов, выполняемых с разной скоростью.</p>
                                        <p>Тамешивари — демонстрация разрушения неподвижных предметов путем точечных и мощных ударов в нужную точку. Здесь важно умение концентрироваться на задаче, ведь рассеянность может привести к неудаче. </p>
                                        <p>Система оценки достижений и мастерства представлена поясами. Ранги называются «кю» или «даны». Всего их 9: белый, желтый, оранжевый, зеленый, красный, темно-синий, светло-коричневый, коричневый, темно-коричневый
                                            и черный.</p>
                                        <p>Как и в большинстве восточных единоборств, для достижения значимых результатов спортсмену требуется равномерно развивать как физическое тело, так и навык владения приемами. Большинство тренировок строится
                                            вокруг отработки техники или спарринга, но периодически тренер может подключать силовые или кардио-нагрузки.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
@endsection
