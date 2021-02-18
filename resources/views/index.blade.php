@extends('layouts.app')

@section('title', 'Slide show')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="owl-carousel">
                    <div>
                        <img src="{{ asset('images/rio.png') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('images/rio.png') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('images/rio.png') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('images/rio.png') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('images/rio.png') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('images/rio.png') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('images/rio.png') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('images/rio.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
