@extends('layouts.app')

@section('title', "Editar Usuário " . $user->name)

@section('content')
<h1>Editar o Usuário: {{ $user->name }}</h1>

@if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
        <li class="errors">{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('users.update', $user->id) }}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="name" placeholder="Nome" value="{{ $user->name }}">
    <input type="text" name="email" placeholder="Email" value="{{ $user->email }}">
    <input type="password" name="password" placeholder="Senha">
    <button type="submit">Salvar</button>
    | <a href="javascript: history.go(-1)">Voltar</a>
    {{-- | <a href="{{ route('users.index') }}">Voltar</a> --}}
</form>

@endsection