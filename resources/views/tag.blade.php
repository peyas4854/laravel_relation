<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight p-3">
            Tag
        </h2>
    </x-slot>
    @foreach($tags as $tag)
        <div class="card">
            <div class="card-body">
                <p>{{  $tag->name }} {{$tag->id  }}</p>

                <button type="button" class="btn btn-primary">
                    Post Count <span class="badge badge-light">{{ $tag->post_count }}</span>
                </button>
                <br>
                <b>Post: </b>
                @foreach($tag->post as $post)
                    <p > {{ $post->title  }}</p>
                @endforeach
            </div>
        </div>
    @endforeach
</x-app-layout>
