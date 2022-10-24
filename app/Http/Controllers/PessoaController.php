<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\PessoaTelefone;
class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pessoas = Pessoa::get();

        return view('pessoa/index')
            ->with('pessoas', $pessoas);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pessoa/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->telefone);

        $pessoa = new Pessoa();
        $pessoa->nome = $request->nome;
        $pessoa->cpf_cnpj = $request->cpf_cnpj;
        $pessoa->rg = $request->rg;
        if(!empty($request->data_nascimento)){
            $pessoa->data_nascimento = preg_replace("/([0-9]{2})\/([0-9]{2})\/([0-9]{4})/", "$3-$2-$1", $request->data_nascimento);
        }
        $pessoa->estado_civil = $request->estado_civil;
        $pessoa->cep = $request->cep;
        $pessoa->rua = $request->rua;
        $pessoa->estado = $request->estado;
        $pessoa->bairro = $request->bairro;
        $pessoa->complemento = $request->complemento;
        $pessoa->save();

        if(!empty($request->telefone)){
            $pessoaTelefone = new PessoaTelefone();

            foreach($request->telefone as $telefone){
                if(!empty($telefone['tipo']) && !empty($telefone['telefone'])){
                    $pessoaTelefone->pessoa_id = $pessoa->id;
                    $pessoaTelefone->tipo = $telefone['tipo'];
                    $pessoaTelefone->telefone = $telefone['telefone'];
                    $pessoaTelefone->save();
                }
            }
        }

        return redirect('/pessoas')->with('msg', 'Cadastrado com sucesso')->with('class', 'info');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $pessoa = Pessoa::findOrFail($id);
        return view('pessoa/edit', ['pessoa' => $pessoa]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $telefones = $data['telefone'];
        unset($data['telefone']);

        if(!empty($data['data_nascimento'])){
            $data['data_nascimento'] = preg_replace("/([0-9]{2})\/([0-9]{2})\/([0-9]{4})/", "$3-$2-$1", $data['data_nascimento']);
        }

        //dd($telefones);

        Pessoa::findOrFail($request->id)->update($data);

        if(!empty($telefones)){
            $pessoaTelefone = new PessoaTelefone();

            foreach($telefones as $telefone){
                if(!empty($telefone['tipo']) && !empty($telefone['telefone'])){
                    $pessoaTelefone->pessoa_id = $request->id;
                    $pessoaTelefone->tipo = $telefone['tipo'];
                    $pessoaTelefone->telefone = $telefone['telefone'];
                    $pessoaTelefone->save();
                }
            }
        }
                
        return redirect('/pessoas')->with('msg', 'Alterado com sucesso')->with('class', 'info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pessoa = Pessoa::where('id', $id)->firstorfail()->delete();
        return redirect('/pessoas')->with('msg', 'Excluido com sucesso')->with('class', 'info');
    }
}
