<?php

namespace App\Livewire;

use App\Models\Record;
use Livewire\Component;

class RecordComponent extends Component
{
  public $records = [];
  public $date;
  public $total_calories;
  public $carbs;
  public $proteins;
  public $fats;
  public $modal = false;

  public function mount()
  {
    $this->records = Record::where('user_id', auth()->user()->id)->get();
  }

  public funtion render()
  {
    return view('livewire.record-component');
  }

  private function clearFields(){
    $this->date = '';
    $this->total_calories = '';
    $this->carbs = '';
    $this->proteins = '';
    $this->fats = '';
  }
  
  public function createRecord(){
    $this->clearFields();
    $this->modal = true;


  }
}