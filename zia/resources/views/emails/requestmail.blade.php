@component('mail::message')
# Hi Admin,

You have a new message from {{ config('app.name') }}.

Name : {{$data['fname'].' '.$data['fname']}}<br>
Email : {{$data['email']}}<br>
Phone : {{$data['phone']}}<br>
Messaage : {{$data['message']}}<br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
