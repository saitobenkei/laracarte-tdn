@component('mail::message')
    Hey Admin
    <br>
    -{{ $msg->name }}
    <br>
    -{{ $msg->email }}
    @component('mail::panel')
        {{ $msg->msg }}
    @endcomponent
@endcomponent
