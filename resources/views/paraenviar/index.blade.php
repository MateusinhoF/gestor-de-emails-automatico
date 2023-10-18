<x-template titulodapagina="Envio" tituloHeader="Envio">
    <div class="mx-auto col-md-12 bg-secondary">

        <div class="d-flex justify-content-around m-3">
            <x-link href="{{route('paraenviar.create')}}" texto="Cadastrar Envio"/>
            <x-link href="{{route('listadeemails.index')}}" texto="Ver Listas de Emails"/>
            <x-link href="{{route('corpoemail.index')}}" texto="Ver Corpo de Emails"/>
            <x-link href="{{route('nomes.index')}}" texto="Ver Nomes"/>
            <x-link href="{{route('configuracoesusuario.edit')}}" texto="Configurações"/>
            <x-link-sair/>
        </div>

        <div>
            <table class="table table-striped table-hover text-center">
                <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Corpo Email</th>
                    <th>Emails</th>
                    <th>Emails CC</th>
                    <th>Emails CCO</th>
                    <th>Nomes</th>
                    <th>Data Inicio</th>
                    <th>Data Fim</th>
                    <th>Situação</th>
                    <th>Opções</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($paraenviar as $envio)
                    <tr>
                        <td>
                            {{$envio->titulo}}
                        </td>
                        <td>
                            {{$envio->corpo_email_titulo}}
                        </td>
                        <td>
                            {{$envio->titulo_envio}}
                        </td>
                        <td>
                            {{$envio->titulo_cc}}
                        </td>
                        <td>
                            {{$envio->titulo_cco}}
                        </td>
                        <td>
                            {{$envio->nome1}}
                            {{$envio->nome2}}
                            {{$envio->nome3}}
                            {{$envio->nome4}}
                            {{$envio->nome5}}
                        </td>
                        <td>
                            {{$envio->data_inicio}}
                        </td>
                        <td>
                            {{$envio->data_fim}}
                        </td>
                        <td>
                            @if($envio->continuar_envio)
                                <x-link-enviando href="{{route('paraenviar.alterarenvio', ['id'=>$envio->id])}}"/>
                            @else
                                <x-link-parado href="{{route('paraenviar.alterarenvio', ['id'=>$envio->id])}}"/>
                            @endif
                        </td>
                        <td>
                            <x-link-editar href="{{route('paraenviar.edit', ['id'=>$envio->id])}}"/>
                            <x-link-excluir href="{{route('paraenviar.destroy', ['id'=>$envio->id])}}"/>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <x-errors/>
    </div>
</x-template>
