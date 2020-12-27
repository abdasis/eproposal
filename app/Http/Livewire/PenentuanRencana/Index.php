<?php

namespace App\Http\Livewire\PenentuanRencana;

use App\Models\IndikatorKegiatan;
use App\Models\Kegiatan;
use App\Models\Kondisi;
use App\Models\PenetuanRencana;
use App\Models\Proposal;
use App\Models\SubKegiatan;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Str;

class Index extends Component
{
    public $proposal;
    public $judul_kegiatan, $nomor_kegiatan, $sumber_daya, $penanggung_jawab, $jadwal_pelaksanaan;
    public $sub_kegiatan;
    public $noKegiatans;
    public function mount($proposal_id)
    {
        $this->proposal = Proposal::find($proposal_id);
    }

    public function delete($id)
    {
        $this->confirm('Apakah anda yakin?', [
            'text' => 'Data yang dihapus tidak dapat dikembalikan'
        ]);

        return;
    }

    public function onCancelledCallBack()
    {
    }

    public function store()
    {
        try {
            DB::beginTransaction();
            $getPenentuanRencana = PenetuanRencana::where('sub_kegiatan', $this->sub_kegiatan)->first();
            if ($getPenentuanRencana) {
                $subKegiatan = new SubKegiatan();
                $subKegiatan->judul_kegiatan = $this->judul_kegiatan;
                $subKegiatan->sumber_daya = json_encode(explode(',', $this->sumber_daya));
                $subKegiatan->penanggung_jawab = json_encode(explode(',', $this->penanggung_jawab));
                $subKegiatan->jadwal = $this->jadwal_pelaksanaan;
                $getPenentuanRencana->dataSubKegiatan()->save($subKegiatan);
                $this->reset();
                $this->emit('success', ['title' => 'Berhasil', 'message' => 'Data berhasil disimpan!']);
            } else {
                $penentuanRencana = new PenetuanRencana();
                $penentuanRencana->sub_kegiatan = $this->sub_kegiatan;
                $penentuanRencana->nomor_kegiatan = $this->nomor_kegiatan;
                $penentuanRencana->sumber_daya = $this->sumber_daya;
                $penentuanRencana->penanggung_jawab = $this->penanggung_jawab;
                $penentuanRencana->jadwal = $this->jadwal_pelaksanaan;
                $penentuanRencana->proposal_id = $this->proposal->id;
                $penentuanRencana->save();
                $subKegiatan = new SubKegiatan();
                $subKegiatan = new SubKegiatan();
                $subKegiatan->judul_kegiatan = $this->judul_kegiatan;
                $subKegiatan->sumber_daya = json_encode(explode(',', $this->sumber_daya));
                $subKegiatan->penanggung_jawab = json_encode(explode(',', $this->penanggung_jawab));
                $subKegiatan->jadwal = $this->jadwal_pelaksanaan;
                $penentuanRencana->dataSubKegiatan()->save($subKegiatan);
                $this->reset();
                $this->emit('success', ['title' => 'Berhasil', 'message' => 'Data berhasil disimpan!']);
            }

            DB::commit();
        } catch (\Throwable $th) {
            throw $th;
            DB::rollback();
        }
    }

    // public function updated($propertySubKegiatan)
    // {
    //     // dd($propertySubKegiatan);
    //     $kegiatan = Kegiatan::where('nama_kegiatan', $this->sub_kegiatan)->first();
    //     // dd($kegiatan);
    //     $this->noKegiatans = IndikatorKegiatan::where('kegiatan_id', $kegiatan->id)->get();
    // }

    public function render()
    {
        return view('livewire.penentuan-rencana.index', [
            'indikatorKegiatan' => IndikatorKegiatan::where('proposal_id', $this->proposal->id)->latest()->get(),
            'dataPenentuanRencana' => PenetuanRencana::where('proposal_id', $this->proposal->id)->latest()->get(),
        ]);
    }
}
