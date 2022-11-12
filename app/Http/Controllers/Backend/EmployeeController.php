<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addemployee()
    {
        return view ('backend.manageemployee');
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
        $emp = new Employee;
        $emp->fname = $request->fname;
        $emp->lname = $request->lname;
        $emp->nid = $request->nid;
        $emp->address = $request->address;
        $emp->phone = $request->phone;
        $emp->email = $request->email;
        $emp->status = $request->status;
        $confirm =$emp->save();
        if($confirm){
            return response()->JSON([
                'massage'=>'success'
            ]);
        }
        else{
            return response()->JSON([
                'massage'=>'404'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $show = Employee::all();
       if($show){
            return response()->JSON([
                'status'=>'success',
                'employee'=>$show
            ]);
        }
        else{
            return response()->JSON([
                'status'=>'404',
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    }
}
