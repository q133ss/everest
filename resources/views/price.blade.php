@extends('layouts.site')
@section('title', 'Стоимость')
@section('content')
    <section class="page-section prices">
        <div class="container">
            <h1 class="title prices__title">Стоимость</h1>
            <p class="subtitle prices__subtitle">Варианты и стоимость абонементов в нашем зале</p>
            <ul class="prices__list">
                @foreach($subscribes as $sub)
                <li class="prices__item">
                    <div class="item-prices">
                        <div class="item-prices__logo">
                            <img src="/assets/img/logo.svg" alt="Everest" aria-hidden="true">
                        </div>
                        <p class="item-prices__title">{{$sub->title}}</p>
                        <ul class="item-prices__list">
                            @foreach(json_decode($sub->price) as $title => $price)
                            <li class="item-prices__point"> {{$title}} <span>{{$price}} ₽</span>
                            </li>
                            @endforeach
                        </ul>
						<p class="item-prices__scriptum">
                            {{$sub->description}}
						</p>
                        <button class="button item-prices__btn" onclick="$('#order_type').val('Абонимент: {{$sub->title}}')" data-open-modal="request">Записаться</button>
                    </div>
                </li>
                @endforeach
            </ul>
			<div class="about__text" style="margin-top: 50px;">
				<p>Информация, представленная на сайте, не является публичной офертой</p>
			</div>
        </div>
    </section>
@endsection
