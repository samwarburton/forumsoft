<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Board;
use App\Thread;
use DB;

class BoardsController extends Controller
{
 

   public function index()
    {


    	$boards = Board::all();
        return view('welcome', ['boards' => $boards]);
    }




    public function show($id)
    {
        $board = Board::find($id);
    	$threads = Thread::where('board_id', $id)->get();
    	return view('boards.index', ['threads' => $threads, 'board' => $board]);
    }

    
}
