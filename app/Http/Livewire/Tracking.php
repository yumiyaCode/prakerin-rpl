<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Rw;



class Tracking extends Component
{
    public $provinsi;
    public $kota;
    public $kecamatan;
    public $kelurahan;
    public $rw;

    public $selectedPro = null;
    public $selectedKot = null;
    public $selectedKec = null;
    public $selectedKel = null;

    

    public function mount()
    {

    $this->provinsi = Provinsi::all();
    $this->kota = collect();
    $this->kecamatan = collect();
    $this->kelurahan = collect();
    $this->rw = collect();
    
    }
    public function render()
    {
        return view('livewire.tracking');
    }

    public function updatedSelectedPro($provinsi)
    {
        if(!is_null($provinsi)){
    	$this->kota = Kota::where('id_provinsi', $provinsi)->get();
      }
    }

    public function updatedSelectedKot($kota){
        if(!is_null($kota)){
            $this->kecamatan = Kecamatan::where('id_kota', $kota)->get();
        }
    }
    public function updatedSelectedKec($kecamatan){
        if(!is_null($kecamatan)){
            $this->kelurahan = Kelurahan::where('id_kecamatan', $kecamatan)->get();
        }
    }

    public function updatedSelectedKel($kelurahan){
        if(!is_null($kelurahan)){
            $this->rw = Rw::where('id_kelurahan', $kelurahan)->get();
        }
    }
    
   
    
}
