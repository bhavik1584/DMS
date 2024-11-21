@extends('main')
@section('title',$title)
@section('content')
    <div class="card">
        <div class="card-header">
            Add
        </div>
        <div class="card-body">
            @include('component.common.alert')
            <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <label for="first_name">{{ __('user.first_name') }}</label>
                        <input class="form-control" type="text" name="first_name" id="first_name">
                    </div>
                    <div class="col">
                        <label for="middle_name">{{ __('user.middle_name') }}</label>
                        <input class="form-control" type="text" name="middle_name" id="middle_name">
                    </div>
                    <div class="col">
                        <label for="last_name">{{ __('user.last_name') }}</label>
                        <input class="form-control" type="text" name="last_name" id="last_name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="email">{{ __('user.email') }}</label>
                        <input class="form-control" type="text" name="email" id="email">
                    </div>
                    <div class="col-6">
                        <label for="mobile_no">{{ __('user.mobile_no') }}</label>
                        <input class="form-control" type="number" name="mobile_no" id="mobile_no">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="address">{{ __('user.address') }}</label>
                        <textarea class="form-control" name="address" id="address" rows="2"></textarea>
                    </div>
                    <div class="col-6">
                        <label for="profile_image">{{ __('user.profile_image') }}</label>
                        <input class="form-control" type="file" name="profile_image" id="profile_image">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="password">{{ __('user.password') }}</label>
                        <input class="form-control" type="password" name="password" id="password">
                    </div>
                    <div class="col-6">
                        <label for="confirm_password">{{ __('user.confirm_password') }}</label>
                        <input class="form-control" type="password" name="confirm_password" id="confirm_password">
                    </div>
                </div>
        </div>
        <div class="card-footer">
            <div class="row float-right">
                <div class="col">
                    <button class="btn btn-secondary" type="reset">Reset</button>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </form>
    </div>
@endsection
