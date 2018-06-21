
@extends('admin.layout.layout')
@section('content')
    <div class="col-md-offset-3 col-md-6 col-xs-12">
        <div class="white-box" style="padding: 20px">
            @include('admin.mensagens.msg')

            <h2 class="text-center">Registar promotor</h2>

            <form class="form-horizontal" method="POST" action="{{ route('promotor.store') }}">
                {{ csrf_field() }}


                <!--User ID-->
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                <div class="form-group{{ $errors->has('provincia') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-12">Província</label>

                    <div class="col-md-12">
                        <select name="provincia" id="provincia" class="form-control form-control-line">
                            <option value="">Seleciona a Província...</option>
                            @if(isset($franquias))
                                @foreach($franquias as $franquia)
                                    <option value="{{$franquia->province}}">{{$franquia->province}}</option>
                                @endforeach
                            @endif
                        </select>
                        @if ($errors->has('provincia'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('provincia') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('franquia') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-12">Franquia</label>

                    <div class="col-md-12">
                        <select name="franquia" id="franquia" class="form-control form-control-line">
                            <option value="">Franquias</option>
                        </select>
                        @if ($errors->has('franquia'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('franquia') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-12">Name da PSC</label>

                    <div class="col-md-12">
                        <input id="nome" type="text" class="form-control form-control-line" name="nome" placeholder="Nome Completo" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('contacto') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-12">Contacto</label>

                    <div class="col-md-12">
                        <input id="email" type="contacto" class="form-control form-control-line" name="contacto" placeholder="+258 --- ----" value="{{ old('contacto') }}" required>

                        @if ($errors->has('contacto'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('contacto') }}</strong>
                                    </span>
                        @endif
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
        $('input').click(function () {
            $('.alert').hide();
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-Token':'{{ csrf_token() }}',
            }
        });

        $('#provincia').change(function () {
            var provincia = $('#provincia').val();
            $.ajax({
                type:"GET",
                url: '{{url('/get/franquia')}}',
                data: {provincia: provincia},
                success: function (data) {

                    var html = '<option value="">Selecione a Franquia...</option>';
                    for(var i = 0; i < data.length; i++){
                        html += '<option value="'+ data[i].nome +'">'+data[i].nome+'</option>';
                    }
                    $('#franquia').html(html).show();
                    console.log(data);

                }
            })
        });
    </script>
@endsection()