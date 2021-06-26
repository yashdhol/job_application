<?php

namespace App\Http\Controllers;

use App\Models\CandidateDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Models\EducationDetails;
use App\Models\LanguagesDetails;
use App\Models\Locations;
use App\Models\TechnicalExperience;
use App\Models\WorkExperience;
use App\Models\PreferenceDetails;
use Yajra\DataTables\DataTables;

class CandidateDetailsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $candidateDetails = CandidateDetails::select('*');
        return Datatables::of($candidateDetails)->addIndexColumn()->addColumn('action', function($row) {
                    $btn = '<a style="margin-right: 10px;" href="javascript:void(0)" data-id="' . $row->id . '" class="delete btn btn-primary btn-sm">Delete</a><a href="' . url("admin/candidate-details/" . $row->id) . '" class="edit btn btn-primary btn-sm">View</a>';
                    return $btn;
                })->rawColumns(['action'])->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        DB::beginTransaction();
        try {
            $validator = Validator::make($request->all(), [
                        'name' => 'required',
                        'email' => 'required|email',
                        'address' => 'required',
                        'contact' => 'required',
                        'gender' => 'required',
                        'education.*' => 'required',
                        'experience.*' => 'required',
                        'technical_experience.*' => 'required',
                        'languages.*' => 'required',
                        'preferred_location' => 'required',
                        'expected_CTC' => 'required',
                        'current_CTC' => 'required',
                        'notice_period' => 'required',
            ]);
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator->errors());
            }
            $candidate_data = CandidateDetails::create([
                        'name' => $request->name,
                        'email' => $request->email,
                        'address' => $request->address,
                        'gender' => $request->gender,
                        'contact' => $request->contact
            ]);
            foreach ($request->education as $education) {
                if ($education['board_university'] && $education['year'] && $education['CGPA_percentage']) {
                    EducationDetails::create([
                        'bd_id' => $candidate_data->id,
                        'board_university' => $education['board_university'],
                        'year' => $education['year'],
                        'CGPA_percentage' => $education['CGPA_percentage']
                    ]);
                }
            }
            foreach ($request->experience as $experience) {
                WorkExperience::create([
                    'bd_id' => $candidate_data->id,
                    'company' => $experience['company'],
                    'designation' => $experience['designation'],
                    'from_date' => $experience['from_date'],
                    'to_date' => $experience['to_date']
                ]);
            }
            foreach ($request->technical_experience as $technical) {
                TechnicalExperience::create([
                    'bd_id' => $candidate_data->id,
                    'technology' => $technical['technology'],
                    'skill' => $technical['skill'],
                ]);
            }
            foreach ($request->languages as $languages) {
                LanguagesDetails::create([
                    'bd_id' => $candidate_data->id,
                    'languages' => $languages['languages'],
                    'is_read' => isset($languages['is_read']) ? $languages['is_read'] : 0,
                    'is_write' => isset($languages['is_write']) ? $languages['is_write'] : 0,
                    'is_speck' => isset($languages['is_speck']) ? $languages['is_speck'] : 0,
                ]);
            }
            PreferenceDetails::create([
                'bd_id' => $candidate_data->id,
                'preferred_location' => $request->preferred_location,
                'expected_CTC' => $request->expected_CTC,
                'current_CTC' => $request->current_CTC,
                'notice_period' => $request->notice_period,
            ]);
            DB::commit();
            session()->flash('success', 'you have successfully submitted your application');
            return redirect()->route('homePage');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
            session()->flash('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CandidateDetails  $candidateDetails
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id) {
        $data = CandidateDetails::find($id);
        return view('resume', ['resume_data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CandidateDetails  $candidateDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CandidateDetails  $candidateDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CandidateDetails  $candidateDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request) {
        //
    }

}
