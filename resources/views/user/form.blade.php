    <div class="row">
        <div class="col">
            <label for="first_name">{{ __('user.first_name') }}</label>
            <input class="form-control" type="text" name="first_name" id="first_name" value={{$user->first_name ?? null}}>
        </div>
        <div class="col">
            <label for="middle_name">{{ __('user.middle_name') }}</label>
            <input class="form-control" type="text" name="middle_name" id="middle_name" value={{$user->middle_name ?? null}}>
        </div>
        <div class="col">
            <label for="last_name">{{ __('user.last_name') }}</label>
            <input class="form-control" type="text" name="last_name" id="last_name" value={{$user->last_name ?? null}}>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="email">{{ __('user.email') }}</label>
            <input class="form-control" type="text" name="email" id="email" value={{$user->email ?? null}}>
        </div>
        <div class="col-6">
            <label for="mobile_no">{{ __('user.mobile_no') }}</label>
            <input class="form-control" type="number" name="mobile_no" id="mobile_no" value={{$user->mobile_no ?? null}}>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="address">{{ __('user.address') }}</label>
            <textarea class="form-control" name="address" id="address" rows="2">{{$user->address ?? null}}
            </textarea>
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
