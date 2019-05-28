@extends('layouts.usernavbar')
@section('content')
<div class="container">
    <h4>Customers</h4>
                                {{ $customer->links() }}
    <hr>
                                    @include('includes.message')
                                    <div class="table-responsive">
                                    <table class="table table-hover" id="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Item</th>
                                            <th>Serial</th>
                                            <th>Buying Price(Ksh)</th>
                                            <th>Selling Price(Ksh)</th>
                                            <th>Amount(Ksh)</th>
                                            <th>Cash(Ksh)</th>
                                            <th>Seller</th>
                                            <th>Date</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($customer as $customer)
<tr>
    <td>{{$customer->id}}</td>
    <td>{{$customer->name}}</td>
    <td>{{$customer->Phone}}</td>
    <td>{{$customer->Item}}</td>
    <td>{{$customer->Serial}}</td>
    <td>{{$customer->buyingprice}}</td>
    <td>{{$customer->sellingprice}}</td>
    <td>{{$customer->amount}}</td>
    <td>{{$customer->cash}}</td>
    <td>{{$customer->seller}}</td>
 
</tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                                </div>
                            </div>
@endsection
