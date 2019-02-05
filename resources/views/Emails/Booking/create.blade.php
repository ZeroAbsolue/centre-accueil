@component('mail::message')
Hi {{$user->name}},<br> Hope you are well,<br>
We come to notify your booking on {{config('app.url')}}.
<br>
@foreach($reservations as $reservation)
Identifiant: {{$reservation->id}}<br>
Starting at:{{$reservation->started_at}} <br>
Ending at:{{$reservation->ended_at}}.<br>
@endforeach
The pleasure is ours to know you choose us. We are waiting for you.
You will find attached to this mail some picture of your booking element

Thanks,<br>
{{ config('app.name') }}
@endcomponent
