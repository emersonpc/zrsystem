@extends('templates.app')

@section('pageTitle', 'Editar pessoa')

@section('content')

<div class="container-fluid">
    <div class="row">

       @extends('templates.menu')

       <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Editar pessoa</h1>
        </div>

        <form action="/pessoas/edita" method="POST">

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
                <div class="col-md-6">
                    <label class="form-label">RG</label>
                    <input type="text" class="form-control" name="nome" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Data de nascimento</label>
                    <input type="text" class="form-control mask_data" name="nome" required>
                </div>
            </div>

            <div class="row mtop10">
                <div class="col-md-6">
                    <label class="form-label">Estado civil</label>

                    <select class="form-control" name="estado_civil">
                        <option value="">Selecione</option>
                        <option value="solteiro">Solteiro</option>
                        <option value="casado">Casado</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mtop10">
                Editar
            </button>
        
        </form>

      </main>
    </div>
</div>
  

@endsection