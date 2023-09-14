

    <x-layout>
        <div class="grid grid-cols-2 mr-60 ml-60 text-white">
            @foreach ($posts as $post)
            <x-PostCard  :post="$post"> </x-PostCard>
            @endforeach
            {{$posts->links()}}
    
    </x-layout>