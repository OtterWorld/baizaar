@component('mail::message')
# Письмо по Вакансии
Вакансия: {{ $job }}<br><br>
Город: {{ $data['city'] }}<br><br>
ФИО: {{ $data['name'] }}<br><br>
Телефон: {{ $data['phone'] }}<br><br>
Email: {{ $data['email'] }}<br><br>
Резюме: <a href="{{ $resume }}">{{ $resume }}</a><br><br>
Комментарий: {{ $data['comment'] }}<br><br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
