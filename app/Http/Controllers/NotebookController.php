<?php

namespace App\Http\Controllers;
use App\Models\Notebook;
use Illuminate\Http\Request;

class NotebookController extends Controller
{
    public function index() {
        $notebooks = Notebook::all();
        return (json_encode($notebooks));
    }

    public function store(Request $request) {
        Notebook::create($request->all());
        return(json_encode('created'));
    }

    public function findById($id) {
        $notebook = Notebook::find($id);
        return (json_encode($notebook));
    }
}
