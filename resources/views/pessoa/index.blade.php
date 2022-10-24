@extends('templates.app')

@section('pageTitle', 'Pessoas')

@section('content')


<div class="container-fluid">
    <div class="row">

       @extends('templates.menu')
        
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Pessoas</h1>
        </div>
  
        <div class="row">
					<div class="col-sm-12 col-md-12">
						<a href="/pessoas/adiciona" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Adicionar</a>
					</div>
				</div>	

        <div class="row mtop30">
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">Nome</th>
                  <th scope="col">CPF/CNPJ</th>
                  <th scope="col">RG</th>
                  <th scope="col">Data de nascimento</th>
                  <th scope="col">Estado civil</th>
                  <th scope="col">Ações</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>João Carlos</td>
                  <td>158.589.658-02</td>
                  <td>98.949.887</td>
                  <td>10/10/1987</td>
                  <td>Solteiro</td>
                  <td>
                    <a href="/pessoas/adiciona" class="btn btn-xs btn-primary"><i class="bi bi-pen"></i></a>
                    <a href="/pessoas/deleta" class="btn btn-xs btn-danger"><i class="bi bi-trash"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </main>
    </div>
  </div>
  

@endsection