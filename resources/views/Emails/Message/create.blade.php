@component('mail::message')
Hi,<br>
Hope you fell, {{$message->user->name}} sended a message on <a href="{{config('app.url')}}">Plateforme</a><br>
Message Content :<br>{{$message->content}}

User Information:<br>
Name: {{$message->user->name}}<br>
Phone :{{$message->user->phone}}<br>
Email : {{$message->user->email}}<br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
