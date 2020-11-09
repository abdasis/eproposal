<?php

namespace App\Http\Livewire\SurveyKondisi;

use App\Models\Kondisi;
use App\Models\Proposal;
use Livewire\Component;

class IsiSurvey extends Component
{
    public $proposal;
    public $nilai;
    public $isi_survey;
    public function mount($proposal_id)
    {
        $this->proposal = Proposal::find($proposal_id);

    }

    public function render()
    {
        $kondisi_s = Kondisi::where('swot', 'S')->get();
        $kondisi_t = Kondisi::where('swot', 'T')->get();
        $kondisi_w = Kondisi::where('swot', 'W')->get();
        $kondisi_o = Kondisi::where('swot', 'O')->get();
        return view('livewire.survey-kondisi.isi-survey', [
            'kondisi_s' => $kondisi_s,
            'kondisi_t' => $kondisi_t,
            'kondisi_o' => $kondisi_o,
            'kondisi_w' => $kondisi_w,
        ]);
    }
}
