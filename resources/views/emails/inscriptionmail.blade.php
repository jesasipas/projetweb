@component('mail::message')
# Introduction

Test

@component('mail::buton', ['url' => 'http://127.0.0.1:8000'])
Cliquez ici pour accèder au site
@endcomponent

Merci,<br>
{{ config('app.name') }}

@endcomponent
