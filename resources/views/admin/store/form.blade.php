<div class="col-md-8">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" name="nome" class="form-control" value="{{old("nome", $store->nome ?? "" ) }}" id="nome" placeholder="">
</div>
<div class="col-md-6">
    <label for="telefone" class="form-label">Telefone</label>
    <input type="text" name="telefone" class="form-control" value="{{old("nome", $store->telefone ?? "" ) }}" id="telefone" placeholder="">
</div>
<div class="col-md-6">
    <label for="celular" class="form-label">Celular</label>
    <input type="text" class="form-control" name="celular" value="{{old("celular", $store->nome ?? "" ) }}" id="celular" placeholder="">
</div>
<div class="col-md-8">
    <label for="descricao" class="form-label">descricao</label>
    <input type="text" class="form-control" name="descricao" value="{{old("descricao", $store->nome ?? "" ) }}" id="descricao" placeholder="">
</div>
<div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
