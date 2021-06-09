<?php
namespace App\Http\Controllers;
use App\inspired_pictures;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Routing\Controller;

class inspiredPageController extends Controller
{
    public function index()
    {
        $inspiredPictures = inspired_pictures::all();

        return view('/Pages/index')->compact('inspiredPictures');
    }


    public function adminIndex()
    {
        $inspiredPictures = inspired_pictures::get();
        return view('Pages.Admin.AdminInspired')->with('inspiredPictures', $inspiredPictures);    
    }

    public function create()
    {
        return view('Pages.Admin.CreateAdminInspired');
    }

    public function store(Request $request)
    {
        $inspiredPictures = new inspired_pictures;
        $inspiredPictures->name = $request->input('name');
        $inspiredPictures->slug = $request->input('slug');
        $inspiredPictures->description = $request->input('description');
        if($request->hasfile('inspired_image'))
        {
            $file = $request->file('inspired_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('img/Inspired/',$filename);
            $inspiredPictures->inspired_image = $filename;
        }
        $inspiredPictures->save();

        return redirect('inspired_pictures')->with('status','De afbeelding is succesvol opgeslagen');
    }

    public function edit($id)
    {
        $inspiredPictures = inspired_pictures::find($id);
        return view('Pages.Admin.EditAdminInspired',compact('inspiredPictures'));
    }

    public function update(Request $request, $id)
    {
        $inspiredPictures = inspired_pictures::find($id);
        $inspiredPictures->name = $request->input('name');
        $inspiredPictures->slug = $request->input('slug');
        $inspiredPictures->description = $request->input('description');
        //controle of de afbeelding reeds bestaat indien wel verwijder en update afbeelding
        if($request->hasfile('inspired_image'))
        {
            $destination = 'img/Inspired/'.$inspiredPictures->inspired_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $file = $request->file('inspired_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('img/Inspired/',$filename);
            $inspiredPictures->inspired_image = $filename;
        }
        $inspiredPictures->update();

        return redirect('inspired_pictures')->with('status','De afbeelding is succesvol geüpdatet');

    }
    public function delete($id)
    {
        $inspiredPictures = inspired_pictures::find($id);
        $destination = 'img/Inspired'.$inspiredPictures->inspired_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $inspiredPictures->delete();
        return redirect('inspired_pictures')->with('status','De afbeelding is succesvol verwijderd');
    }

}
