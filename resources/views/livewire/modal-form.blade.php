<div class="modal-form-container">
    <!-- Flash message (optional) -->
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <!-- Button to trigger the modal (this could be a button to edit or add a user) -->
    <button class="btn" onclick="userModal.showModal()">Open User Modal</button>

    <!-- DaisyUI Modal -->
    <dialog id="userModal" class="modal">
        <div class="modal-box">
            <form wire:submit.prevent="submit">
                <!-- Close button -->
                <button class="absolute btn btn-sm btn-circle btn-ghost right-2 top-2"
                    onclick="userModal.close()">✕</button>
                <!-- Modal Title -->
                <h3 class="text-lg font-bold">{{ $isEdit ? 'Edit User' : 'Create User' }}</h3>
                <div class="py-4">
                    <!-- Dynamic Form Fields -->
                    @foreach ($formFields as $field)
                        @php
                            $label = $field['label'] ?? ucfirst(str_replace('_', ' ', $field['field']));
                            $type = $field['type'] ?? 'text';
                            $value = $formData[$field['field']] ?? null;
                        @endphp
                        <div class="mt-2 form-group">
                            <label for="{{ $field['field'] }}">{{ $label }}</label>
                            <input type="{{ $type }}" wire:model="formData.{{ $field['field'] }}"
                                id="{{ $field['field'] }}" class="w-full input input-bordered"
                                placeholder="Enter {{ $label }}"
                                {{ $type === 'password' && !$isEdit ? 'required' : '' }} />
                            @error('formData.' . $field['field'])
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    @endforeach

                    <!-- Submit Button -->
                    <button type="submit" class="mt-4 btn btn-primary">
                        {{ $isEdit ? 'Update' : 'Create' }}
                    </button>
                </div>
            </form>
        </div>
    </dialog>
</div>
