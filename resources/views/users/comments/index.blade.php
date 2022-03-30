@extends('layouts.app')

@section('title', "Comentários do usuário {$user->name}")
 
@section('content')
<h1 class="text-2x1 font-semibold leading-tigh py-2">
    Comentários do usuário {{ $user->name }}
    <a href="{{ route('users.create') }}" class="bg-blue-900 rounded-full text-white px-4 text-sm">+</a>
</h1>

<form action="{{ route('users.index') }}" method="get" class="py-5">
    <input type="text" name="search" placeholder="Pesquisar" class="md:w-1/6 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
    <button type="submit" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Pesquisar</button>
    {{-- <a href="{{ route('users.index') }}">Limpar Pesquisa</a> --}}
</form>

<table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden">
    <thead>
        <tr>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                Conteúdo
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                Visível
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                Editar
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                Detalhes
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comments as $comment)
        <tr>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                {{ $comment->body }}
            </td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                {{ $comment->visible }}
            </td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <a href="{{ route('users.edit', $user->id) }}" class="bg-green-200 hover:bg-green-300 rounded-full py-2 px-6">Editar</a>
            </td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <a href="{{ route('users.show', $user->id) }}" class="bg-orange-200 hover:bg-orange-300 rounded-full py-2 px-6">Detalhes</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection