<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function getAllProjects() {
        $projects = Project::all();
        return $projects;
    }

    // public function getAllProjects(){
    //     $projects = Project::take(5)->get();
    //     return $projects;
    // }

    public function insertProject() {
        $project = new Project;
        $project->city_id = 10;
        $project->company_id = 10;
        $project->user_id = 10;
        $project->name = 'Proyecto Prueba';
        $project->execution_date = '2020-06-16';
        $project->is_active = 1;
        $project->save();

        return "Guardado";
    }

    public function crearRegistro() {

            for ($i=1; $i < 30; $i++) {
                $project = new Project;
                $project->city_id = rand(1,12);
                $project->company_id = rand(1,12);
                $project->user_id = rand(1,12);
                $project->name = "Proyecto {$i}";
                $project->execution_date = "2020-04-{$i}";
                $project->is_active = rand(0,1);
                $project->save();
            }
                return "Registros exitosamente guardados ";
        }

        public function updateProject() {
            $project = Project::find(40);
            $project->name = 'Proyecto de tecnología';
            $project->save();

            return "Actualizado";
        }

        public function executionProject() {
            Project::where('is_active', 1)
                ->where('city_id', 4)
                ->update(['execution_date' => '2020-02-03']);
                return "Fecha de Ejecucion actualizada";
        }

        public function nameInactivosProject() {
            Project::where('is_active', 0)
                ->update(['name' => 'Proyecto Piloto']);
                return "Trabajo Hecho";
        }

        public function deleteProject() {
            $project = Project::where('project_id', '>', 15)->delete();
            return "Registros eliminados";
        }
}
