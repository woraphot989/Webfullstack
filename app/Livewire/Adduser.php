<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Exception;
use Livewire\WithFileUploads;
use Livewire\Component;
use PhpParser\Node\Stmt\TryCatch;

class Adduser extends Component
{
    use WithFileUploads;

    public $name, $email, $password, $photo;

    public function insert(){
        // dd($this->name);

        // คำสั่งไว้สำหรับดักจับ ERROR
        Try{

            // เพิ่มข้อมูลลงดาต้าเบส
             $model = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password)
            ]);

            if($this->photo){
                $fullpath = $this->photo->store('photo','public');
                //ตัวแปร ค้นหาที่ต้องอัพเดท
                // $model = user::find(auth()->user()->id);
                //สั่งให้ column
                $model->profile_photo_path =$fullpath;
                //สั่งบันทึกข้อมูล
                $model -> save();
               }

               //ถ้าทำเสร็จแล้วให้ไปกลับไป เส้นทางชื่อ userdata
               return redirect()->to(route('userdata'));



        }Catch(Exception $e){
            dd($e);
        }
    }

    public function render()
    {
        return view('livewire.adduser');
    }
}
