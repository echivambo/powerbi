
@extends('admin.layout.layout')
@section('content')
    <div class="col-md-offset-2 col-md-8 col-xs-12">
        <div class="white-box" style="padding: 20px">
            @include('admin.mensagens.msg')
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-12">Name</label>

                    <div class="col-md-12">
                        <input id="name" type="text" class="form-control form-control-line" name="name" placeholder="Seu Nome Completo" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-12">E-Mail</label>

                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control form-control-line" name="email" placeholder="example.psi.org.mz" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('grupo') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-12">Nivel do usuário</label>

                    <div class="col-md-12">
                        <select name="grupo" id="grupo" class="form-control form-control-line">
                            <option value="1">Normal</option>
                            <option value="2">Admin</option>
                        </select>
                        @if ($errors->has('grupo'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('grupo') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-12">Password</label>

                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control form-control-line" name="password" placeholder="******" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="col-md-12">Confirm Password</label>

                    <div class="col-md-12">
                        <input id="password-confirm" type="password" class="form-control form-control-line" name="password_confirmation" placeholder="******" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success pull-right">
                            Register
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>





    </div>
    <!--/.main-->
@endsection()