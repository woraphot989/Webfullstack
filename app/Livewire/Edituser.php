<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Exception;
use Livewire\WithFileUploads;
use Livewire\Component;
use PhpParser\Node\Stmt\TryCatch;

class Edituser extends Component
{
    use WithFileUploads;

    public $uid, $name, $email, $password, $photo , $temp_user;

    public function mount($id)
    {
        $temp_user = User::find($id);
        $this->name = $temp_user->name;
        $this->email = $temp_user->email;
        $this->uid = $id;
        // $this->password = $temp_user->password;
    }
    public function insert(){
        // dd($this->name);

        // คำสั่งไว้สำหรับดักจับ ERROR
        Try{

            // เพิ่มข้อมูลลงดาต้าเบส
             $model = User::where('id',$this->uid)
             ->update([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password)
            ]);
            $model = User::find($this->uid);

            if($this->photo){
                $fullpath = $this->photo->store('photo','public');
                //ตัวแปร ค้นหาที่ต้องอัพเดท
                // $model = user::find(auth()->user()->id);
                //สั่งให้ column
                $model->profile_photo_path =$fullpath;
                //สั่งบันทึกข้อมูล
                $model -> save();
               }

               return redirect()->to(route('userdata'));

        }Catch(Exception $e){
            dd($e);
        }
    }

    public function render()
    {
        return view('livewire.edituser');
    }
}
