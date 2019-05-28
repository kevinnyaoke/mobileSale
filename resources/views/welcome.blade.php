@extends('layouts.welcomenavbar')
@section('content')
    <div class="banner-area">
        <div class="container">
            <div class="row height align-items-center">
                <div class="col-sm-6">
                    <div class="banner-content">
                        <h1 class="text-white text-uppercase mb-10">Don’t look anywhere, <br> This is the best place on web</h1>
                        <p class="text-white mb-30">Living in today’s metropolitan world of cellular phones, mobile computers and other high-tech gadgets is not just hectic but very</p>

                        <div class="button-group-area mt-40">
                            <a href="{{route('adminlogin')}}" class="genric-btn primary circle arrow">Admin Login<span class="lnr lnr-arrow-right"></span></a>
                            <a href="{{route('stafflogin')}}" class="genric-btn success circle arrow">Staff Login<span class="lnr lnr-arrow-right"></span></a>
                        </div>
                      </span></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <a href="#"><img src="extra/img/phone1.jpg" alt="" ></a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    @endsection
