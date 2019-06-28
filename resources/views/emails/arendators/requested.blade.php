@component('mail::message')
# Письмо от Арендатора
Наименование бутика: {{ $data['shop_name'] }}<br><br>
Бренд: {{ $data['brand'] }}<br><br>
Профиль деятельности: {{ $data['activity_profile']}}<br><br>
Структура компании: {{ $data['company_structure']}}<br><br>
Целевая аудитория: {{ $data['target_audience'] }}<br><br>
Файл: <a href="{{ $resume }}">{{ $resume }}</a><br><br>
Опыт работы на рынке: {{ $data['market_experience'] }}<br><br>
Ценовой сегмент: {{ $data['target_segment'] }}<br><br>
Количество открытых магазинов: {{ $data['amount_of_opened_shops'] }}<br><br>
Требуемая помощь: {{ $data['needed_help'] }}<br><br>
Этаж: {{ $data['floor'] }}<br><br>
Контактные телефоны: {{ $data['phones'] }}<br><br>
E-mail: {{ $data['email'] }}<br><br>
Web-site: {{ $data['site'] }}<br><br>
ФИО: {{ $data['name'] }}<br><br>
Дополнительная информация: {{ $data['additional_information'] }}<br><br>

Thanks,<br><br>
{{ config('app.name') }}
@endcomponent
