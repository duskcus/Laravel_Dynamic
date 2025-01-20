@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
  <section>
    @livewire('modal-form', [
      'model' => \App\Models\User::class,
      'formFields' => [
        ['label' => 'Name', 'field' => 'name', 'type' => 'text', 'validation' => 'required|string|max:255'],
        ['label' => 'Email', 'field' => 'email', 'type' => 'email', 'validation' => 'required|email|max:255'],
        ['label' => 'Password', 'field' => 'password', 'type' => 'password', 'validation' => 'nullable|string|min:8'],
      ]
    ])
  </section>
@endsection
