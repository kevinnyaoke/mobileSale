@extends('layouts.usernavbar')
@section('content')
    <div class="container">
      <h4>Phones</h4>
        <hr>
            {{ $phones->links() }}
                @include('includes.message')
                <div class="table-responsive">
                    <table class="table table-hover" id="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Serial No</th>
                            <th>Buying Price(Ksh)</th>
                            <th>Min Selling Price(KSh)</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody id="myTable">
                        @foreach($phones as $phones)
                            <tr>
                                <td>{{$phones->id}}</td>
                                <td>{{$phones->name}}</td>
                                <td>{{$phones->serial}}</td>
                                <td>{{$phones->buyingprice}}</td>
                                <td>{{$phones->sellingprice}}</td>
                                <td><a class="btn btn-primary btn-sm" href="{{route('user.sell',['id'=>$phones->id])}}">Sell<span class="fa fa-shopping-cart"></span></a> </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
