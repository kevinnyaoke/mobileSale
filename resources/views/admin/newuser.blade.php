@extends('layouts.adminnavbar')
@section('content')
<div class="container">
    <form method="post" action="{{route('admin.submitemployee')}}">
        <h4>New User</h4>
        <hr>
        @include('includes.message')
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="email">Name:</label>
            <input type="text" class="common-input mt-0" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="pwd">Email:</label>
            <input type="email" class="common-input mt-0" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="pwd">Phone:</label>
            <input type="text" class="common-input mt-0" id="phone" name="phone">
        </div>
        <div class="form-group">
            <label for="sel1">Gender:</label>
            <select class="common-input mt-0" id="sel1" name="gender">
                <option>Select...</option>
                <option>Male</option>
                <option>Female</option>
                <option>Others</option>
            </select>
        </div>
        <input type="number" name="commission" value="0" hidden>
        <button class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Register</span><span class="lnr lnr-arrow-right"></span></button>
    </form>
</div>
    </div>
</div>

@endsection
