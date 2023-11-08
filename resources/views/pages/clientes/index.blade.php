@extends('template.master', ['title' => 'Clientes'])
@section('content')
    <div class="container-md mt-3 d-flex justify-content-end">
        {{ Breadcrumbs::render('clientes.index') }}
    </div>

    <section class="container-md">
        {{-- Titulo Página --}}
        @include('template.hero', ['title' => 'Clientes', 'subtitle' => 'Listar'])

        {{-- Session Mensagens --}}
        @include('template.alerts')

        {{-- Botão Cadastrar --}}
        @include('template.botoes.cadastrar', ['route' => route('clientes.cadastrar')])

        {{-- Listagem --}}
        <div class="row mx-auto">
            <div class="col-12 my-3">
                <div class="table-responsive rounded shadow-sm">
                    <table class="table table-sm table-striped mb-0">
                        <thead class="table-dark">
                            <th class="text-center" colspan="3">Ações</th>
                            <th class="text-end">Id</th>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>CPF</th>
                            <th>Data Nasc</th>
                        </thead>
                        <tbody>
                            @foreach ($data['clientes'] as $cliente)
                                <tr>
                                    <td class="text-center">
                                        @include('template.botoes.mostrar', ['id' => $cliente->cliente_id])
                                    </td>
                                    <td class="text-center">
                                        @include('template.botoes.editar', [
                                            'route' => route('clientes.editar', ['cliente' => $cliente]),
                                        ])
                                    </td>
                                    <td class="text-center">
                                        @include('template.botoes.excluir', ['id' => $cliente->cliente_id])
                                    </td>
                                    <td class="text-end">{{ $cliente->cliente_id }}</td>
                                    <td>{{ $cliente->nome }}</td>
                                    <td>{{ FunctionsHelper::telefoneSqlToBr($cliente->telefone) }}</td>
                                    <td>{{ FunctionsHelper::cpfSqlToBr($cliente->cpf) }}</td>
                                    <td>{{ FunctionsHelper::dataSqlToBr($cliente->data_nascimento) }}</td>
                                </tr>

                                {{-- Modal para excluir o registro --}}
                                @include('template.modalExcluir', [
                                    'route'     => route('clientes.excluir', ['cliente' => $cliente]),
                                    'id'        => $cliente->cliente_id,
                                ])

                                {{-- Offcanvas para visualizar o registro --}}
                                @include('template.offcanvasMostrar', [
                                    'id'        => $cliente->cliente_id,
                                    'cliente'   => $cliente
                                ])
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-12 d-flex justify-content-center">
                {{ $data['clientes']->links() }}
            </div>
        </div>


    </section>
@endsection
