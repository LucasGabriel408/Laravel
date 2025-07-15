<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Blog
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex justify-center gap-20 text-gray-900 dark:text-gray-100">
                    <x-link-button href="{{  route('posts.list') }}">
                        Postagens
                    </x-link-button>

                    <x-link-button href="{{  route('produtos.create') }}">
                        Categorias
                    </x-link-button>
                </div>
            </div>
        </div>
    </div>

    <div
        class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-4 text-gray-900 dark:text-gray-100">

        @if (isset($categories))
            @foreach ($categories as $category)
                <div class="category flex justify-between items-start">
                    <h4 class="text-xl font-bold">{{ $category->name }}</h4>

                    <div class="actions flex gap-2">
                        <x-link-button href="{{ route('categories.edit', $category->id) }}">
                            Editar
                        </x-link-button>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="GET"
                            onsubmit="return confirm('Tem certeza que deseja excluir esta categoria?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">
                                Excluir
                            </button>
                        </form>
                    </div>

                </div>
                <br>
                <hr>
                <br>
            @endforeach
        @endif

    </div>




</x-app-layout>