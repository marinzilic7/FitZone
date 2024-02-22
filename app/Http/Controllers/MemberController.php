<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function addMember(Request $request){

        $data = $request -> validate([
            'user_id' => '',
            'firstName' => '',
            'lastName' => '',
            'coach_id' => 'required',
            'training_id' => 'required'
        ],
        );

        $data['user_id'] = auth()->id();

        $member = new Member();
        $member->create($data);
        return response()->json(['message' => 'Member created successfully'], 201);
    }

    public function getMember(){
        $members = Member::with('user','coach', 'training')->get();
        return response()->json(['members' => $members]);
    }
}
