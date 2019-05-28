@extends('layouts.adminnavbar')
@section('content')
    <div class="container">
        <h4>Edit-{{$user->name}}</h4>
        <hr>
                @include('includes.message')
                <form method="post" action="{{route('admin.updateuser')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="email">Name:</label>
                        <input type="text" class="common-input mt-0" id="name" name="name" value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Email:</label>
                        <input type="email" class="common-input mt-0" id="email" name="email" value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Phone:</label>
                        <input type="text" class="common-input mt-0" id="phone" name="phone" value="{{$user->phone}}">
                    </div>
                    <div class="form-group">
                        <label for="sel1">Gender:</label>
                        <select class="common-input mt-0" id="sel1" name="gender">
                            <option>{{$user->gender}}</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Others</option>
                        </select>
                    </div>
                    <input type="text" value="{{$user->id}}" name="id" hidden>
                    <button type="submit" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Update</span><span class="lnr lnr-arrow-right"></span></button>
                </form>
            </div>
        </div>
    </div>

@endsection
