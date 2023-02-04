<x-crud-layout title="all user">
    @foreach($users as $user)
        <a href="{{route('user:edit', $user->id)}}">{{$user->name()}}</a> <br>
    @endforeach
</x-crud-layout>
