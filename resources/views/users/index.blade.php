@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section>
        @livewire('website.crud-table', [
            'model' => \App\Models\User::class,
            'columns' => [
                ['label' => 'Name', 'field' => 'name', 'sortable' => true],
                ['label' => 'Email', 'field' => 'email', 'sortable' => false],
                ['label' => 'Job', 'field' => 'job_title', 'sortable' => false],
                ['label' => 'Favorite Color', 'field' => 'favorite_color', 'sortable' => false],
            ]
        ])
    </section>
@endsection
