<?php

namespace App\Livewire;

use App\models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Userdata extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function delete($id){
        try{
            User::find($id)->delete();
        }catch(\Exception $e){
            dd($e);
        }


    }

    public function render()
    {
        $data = User::Paginate(2);
        return view('livewire.userdata')->with(compact('data'));
    }
}
