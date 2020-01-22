<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
	protected $table = "Todos";

	protected $primaryKey = "id";

	protected $fillable = [
		"title",
		"description"
	];
}