@component('mail::message')

<h2>Hello, {{$hyacademy->name}}</h2>

<p>Congratulations!</p>

<p>You’ve successfully completed registration for HarvestYield Academy Training. This is the right step towards your career advancement and we are really excited to have you on board. The commencement date will be communicated to you via this channel very soon.</p>

<p>Download your admission letter <a href="{{ url('/images/HYAcademy/' . $hyacademy->name . '.pdf') }}" download> here. </a> <br>
If you have any questions about the training, please feel free to <a href="www.superoagrobase.com/contact_us">contact us.</a></p>

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
