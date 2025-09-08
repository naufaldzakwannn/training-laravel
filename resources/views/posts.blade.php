<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  @foreach ($posts as $post )

  <article class="text-white py-8 max-w-screen-md border-g-300">
    <a href="/posts/{{ $post['slug'] }}" class="hover-underline">
    <h2 class="mb-1 text-3xl tracking-tighter font-bold">{{ $post['slug'] }}</h2>
    </a>
    <div>
      <a href="">{{ $post['author'] }}</a> | {{ $post->created_at->diffForHumans()}}
    </div>
    <p class="my-4 font-light">{{ Str::limit($post['body'], 150) }}</p>
    <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
  </article>

      
  @endforeach

</x-layout>