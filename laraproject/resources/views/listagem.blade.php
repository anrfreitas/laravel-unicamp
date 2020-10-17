@extends('mainpage')
@section('content')

@if(count($clientes) > 0)
<p>Listagem de clientes</p>
<table class="table" style="width:100%;text-align:center;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Function</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->nome }}</td>
            <td>{{$item->telefone }}</td>
            <td>{{$item->email}}</td>
            <td>
                <button class="btn btn-success" onclick="obterInfo({{$item->id}})">Info</button>
                <button class="btn btn-danger" onclick="removerItem({{$item->id}})">Remover</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif

<form action="{{url('salvar')}}" method="post">
    <!-- This token below must be passed in order to complete the transation, its a token! -->
    @csrf

    Nome <input type="text" name="nome" id="nome" value="{{old('nome')}}"/>
    
    
    Telefone <input type="text" name="telefone" id="telefone" value="{{old('telefone')}}"/>

    Email <input type="text" name="email" id="email" value="{{old('email')}}"/>
    
    <br />
    <br />
    <button type="submit" class="btn btn-success">Salvar item</button>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<script>
    $(document).ready(function(){

    });

    /* Since in ajax calls communicates straight to the routes, we must pass as parameter the csrf token! */
    removerItem = (id) => {
        $.ajax({
            url : 'remover/' + id,
            headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
            type: 'GET',
            dataType: "JSON",
            success: function (data) {
                alert(data); /* Here we will output if the remotion has been successfully! */
                location.reload();
            },
            error: function (data, textStatus, errorThrown) {
                console.log(data);
                console.log('Error: ' + textStatus);
                console.log('Stackoverflow: ' + errorThrown);
            },
        });
    }

    obterInfo = (id) => {
        $.ajax({
            url: 'obter/' + id,
            headers: {},
            type: 'GET',
            dataType: "JSON",
            success: function (data) {
                console.log(JSON.stringify(data)); /* Here we'll output the cliente data in the console log */
            }
        });
    }

</script>