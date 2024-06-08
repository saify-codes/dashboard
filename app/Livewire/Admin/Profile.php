<?php

namespace App\Livewire\Admin;

use Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;
    public $fullname;
    public $email;
    public $message;
    public $file;

    public $avatar;

    protected $rules = [
        'fullname' => 'required|min:3',
        'email' => 'required|email',
    ];

    public function mount() {
        $user           = Auth::user();
        $this->fullname = $user->name;
        $this->email    = $user->email;
        $this->avatar   = $user->avatar ?? 'uploads/avatar.png';
    }


    public function submit()
    {
        $this->validate();
 
        Auth::user()->update(['name' => $this->fullname]);
        $this->message = "profile updated";

    }

    public function updatedFile(){

        $this->validate([
            'file' => 'required|mimes:jpg,png|max:1024',
        ]);

        $file_path = $this->file->store('uploads', 'public');
        Auth::user()->update(['avatar' => $file_path]);
        $this->avatar =$file_path;

    }

    public function render()
    {
        return view('livewire.admin.profile');
    }
}