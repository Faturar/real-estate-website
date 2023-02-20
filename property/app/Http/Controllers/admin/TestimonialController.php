<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();

        return view('pages.admin.testimonial.index', [
            'testimonials' => $testimonials
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.testimonial.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimonial = new Testimonial;

        if($request->file('profile')){
            $testimonial->profile = $request->file('profile')->store('profile', 'public');
        } else {
            $testimonial->profile = "/profile/default.png";
        }

        $testimonial->name = $request->name;
        $testimonial->profesi = $request->profesi;
        $testimonial->deskripsi = $request->deskripsi;

        $testimonial->save();

        return redirect()->route('testimonial.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testimonial = Testimonial::find($id);

        return view('pages.admin.testimonial.show', [
            'testimonial' => $testimonial
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = Testimonial::find($id);

        return view('pages.admin.testimonial.edit', [
            'testimonial' => $testimonial
        ]);
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
        $testimonial = Testimonial::find($id);

        if($request->file('profile')){
            $testimonial->profile = $request->file('profile')->store('profile', 'public');
        } 

        $testimonial->name = $request->name;
        $testimonial->profesi = $request->profesi;
        $testimonial->deskripsi = $request->deskripsi;

        $testimonial->save();

        return redirect()->route('testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);

        Storage::disk('public')->delete($testimonial->profile);

        $testimonial->delete();

        return redirect()->route('testimonial.index');
    }
}
