<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Validator;

class GalleryController extends Controller
{
    public function fileUpload(Request $request) {
        $this->validate($request, [
            'input_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);
        if ($request->hasFile('input_img')) {
            $image = $request->file('input_img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img/galleryImages');
            $image->move($destinationPath, $name);
            $gallery = new Gallery();
            $date = Carbon::now();
            $desc = $request->get('desc');
            $gallery->filename = $name;
            $gallery->desc = $desc;
            $gallery->created_at = $date;
            $gallery->save();

//            $galleryImages = DB::table('gallery')->get()->all();

            return back()->with(['success' => 'Obrázok bol úspešne uploadnutý!',
//                'gallery' => $galleryImages
                ]);
        }
    }

    public function destroy($id) {
        $filename = DB::table('gallery')->where('id', $id)->pluck('filename')->first();

        $image_path = public_path('/img/galleryImages/').$filename;

//        $galleryImages = DB::table('gallery')->paginate(8);
        if(File::exists($image_path)) {
            File::delete($image_path);
            Gallery::destroy($id);
        } else{
            return response()->json([
                'error' => 'Nepodarilo sa vymazať položku!',

            ]);
        }

        return response()->json([
            'success' => 'Uspesne bol vymazany gallery item',
        ]);
    }

    public function editItem(Request $request) {
        $id = $request->get('id');
        $date = Carbon::now();
        $desc = $request->get('desc');
        $validation = Validator::make($request->all(), [
            'input_img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096'
        ]);
        if($validation->passes()){
            $gallery = Gallery::find($id);
            $oldName = $gallery->filename;
            $image_path = public_path('/img/galleryImages/').$oldName;
            if(File::exists($image_path)) {
                File::delete($image_path);
                $image = $request->file('input_img');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/img/galleryImages');
                $image->move($destinationPath, $name);
                $gallery->filename = $name;
                $gallery->desc = $desc;
                $gallery->updated_at = $date;
                $gallery->update();
                return response()->json(['success'=>'Editovanie bolo úspešné!']);
            } else{
                return response()->json([
                    'error' => 'Nepodarilo sa vymazať položku!',
                ]);
            }
        } else{
            $gallery = Gallery::find($id);
            $gallery->desc = $desc;
            $gallery->updated_at = $date;
            $gallery->update();
            return response()->json(['success'=>'Editovanie bolo úspešné!']);
        }
    }
}
