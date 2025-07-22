<x-layout :title="$title">

    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            By <a class="hover:underline text-gray-900"
                href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in
            <a class="hover:underline text-gray-900"
                href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> | 1
            January 2025
        </div>
        <p class="my-4 font-light">{{ $post['body'] }}
        </p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to all
            Posts</a>
    </article>




</x-layout>
