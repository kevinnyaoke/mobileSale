@extends('layouts.adminnavbar')
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
                                <td><a class="btn btn-primary btn-sm" href="{{route('admin.editphone',['id'=>$phones->id])}}">Ediit<span class="fa fa-edit"></span></a> </td>
                                <td><a class="btn btn-danger btn-sm" href="{{route('admin.deletephone',['id'=>$phones->id])}}">Delete<span class="fa fa-remove"></span></a> </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
