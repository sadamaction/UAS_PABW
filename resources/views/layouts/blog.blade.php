

@foreach ($blogs as $blog)
<article class="flex flex-col items-center p-8">
  <img class="mb-5" src="{{ asset($blog->image) }}" alt="{{ asset($blog->image) }}">
  <h4 class="mb-5 text-xl font-semibold">{{$blog->title}}</h4>
  <p class="w-full text-center sm:w-64">{{$blog->content}}</p>
</article>
@endforeach

