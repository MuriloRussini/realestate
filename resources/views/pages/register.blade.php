@extends('layouts.main')

@section('page-title', 'Register - Creampie Realty')

@section('content')
<div class="auth-page auth-page--login">
  <form action="" method="POST" class="auth-page__form">
    <h3 class="auth-page__title">Sign up</h3>
    <div class="auth-page__form-group">
      <label for="email" class="auth-page__form-label">Email</label>
      <input type="email" name="email" class="auth-page__form-input">
    </div>

    <div class="auth-page__form-group">
      <label for="password" class="auth-page__form-label">Password</label>
      <input type="password" name="password" class="auth-page__form-input">
    </div>

    <div class="auth-page__form-group">
     <button type="submit" class="auth-page__form-button">
      Sign up
     </button>
    </div>
  </form>
</div>
@endsection