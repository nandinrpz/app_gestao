<h3> Fornecedor </h3>


<h3>
    @isset($fornecedores)
    @php $i = 0 @endphp
        
    @while (isset($fornecedores[$i]))
    <br>
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] }}
        <br>
        Telefone: {{ $fornecedores[$i]['ddd'] ?? '' }} {{ $fornecedores[0]['telefone'] ?? '' }}
        <br>
        @switch($fornecedores[$i]['ddd'])
            @case('11')
                São Paulo - SP <br> <hr>
                @php $i++ @endphp
            @break

            @case('85')
                Fortaleza - CE <br> <hr>
                @php $i++ @endphp
            @break

            @case('32')
                Juiz de Fora - MG <br> <hr>
                @php $i++ @endphp
            @break
            @default
                Estado não identificado <br> <hr>
                @php $i++ @endphp
        @endswitch
        @endwhile
        @endisset

    <br>
    