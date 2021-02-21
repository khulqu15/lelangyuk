<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public $path;
    public $dimen;

    public function __construct()
    {
        $this->path = public_path().'/img/user/';
        $this->dimen = 750;
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if($request->file('avatar') != null) {
            if(!File::isDirectory($this->path)) {
                File::makeDirectory($this->path, 0777, false);
            }
            if($user->avatar != null && $user->avatar != 'avatar.png') {
                unlink($this->path.$user->avatar);
            }
            $file = $request->file('avatar');
            $fileName = str_replace(' ', '_', $request->name).'-'.time().'-'.uniqid().'.'.$file->extension();
            $img = Image::make($file->path());
            $img->resize($this->dimen, $this->dimen, function($constraint) {
                $constraint->aspectRatio();
            })->save($this->path.$fileName);
            $user->avatar = $fileName;
        }
        $user->save();
        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }

    public function updatePassword(Request $request, $id)
    {
        $user = User::find($id);
        if(Hash::check($request->old_password, $user->password)) {
            if($request->new_password == $request->new_re_password) {
                $user->password = Hash::make($request->password);
                $user->save();
                return redirect()->back()->with('success', 'Password berhasil diupdate');
            } else {
                return redirect()->back()->with('error', 'Password baru tidak sesuai');
            }
        } else {
            return redirect()->back()->with('error', 'Password lama tidak sesuai');
        }
    }
}
