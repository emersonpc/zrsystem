@extends('templates.app')

@section('pageTitle', 'Adicionar pessoa')

@section('content')

<div class="container-fluid">
    <div class="row">

       @extends('templates.menu')

       <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Adicionar pessoa</h1>
        </div>

        <form action="/pessoas/adiciona" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nome" required>
                </div>

                <div class="col-md-4">
                    <label class="form-label">CPF/CNPJ</label>
                    <input type="text" class="form-control mask_cpfOuCnpj" name="nome" required>
                </div>
            </div>

            <div class="row mtop10">
                <div class="col-md-4">
                    <label class="form-label">RG</label>
                    <input type="text" class="form-control mask_rg" name="nome" required>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Data de nascimento</label>
                    <input type="text" class="form-control mask_data" name="nome" required>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Estado civil</label>

                    <select class="form-control" name="estado_civil">
                        <option value="">Selecione</option>
                        <option value="solteiro">Solteiro</option>
                        <option value="casado">Casado</option>
                    </select>
                </div>                
            </div>

            <h4 class="mtop30">Endereço</h4>

            <div class="row mtop10">
                <div class="col-md-4">
                    <label class="form-label">CEP</label>
                    <input type="text" class="form-control buscar-dados-cep" name="cep">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Rua</label>
                    <input type="text" class="form-control campo-endereco" name="rua">
                </div>
                
                <div class="col-md-4">
                    <label class="form-label">Estado</label>
                    <select class="form-control campo-estado" name="estado">
                        <option value="">Selecione</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>
            </div>
            <div class="row mtop10">
                <div class="col-md-4">
                    <label class="form-label">Bairro</label>
                    <input type="text" class="form-control campo-bairro" name="bairro">
                </div>
                
                <div class="col-md-4">
                    <label class="form-label">Complemento</label>
                    <input type="text" class="form-control campo-complemento" name="complemento">
                </div>                
            </div>

            <h4 class="mtop30">Telefones <button class="btn btn-xs btn-primary" id="btnAdicionaTelefone"><i class="bi bi-plus-lg"></i></button></h4>

            <div class="row mtop10">
                <div class="col-md-4">
                    <div class="row mtop10">
                        <div class="col-md-3">
                            <label class="form-label">Tipo</label>
                            <select class="form-control" name="tipo">
                                <option value="">Selecione</option>
                                <option value="fixo">Fixo</option>
                                <option value="celular">Celular</option>
                            </select>
                        </div>
                        
                        <div class="col-md-9">
                            <label class="form-label">Telefone</label>
                            <input type="text" class="form-control mask_telefone" name="telefone">
                        </div>  
                    </div> 

                    <div id="imendaHTML"></div>

                </div>
            </div>

            <button type="submit" class="btn btn-primary mtop10">
                <i class="fa fa-check" aria-hidden="true"></i> Salvar
            </button>
        </form>

      </main>
    </div>
</div>
  

@endsection