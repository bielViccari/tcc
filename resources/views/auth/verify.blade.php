@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique seu endereço de e-mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um link de verificação foi enviado para o seu e-mail.') }}
                        </div>
                    @endif

                    {{ __('Cheque seu e-mail, um link de verificação foi enviado.') }}
                    {{ __('se você não recebeu um link') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('clique aqui para reenviar outro.') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
