@extends('layouts.main')

@section('page.title', 'Просмотр поста')

@section('main.content')
    <x-title>
        {{__("Просмотр поста")}}

        <x-slot name="right">
            <x-button-link href="{{route('user.posts.edit', $post->id)}}">
                {{__("Изменить")}}
            </x-button-link>
        </x-slot>

        <x-slot name="link">
            <a href="{{route('user.posts')}}">
                {{__("Назад")}}
            </a>
        </x-slot>

    </x-title>


    <div class="mb-3">
        <h2 class="h4">
                {{$post->title}}
        </h2>
        <div class="small text-muted">
            {{now()->format('d.m.Y H:i:s')}}
        </div>
        <div class="pt-3">
            {!!$post->content!!}
        </div>
    </div>
@endsection