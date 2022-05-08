<?php

namespace App\Http\Livewire;

use App\Models\Result;
use Livewire\Component;
use Illuminate\Support\Collection;

class Search extends Component
{
    public $search = '';


    public function render()
    {
        if ($this->search == '') {
            $result = '';
        } else {
            $result =  Result::where('key', 'like', "%" . $this->search . "%")->first();
        }

        return view('livewire.search', [
            'result' => $result
        ]);
    }
    public function click()
    {
        if ($this->search == '') {
            $result = '';
        } else {
            $result =  Result::where('key', 'like', "%" . $this->search . "%")->first();
            if (!isset($result)) {
                //
            } else{
                return redirect(route($result->value));
            }
        }
    }
}
