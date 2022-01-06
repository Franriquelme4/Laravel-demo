<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
    // se encarga de revisar la autenticacion de los usuarios 
        $this->middleware('auth')->except('index','show');
    }
    public function index()
    {
        $portfolio2=[
            ['title'=>'Proyecto! 1'],
            ['title'=>'Proyecto! 2'],
            ['title'=>'Proyecto! 3'],
            ['title'=>'Proyecto 4'],
            ['title'=>'Proyecto 5'],
        ];
        $projects=Project::latest()->paginate();
        return view('projects.index',compact('projects'));
        //
    }
    public function show(Project $project)
    {

        
        return view('projects.show',['projects'=> $project]);
    }
    public function create()
    {
        return view('projects.create',[
            'projects'=>new Project
        ]);
    }
     public function store(CreateProjectRequest $request)
    {
        
        //return()->only se seleccionan los atrubuto
        //request()->all() cuando los atributos name es igual que todos nombre de las columnas
        Project::create($request->validated());
     return redirect()->route('project.index')->with('status','Proyecto creado correctamente');
    }
    public function edit(Project $projects)
    {
        return view('projects.edit',['projects' => $projects]);
    }
    public function update(Project $project,CreateProjectRequest $request)
    {
        $project->update($request->validated());
        return redirect()->route('project.show',$project)->with('status','Proyecto actualizado correctamente');
    }
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('project.index')->with('status','El proyecto fue eliminado');
    }
}
