@component('mail::message')
# Introduction

Hai ricevuto un nuovo messaggio da {{$message->full_name}}
Message: {{$message->message}}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
