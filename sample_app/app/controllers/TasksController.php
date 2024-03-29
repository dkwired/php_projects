<?php

class TasksController extends BaseController {
	public function index()
	{
		// fetch all tasks
		$tasks = Task::all();
		
		// load a view to display them
		return View::make('tasks.index', ['tasks' => $tasks]);
	}


	public function show($id)
	{
		// fetch a single task
		$task = Task::findOrFail($id);

		// load a view to display task
		return View::make('tasks.show', compact('task'));
	}
}
