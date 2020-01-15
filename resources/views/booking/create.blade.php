@extends('layouts.app')

@section('content')
    
<div class="container">
<h1>Book your Tickets Now!</h1>

{{ Form::open(['route' => 'bookings.store']) }}

<div class="form-group">

{{ Form::label('full_name') }}
{{ Form::text('full_name', '', ['class' => 'form-control']) }}
</div>

<div class="form-group">

{{ Form::label('phone_number') }}
{{ Form::text('phone', '', ['class' => 'form-control']) }}
</div>

{{ Form::submit('Book Now', ['class' => 'btn btn-sm btn-primary']) }}

{{ Form::close() }}
</div>
@endsection