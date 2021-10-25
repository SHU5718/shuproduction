<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{

    public function imagestore(Request $request)
    {
        session_start();

        $user_id = $_SESSION['id'];
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images/uploaded_avatar'),$imageName);

    }
}
