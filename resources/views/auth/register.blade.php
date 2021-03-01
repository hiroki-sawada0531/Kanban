@extends('layouts.app')

@section('content')
<div class="signupPage">
    <div class="titleArea">
        <h1>アカウントを新規作成</h1>
            <div class="m-3">or</div>
                <p class="accountPage_link"><a href="{{ route('login') }}">アカウントにサインイン</a></p>
    </div>
            <div class="container">
                <form class="mt-5, signupForm" id="new_user" action="{{ route('register') }}" accept-charset="UTF-8" method="post">
                {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('name')? 'has-error':'' }}">
                        <label for="user_name">お名前</label>
                        <input class="form-control" placeholder="名前を入力して下さい" type="text" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    </div>

                    <div class="form-group{{ $errors->has('email')? 'has-error':'' }}">
                        <label for="user-email">メールアドレス</label>
                        <input class="form-control" placeholder="emailを入力してください" autocomplete="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                    </div>

                    <div class="form-group{{ $errors->has('password')? 'has-error':'' }}">
                        <label for="user_password">パスワード</label>
                        <em>(６文字以上入力してください)</em>
                        <br>
                        <input class="form-control" placeholder="パスワードを入力してください" autocomplete="off" type="password" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                    </div>

                    <div class="form-group">
                        <label for="user_password_comfirmation">パスワード確認</label>
                        <input class="form-control" placeholder="パスワードを入力してください" autocomplete="off" type="password" name="password_confirmation" required>
                    </div>

                    <div class="text-center">
                        <input type="submit" name="commit" value="アカウントを作成" class="btn submitBtn" data-disable-with="アカウントを作成">
                    <div>
                </form>
            </div>
</div>
@endsection
