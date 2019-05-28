@extends('layouts.adminnavbar')
@section('content')
    <div class="container">
       <h4>New Phone</h4>
        <hr>
                @include('includes.message')
                <form method="post" action="{{route('admin.submitphone')}}" onsubmit="return checkPrice()">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="email">Name:</label>
                        <input type="text" class="common-input mt-0" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Serial No:</label>
                        <input type="text" class="common-input mt-0" id="email" name="serial">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Buying Price(Ksh):</label>
                        <input type="number" class="common-input mt-0l" id="buyingprice" name="buyingprice">
                    </div>
                    <div class="form-group">
                        <label for="pwd"> Min Selling Price(Ksh):</label>
                        <input type="number" class="common-input mt-0" id="sellingprice" name="sellingprice">
                    </div>
                    <button type="submit" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Register</span><span class="lnr lnr-arrow-right"></span></button>
                </form>
            </div>
        </div>
    </div>

@endsection
