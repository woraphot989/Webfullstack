<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Userdata extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function render()
    {
        // ดึงข้อมูลทั้งหมดจาก User เก็บใส่ตัวแปร data
        $data = User::Paginate(2);
        // with compact  คือ ทุกครั้งที่มีการ render ใหม่ ให้ส่งตัวแปร data ไปที่หน้า views ด้วย
        return view('livewire.userdata')->with(compact('data'));
    }
}
