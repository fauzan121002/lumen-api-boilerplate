<?php 

namespace App\Http\Controllers;

use App\Todo;

use Illuminate\Http\Request;

class TodoController extends Controller
{
	protected $todo;

	public function __construct(Todo $todo)
	{
		$this->todo = $todo;
	}

	public function service()
	{
		return app('todo');
	}

	public function index()
	{
		return response()->json($this->todo->paginate(5));
	}

	public function edit($id)
	{
		return response()->json($this->todo->find($id));
	}

	public function store(Request $request)
	{
		Todo::create($request->all());

		return response()->json(['status'=>'Berhasil Menambahkan Data'],200);
	}

	public function update(Request $request,$id)
	{
		$todo = $this->todo->find($id);

		$todo->title = $request->title;
		$todo->description = $request->description;

		$todo->save();

		return response()->json(['status'=>'Berhasil Mengubah Data'],200);
	}

	public function destroy($id)
	{
		$this->todo->find($id)->delete();

		return response()->json(['status'=>'Berhasil Menghapus Data'],200);
	}
}