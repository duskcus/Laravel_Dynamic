@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section>
        @livewire('api-table', [
            'model' => null,
            'apiUrl' => "https://pokeapi.co/api/v2/pokemon",
            'columns' => [
                ['field' => 'name'],
                ['field' => 'url'],
            ],
        ])
    </section>
@endsection
