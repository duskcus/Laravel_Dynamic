@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section>
        <div class="toast toast-end">
            <div class="alert alert-info">
              <span>New mail arrived.</span>
            </div>
            <div class="alert alert-success">
              <span>Message sent successfully.</span>
            </div>
          </div>
    </section>
@endsection
