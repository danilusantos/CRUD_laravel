@extends('template.master', ['title' => 'Clientes - Editar'])
@section('content')
    <div class="container-md mt-3 d-flex justify-content-end">
        {{ Breadcrumbs::render('clientes.editar', $data['cliente']) }}
    </div>
    <section class="container-md">

        {{-- Titulo Página --}}
        @include('template.hero', ['title' => 'Clientes', 'subtitle' => 'Editar'])

        {{-- Botão Voltar --}}
        @include('template.botoes.voltar', ['route' => route('clientes.index')])

        {{-- Session Mensagens --}}
        @include('template.alerts')

        {{-- Formulário --}}
        <form action="{{ route('clientes.atualizar', ['cliente' => $data['cliente']]) }}" method="post" class="mt-3" name="formCadastrar" id="formCadastrar">
            @method("PUT")
            @csrf
            @include('pages.clientes.partials.form', ['cliente' => $data['cliente']])
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
