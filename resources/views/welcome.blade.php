@extends('layouts.app')

@section('content')
    <div class="header py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">

                    <div class="col-lg-6">
                        <!-- Left side content here -->
                        <img src="{{ asset('black') }}/img/homeleft.png" alt="Pro Interview">
                        <a href="{{ route('login') }}" class="btn btn-primary btn-round btn-lg">
                            {{ __('Get Started') }}
                        </a>
                        <br><br><br><br>
                    </div>

                    <div class="col-lg-6">
                        <!-- Right side content here -->
                        <img src="{{ asset('black') }}/img/homeright.png" alt="Pro Interview">                            
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
