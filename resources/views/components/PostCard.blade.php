{{-- @props(['post'])
<article>
    <header>
       <h2> {{$post->title}}</h2>
    </header>
    <main>
        {{$post->content}}
    </main>
    <footer>
        <a class="bg-blue-400 rext-white rounded-sm p-2 hover:bg-blue-500"
        href="{{route('showPost',  $post)}} ">Lees meer...</a>
    </footer>




</article> --}}
@props(['post'])
<article class="shadow-md rounded-m p-10 m-10">
    <header class="flex justify-center font-bold text-2x1">
        <h2>{{$post->title}}</h2>
    </header>
    <main class="m-5">
        <p> {{$post->subject}} </p>
    </main>
    <footer>
        <a class="bg-white rext-white rounded-sm p-2 hover:bg-white"
         href="{{route('showPost',  $post)}} ">Lees meer...</a>
    </footer>
</article>