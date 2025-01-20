<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Model;

class ModalForm extends Component
{
    public $model;
    public $formFields = []; // Holds the configuration for the fields
    public $formData = [];
    public $isEdit = false;
    public $data = [];

    public function mount($model, $id = null, $formFields = [])
    {
        // Set model and form fields configuration
        $this->model = $model;
        $this->formFields = $formFields;

        // If ID is provided, fetch the existing model instance for editing
        if ($id) {
            $this->isEdit = true;
            $this->data = $this->model::find($id);
            $this->formData = $this->data->toArray();
        } else {
            // Set default empty values for new form
            $this->formData = array_fill_keys(array_column($formFields, 'field'), null);
        }
    }

    public function submit()
    {
        // Validate and submit the form data
        $this->validateDynamicFields();

        if ($this->isEdit) {
            // Update existing model
            $this->data->update($this->formData);
        } else {
            // Create new model
            $newModel = $this->model::create($this->formData);
        }

        session()->flash('message', $this->isEdit ? 'Record updated successfully!' : 'Record created successfully!');
        $this->resetForm();
    }

    protected function validateDynamicFields()
    {
        $rules = [];

        foreach ($this->formFields as $field) {
            $fieldName = $field['field'];
            $rules["formData.$fieldName"] = $field['validation'] ?? 'required|string';
        }

        $this->validate($rules);
    }

    public function resetForm()
    {
        $this->formData = [];
        $this->isEdit = false;
    }

    public function render()
    {
        return view('livewire.modal-form');
    }
}