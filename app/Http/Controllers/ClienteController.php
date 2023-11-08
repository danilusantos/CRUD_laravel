<?php

namespace App\Http\Controllers;

use App\Helpers\FunctionsHelper;
use App\Models\Cliente;
use App\Http\Requests\ClienteRequest;
use Illuminate\Support\Facades\Session;

class ClienteController extends Controller
{
    private $clienteModel;

    public function __construct(Cliente $clienteModel)
    {
        $this->clienteModel = $clienteModel;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = $this->clienteModel->whereNotNull("cliente_id")->orderby("cliente_id", "desc");

        $data = [
            "clientes" => $clientes->paginate(9)
        ];

        return view("pages.clientes.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function cadastrar()
    {
        return view("pages.clientes.cadastrar");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function salvar(ClienteRequest $request)
    {
        $inputs = $request->all();

        $cliente = $this->clienteModel->create($this->limparDadosPost($inputs));

        if($cliente){
            Session::flash("success","Cliente cadastrado com sucesso!");
            return redirect(route("clientes.index"));
        }
        Session::flash("error", "Houve um erro ao gravar o cliente. Tente novamente ou entre em contato com o administrador.");
        return redirect()->back()->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function mostrar(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editar(Cliente $cliente)
    {
        $data = [
            "cliente" => $cliente
        ];

        return view("pages.clientes.editar", compact("data"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function atualizar(ClienteRequest $request, Cliente $cliente)
    {
        $inputs = $request->all();

        if($cliente->update($this->limparDadosPost($inputs))){
            Session::flash("success","Cliente atualizado com sucesso.");
            return redirect()->route("clientes.index");
        }

        Session::flash("error","O cliente não pode ser atualizado. Tente novamente ou veja com o administrador do sistema.");
        return redirect()->back()->withInput();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function excluir(Cliente $cliente)
    {
        if($cliente->delete()){
            Session::flash("success", "Cliente foi removido com sucesso.");
        } else {
            Session::flash("error", "O cliente não pode ser excluido. Tente novamente ou veja com o administrador do sistema.");
        }

        return redirect()->route("clientes.index");
    }

    /* Limpar os dados com caracteres especiais " - , . , -espaço-" */
    private function limparDadosPost($inputs)
    {
        $inputs['telefone'] = FunctionsHelper::telefoneBrToSql($inputs['telefone']);
        $inputs['cep']      = FunctionsHelper::cepBrToSql($inputs['cep']);
        $inputs['cpf']      = FunctionsHelper::cpfBrToSql($inputs['cpf']);

        return $inputs;
    }
}
