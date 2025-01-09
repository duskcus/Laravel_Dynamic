@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section>
        {{-- @livewire('website.crud-table', ['model' => 'users']) --}}
        @livewire('website.crud-table')
    </section>
@endsection
