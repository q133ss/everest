@extends('layouts.site')
@section('title', 'Новости')
@section('content')
<style>
    .item-articles__top h2.item-articles__btn{
        min-width:unset!important;
        right: unset!important;
        position: unset!important;
    }
</style>
        <section class="page-section articles">
            <div class="container">
                <h1 class="title articles__title">Новости клуба</h1>
                <p class="subtitle articles__subtitle">новости и акции</p>
                <ul class="articles__list">
                    @foreach($posts as $post)
                    <li class="articles__item">
                        <article class="item-articles">
                            <div class="item-articles__top">
                                <h2 class="item-articles__title item-articles__btn" style="cursor: pointer;">{{$post->title}}</h2>
                                <time class="item-articles__date" datetime="2022-02-02">02.02.2022</time>
                            </div>
                            <div class="item-articles__img">
                                <img src="{{$post->img}}" alt="Какая-либо новость">
                            </div>
                            <p class="item-articles__excerpt">{{$post->excerpt}}</p>
                            <button class="button item-articles__btn"></button>
                        </article>
                        <div class="popup-articles" data-modal="articles">
                            <div class="popup-articles__wrapper" data-modal-wrapper>
                                <div class="popup-articles__content" data-modal-content>
                                    <button class="popup-articles__close" data-modal-close aria-label="Закрыть модальное окно">
                                        <svg class="icon">
                                            <use xlink:href="/assets/img/sprite.svg#close"></use>
                                        </svg>
                                    </button>
                                    <div class="popup-articles__img">
                                        <img src="{{$post->banner}}" alt="КРОССФИТ">
                                    </div>
                                    <div class="popup-articles__info">
                                        <p class="popup-articles__title">{{$post->title}}</p>
                                        <div class="popup-articles__text">
                                            <p>{!! $post->text !!} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                @if($posts->count() >= 12)
                {{$posts->links('pagination.index')}}
                @endif

            </div>
        </section>
@endsection
