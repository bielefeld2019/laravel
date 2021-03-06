<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal" method="POST" action="{{url('/produtos/'. $produto->id .'')}}">
@method('DELETE')
@csrf

<fieldset>

<legend><h1><center>Excluir : {{$produto->nome}}</center></h1></legend>

<!-- Código -->
<div class="form-group">
  <label class="col-md-4 control-label" for="id">Cód. Produto : </label>  
  <div class="col-md-2">
  <input id="id" name="id" type="text" value="{{$produto->id}}" class="form-control input-md">

  </div>
</div>

<!-- Nome -->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome">Nome : </label>  
  <div class="col-md-6">
  <input id="nome" name="nome" type="text" value="{{$produto->nome}}" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Descrição -->
<div class="form-group">
  <label class="col-md-4 control-label" for="descricao">Descrição : </label>
  <div class="col-md-4">
   <input id="descricao" name="descricao" type="text" value="{{$produto->descricao}}" class="form-control input-md" required="">
  </div>
</div>

<!-- Categoria -->
<div class="form-group">
  <label class="col-md-4 control-label" for="categoria">Categoria : </label>  
  <div class="col-md-6">
  <input id="categoria" name="categoria" type="text" value="{{$produto->categoria}}" class="form-control input-md" required="">
  </div>
</div>

<!-- Quantidade no estoque -->
<div class="form-group">
  <label class="col-md-4 control-label" for="qntd_estoque">Quantidade no Estoque : </label>
  <div class="col-md-4">
   <input id="qntd_estoque" name="qntd_estoque" type="text" value="{{$produto->qntd_estoque}}" class="form-control input-md" required="">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="btn_excluir"></label>
  <div class="col-md-8">
    <button id= "btn_excluir" class="btn btn-danger" > Excluir o produto: {{$produto->nome}} </button>
    <a id= "btn_voltar" class="btn btn-warning" href="{{url('/produtos')}}" > Voltar </a>
  </div>
</div>

 
</fieldset>
</form>

