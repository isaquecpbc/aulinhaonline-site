<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EnrollmentFormRequest;
use App\Models\Enrollment;
use Illuminate\Support\Facades\DB;

class EnrollmentController extends Controller
{
    private $enrollment;

    public function __construct(Enrollment $enrollment)
    {
        $this->enrollment = $enrollment;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //titulo na Aba da página
        $title_page = 'Inscreva-se';
        //
        $active = 'enrollment';
        
        return view('site.enrollment.form', compact('title_page', 'active'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirmation()
    {
        //titulo na Aba da página
        $title_page = 'Confirmação';
        //
        $active = 'enrollment';
        
        return view('site.enrollment.confirmation', compact('title_page', 'active'));
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
    public function store(EnrollmentFormRequest $request)
    {
        //
        $dataForm = $request->validated();

        $insert = $this->enrollment->create($dataForm);

        if ($insert) {
            return redirect()->route('enrollment.confirmation')->with(['status' => 'Sucesso']);
        } else {
            return redirect()->back()->withErrors(['errors' => 'Falha ao inscrever aluno']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function show(enrollment $enrollment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function edit(enrollment $enrollment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, enrollment $enrollment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function destroy(enrollment $enrollment)
    {
        //
    }
}
