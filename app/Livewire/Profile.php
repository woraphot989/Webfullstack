<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    // ใช้อัพรูป
    use WithFileUploads;
    // ประกาศตัวแปร
    public $name = "Woraphot Khunchat",$username,$email,$photo;

    public function update(){
        // dd($this->username);
        // dd($this->photo);

        if($this->photo){
            $fullpath = $this->photo->store('photo','public');
            //ตัวแปร ค้นหาที่ต้องอัพเดท
            $model = user::find(auth()->user()->id);
            //สั่งให้ column 
            $model->profile_photo_path =$fullpath;
            //สั่งบันทึกข้อมูล
            $model -> save();
           }

        // การอัพเดทข้อมูลลงฐานข้อมูล
        User::where('id',auth()->user()->id)
        ->update([
            'name' => $this->username,
            'email' => $this->email,
        ]);
    
    }
    
    public function render()
    {
        return view('livewire.profile');
    }
}
