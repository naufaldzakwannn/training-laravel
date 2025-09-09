<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <article class="text-white py-8 max-w-screen-md border-g-300">
    <h2 class="mb-1 text-3xl tracking-tighter font-bold">{{ $post['title'] }}</h2>
    <div>
      <a href="/authors/{{ $post->author->id }}">{{ $post->author->name }}</a> |  | {{ $post->created_at->diffForHumans()}}
    </div>
    <p class="my-4 font-light">{{ ($post['body']) }}</p>
    <a href="/posts" class="font-medium text-blue-500">&laquo; Back to Post;</a>
  </article>

</x-layout>