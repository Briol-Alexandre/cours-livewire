<?php

namespace App\Livewire;

use App\Livewire\Forms\OrganizationForm;
use Livewire\Component;

class OrganizationsCreate extends Component
{
    public $feedback ='';
    public OrganizationForm $form;


    public function save()
    {
        $this->form->store();
        $this->feedback = 'The organization has been created';
    }
}
