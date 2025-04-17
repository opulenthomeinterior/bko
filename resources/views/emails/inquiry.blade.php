@component('mail::message')
<h1>New Inquiry Received</h1>
@if(!empty($data['name']))<p><strong>Name:</strong> {{ $data['name'] }}</p>@endif
@if(!empty($data['email']))<p><strong>Email:</strong> {{ $data['email'] }}</p>@endif
@if(!empty($data['phone']))<p><strong>Phone Number:</strong> {{ $data['phone'] }}</p>@endif
@if(!empty($data['call_time']))<p><strong>Call Time:</strong> {{ $data['call_time'] }}</p>@endif
@if(!empty($data['message']))<p><strong>Message:</strong> {{ $data['message'] }}</p>@endif
<br>
{{config('app.name')}}
@endcomponent