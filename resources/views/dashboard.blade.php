<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight p-3">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
{{--    @foreach($users as $user)--}}
{{--        <div class="card">--}}
{{--            <div class="card-body">--}}
{{--                <p> <b>User</b>: {{  $user->name }}</p>--}}
{{--                <p> <b>Address</b> :{{  optional($user->address)->country }}</p>--}}

{{--                <hr>--}}
{{--                <p><b>Post</b> </p>--}}
{{--                @foreach($user->post as $key=>$post)--}}
{{--                    <p> {{ $key+1  }} : {{ $post->title }} </p>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endforeach--}}

</x-app-layout>
