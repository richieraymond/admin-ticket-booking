@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row content-align-center">
            <div class="col-md-6">

                <div class="text-center">
                    <img src="{{ asset('images/20211098.jpeg') }}" alt="my profile pic" height="100" class="img-responsive rounded">
                </div>

                <div class="form-group">
                    {{ Form::label('full_name') }}
                    {{ Form::text('name', $user->name, ['class' => 'form-control rounded-0', 'disabled']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('email') }}
                    {{ Form::text('name', $user->email, ['class' => 'form-control rounded-0', 'disabled']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('phone') }}
                    {{ Form::text('name', $user->phone, ['class' => 'form-control rounded-0', 'disabled']) }}
                </div>
            </div>
        </div>
    </div>
@endsection