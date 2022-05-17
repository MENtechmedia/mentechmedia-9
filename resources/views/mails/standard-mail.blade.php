@component('mail::message')
@forelse($content as $field)
{!! $field !!}
@empty
@endforelse
@endcomponent
