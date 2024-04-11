<x-auth-layout>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Two-Factor Authentication') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('two-factor.login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="code" class="form-label">{{ __('Two-Factor Code') }}</label>
                                <input type="text" name="code" id="code" class="form-control" required autofocus autocomplete="one-time-code">
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-auth-layout>
