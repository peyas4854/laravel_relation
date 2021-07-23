<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight p-3">
            POST
        </h2>
    </x-slot>
    @foreach($posts as $post)
        <div class="card">
            <div class="card-body">
                <h3>{{  $post->title }} {{ $post->id }}</h3>
                <p>{{  $post->user->name }}</p>
                <b>Tags: </b>
                <ul class="list-group " style="list-style: none;">
                    @foreach($post->tags as $tags)
                        <li class="list-group-item ">
                            <p> {{ $tags->name  }} </p>
                            <p> Status : {{ $tags->pivot->status }} </p>
                        <li/>
                    @endforeach
                </ul>
            </div>
        </div>
    @endforeach
</x-app-layout>
