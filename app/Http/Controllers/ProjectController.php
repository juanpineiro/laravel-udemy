<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;
//use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the proyecto.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$portfolio = DB::table('projects')->get();
        //$portfolio = Project::orderBy('created_at','DESC')->get();
        //$portfolio = Project::latest('created_at')->get(); //por defecto usa el campo created_at
        $projects = Project::latest('created_at')->paginate(); //por defecto usa el campo created_at

	/*$portfolio = [
		['title'    => 'Proyecto #1'],
		['title'    => 'Proyecto #2'],
		['title'    => 'Proyecto #3'],
		['title'    => 'Proyecto #4'],
	];*/
	return view('projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new proyecto.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create',[
            'project'   =>  new Project
        ]);
    }

    /**
     * Store a newly created proyecto in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*public function store(Request $request)
    {
        $title = $request->get('title');
        $url = $request->get('url');
        $description = $request->get('description');

        //Project::create($request->all());
        //Project::create($request->only('title','url','description'));
        //Project::create([
            'title' => $title,
            'url'   =>  $url,
            'description'   => $description
        ]);

        $fields = $request->validate([
            'title' => 'required',
            'url' => 'required',
            'description' => 'required'
        ]);

        Project::create($fields); //solamente le pasamos los campos ya validados, si se necesita agregar otros campos solo se agrega a este array

        return redirect()->route('projects.index');
    }*/
public function store(SaveProjectRequest $request)
    {

        Project::create($request->validated()); //solamente le pasamos los campos ya validados, si se necesita agregar otros campos solo se agrega a este array

        return redirect()->route('projects.index');
    }

    /**
     * Display the specified proyecto.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)  //Route Model Binding
    {
        return view('projects.show',[
            'project'   => $project,
        ]);
    }
    /*public function show($id)
    {
        return view('projects.show',[
            'project'   => Project::findOrFail($id),
        ]);
    }*/

    /**
     * Show the form for editing the specified proyecto.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit',[
            'project'   => $project
        ]);
    }

    /**
     * Update the specified proyecto in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project, SaveProjectRequest $request)
    {
        /*$project->update([
            'title' => request('title'),
            'url' => request('url'),
            'description' => request('description'),
        ]);*/
        $project->update($request->validated());

        return redirect()->route('projects.show',$project);
    }

    /**
     * Remove the specified proyecto from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
