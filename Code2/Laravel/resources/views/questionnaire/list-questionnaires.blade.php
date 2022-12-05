@extends('layouts.app')

@section('content')
<head>
  <title>List</title>
</head>

<div class="content">
  <div class="row row-cols-2 row-cols-lg-5 justify-content-center ">
    @foreach($questionnaires as $questionnaire)
      <div class="card p-4" style="padding: 15px; background-color: rgba(137, 137, 137, 50%) !important; color: white; border-radius: 24px; width: 230px; margin: 10px;">
        <h5 class="card-title">
            {{ $questionnaire->name }}
        </h5>
        <p class="card-text">
            {{ $questionnaire->description }}
        </p>
        <a href="/questionnaire/{{ $questionnaire->id }}" style="background-color: rgba(137,137,137,50%); border-radius: 24px; box-shadow: none; border: none; color: white; padding: 5px 15px; text-transform: uppercase; display: flex; justify-content: center; text-decoration: none;">Kitöltés</a>
      </div>
      @endforeach
    
  </div>
  
</div>

@endsection