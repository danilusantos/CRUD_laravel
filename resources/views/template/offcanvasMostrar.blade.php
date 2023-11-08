<!-- Modal -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMostrar{{ $id }}"
    aria-labelledby="offcanvasMostrarLabel{{ $id }}">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasMostrarLabel{{ $id }}">
            <b>
                Detalhes do Cliente
            </b>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body bg-light">
        <div>
            <ul class="list-group list-group-flush rounded shadow-sm mb-3">
                <li class="list-group-item px-0">
                    <div class="row mx-auto">
                        <div class="col-4">
                            <span class="badge bg-primary">Nome:</span>
                        </div>
                        <div class="col-8">
                            <b>{{ $cliente->nome }}</b>
                        </div>
                    </div>
                </li>
                <li class="list-group-item px-0">
                    <div class="row mx-auto">
                        <div class="col-4">
                            <span class="badge bg-primary">Telefone:</span>
                        </div>
                        <div class="col-8">
                            <b>{{ FunctionsHelper::telefoneSqlToBr($cliente->telefone) }}</b>
                        </div>
                    </div>
                </li>
                <li class="list-group-item px-0">
                    <div class="row mx-auto">
                        <div class="col-4">
                            <span class="badge bg-primary">CPF:</span>
                        </div>
                        <div class="col-8">
                            <b>{{ FunctionsHelper::cpfSqlToBr($cliente->cpf) }}</b>
                        </div>
                    </div>
                </li>
                <li class="list-group-item px-0">
                    <div class="row mx-auto">
                        <div class="col-4">
                            <span class="badge bg-primary">Data Nasc:</span>
                        </div>
                        <div class="col-8">
                            <b>{{ FunctionsHelper::dataSqlToBr($cliente->data_nascimento) }}</b>
                        </div>
                    </div>
                </li>
                <li class="list-group-item px-0">
                    <div class="row mx-auto">
                        <div class="col-4">
                            <span class="badge bg-primary">CEP:</span>
                        </div>
                        <div class="col-8">
                            <b>{{ FunctionsHelper::cepSqlToBr($cliente->cep) }}</b>
                        </div>
                    </div>
                </li>
                <li class="list-group-item px-0">
                    <div class="row mx-auto">
                        <div class="col-4">
                            <span class="badge bg-primary">Endereço:</span>
                        </div>
                        <div class="col-8">
                            <b>{{ $cliente->endereco }}, {{ $cliente->numero }}</b>
                        </div>
                    </div>
                </li>
                <li class="list-group-item px-0">
                    <div class="row mx-auto">
                        <div class="col-4">
                            <span class="badge bg-primary">Complemento:</span>
                        </div>
                        <div class="col-8">
                            <b>{{ $cliente->complemento }}</b>
                        </div>
                    </div>
                </li>
                <li class="list-group-item px-0">
                    <div class="row mx-auto">
                        <div class="col-4">
                            <span class="badge bg-primary">Bairro:</span>
                        </div>
                        <div class="col-8">
                            <b>{{ $cliente->bairro }}</b>
                        </div>
                    </div>
                </li>
                <li class="list-group-item px-0">
                    <div class="row mx-auto">
                        <div class="col-4">
                            <span class="badge bg-primary">Cidade / Estado:</span>
                        </div>
                        <div class="col-8">
                            <b>{{ $cliente->cidade }} / {{ $cliente->estado }}</b>
                        </div>
                    </div>
                </li>
            </ul>

            <div class="row mx-auto justify-content-between">
                <div class="col-6 d-flex justify-content-center">
                    <a href="javascript:void(0)" class="btn btn-dark" data-bs-toggle="modal"
                        data-bs-target="#excluirModal{{ $id }}">
                        <i class="fas fa-trash"></i> Excluir
                    </a>
                </div>

                <div class="col-6 d-flex justify-content-center">
                    <a href="{{ route('clientes.editar', ['cliente' => $cliente]) }}" class="btn btn-dark">
                        <i class="fas fa-edit"></i> Editar
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
