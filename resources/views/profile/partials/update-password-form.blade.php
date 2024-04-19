<div class="col-xl-9 col-lg-8 wow fadeInRight">
    <div class="dashboard_content">
        <h2 class="dashboard_title">Change Password</h2>
        <form method="post" action="{{ route('password.update') }}" class="dashboard_change_password">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-6">
                    <input type="password" id="update_password_current_password" autocomplete="current-password" name="current_password" placeholder="Current Password">
                   
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                </div>
                <div class="col-md-6">
                    <input type="password" name="password" id="update_password_password" autocomplete="new-password" placeholder="New Password">
                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                </div>
                <div class="col-xl-12">
                    <input type="password" name="password_confirmation" autocomplete="new-password" id="update_password_password_confirmation" placeholder="Conform Password">
                  

                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                    <button type="submit" class="common_btn">Submit <span></span></button>
                </div>
            </div>
        </form>
    </div>
</div>
