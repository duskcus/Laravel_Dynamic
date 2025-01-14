@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
<section>
    <div class="min-h-screen hero"
        style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="text-center hero-content text-neutral-content">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
                <p class="mb-5">
                    Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                    quasi. In deleniti eaque aut repudiandae et a id nisi.
                </p>
                <button class="btn btn-primary">Get Started</button>
            </div>
        </div>
    </div>
    {{-- @livewire('modal-form', [
            'model' => \App\Models\User::class,
            'formFields' => [
                ['label' => 'Name', 'field' => 'name', 'type' => 'text', 'validation' => 'required|string|max:255'],
                ['label' => 'Email', 'field' => 'email', 'type' => 'email', 'validation' => 'required|email|max:255'],
                ['label' => 'Password', 'field' => 'password', 'type' => 'password', 'validation' => 'nullable|string|min:8'],
            ]
        ]) --}}
</section>
@endsection
