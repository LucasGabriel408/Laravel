<h1> 👍 Keepinho Editar</h1>
<h2>Seja Bem vindo ao editor do keepinho
pessoal (melhor do que o firefox).</h2>
<hr>
< action="{{ route('keep.editarGravar') }}" method="post">
    @csrf
    @method('PUT');

    <input type="hidden" name="id" value="{{ $nota->id }}">
    <input type="text" name="titulo">{{ $nota->titulo }}</input>
    <textarea name="texto" id="" cols="80" rows="0">{{ $nota->texto }}</textarea>
    <br>
    <input type="submit" value="Editar Nota">
</form>

