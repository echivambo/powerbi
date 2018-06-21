
@extends('admin.layout.layout')
@section('content')
    <div class="col-md-offset-3 col-md-6 col-xs-12">
        <div class="white-box" style="padding: 20px">
            @include('admin.mensagens.msg')

            <h2 class="text-center">Registar Usuários</h2>

            <form class="form-horizontal" method="POST" action="{{ route('users.store') }}">
                {{ csrf_field() }}

                <div class="form-group {{ $errors->has('provincia_id') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-12">Província</label>

                    <div class="col-md-12">
                        <select name="provincia_id" id="provincia_id" class="form-control form-control-line" required>
                            <option value="">Seleciona a Provincia...</option>

                            @foreach($province as $province)
                                <option value="{{$province->id}}">{{$province->province}}</option>
                            @endforeach

                        </select>
                        @if ($errors->has('provincia_id'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('provincia_id') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('distrito_id') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-12">Distrito</label>

                    <div class="col-md-12">
                        <select name="distrito_id" id="distrito_id" class="form-control form-control-line" required>
                            <option value="">Distrito</option>
                        </select>

                        @if ($errors->has('distrito_id'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('distrito_id') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

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

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token':'{{ csrf_token() }}',
            }
        });

        $('#provincia_id').change(function () {
            var province = $('#provincia_id').val();
            $.ajax({
                type:"GET",
                url: '{{url('/get/districts')}}',
                data: {province: province},
                success: function (data) {
                    var html = '<option value="">Selecione o distrito...</option>';
                    for(var i = 0; i < data.length; i++){
                        html += '<option value="'+ data[i].id +'">'+data[i].district+'</option>';
                    }
                    $('#distrito_id').html(html).show();
                    console.log(data);

                }
            })
        });


    </script>
@endsection()