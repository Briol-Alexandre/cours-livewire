<?php

namespace App\Livewire;

use App\Models\Organization;
use Livewire\Component;
use App\Livewire\Forms\OrganizationForm;

class OrganizationsEdit extends Component
{
    public $organization;
    public $feedback ='';
    public OrganizationForm $form;

    public function mount(Organization $organization)
    {
        $this->form->setOrganization($organization);
        $this->organization = $organization;
        $this->organization->load('contacts');
    }

    public function save()
    {
        $this->form->update();
        $this->feedback = 'The organization has been updated';
    }
}
