@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section>
        @livewire('api-table', [
            'apiUrl' => "https://pokeapi.co/api/v2/pokemon",
            'queryParameters' => [
                ['pageSize' => 'pageSize'],
            ],
            'pageSizes' => [
                ['pageSize' => 10],
            ],
            'pageOffset' => [
                ['pageSize' => 10],
            ],
            'columns' => [
                ['field' => 'name'],
                ['field' => 'url'],
            ],
        ])
    </section>
@endsection
