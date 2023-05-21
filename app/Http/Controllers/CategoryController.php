<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Section;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function index(){


        $count = Category::count();
        $categorys = Category::with('section')->get();
        $sections = Section::get();
        return view('dashboard.articles.category.index', compact('count', 'categorys', 'sections'));

    }

    public function store(Request $request){

        $request->validate([

            'name' => 'required',
            'description' => 'required',
            'section' => 'required'


        ]);



        $category = new Category();

        $category -> nom = $request->input('name');
        $category -> description = $request->input('description');
        $category -> section_id = $request->input('section');

        $category->save();

        return to_route('dashboard.category.index')->with('message_category', 'La Catégorie à été ajouté avec Succées');
        // return response()->json(['success' => true]);
    }

    public function destroy($id){

        $category = Category::findOrFail($id);
        $category->delete();

        return to_route('dashboard.category.index')->with('supprimer_category', 'La Categorie à été Supprimer avec Succées');

    }

    public function edit($id){

        $sections = Section::get();
        $category = Category::findOrFail($id);
        return view('dashboard.articles.category.edit', compact('category', 'sections'));

    }

    public function update(Request $request, $id){

        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'section' => 'required'
        ]);

        $sectionId = intval($request->input('section'));

        Category::where('id', $id)->update([
            'nom' => $request->input('name'),
            'description' => $request->input('description'),
            'section_id' => $sectionId
        ]);

        return to_route('dashboard.category.index')->with('edit_category','la Categorie a été Modifier avec succées');

    }
}
