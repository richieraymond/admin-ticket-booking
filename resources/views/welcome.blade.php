@extends('layouts.app')

@section('style')
    <!-- Styles -->
    <style>
        html, body {
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 75vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
@endsection

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Admin Panel.
            </div>
        </div>
    </div>
@endsection