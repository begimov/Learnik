@extends('layouts.app')

@section('content')
    <theme route="{{ $route }}" theme-id="{{ $themeId }}"></theme>
@endsection
