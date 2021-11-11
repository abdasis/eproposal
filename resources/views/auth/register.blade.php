<x-guest-layout>
    <div class="row justify-content-between" style="min-height: 90vh">
        <div class="col-md-5 my-auto">
            <img src="{{asset('assets/images/Emails-bro.png')}}" class="img-fluid" alt="gambar-register">
        </div>
        <div class="col-md-5 my-auto">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="card-title">
                        <h5 class="text-center">Register</h5>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <x-jet-label for="name" value="{{ __('Nama Lengkap') }}" />
                            <x-jet-input id="name" class="form-control border-0 shadow-none bg-light" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>

                        <div class="mt-4 form-group">
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input id="email" class="form-control border-0 shadow-none bg-light" type="email" name="email" :value="old('email')" required />
                        </div>

                        <div class="mt-4 form-group">
                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <x-jet-input id="password" class="form-control border-0 shadow-none bg-light" type="password" name="password" required autocomplete="new-password" />
                        </div>

                        <div class="mt-4 form-group">
                            <x-jet-label for="password_confirmation" value="{{ __('Password Konfirmasi') }}" />
                            <x-jet-input id="password_confirmation" class="form-control border-0 shadow-none bg-light" type="password" name="password_confirmation" required autocomplete="new-password" />
                        </div>

                        <div class="form-group mt-4  d-grid">
                            <button class="btn btn-success">
                                {{ __('Daftar Sekarang') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="{{route('login')}}" class="text-muted">
                    Sudah punya akun?
                </a>
            </div>
        </div>
    </div>
</x-guest-layout>
