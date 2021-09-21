<?php

namespace App\Http\Livewire\Forms;

use App\Models\User;
use Livewire\Component;
use Tanthammar\TallForms\Input;
use Tanthammar\TallForms\TallForm;

class CreateUser extends Component
{
    use TallForm;

    // public $user;

    public function mount(?User $user)
    {
        //Gate::authorize()
        $this->fill([
            'formTitle' => trans('global.create').' '.trans('crud.user.title_singular'),
            'wrapWithView' => true, //see https://github.com/tanthammar/tall-forms/wiki/Wrapper-Layout
            'showGoBack' => false,
        ]);
        $this->mount_form($user); // $user from hereon, called $this->model
    }


    // Mandatory method
    public function onCreateModel($validated_data)
    {
        // Set the $model property in order to conditionally display fields when the model instance exists, on saveAndStayResponse()
        $this->model = User::create($validated_data);
    }

    // OPTIONAL method used for the "Save and stay" button, this method already exists in the TallForm trait
    public function onUpdateModel($validated_data)
    {
        $this->model->update($validated_data);
    }

    public function fields()
    {
        return [
            Input::make('Name')->rules('required'),
        ];
    }
}
