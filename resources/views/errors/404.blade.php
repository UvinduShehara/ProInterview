@extends('layouts.app')

@section('content')
    <div class="header py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <img src="{{ asset('black') }}/img/404err.png" alt="Error 404" width="50%" height="auto" >  
                </div>
                <div class="row justify-content-center">       
                    <h1 class="text-white">
                        <strong>{{ __("Oopz! Something's missing.") }} </strong> 
                    </h1>
                </div>
                <div class="row justify-content-center">
                    <h5 class="text-white">{{ __("The page you requested could not found") }}</h5>
                </div>     
                <div class="row justify-content-center">       
                    <br>         
                    <a href="/ " class="btn btn-primary btn-round">{{ __("Back Home") }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
