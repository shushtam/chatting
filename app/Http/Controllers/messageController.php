<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Response;
use App\message;
use Illuminate\Support\Facades\Input;

class messageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Response::json(message::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        message::create (array(
            'body' => Input::get('body'),
            'room_name' => Input::get('room_name'),
            'nickname' => Input::get('nickname')

        ));
        return Response::json(array('success' => true));
        
    }

    /**
     * Get resources
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getmessages(Request $request)
    {
        //
         $room = DB::table('rooms')->where('room_name', $request->selroom)->get();
         $messages = DB::table('messages')->where('room_name', $room->room_name)->get();
         if($messages==null)
            echo "error";
         else
           return view('messages')->with('messages',$messages)->with('authorid',$request->chid)->with('authorname',$request->chname)
                                  ->with('room',$room->rooms_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

          /**
     * Display the all resources.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getall()
    {
        //
        $message=DB::table('messages')->get();
        return view('allmessages')->with('message',$message);

    }
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //message::destroy($id);
        message::where('message_id', $id)->delete();
        return Response::json(array('success' => true));
    }
}
