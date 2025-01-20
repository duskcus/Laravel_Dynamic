@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section>
        @livewire('api-table', [
            'apiUrl' => 'https://pokeapi.co/api/v2/pokemon',
            'columns' => [
                [
                    'field' => 'name',
                    'sortable' => true
                ],
                [
                    'field' => 'url',
                    'type' => 'link'
                ]
            ],
            'perPage' => 10,
            'currentPage' => 0,
        ])
    </section>
@endsection
