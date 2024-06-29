<x-layout title="calcular IMC">

    <div class="titulo">
        <h1>HISTORICO DE IMC</h1>
    </div>
    <table class="table">
        <thead>

            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Peso</th>
                <th scope="col">Altura</th>
                <th scope="col">Ações</th>
                <th scope="col"></th>
            </tr>

        </thead>
        <tbody>
            @foreach ($showImc as $imc)

            <tr>
                <th scope="row">{{$imc->id}}</th>
                <td>{{$imc->nome}}</td>
                <td>{{$imc->peso}}</td>
                <td>{{$imc->altura}}</td>
                <td>
                    <form id="deleteform{{$imc->id}}" action="{{ route('imc.delete',['id'=> $imc->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-default btn-lg" data-bs-toggle="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                            </svg>
                        </button>
                    </form>
                </td>
                <td>
                    <button type="button" class="btn btn-default btn-lg" data-bs-toggle="modal" data-bs-target="#myModal{{$imc->id}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                            <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41m-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9" />
                            <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5 5 0 0 0 8 3M3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9z" />
                        </svg>
                    </button>
                </td>
            </tr>

            <div class="modal fade" id="myModal{{$imc->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="/imc/store">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputNOME">NOME</label>
                                    <input type="text" class="form-control" id="exampleInputAltura" placeholder="" name="novo_nome">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPeso">Peso</label>
                                    <input type="text" class="form-control" id="exampleInputPeso" placeholder="" name="peso">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputAltura">Altura</label>
                                    <input type="text" class="form-control" id="exampleInputAltura" placeholder="" name="altura">
                                </div>
                                <button type="submit" class="btn btn-primary">Calcular</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-primary">Entendi</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </tbody>
    </table>


</x-layout>
