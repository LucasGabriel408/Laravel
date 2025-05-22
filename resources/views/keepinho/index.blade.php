<h1> 👍 Keepinho</h1>
<h2>Seja Bem vindo ao keepinho, o seu assistente
pessoal (melhor do que o google).</h2>
<hr>
<a href="{{ route('keep.lixeira') }}">🗑️ Lixeira</a>

<hr>
@if ($errors->any())
    <div style="color:red">
    <h3><b>Erro!</b></h3>

    <ul>
        @foreach ($errors->all() as $err)
        <li>{{ $err }}</li>
        @endforeach
    </ul>
    </div>
@endif

<form action="{{ route('keep.gravar') }}" method="post">
    @csrf
    <input type="text" name="titulo" placeholder="Titulo da nota" value="{{ old('titulo') }}"></input>
    <br><br>
    <textarea name="texto" id="" cols="80" rows="0" placeholder="Digite a nota aqui">{{ old('texto') }}</textarea>
    <br><br>
    <input type="submit" value="Gravar Nota">
</form>
<hr>

    @foreach ($notas as $nota)
        <div style="border:1px dashed green;padding:2px;background-color:whitesmoke; ">
            <b>{{ $nota->titulo }}</b>
            <br><br>
            {{ $nota->texto }}
            <br> <br>
            <a href="{{ route('keep.editar' , $nota->id) }}">Editar</a>
            <br>
            <form action="{{ route('keep.apagar', $nota->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <br>
            <input type="submit" value="Apagar">
            </form>
        </div>
    @endforeach
