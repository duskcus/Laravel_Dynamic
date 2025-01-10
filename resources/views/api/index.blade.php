@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section>
        @livewire('crud-table', [
            'model' => \App\Models\User::class,
            'columns' => [
                ['label' => ' ', 'field' => 'profile_picture_url', 'image' => true], // 'label' is a blank space, this fakes an emptty label, it will need a 'field'
                ['field' => 'name'], // 'label' is specified as 'Name'
                ['field' => 'email'], // 'label' is specified as 'Email'
                ['label' => 'Job', 'field' => 'job_title'], // 'label' is specified as 'Job' and 'field' is 'job_title'
            ],
        ])
    </section>
@endsection
