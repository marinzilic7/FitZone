<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class CoachController extends Controller
{
    public function addCoach(Request $request){

        $data = $request->validate([
            'user_id' => '',
            'firstName' => '',
            'lastName' => '',
            'description' => '',
            'email' => '',
            'age' => '',
            'phone' => '',
            'image' => ''
        ]);

        $data['user_id'] = auth()->id();

        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $data['image'] = $name;
        }

        DB::table('coaches')->insert($data);
        return response()->json(['message' => 'Uspjesno dodan trener'], 201);
    }

    public function getCoaches(){
        $coaches = Coach::get();
        return response()->json(['coaches' => $coaches]);
    }

    public function deleteCoach($id){
        $coach = Coach::findorFail($id);
        $coach->delete();
        return response()->json(['message' => 'Trener izbrisan']);
    }
}
