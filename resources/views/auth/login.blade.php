@extends('layouts.pag')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4"  style="padding-top: 50px; padding-bottom: 220px">
                <div class="panel panel-default">
                    <div class="panel-heading text-center"><img src="{{ asset('assets/img/logo.png') }}" alt="logo" width="200"></div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                <div class="col-md-10 col-md-offset-1">
                                    <input id="email" type="email" class="form-control" placeholder="exemplo@psi.org.mz" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                <div class="col-md-10 col-md-offset-1">
                                    <input id="password" type="password" placeholder="**********" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <button type="submit" class="btn btn-primary pull-right">
                                        Login
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">Esqueceu a senha?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
