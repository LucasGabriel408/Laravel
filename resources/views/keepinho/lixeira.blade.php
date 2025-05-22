<h1> 👍 Keepinho Lixeira 🗑️</h1>
<hr>
    <a href="{{ route('keep') }}">↩️ Voltar para o início</a>
<hr>
@if (session('sucesso'))
<div style="background-color:green;">
    {{ session('sucesso') }}
</div>
@endif

@foreach ($notas as $nota)
        <div style="border:1px dashed green;padding:2px;background-color:whitesmoke; ">
            <b>{{ $nota->titulo }}</b>
            <br>
            <br>
            {{ $nota->texto }}
            <br><br>
            <a href="{{ route('keep.restaurar', $nota->id) }}">♻️ Restaurar</a>
            @csrf
            <br>
        </div>
    @endforeach