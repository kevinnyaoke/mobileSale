@extends('layouts.adminnavbar')
@section('content')
    <div class="container">
        <h4>Edit-{{$phone->name}}</h4>
        <hr>
                @include('includes.message')
                <form method="post" action="{{route('admin.updatephone')}}" onsubmit="return checkPrice()">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="email">Name:</label>
                        <input type="text" class="common-input mt-0" id="name" name="name" value="{{$phone->name}}">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Serial No:</label>
                        <input type="text" class="common-input mt-0" id="email" name="serial" value="{{$phone->serial}}">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Buying Price(Ksh):</label>
                        <input type="number" class="common-input mt-0" id="buyingprice" name="buyingprice" value="{{$phone->buyingprice}}">
                    </div>
                    <div class="form-group">
                        <label for="pwd"> Min Selling Price(Ksh):</label>
                        <input type="number" class="common-input mt-0" id="sellingprice" name="sellingprice" value="{{$phone->sellingprice}}">
                    </div>
                    <input type="text" name="id" value="{{$phone->id}}" hidden>
                    <button type="submit" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Update</span><span class="lnr lnr-arrow-right"></span></button>
                </form>
            </div>

@endsection
