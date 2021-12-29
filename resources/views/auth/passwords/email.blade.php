@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('パスワードリセット') }}</div>

                <div class="card-body">

                    <p class="entry">下記の手順で新しいパスワードを再設定してください。</p>

                    <div class="passward-reset-description">
                        <ol>
                            <li>ご登録のメールアドレスを入力ください。</li>
                            <li>パスワード再設定用URLをご登録のメールアドレス宛てに送信いたします。</li>
                            <li>メール内のURLよりパスワード再設定ページにアクセスし、新しいパスワードを入力してください。</li>
                            <li>パスワード再設定完了。</li>
                        {{-- <li>&nbsp;</li> --}}
                        </ol>
                    </div>

                    <br>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス※') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <p align="center">入力内容をご確認の上、下記の「送信」をクリックしてください。</p>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('送信') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
