<a href="#" class="block bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
    <img src="/storage/{{ $post->image }}" alt="" class="object-cover w-full h-58 rounded-t-lg">
    <div class="mt-4 p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{ $post->title }}</h5>
        <p class="text-gray-500 mb-4">{{ $post->publised_at }}</p>
        <p class="mb-3 font-normal text-gray-700">
            {{ Str::words($post->content, 20, '...') }}
        </p>
    </div>
</a>
