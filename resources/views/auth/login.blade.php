@extends('layouts.app')

@section('title', 'Iniciar sesión')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="mb-3 text-center">Iniciar sesión</h4>

                    @if($errors->any())
                        <div class="alert alert-danger">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login.post') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" value="{{ old('email') }}" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contraseña</label>
                            <input name="password" type="password" class="form-control" required>
                        </div>
                        <button class="btn btn-primary w-100">Ingresar</button>
                    </form>

                    <div class="mt-3 small text-muted">
                        <strong>Demo:</strong>
                        <div>admin1@gasco.com / 123456</div>
                        <div>admin2@gasco.com / 654321</div>
                        <div>admin3@gasco.com / 000000</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
