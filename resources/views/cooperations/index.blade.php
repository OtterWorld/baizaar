@extends('layouts.app')

@section('content')
<div class="container cooperation">

    <div class="row">

        <div class="col-sm-12">

        {{ Breadcrumbs::render('cooperations') }}
        
        <p class="title wow fadeInLeft">сотрудничество</p>

        <span class="line wow fadeInLeft"></span>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="box">

            <a class="cooperation-btn  wow fadeInLeft" href="#rent">арендаторам</a>

            <a class="cooperation-btn  wow fadeInUp" href="#advertising">рекламодателям</a>

            <a class="cooperation-btn  wow fadeInRight" href="#jobs">вакансии</a>

        </div>
        @if(session('request-succeeded'))
        <script>
        Swal.fire('{{ session("request-succeeded") }}')
        </script>
        @endif
        <!-- advertising -->
        <div class="advertising__main wow fadeInLeft" id="advertising">
        <div class="advertising-body">
            <p class="body__title">Лайтбоксы – Подъем с паркинга, боковые входы</p>
            <ul>
            <li>Расположение: пролеты между этажами, места над банкоматами</li>
            <li>Типы:</li>
            <li>Тип А, размер 1,2х1,5 метров</li>
            <li>Тип Б, размер 1,2х2,4 метров Монтаж/ демонтаж и изготовление за счет арендатора</li>
            </ul>
        </div>
        <div class="advertising__footer">
            <p class="footer__title">Заявка на рекламную площадь</p>
            <div class="container">
            <div class="row">
                <form method="POST" action="{{ route('advertisings.page.post') }}">
                    @csrf
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <input name="brand" type="text" name="" placeholder="Бренд / Торговый знак *">
                        <textarea name="type" id="" placeholder="Предполагаемый вид размещения рекламы или проведения мероприятия *"></textarea>
                        <textarea name="area_needed" id="" placeholder="Если проведение промо-акции или мероприятия, то предполагаемая площадь в м2 *"></textarea>
                        <textarea name="date" id="" placeholder="Предполагаемая дата проведения промо-акции (мероприятия) или размещения на рекламных конструкциях *"></textarea>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <textarea name="conception" id="" placeholder="Концепция и механика проведения промо-акции (мероприятия) *"></textarea>
                        <input name="email" type="text" placeholder="E-mail">
                        <input name="name" type="text" placeholder="ФИО*">
                        <textarea name="additional_information" id=""  placeholder="Дополнительная информация *"></textarea>
                        <button class="btn">Отправить</button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                    <ul>
                        <li class="footer__num">+7 (7172) 79 55 15 / 79 55 20 </li>
                        <li>Внутренние номера: <span>130, 131</span></li>
                        <li>E-mail: <span>d.kantaeva@keruen.kz</span></li>
                    </ul>
                    </div>
                </form>
            </div>
            </div>
        </div>
        </div>

        <!-- rent -->
        <div class="advertising__main wow fadeInLeft" id="rent">
        <div class="rent__head">
        <p class="rent__head-title">Анкета арендатора</p>
        <ul>
            <li>Если вы заинтересованы в сотрудничестве с нами, предлагаем заполнить анкету арендатора, которая поможет нам подготовить для вас максимально выгодное предложение.</li>
        </ul>
        </div>
        <div class="rent__body">
        <p class="rent__body-title">
            Заявка на арендную площадь в <span>ТРЦ BAIZAAR</span></p>
            <form action="{{ route('arendators.page.post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row rent__body-input">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <input type="text" name="shop_name" placeholder="Наименование бутика">
                        <input type="text" name="brand" placeholder="Бренд/Торговый знак">
                        <input type="text" name="activity_profile" placeholder="Профиль деятельности">
                        <input type="text" name="company_structure" placeholder="Структура компании">
                        <input type="text" name="target_audience" placeholder="Целевая аудитория">
                        <input type="file" name="file">
                        <input type="text" name="market_experience" placeholder="Опыт работы на рынке">
                        <input type="text" name="target_segment" placeholder="Ценовой сегмент">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <textarea name="amount_of_opened_shops" placeholder="Количество открытых магазинов, место расположение"></textarea> 
                        <input type="text" name="needed_help" placeholder="Требуемая помощь">
                        <input type="text" name="floor" placeholder="Этаж">
                        <input type="text" name="phones" placeholder="Контактные телефоны">
                        <input type="text" name="email" placeholder="E-mail">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <input type="text" name="site" placeholder="Web site">
                        <input type="text" name="name" placeholder="ФИО">
                        <textarea name="additional information" placeholder="Дополнительная информация"></textarea>
                        <button class="btn">Отправить</button>
                    </div>
                </div>
            </form>
        </div>
        </div>

        <!-- jobs -->
        <div class="advertising__main wow fadeInLeft" id="jobs">
        <ul class="jobs__tabs">
            <!-- 1 -->
            @foreach ($jobs as $job)
            <li><a href="#job__{{ $loop->iteration }}" class="active">
                <span>+</span>
                </a>
                <ul class="jobs__info">
                    <li class="date">Опубликовано {{ $job->created_at }}</li>
                    <li class="job__name">{{ $job->job_title }}</li>
                </ul>
                <div class="job__box" id="job__{{ $loop->iteration }}" style="display: none;"> 
                    <p class="job__box-title">Требуемый стаж работы</p>
                    {!! $job->experience !!}
                    <p class="job__box-title">Требования</p>
                    {!! $job->requirements !!}
                    <p class="salary">{{ $job->salary }}</p>
                    <form action="{{ route('jobs.page.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="job_id" value="{{ $job->id }}">
                        <input name="city" type="text" placeholder="Алматы">
                        <input name="name" type="text" placeholder="ФИО">
                        <input name="phone" type="text" placeholder="Телефон">
                        <input name="email" type="text" placeholder="Email">
                        <input name="resume" class="file" type="file">
                        <textarea name="comment" id="" placeholder="Ваш комментарий"></textarea>
                        <button class="btn">Отправить</button>
                    </form>
                </div></li>
            @endforeach
        </ul>
        </div>
        <!-- end jobs -->
        </div>
        
    </div>
    
</div>
@endsection