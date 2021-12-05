<?php

namespace App\Http\Livewire\SurveyKondisi;

use App\Models\Proposal;
use Livewire\Component;

class DaftarProposal extends Component
{
    public function render()
    {
        return view('livewire.survey-kondisi.daftar-proposal', [
            'proposals' => Proposal::where('dibuat_oleh', \Auth::id())->latest()->get()
        ]);
    }
}
