<div class="row mx-auto">
    <div class="col-md-12 col-12 form-group mb-3">
        <div class="form-floating">
            <input type="text" name="nome" id="nome" class="form-control validate" value="{{ isset($cliente->nome) ? $cliente->nome : old('nome') }}" value="{{ isset($cliente->nome) ? $cliente->nome : old('nome') }} " placeholder="Seu nome">
            <label for="nome">Nome</label>
        </div>
        @error('nome')
            <div class="text-danger bg-transparent alert-dismissible fade show small" role="alert">
                <i class="fas fa-info-circle"></i> {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @enderror
    </div>

    <div class="col-md-6 col-12 form-group mb-3">
        <div class="form-floating">
            <input type="text" name="cpf" id="cpf" class="form-control validate cpf" value="{{ isset($cliente->cpf) ? $cliente->cpf : old('cpf') }}" placeholder="Seu cpf" maxlength="11">
            <label for="cpf">CPF</label>
        </div>
        @error('cpf')
            <div class="text-danger bg-transparent alert-dismissible fade show small" role="alert">
                <i class="fas fa-info-circle"></i> {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @enderror
    </div>

    <div class="col-md-6 col-12 form-group mb-3">
        <div class="form-floating">
            <input type="text" name="telefone" id="telefone" class="form-control validate telefone" value="{{ isset($cliente->telefone) ? $cliente->telefone : old('telefone') }}" placeholder="Seu telefone" maxlength="11">
            <label for="telefone">Telefone</label>
        </div>
        @error('telefone')
            <div class="text-danger bg-transparent alert-dismissible fade show small" role="alert">
                <i class="fas fa-info-circle"></i> {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @enderror
    </div>

    <div class="col-md-6 col-12 form-group mb-3">
        <div class="form-floating">
            <input type="date" name="data_nascimento" id="data_nascimento" class="form-control validate" value="{{ isset($cliente->data_nascimento) ? $cliente->data_nascimento : old('data_nascimento') }}" placeholder="Sua data de nascimento">
            <label for="data_nascimento">Data de Nascimento</label>
        </div>
        @error('data_nascimento')
            <div class="text-danger bg-transparent alert-dismissible fade show small" role="alert">
                <i class="fas fa-info-circle"></i> {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @enderror
    </div>

    <div class="col-md-6 col-12 form-group mb-3">
        <div class="form-floating">
            <input type="text" name="cep" id="cep" class="form-control validate cep" value="{{ isset($cliente->cep) ? $cliente->cep : old('cep') }}" placeholder="Seu cep" pattern="\d*" oninput="buscaCep();" maxlength="8">
            <label for="cep">CEP</label>
        </div>
        @error('cep')
            <div class="text-danger bg-transparent alert-dismissible fade show small" role="alert">
                <i class="fas fa-info-circle"></i> {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @enderror
    </div>

    <div class="col-md-6 col-12 form-group mb-3">
        <div class="form-floating">
            <input type="text" name="endereco" id="endereco" class="form-control validate" value="{{ isset($cliente->endereco) ? $cliente->endereco : old('endereco') }}" placeholder="Seu endereço" disabled maxlength="50">
            <label for="endereco">Endereço</label>
        </div>
        @error('endereco')
            <div class="text-danger bg-transparent alert-dismissible fade show small" role="alert">
                <i class="fas fa-info-circle"></i> {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @enderror
    </div>

    <div class="col-md-6 col-12 form-group mb-3">
        <div class="form-floating">
            <input type="text" name="estado" id="estado" class="form-control validate" value="{{ isset($cliente->estado) ? $cliente->estado : old('estado') }}" placeholder="Seu estado" disabled maxlength="2">
            <label for="estado">Estado (SIGLA)</label>
        </div>
        @error('estado')
            <div class="text-danger bg-transparent alert-dismissible fade show small" role="alert">
                <i class="fas fa-info-circle"></i> {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @enderror
    </div>

    <div class="col-md-6 col-12 form-group mb-3">
        <div class="form-floating">
            <input type="text" name="cidade" id="cidade" class="form-control validate" value="{{ isset($cliente->cidade) ? $cliente->cidade : old('cidade') }}" placeholder="Seu cidade" disabled maxlength="30">
            <label for="cidade">Cidade</label>
        </div>
        @error('cidade')
            <div class="text-danger bg-transparent alert-dismissible fade show small" role="alert">
                <i class="fas fa-info-circle"></i> {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @enderror
    </div>

    <div class="col-md-6 col-12 form-group mb-3">
        <div class="form-floating">
            <input type="text" name="bairro" id="bairro" class="form-control validate" value="{{ isset($cliente->bairro) ? $cliente->bairro : old('bairro') }}" placeholder="Seu bairro" disabled maxlength="20">
            <label for="bairro">Bairro</label>
        </div>
        @error('bairro')
            <div class="text-danger bg-transparent alert-dismissible fade show small" role="alert">
                <i class="fas fa-info-circle"></i> {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @enderror
    </div>

    <div class="col-md-6 col-12 form-group mb-3">
        <div class="form-floating">
            <input type="text" name="numero" id="numero" class="form-control validate" value="{{ isset($cliente->numero) ? $cliente->numero : old('numero') }}" placeholder="Seu número" maxlength="10">
            <label for="numero">Nº</label>
        </div>
        @error('numero')
            <div class="text-danger bg-transparent alert-dismissible fade show small" role="alert">
                <i class="fas fa-info-circle"></i> {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-md-6 col-12 form-group mb-3">
        <div class="form-floating">
            <input type="text" name="complemento" id="complemento" class="form-control validate" value="{{ isset($cliente->complemento) ? $cliente->complemento : old('complemento') }}" placeholder="Seu complemento" maxlength="30">
            <label for="complemento">Complemento</label>
        </div>
        @error('complemento')
            <div class="text-danger bg-transparent alert-dismissible fade show small" role="alert">
                <i class="fas fa-info-circle"></i> {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @enderror
    </div>

    <div class="col-md-12 col-12 form-group mb-3 d-flex justify-content-center">
        <button type="submit" class="btn btn-success" id="botaoSalvar">
            <i class="fas fa-save"></i> Salvar
        </button>
    </div>
</div>
