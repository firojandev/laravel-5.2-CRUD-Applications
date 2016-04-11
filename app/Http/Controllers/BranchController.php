<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Redirect;

use App\Http\Requests;

use App\Branch;

use Session;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branchList = Branch::All();

        return view('panel.branch.branch')
                   ->with('branchList',$branchList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('panel.branch.add-branch');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $count = Branch::where('branch_name','=',$request->input('branch_name'))->count();

        if($count>0){
            //Already this branch name exist.
            Session::flash('message', 'Already exist this branch');
            Session::flash('message_type', 'danger');
           return redirect::to('/add-branch');
        }

        $branch = new Branch;

        $branch->branch_name=$request->input('branch_name');
        $branch->branch_address=$request->input('branch_address');
        $branch->branch_phone=$request->input('branch_phone');

        $branch->save();

        Session::flash('message', 'New branch added successfully');
        Session::flash('message_type', 'success');

        return redirect::to('/branch');

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
    public function edit($id)
    {
        $branchInfo = Branch::where('id','=',$id)->get();

        return view('panel.branch.edit-branch')
                   ->with('branchInfo',$branchInfo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $branch = Branch::find($request->input('id'));

        $count = Branch::where('id','!=',$request->input('id'))
                         ->where('branch_name','=',$request->input('branch_name'))
                         ->count();
        if($count>0){
            //Already this branch name exist.
             Session::flash('message', 'Already exist this branch');
            Session::flash('message_type', 'danger');
           return redirect::to('/edit-branch/'.$request->input('id'));
        }
        

        $branch->branch_name=$request->input('branch_name');
        $branch->branch_address=$request->input('branch_address');
        $branch->branch_phone=$request->input('branch_phone');

        $branch->save();

         Session::flash('message', 'Branch updated successfully');
         Session::flash('message_type', 'success');

        return redirect::to('/branch');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $branch = Branch::find($id);

         $branch->delete();

          Session::flash('message', 'branch deleted successfully');
          Session::flash('message_type', 'success');

         return redirect::to('/branch');
    }
}
