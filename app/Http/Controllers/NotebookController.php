<?php

namespace App\Http\Controllers;
use App\Models\Notebook;
use Illuminate\Http\Request;

class NotebookController extends Controller
{
    public function index() {
        $notebooks = Notebook::paginate(5);
        return (json_encode($notebooks));
    }

    public function store(Request $request) {
        $notebook = new Notebook;
        if(isset($request->image)) {
            $path = $request->image->store('images', 'public');
        } else $path = '';
        $notebook->FIO = $request->FIO;
        $notebook->company = $request->company;
        $notebook->phone = $request->phone;
        $notebook->email = $request->email;
        $notebook->birthday = $request->birthday;
        $notebook->image = $path;
        $notebook->save();
        return(json_encode('created'));
    }

    public function findById($id) {
        $notebook = Notebook::find($id);
        return (json_encode($notebook));
    }

    public function update(Request $request, $id) {
        $notebook = Notebook::find($id);
        $notebook->update($request->all());
        return(json_encode('updated'));
    }

    public function delete($id) {
        Notebook::destroy($id);
        return(json_encode('deleted'));
    }
}
