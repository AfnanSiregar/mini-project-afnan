<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = Project::all();
        $client = Client::all();
        $dataProjek = null;
        $dataClient = null;
        $dataStatus = null;
        return view('project.index', compact('project', 'client', 'dataClient', 'dataProjek', 'dataStatus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = Client::all();
        return view('project.create', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $VDate = Validator::make($request->all(), [
            'project_start' => 'required|date',
            'project_end' => 'required|after_or_equal:project_start'
        ]);
        if ($VDate->fails()) {
            echo "<script>alert('Tanggal Project End tidak boleh kurang dari tanggal Project Start!');history.back();</script>";
        } else {
            $project = $request->all();

            Project::create($project);

            return redirect('/project');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        $client = Client::all();
        return view('project.edit', compact('project', 'client'));
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
        $VDate = Validator::make($request->all(), [
            'project_start' => 'required|date',
            'project_end' => 'required|after_or_equal:project_start'
        ]);
        if ($VDate->fails()) {
            echo "<script>alert('Tanggal Project End tidak boleh kurang dari tanggal Project Start!');history.back();</script>";
        } else {
            Project::find($id)->update($request->all());

            return redirect('/project');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function deleteCheckedProjects(Request $request)
    {
        $ids = $request->ids;
        Project::whereIn('project_id', $ids)->delete();
        return response()->json(['success' => "Projects have been deleted!"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request)
    {
        $dataProjek = null;
        $dataClient = null;
        $dataStatus = null;
        $client = Client::all();
        $po = Client::where('client_id', $request->client_id)->first();
        if ($request->project_name == null && $request->client == "NULL"  && $request->project_status == "NULL") {
            $project = Project::all();
        } elseif ($request->project_name != null && $request->client_id != "NULL"  && $request->project_status != "NULL") {
            $project = Project::where('project_name', 'LIKE', '%' . $request->project_name . '%')
                ->where('client_id', $request->client_id)
                ->where('project_status', $request->project_status)
                ->get();
            $dataProjek = $request->project_name;
            $dataClient = $po->client_name;
            $dataStatus = $request->project_status;
        } else {
            echo "<script>alert('Field harus diisi');window.location.href='" . $_SERVER['HTTP_REFERER'] . "';</script>";
        }
        return view('project.index', compact('project', 'client', 'dataProjek', 'dataClient', 'dataStatus'));
    }
}
