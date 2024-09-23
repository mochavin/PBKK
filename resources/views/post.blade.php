<x-layout>
  <x-slot:title>Single Post</x-slot:title>

  <article class="py-8 max-w-lg">
    <h2 class="mb-1 text-3xl tracking-tighter font-bold text-gray-900">
      {{ $post['title'] }}
    </h2>
    <div class="text-base text-gray-500">
      By <a href="/authors/{{ $post->author->username }}" class="hover:underline">{{ $post->author->name }}</a>
      In
      <a href="/categories/{{ $post->category->slug }}" class="hover:underline text-base text-gray-500">{{ $post->category->name }}</a>
      | {{ $post['created_at']->diffForHumans() }}
    </div>
    <p class="my-4 font-light">
      {{ $post['body'] }}
    </p>
    <a href="/posts" class="font-medium text-blue-500 hover:underline">Back to posts &laquo;</a>
  </article>
</x-layout>