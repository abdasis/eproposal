<?php

namespace App\Http\Livewire\IndikatorKegiatan;

use App\Models\IndikatorKegiatan;
use App\Models\IndikatorTujuan;
use App\Models\Kegiatan;
use App\Models\Kondisi;
use App\Models\Proposal;
use App\Models\Strategi;
use Livewire\Component;
use Illuminate\Support\Str;

class Index extends Component
{
    public $proposal;
    public $tujuan_prioritas, $nomor_kegiatan, $kegiatan,  $kinerja_kegiatan, $nilai_awal, $nilai_akhir;
    public $input_priode = [];
    public $i = 1;
    public $indikatorKegiatan_id;
    public function mount($proposal_id)
    {
        $this->proposal = Proposal::find($proposal_id);
    }

    protected $listeners = [
        'confirmed',
        'cancelled',
    ];

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

    public function delete($id)
    {
        $this->indikatorKegiatan_id = $id; {
            $this->confirm('Apakah yakin hapus data ini?', [
                'toast' => false,
                'position' => 'center',
                'showConfirmButton' => true,
                'cancelButtonText' => 'Tidak',
                'onConfirmed' => 'confirmed',
                'onCancelled' => 'cancelled'
            ]);
        }

        return;
    }

    public function cancelled()
    {
        return;
    }

    public function confirmed()
    {
        $indikator = IndikatorKegiatan::where('id', $this->indikatorKegiatan_id)->first();
        $indikator->delete();
        $this->alert('success', 'Data berhasil dihapus');
    }



    public function store()
    {

        $getKegiatan = Kegiatan::where('nama_kegiatan', Str::ucfirst($this->tujuan_prioritas))->first();
        if ($getKegiatan) {
            $indikatorKegiatan = new IndikatorKegiatan();
            $indikatorKegiatan->tujuan_prioritas = Str::ucfirst($this->tujuan_prioritas);
            $indikatorKegiatan->no_kegiatan = $this->nomor_kegiatan;
            $indikatorKegiatan->kegiaatan = Str::ucfirst($this->kegiatan);
            $indikatorKegiatan->indikator_kinerja = Str::ucfirst($this->kinerja_kegiatan);
            $indikatorKegiatan->nilai_awal = $this->nilai_awal;
            $indikatorKegiatan->nilai_target = json_encode($this->nilai_akhir);
            $indikatorKegiatan->proposal_id = $this->proposal->id;
            $getKegiatan->indikatorKegiatan()->save($indikatorKegiatan);
            $this->emit('success', ['title' => 'Berhasil', 'message' => 'Data berhasil di simpan']);
        } else {
            $kegiatan = new Kegiatan();
            $kegiatan->nama_kegiatan = $this->tujuan_prioritas;
            $kegiatan->proposal_id = $this->proposal->id;
            $kegiatan->save();
            $indikatorKegiatan = new IndikatorKegiatan();
            $indikatorKegiatan->tujuan_prioritas = Str::ucfirst($this->tujuan_prioritas);
            $indikatorKegiatan->no_kegiatan = $this->nomor_kegiatan;
            $indikatorKegiatan->kegiaatan = Str::ucfirst($this->kegiatan);
            $indikatorKegiatan->indikator_kinerja = Str::ucfirst($this->kinerja_kegiatan);
            $indikatorKegiatan->nilai_awal = $this->nilai_awal;
            $indikatorKegiatan->nilai_target = json_encode($this->nilai_akhir);
            $indikatorKegiatan->proposal_id = $this->proposal->id;
            $kegiatan->indikatorKegiatan()->save($indikatorKegiatan);
            $this->emit('success', ['title' => 'Berhasil', 'message' => 'Data berhasil di simpan']);
        }
    }


    public function render()
    {
        $getKegiatan = IndikatorKegiatan::where('proposal_id', $this->proposal->id)->get();
        // $kegiatan = IndikatorKegiatan::where('nilai_target', $getKegiatan)->first();
        $getMaxNilaiTarget = [];
        foreach ($getKegiatan as $key => $tujuan) {
            $getMaxNilaiTarget[] = json_decode($tujuan->nilai_target);
        }

        if ($getMaxNilaiTarget != null) {
            $getMaxNilaiTarget = max($getMaxNilaiTarget);
        }


        $strategi = Strategi::where('proposal_id', $this->proposal->id)->get();
        $threat = Kondisi::where('proposal_id', $this->proposal->id)->where('swot', 'T')->latest()->get();
        return view('livewire.indikator-kegiatan.index', [
            'strategies' => $strategi,
            'threats' => $threat,
            'indikatorKegiatan' => Kegiatan::where('proposal_id', $this->proposal->id)->latest()->get(),
            'getMaxNilaiTarget' => $getMaxNilaiTarget,
        ]);
    }
}
