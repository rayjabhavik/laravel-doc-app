<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Session;

class YajraController extends Controller
{
    //
    function studentdata(Request $request)
    {
        if ($request->ajax()) {
            $data = Student::select("*")->get();
            // dd($data);

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {

                    if ($row->status == 1) {
                        return "Active";
                    } else {
                        return "Inactive";
                    }

                })
                ->addColumn('action', function ($row) {
                    $updateButton = '<a href="' . route('update', $row->id) . ' "class = "btn btn-sm btn-info updateUser me-1" data-bs-toggle="modal"><span class="fas fa-pen-to-square"></span></a>';
                    $deleteButton = '<a href="' . route('delete', $row->id) . '" onclick="return confirm(\'Are you sure you want to delete this item?\');" class="btn btn-sm btn-danger updateUser me-1" data-bs-toggle="modal"><span class="fa-solid fa-trash"></span></a>';

                    // $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
                    // return $btn;
    

                    $buttonsContainer = "<div class='d-flex'>" . $updateButton . $deleteButton . "</div>";
                    return $buttonsContainer;
                })
                ->make(true);
        }

        return view('yajra');
    }
    function create(Request $request)
    {
        // dd($request->all());
        $student = new Student();

        $student->name = $request->name;
        // $request->session()->flash('first_name',$setdata);
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->status = $request->status;

        $student->save();

        if ($student->save()) {
            Session::flash('success', 'Student created successfully!');
        } else {
            Session::flash('error', 'An error occurred while creating the student.');
        }
        return redirect()->route('studentyajra');
    }

    function update($id)
    {
        $data = Student::where("id", $id)->first();
        // dd($data->toArray());
        return view('update', compact('data'));
    }

    function edit($id, Request $request)
    {
        // dd($id);
        $student = Student::find($id);
        $student->name = $request->first;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->status = $request->status;
        $student->save();
        if ($student->save()) {
            Session::flash('update', 'Student updated successfully!');
        }

        return redirect()->route('studentyajra');
    }

    function delete($id)
    {
        $student = Student::find($id);

        if ($student) {
            $student->delete();
            Session::flash('delete', 'Student deleted successfully!');
        } else {
            Session::flash('error', 'Student not found or could not be deleted.');
        }
        // Student::where('id', $id)->delete();

        return redirect()->route('studentyajra');
    }
}