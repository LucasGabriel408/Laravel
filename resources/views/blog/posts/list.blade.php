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

        @if (isset($posts))
            @foreach ($posts as $post)
                <div class="post">
                    <div class="flex justify-between items-start post-header">
                        <div>
                            <h4 class="text-xl font-bold">{{ $post->title }}</h4>
                            <p class="text-sm">{{ $post->user->name }}</p>
                        </div>
                        <div>
                            <p class="created-at text-sm text-gray-300">{{ $post->category->name }}</p>
                            <p class="created-at text-xs text-gray-500">{{ $post->created_at }}</p>
                        </div>
                    </div>
                    <br>
                    <div class="post-content">
                        <p class="text-justify">{{ $post->content }}</p>
                    </div>
                    <br>
                    <hr>
                    <br>
                </div>
            @endforeach
        @endif

    </div>




</x-app-layout>