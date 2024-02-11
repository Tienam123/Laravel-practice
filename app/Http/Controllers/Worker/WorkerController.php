<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use App\Http\Requests\Worker\StoreRequest;
use App\Models\Worker\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Worker::all();

        return view('worker.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('worker.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['worker_technologies'] = json_encode($data['worker_technologies']);
        $data['is_online'] = $data['is_online'] == '1';
        Worker::create($data);

        return redirect()->route('workers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Worker $worker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Worker $worker)
    {
       return view('worker.edit',compact('worker'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRequest $request, Worker $worker)
    {
        $data = $request->validated();
        $data['worker_technologies'] = json_encode($data['worker_technologies']);
        $data['is_online'] = $data['is_online'] == '1';
        $worker->update($data);
        return redirect()->route('workers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Worker $worker)
    {
        $worker->delete();
        return redirect()->route('workers.index');
    }
}
