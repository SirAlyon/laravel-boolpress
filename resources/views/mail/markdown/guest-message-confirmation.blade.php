@component('mail::message')
# Introduction

Thanks for contacting us! We will get back to you asap.

Name: {{$message->full_name}}<br>
Name: {{$message->email}}


Your Message: <br>
{{$message->message}}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
