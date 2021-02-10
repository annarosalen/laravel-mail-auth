@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('send-email')}}" method ="POST">
    
                        @csrf
                        @method('POST')
                
                        <label for="mailText">Scrivi testo:</label>
                        <input type="text" name="mailText">
                
                        <br>
                
                        <input type="submit" value = "SEND"> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
