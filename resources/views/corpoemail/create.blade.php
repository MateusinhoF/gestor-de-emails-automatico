<x-template titulodapagina="Cadastrar Corpo de Email" tituloHeader="Cadastrar Corpo de Email">
    <div class="mx-auto col-md-12 bg-secondary">

        <div class="d-flex justify-content-around m-3">
            <x-link href="{{route('corpoemail.index')}}" texto="Voltar"/>
            <x-link-sair/>
        </div>

        <form action="{{route('corpoemail.store')}}" method="post" class="m-3 p-4 color-forms-background">

            @csrf

            <x-input nome="titulo" texto="Titulo" tipo="text"/>
            <x-input nome="assunto" texto="Assunto" tipo="text"/>
            <x-input nome="texto" texto="Texto" tipo="text"/>

            <div class="d-flex justify-content-center">
                <input type="submit" value="Cadastrar Corpo de Email" class="btn btn-primary">
            </div>

        </form>

        <x-errors/>
    </div>
</x-template>
