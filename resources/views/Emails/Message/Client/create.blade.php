@component('mail::message')
    Hi  {{$message->user->name}},<br>
    Hope you fell, you sended a message on <a href="{{config('app.url')}}">Plateforme</a><br>
    Message Content :<br>{{$message->content}}<br>
    Message Identifiant :{{$message->id}}<br>

    Your Information:<br>
    Name: {{$message->user->name}}<br>
    Phone :{{$message->user->phone}}<br>
    Email : {{$message->user->email}}<br>

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
