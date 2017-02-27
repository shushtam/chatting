<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Response;
use App\chatuser;
use Illuminate\Support\Facades\Input;
use Illuminate\Session\TokenMismatchException;
use Session;
use Validator;

class chatuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return view('users');
        return Response::json(chatuser::get());
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
         $rules = array(
            'nickname'         => 'required|min:2|max:255|alpha_num',                        
            'email'            => 'required|min:2|max:255|Email',    
            'password'         => 'required|min:5|max:255',

         );
   /* $messages = array(
     'nickname.min' => 'Nickname is not long enough.',
     'nickname.max'=>'Nickname is too long',
     'nickname.alpha_num'=>'Nickname must contain only letters and numbers',
      'email.min' => 'Email is not long enough.',
     'email.max'=>'Email is too long',
     'email.email'=>'Email is not correct',
      'password.min' => 'Password is not long enough.',
     'password.max'=>'Password is too long',
     );*/
        $validator = Validator::make($request->all(), $rules);
        $messages = $validator->errors();
        if ($validator->fails()) {
               //return Response::json(array($messages)); 
               Session::flash('error',$messages); 
               return view('sign');
        }

        $img=$request->nickname.".jpg";
        if(INPUT::hasfile('file')) {
                $file=INPUT::file('file');
                $file->move('uploads',$img);
        }

        $unique=DB::table('chatusers')->where('nickname',  $request->nickname)->first();
        if($unique==null) {
          DB::table('chatusers')->insert([
                    'nickname' => $request->nickname, 
                    'email' => $request->email,
                    'password' => $request->password, 
                    'image'=>$img
                ]);
        $user=DB::table('chatusers')->where('nickname',  $request->nickname)->where('email', $request->email)
                                    ->where('password',$request->password)->first();
        return view('profile')->with('user',$user);
        }
        else {
            Session::flash('message','Nickname '.$request->nickname.' already exists, choose another one');
            return view('sign');
        }

    }


        /**
     * Check resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function check(Request $request)
    {
        //
        return Response::json(DB::table('chatusers')->where('nickname', $request->nickname)->where('password',$request->password)->first());

    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $user=DB::table('chatusers')->where('nickname', $request->nickname)->where('password',$request->password)->first();
        return view('profile')->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id//Request $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
         $user=DB::table('chatusers')->where('nickname', $request->nickname)->first();
         return view('edit')->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id//Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        DB::table('chatusers')->where('chatusers_id', $request->chatusers_id)->update(['nickname' => $request->nickname,'email' => $request->email,
        'password' => $request->password]);
        $user=DB::table('chatusers')->where('chatusers_id', $request->chatusers_id)->first();
        return view('profile')->with('user',$user);

    }

          /**
     * Display the all resources.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getall()
    {
        //
        $user=DB::table('chatusers')->get();
        return view('allusers')->with('user',$user);

    }

        /**
     * Delete the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id//Request $request
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        //
        DB::table('chatusers')->where('nickname',$request->nickname)->delete();
        return view('index');

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
        chatuser::destroy($id);
        return Response::json(array('success' => true));
    }
}
