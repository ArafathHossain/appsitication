@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
	<div class="col-md-1"></div>
        <div class="col-md-8" style="padding-top:40px; border:1px #FF0000 solid; padding-left:50px;">
            <div class="card">
                <div class="card-header" style="color:#FF0000; font-weight:bold; font-size:16px;">{{ __('Reset Password') }}</div>

                <div class="card-body" style="padding-top:10px;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0" align="center" style="padding-right:20px;">
                            <div class="col-md-12 offset-md-12">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
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
