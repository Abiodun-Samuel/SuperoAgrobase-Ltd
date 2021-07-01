@component('mail::message')
<h2> {{ $ContactData['subject'] }} </h2>
<p> Hi, I'm {{ $ContactData['name'] }}</p>

<p> {{ $ContactData['message'] }} </p>


Thanks,<br>
{{ config('app.name') }}

@component('mail::button', ['url' => 'mailto:'.$ContactData['email']])
Reply
@endcomponent

@component('mail::button', ['url' => 'tel:'.$ContactData['phone']])
Call
@endcomponent
@endcomponent
