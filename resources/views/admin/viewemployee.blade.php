@extends('layouts.adminnavbar')
@section('content')
<div class="container">
    <h4>Employees</h4>
                                {{ $users->links() }}
    <hr>
                                    @include('includes.message')
                                    <div class="table-responsive">
                                    <table class="table table-hover" id="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Commison(Ksh)</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $users)
<tr>
    <td>{{$users->id}}</td>
    <td>{{$users->name}}</td>
    <td>{{$users->gender}}</td>
    <td>{{$users->phone}}</td>
    <td>{{$users->email}}</td>
    <td>{{$users->commission}}</td>
    <td><a class="btn btn-primary btn-sm" href="{{route('admin.edituser',['id'=>$users->id])}}">Edit<span class="fa fa-edit"></span></a> </td>
    <td><a class="btn btn-danger btn-sm" href="{{route('admin.deleteuser',['id'=>$users->id])}}">Delete<span class="fa fa-remove"></span></a> </td>
</tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                                </div>
                            </div>
@endsection
