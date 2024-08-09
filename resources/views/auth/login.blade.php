@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <div class="container border rounded p-3 login-box">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="container text-center">
                <img class="img-thumbnail" src="{{ asset('asset/image/hinh1.jpg') }}" alt="" style="width: 50px">
                <h5>{{ 'Form đăng nhập' }}</h5>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">{{ 'Email' }}</label>
                <input type="email" class="form-control" aria-describedby="emailHelp" name="email" id=""
                    value="{{ old('email') }}">
                <x-text-alert :textType="$errors->has('email') ? 'text-danger' : ''" :textAlert="$errors->first('email') ?? ''" />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">{{ 'Mật khẩu' }} </label>
                <input type="password" class="form-control" name="password" id="">
                <x-text-alert :textType="$errors->has('password') ? 'text-danger' : ''" :textAlert="$errors->first('password') ?? ''" />
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">{{ 'ghi nhớ đăng nhập' }} </label>
            </div>
            <button type="submit" class="btn btn-primary">{{ 'Đăng Nhập' }} </button>
        </form>
    </div>
@endsection
