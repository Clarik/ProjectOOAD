<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobVacancy;
use App\Models\MSME;
use Illuminate\Http\Request;

class JobVacancyController extends Controller
{
    public function index()
    {
        $user = session()->get('user');
        $msme = MSME::where('userID', $user->userID)->first();
        $vacancies = JobVacancy::where('msmeID', $msme->msmeID)->get();
        return view('jobvacancy/manage', compact('vacancies'));
    }

    public function create()
    {
        $jobs = Job::all();
        return view('jobvacancy/create', compact('jobs'));
    }

    public function save(Request $request)
    {
        $user = session()->get('user');
        $msme = MSME::where('userID', $user->userID)->first();

        request()->validate(
            [
                'duration' => 'required',
                'description' => 'required'
            ],
            [
                'duration.required' => 'Duration must not empty.',
                'description.required' => 'Description must not empty.',
            ]
        );


        $vacancy = new JobVacancy();
        $vacancy->msmeID = $msme->msmeID;
        $vacancy->jobID = $request->job;
        $vacancy->duration = $request->duration;
        $vacancy->description = $request->description;

        $vacancy->save();

        return redirect('/jobvacancy/manage')->with(['success' => 'Job Vacancy creation success']);
    }

    public function update($id)
    {
        $jobs = Job::all();
        $jobvacancy = JobVacancy::where('jobVacancyID',$id)->first();
        return view('/jobvacancy/update', compact('jobs','jobvacancy'));
    }

    public function saveupdate(Request $request, $id)
    {
        request()->validate(
            [
                'duration' => 'required',
                'description' => 'required'
            ],
            [
                'duration.required' => 'Duration must not empty.',
                'description.required' => 'Description must not empty.',
            ]
        );

        $vacancy =  JobVacancy::where('jobVacancyID',$id)->first();
        $vacancy->jobID = $request->job;
        $vacancy->duration = $request->duration;
        $vacancy->description = $request->description;
        $vacancy->save();

        return redirect('/jobvacancy/manage')->with(['success' => 'Job Vacancy update success']);
    }

    public function delete($id)
    {
        $vacancy =  JobVacancy::where('jobVacancyID',$id)->first();
        $vacancy->delete();
        return redirect('/jobvacancy/manage')->with(['success' => 'Deletion success']);
    }
}
