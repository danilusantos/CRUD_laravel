@extends('template.master', ['title' => 'Clientes - Cadastrar'])
@section('content')
    <div class="container-md mt-3 d-flex justify-content-end">
        {{ Breadcrumbs::render('clientes.cadastrar') }}
    </div>
    <section class="container-md">

        {{-- Titulo Página --}}
        @include('template.hero', ['title' => 'Clientes', 'subtitle' => 'Cadastrar'])

        {{-- Botão Voltar --}}
        @include('template.botoes.voltar', ['route' => route('clientes.index')])

        {{-- Session Mensagens --}}
        @include('template.alerts')

        {{-- Formulário --}}
        <form action="{{ route('clientes.salvar') }}" method="post" class="mt-3" name="formCadastrar" id="formCadastrar">
            @method("POST")
            @csrf
            @include('pages.clientes.partials.form')
        </form>
    </section>
@endsection
@section('scripts')
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/messages_pt_BR.min.js') }}"></script>
    <script src="{{ asset('js/methods_pt.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/mascaras.js') }}"></script>
    <script src="{{ asset('js/validateFormCliente.js')}}"></script>
@endsection
