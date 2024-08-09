@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <div class="container border rounded p-3 login-box">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="container text-center">
                <img class="img-thumbnail" src="{{ asset('asset/image/hinh1.jpg') }}" alt="" style="width: 50px">
                <h5>{{ 'Form đăng kí' }}</h5>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">{{ 'Tên đăng nhập' }} </label>
                <input type="text" class="form-control" name="name" id="">
                <x-text-alert :textType="$errors->has('name') ? 'text-danger' : ''" :textAlert="$errors->first('name') ?? ''" />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">{{ 'Email' }} </label>
                <input type="email" class="form-control" name="email" id="">
                <x-text-alert :textType="$errors->has('email') ? 'text-danger' : ''" :textAlert="$errors->first('email') ?? ''" />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">{{ 'Mật khẩu' }}</label>
                <input type="password" class="form-control" name="password" id="">
                <x-text-alert :textType="$errors->has('password') ? 'text-danger' : ''" :textAlert="$errors->first('password') ?? ''" />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">{{ 'Nhập lại mật khẩu' }}</label>
                <input type="password" class="form-control" name="password_confirmation" id="">
                <x-text-alert :textType="$errors->has('password_confirmation') ? 'text-danger' : ''" :textAlert="$errors->first('password_confirmation') ?? ''" />
            </div>
            <button type="submit" class="btn btn-primary">{{ 'Đăng kí' }}</button>
        </form>
    </div>
@endsection
