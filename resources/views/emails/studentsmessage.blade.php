@component('mail::message')

<h3> Hello, I'm {{auth()->user()->hyacademy->name}}</h3>

<p> {{$student_message }}</p>

<p><a href="mailto:{{auth()->user()->email}}">Reply</a></p>
<br>
{{ config('app.name') }}
@endcomponent
