<x-guest-layout>
    <div class="row justify-content-between" style="min-height: 90vh">
        <div class="col-md-5 my-auto">
            <img src="{{asset('assets/images/Emails-bro.png')}}" class="img-fluid" alt="gambar-register">

        </div>
        <div class="col-md-5 col-lg-4 my-auto">
            <div class="card  bg-white border-0 shadow-sm p-2">
                <div class="card-body">
                    <div class="card-title">
                        <h5 class="text-center">
                            Login
                        </h5>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div>
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input id="email" class="form-control bg-light border-0 shadow-none" type="email" name="email" :value="old('email')" required autofocus />
                            <x-error-message error="email"/>

                        </div>

                        <div class="mt-4">
                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <x-jet-input id="password" class="form-control bg-light border-0 shadow-none" type="password" name="password" required autocomplete="current-password" />
                            <x-error-message error="password"/>

                        </div>

                        <div class="block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="d-grid mt-4">
                            <button class="btn btn-success">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="text-center mt-4">
                @if (Route::has('password.request'))
                    <a class="btn-link" href="{{ route('register') }}">
                        {{ __('Belum punya akun?') }}
                    </a>
                @endif
            </div>
        </div>
    </div>
</x-guest-layout>
