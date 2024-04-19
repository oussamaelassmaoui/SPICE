<div class="col-xl-9 col-lg-8 wow fadeInRight">
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>
    <div class="dashboard_content">
        <div class="dashboard_profile_info">
            <div class="dashboard_profile_info_edit">
                <h2>Edit Information <a href="{{ route('profile') }}">Cancel</a></h2>
                <form class="info_edit_form" method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('patch')

                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" id="name" name="name" placeholder="Name" required autofocus
                                autocomplete="name" value="{{ old('name', $user->name) }}" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            {{-- @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>



                        <div class="col-md-6">
                            <input type="email" id="email" name="email" placeholder="Email" required
                                autocomplete="username" value="{{ old('email', $user->email) }}">
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                           
                           
                        </div>
                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                        <div>
                            <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                {{ __('Your email address is unverified.') }}

                                <button form="send-verification"
                                    class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                    {{ __('Click here to re-send the verification email.') }}
                                </button>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                            @endif
                        </div>
                    @endif

                        <div class="col-md-6">
                            <input type="text" name="username" placeholder="username"
                                value="{{ old('username', $user->username) }}" required>
                                <x-input-error class="mt-2" :messages="$errors->get('username')" />
                            {{-- @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                        <div class="col-md-6">

                            <input type="file" id="profile_photo" name="photo">
                            <x-input-error class="mt-2" :messages="$errors->get('photo')" />
                            {{-- @error('photo')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror --}}
                        </div>
                        <div class="col-md-12">

                            <button type="submit" class="common_btn">Save Profile
                                <span></span></button>
                                @if (session('status') === 'profile-updated')
                                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved') }}</p>
                                @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


