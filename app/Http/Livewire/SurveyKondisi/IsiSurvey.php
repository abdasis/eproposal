<?php

namespace App\Http\Livewire\SurveyKondisi;

use App\Models\Proposal;
use Livewire\Component;

class IsiSurvey extends Component
{
    public $proposal;
    public function mount($proposal_id)
    {
        $this->proposal = Proposal::find($proposal_id);

    }

    public function render()
    {


        return view('livewire.survey-kondisi.isi-survey');
    }
}
