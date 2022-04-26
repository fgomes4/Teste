@extends('layout.site')

@section('titulo','Inscrição')

@section('conteudo')  
    <div class="container">
        <h3 class="center">Inscrição do candidato</h3>
    </div>
    <div class="container">
        
        <form class="" action="" method="POST">
            {{ csrf_field() }}

        <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Nome Completo" id="nome_completo" type="text" class="validate">
                    <label for="Nome_Completo">Nome Completo</label>
                  </div>
                <div class="input-field col s6">
                  <input placeholder="CPF" id="cpf" type="text" class="validate">
                  <label for="cpf">CPF</label>
                </div>
              </div>

              <div class="input-field col s6">
                <input placeholder="Endereço" id="endereco" type="text" class="validate">
                <label for="endereco">Endereço</label>
              </div>

              <div class="input-field col s3">
                <select name="id">
                  <option value="" disabled selected>Selecione</option>
                 @foreach ($data as $row)
                <option value="{{$row->estado_id}}">{{$row->sigla}}</option>    
                @endforeach
                </select>
                <label>Estado</label>
              </div>

              <div class="input-field col s3">
                <select>
                  <option value="" disabled selected>Selecione</option>
                  @foreach ($data as $row)
                  <option value="{{$row->cidade_id}}">{{$row->nome}}</option>    
                  @endforeach
                </select>
                <label>Cidade</label>
              </div>

              <div class="input-field col s12">
                <input placeholder="Cargo" id="cargo" type="text" class="validate">
                <label for="cargo">Cargo</label>
              </div>
            </div>
            </form>
            <a type="submit" class="waves-effect waves-light btn-large right">Button</a>
        </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        M.FormSelect.init(elems);
        });
    </script>
    
@endsection
  

