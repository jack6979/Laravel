<x-layout>

  <h1>imc</h1>

  <form method="post" action="/imc/store">
    @csrf
    <div class="form-group">
      <label for="exampleInputNOME">NOME</label>
      <input type="text" class="form-control" id="exampleInputAltura" placeholder="" name="nome">
    </div>
    <div class="form-group">
      <label for="exampleInputPeso">Peso</label>
      <input type="text" class="form-control" id="exampleInputPeso" placeholder="" name="peso">
    </div>
    <div class="form-group">
      <label for="exampleInputAltura">Altura</label>
      <input type="text" class="form-control" id="exampleInputAltura" placeholder="" name="altura">
    </div>

    <button type="submit" class="btn btn-primary">Calculer</button>
  </form>
  <label >RESULTADO</label><br>
  <label>IMC: {{$resultado["imc"]}}</label><br>
  <label>FAIXA: {{$resultado["faixa"]}}</label><br>
  <br><br><br>
</x-layout>
