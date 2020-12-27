<?php

namespace App\Http\Livewire\IndikatorTujuan;

use App\Models\IndikatorTujuan;
use App\Models\Kondisi;
use App\Models\Proposal;
use App\Models\Strategi;
use App\Models\TargetThreat;
use App\Models\Tujuan;
use Livewire\Component;

class Index extends Component
{
    public $proposal;
    public $tujuan, $indikator_tujuan, $nilai_awal, $nilai_akhir, $threat;
    public $input_priode = [];
    public $i = 1;
    public $indikatorTujuan_id;
    public function mount($proposal_id)
    {
        $this->proposal = Proposal::find($proposal_id);
    }

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->input_priode, $i);
    }

    public function remove($i)
    {
        unset($this->input_priode[$i]);
    }

    public function store()
    {

        $getTujuan = Tujuan::where('tujuan', $this->tujuan)->first();
        if ($getTujuan) {
            $indikatorTujuan = new IndikatorTujuan();
            $indikatorTujuan->tujuan_prioritas = $this->tujuan;
            $indikatorTujuan->indikator_kinerja = $this->indikator_tujuan;
            $indikatorTujuan->nilai_target = json_encode($this->nilai_akhir);
            $indikatorTujuan->nilai_awal = $this->nilai_awal;
            $indikatorTujuan->proposal_id = $this->proposal->id;
            $getTujuan->indikators()->save($indikatorTujuan);
            $this->emit('success', ['title' => 'Berhasil', 'message' => 'Data Berhasil disimpan']);
        } else {
            $tujuan = new Tujuan();
            $tujuan->tujuan = $this->tujuan;
            $tujuan->proposal_id = $this->proposal->id;
            $tujuan->save();
            $indikatorTujuan = new IndikatorTujuan();
            $indikatorTujuan->tujuan_prioritas = $this->tujuan;
            $indikatorTujuan->indikator_kinerja = $this->indikator_tujuan;
            $indikatorTujuan->nilai_target = json_encode($this->nilai_akhir);
            $indikatorTujuan->nilai_awal = $this->nilai_awal;
            $indikatorTujuan->proposal_id = $this->proposal->id;
            $tujuan->indikators()->save($indikatorTujuan);
            $this->emit('success', ['title' => 'Berhasil', 'message' => 'Data Berhasil disimpan']);
        }
    }

    public function formReset()
    {
        $this->tujuan = null;
        $this->indikator_tujuan = null;
        $this->nilai_awal = null;
        $this->threat = null;
        $this->nilai_awal = null;
        $this->nilai_akhir = null;
    }

    public function delete($id)
    {
        $this->indikatorTujuan_id = $id;
        $this->confirm('Apakah anda yakin?', [
            'text' => 'Data yang dihapus tidak dapat di kembalikan!'
        ]);

        return;
    }

    public function onCancelledCallBack()
    {
        return;
    }

    public function onConfirmedAction()
    {
        $indikator = IndikatorTujuan::where('id', $this->indikatorTujuan_id)->first();
        $indikator->delete();
        $this->alert('success', 'Data berhasil dihapus');
    }


    public function render()
    {
        $getTujuan = IndikatorTujuan::where('proposal_id', $this->proposal->id)->max('nilai_target');
        $tujuan = IndikatorTujuan::where('nilai_target', $getTujuan)->first();
        if (!empty($tujuan)) {
            $getMaxNilaiTarget = json_decode($tujuan->nilai_target);
        } else {
            $getMaxNilaiTarget = [];
        }

        $strategi = Strategi::where('proposal_id', $this->proposal->id)->get();
        $threat = Kondisi::where('proposal_id', $this->proposal->id)->where('swot', 'T')->latest()->get();

        return view('livewire.indikator-tujuan.index', [
            'strategies' => $strategi,
            'threats' => $threat,
            'indikatorTujuan' => Tujuan::where('proposal_id', $this->proposal->id)->latest()->get(),
            'countPriode' => IndikatorTujuan::where('proposal_id', $this->proposal->id)->max('nilai_target'),
            'getMaxNilaiTarget' => $getMaxNilaiTarget,
        ]);
    }
}
