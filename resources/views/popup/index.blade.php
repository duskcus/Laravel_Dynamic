@extends('layouts.default')

@section('content')
    <section>
        <p>Modal doesn't popup again. Activate again by going into f12 application and clearing the sites data.</p>

        <!-- Your modal dialog -->
        <dialog id="my_modal_3" class="modal">
            <div class="modal-box">
                <form method="dialog">
                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2" onclick="closeModal()">✕</button>
                </form>
                <h3 class="text-lg font-bold">Hello!</h3>
                <p class="py-4">Press ESC key or click on ✕ button to close</p>
            </div>
        </dialog>

        <script>
            // Function to close modal
            function closeModal() {
                my_modal_3.close();
            }

            // Check if modal should be shown
            window.onload = function() {
                // Check if the modal has been shown before in this session
                if (!sessionStorage.getItem('modalShown')) {
                    // Show the modal
                    my_modal_3.showModal();
                    // Set sessionStorage to indicate modal has been shown in this session
                    sessionStorage.setItem('modalShown', true);
                }
            };
        </script>

    </section>
@endsection
