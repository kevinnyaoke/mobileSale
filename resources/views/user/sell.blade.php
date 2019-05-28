@extends('layouts.usernavbar')
@section('content')
    <div class="container">
        <h4>{{$phone->name}}:::Selling Price-{{$phone->sellingprice}}</h4>
         <hr>
                @include('includes.message')
                <form method="post" action="{{route('user.phonesubmit')}}" onsubmit="return calculate()">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="email">Cash(Ksh):</label>
                        <input type="number" class="common-input mt-2" id="cash" name="cash">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Amount Chargable(Ksh:</label>
                        <input type="number" class="common-input mt-20" id="amount" name="amount">
                    </div>
                    <input type="text" name="sellingprice" id="sellingprice" value="{{$phone->sellingprice}}" hidden>
                    <input type="text" name="buyingprice" id="buyingprice" value="{{$phone->buyingprice}}" hidden>
                    <input type="text" name="item" id="item" value="{{$phone->name}}" hidden>
                    <input type="text" name="serial" id="serial" value="{{$phone->serial}}" hidden>
                    <input type="text" name="phoneid"  value="{{$phone->id}}" hidden>
                    <input type="text" name="userid"  value="{{ Auth::user()->id }}" hidden>
                    <input type="text" name="commission"  value="{{ Auth::user()->commission }}" hidden>
                    <input type="text" name="seller"  value="{{ Auth::user()->name }}" hidden>
                    <button type="button" class="primary-btn hover d-inline-flex align-items-center" data-toggle="modal" data-target="#myModal"><span class="mr-10">Next</span><span class="fa fa-forward"></span></button>
                    <!-- The Modal -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Enter Customer information</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="email">Customer name:</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Customer Phone no.:</label>
                                        <input type="text" class="form-control" id="phonenumber" name="phonenumber">
                                    </div>
                                </div>
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="submit" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Submit</span><span class="lnr lnr-arrow-right"></span></button>

                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
