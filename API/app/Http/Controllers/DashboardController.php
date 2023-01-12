<?php

namespace App\Http\Controllers;

use App\Models\AnneFormation;
use App\Models\Apprenant;
use App\Models\ApprenantPreparationBrief;
use App\Models\Brief;
use App\Models\Groupes;
use App\Models\GroupesPreparationBrief;
use App\Models\PreparationBrief;
use App\Models\Tache;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function years()
    {
        $years = AnneFormation::all();
        return $years;
    }

    public function formation_years(Request $request, $id)
    {
        $year = AnneFormation::findOrFail($id);
        $group = Groupes::where('Annee_formation_id', $year->id)->first();
        $studentCount = $group->students->count();
        $brief_aff = $group->students->map(function ($student){return $student->student_preparation_brief;})->unique('id');
        $brief_info = [];
        $students = $group->students()->get();
        // 
        $total_done = Tache::where('Etat','=','terminer')->get()->count();
        $total_pause = Tache::where('Etat','=','en pause')->get()->count();
        $total_standby = Tache::where('Etat','=','en cours')->get()->count();
        $total_states = ($total_done + $total_pause + $total_standby);
        $group_progress = ($total_done * 100)/$total_states;
        // 
        $brief_name = PreparationBrief::all('Nom_du_Brief');
        $brief_count = PreparationBrief::all('Nom_du_Brief')->count();


        // To add Av here.
        $arr1 = []; 
        array_push($brief_info, $arr1);

        return [
            'year' => $year,
            'group' => $group,
            'studentCount' => $studentCount,
            'brief_aff' => $brief_aff,
            'briefs' => $brief_name,$brief_info,
            'group_av' => intval($group_progress),
        ];
    }





    public function studentAv(){
        $students = Apprenant::all();
        $briefs = PreparationBrief::all();
        foreach($students as $student){
           foreach($briefs as $brief){
                $task_done = Tache::where('Apprenant_id', $student->id)
                                    ->where('preparation_brief_id', $brief->id)
                                    ->where('Etat', 'terminer')
                                    ->get()->count();
                $totalTasks = Tache::where('Apprenant_id', $student->id)
                                    ->where('preparation_brief_id', $brief->id)
                                    ->get()->count();
                if($totalTasks != 0){
                $brief_id = $brief->id;
                $brief_name = $brief->Nom_du_brief;
                $student_id = $student->id;
                $name = $student->Nom;
                $studentAv = ((100/$totalTasks)*($task_done));
                $arr[] = [
                    'student_name' =>$name,
                    'av' => $studentAv,
                    'brief' => $brief_id,
                    'student_id' => $student_id,
                    'brief_name' => $brief_name

                ];
            }
           }
        }
        return response()->json([
            'arr'   => $arr,
        ]);

    }

}
