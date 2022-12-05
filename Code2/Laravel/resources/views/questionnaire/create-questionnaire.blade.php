@extends('layouts.app')

@section('content')

<head>
    <title>Készít</title>
</head>

<div class="d-flex mx-auto flex-column justify-content-center" style="width: 500px !important; padding: 15px; background-color: rgba(137, 137, 137, 50%) !important; color: white; border-radius: 24px; width: 230px; margin: 10px;">
    <div>
        @livewire('create-questionare')
    </div>
</div>

@endsection