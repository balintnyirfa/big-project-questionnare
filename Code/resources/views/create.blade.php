@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Új kvíz létrehozása') }}</div>

                <div class="card-body">
                    <form action="/questionnaires" method="post">

                    @csrf

                    <div class="form-group">
                        <label for="title">Név</label>
                        <input name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Adj nevet a kvíznek...">
                        <small id="titleHelp" class="form-text text-muted">Adj egy olyan nevet a kvízednek, ami felkelti az érdeklődést!</small>
                    
                        @error('title')
                            <small class="text-danger"> {{ $message }}</small>
                        @enderror
                    
                    </div>

                    <div class="form-group">
                        <label for="purpose">Purpose</label>
                        <input name="purpose" type="text" class="form-control" id="purpose" aria-describedby="purposeHelp" placeholder="Valami...">
                        <small id="purposeHelp" class="form-text text-muted">Valami</small>

                        @error('purpose')
                            <small class="text-danger"> {{ $message }}</small>
                        @enderror

                    </div>

                    <button type="submit" class="btn btn-primary">Mentés</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection