<?php

namespace App\Http\Controllers;

use App\Models\Admin\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        if ($search) {
            # code...
            $schools = School::where('name_school', 'like', '%' . $search . '%')->orderBy('name_school', 'DESC')->paginate(4)->appends(['search' => $search]);
        }
        $schools = School::orderBy('name_school', 'DESC')->paginate(4); // Ganti 10 dengan jumlah item per halaman yang diinginkan
        return view('pages.admin.school_page.index', compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(School $school)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(School $school)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, School $school)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(School $school)
    {
        $school->delete();
        Session::flash('message', 'Berhasil Hapus data');
        return redirect()->back();
    }
}
