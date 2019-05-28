@extends('layouts.adminnavbar')
@section('content')
    <div class="container">
       <h4>Reset password</h4>
        <hr>
                @include('includes.message')
                <form role="form" method="POST" action="{{route('admin.updatepassword')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="email">Current password:</label>
                        <input type="password" class="common-input mt-0" id="password" name="currentpass">
                    </div>
                    <div class="form-group">
                        <label for="email">New Password</label>
                        <input type="password" class="common-input mt-0" id="password" name="newpass">
                    </div>
                    <div class="form-group">
                        <label for="email">Confirm password:</label>
                        <input type="password" class="common-input mt-0" id="password" name="repass">
                    </div>
                    <button type="submit" class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Reset</span><span class="lnr lnr-arrow-right"></span></button>
                </form>
            </div>
@endsection
