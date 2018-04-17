@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center text-center">

      <form class="form-signin" method="POST" action="{{ route('login') }}">

        @csrf

        <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">

        <h1 class="h3 mb-3 font-weight-normal">Connexion</h1>

        <label for="inputEmail" class="sr-only">Adresse email</label>
        <input id="email" type="email" placeholder="Adresse email" class="form-control mb-3{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

        @if ($errors->has('email'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

        <label for="inputPassword" class="sr-only">Mot de passe</label>
        <input id="password" type="password" placeholder="Mot de passe" class="form-control mb-3{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

        @if ($errors->has('password'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif

        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Resté connecté') }}
          </label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('Connexion') }}</button>

        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Vous avez oublié votre mot de passe ?') }}
        </a>

        <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
      </form>
    </div>
</div>
@endsection
