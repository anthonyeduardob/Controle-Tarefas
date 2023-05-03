@component('mail::message')
# Introduction

O corpo da mensagem.

@component('mail::button', ['url' => ''])
Texto do butão
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
