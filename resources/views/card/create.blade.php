@extends('layouts.app')

@section('content')
    <card-creator collections="{{ $collections }}"></card-creator>
@endsection
