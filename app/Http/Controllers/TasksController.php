<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class TasksController extends Controller
{
	// Method for question 1 & 2
	public function task_one_two(Request $request)
	{
		// Q-1
		$name = $request->input('name');
		return $name;
		// Q-2
		$userAgent = $request->header('User-Agent');
		return $userAgent;
	}

	// Method for question 3
	public function task_three(Request $request)
	{
		$page = $request->query('page', null);
		if ($page !== null) {
			return $page;
		} else {
			return null;
		}
	}

	// Method for question 4

	public function task_four()
	{
		$data = array(
			'message' => 'Success',
			'data' => array(
				'name' => 'John Doe',
				'age' => 25
			)
		);
		return response()->json($data);
	}

	public function task_five(Request $request)
	{
		$file = $request->file('avatar');
		$file->move(public_path('uploads'), $file->getClientOriginalName());
		return true;
	}
	// Method for question 6
	public function task_six(Request $request)
	{
		$rememberToken = $request->cookie('remember_token');
		return $rememberToken;
	}


	// Task seven in api route file
}
