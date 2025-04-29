<h1> 👍 Keepinho</h1>
<h2>Seja Bem vindo ao keepinho, o seu assistente
pessoal (melhor do que o google).</h2>
<hr>
<form action="{{ route('keep.gravar') }}" method="post">
    @csrf
    <textarea name="texto" id="" cols="80" rows="0"></textarea>
    <br>
    <input type="submit" value="Gravar Nota">
</form>
<hr>
    @foreach ($notas as $nota)
        <div style="border:1px dashed green;padding:2px;background-color:whitesmoke; ">
            {{ $nota->texto }}
        </div>
    @endforeach
