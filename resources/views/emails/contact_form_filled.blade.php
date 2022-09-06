@component('mail::message')
# Contact Form Data Recieved

Contact info:
<ul>
    <li>Name - {{ $contact->name }}</li>
    <li>Surname - {{ $contact->surname }}</li>
    <li>Email - {{ $contact->email }}</li>
    <li>Phone - {{ $contact->phone }}</li>
    <li>Message - {{ $contact->message }}</li>
</ul>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
