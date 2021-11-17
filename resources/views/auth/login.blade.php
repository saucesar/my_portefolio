@extends('layout.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-6">
            <div class="card card-body shadow-lg">
                <div class="d-flex justify-content-center">
                    <h1>Login</h1>
                </div>
                <form class="d-flex flex-column" action="{{ route('post.login') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        @include('components.inputs.text', ['name' => 'email', 'label' => 'Email', 'placeholder' => 'Seu email'])
                    </div>
                    <div class="mb-4">
                       @include('components.inputs.password', ['name' => 'password', 'label' => 'Senha', 'placeholder' => 'Sua senha'])
                    </div>
                    <div class="d-flex justify-content-center mb-4">
                        <button class="btn btn-success" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection