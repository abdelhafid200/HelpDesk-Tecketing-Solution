<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    //

    public function index(){
        $count = Section::count();
        $sections = Section::get();
        return view('dashboard.articles.section.index', compact('sections', 'count'));
    }

    public function store(Request $request){

        $request->validate([

            'name' => 'required',
            'description' => 'required'

        ]);

        $section = new Section();

        $section -> nom = $request->input('name');
        $section -> description = $request->input('description');

        $section->save();

        return to_route('dashboard.section.index')->with('message_section', 'La Section à été ajouté avec Succées');
        // return response()->json(['success' => true]);


    }

        public function edit($id){
            // $count = Section::count();
            // $section = Section::get();
            $count = Section::count();
            $section = Section::findOrFail($id);
            return view('dashboard.articles.section.edit', compact('section', 'count'));

        }

        public function update(Request $request, $id){

            $request->validate([

                'name' => 'required',
                'description' => 'required',

            ]);

            Section::where('id',$id)->update([

                'nom' => $request->input('name'),
                'description' => $request->input('description'),
            ]);

            return to_route('dashboard.section.index')->with('section_modifier', 'la Section a été Modifier avec succées');

        }


    public function destroy($id){

        $section = Section::findOrFail($id);
        $section->delete();

        return to_route('dashboard.section.index')->with('section_supprimer', 'La Section à été Supprimé avec Succées');
    }


    public function section(){

        $sections = Section::with('category')->get();
        return view('public.naviger.section', compact('sections'));

    }

    // public function liste($id){

    //     // $sections = Section::with('category')->get();

    //     $category = Category::where('id', $id)->first();
    //     $articles = Article::where('category_id', $id)->get();
    //     return view('public.naviger.liste-article', compact('category', 'articles'));

    // }
    public function liste($id) {


        $category = Category::find($id);

        if ($category) {
            $articles = Article::where('category_id', $id)->get();
            return view('public.naviger.liste-article', compact('category', 'articles'));
        } else {


        }
    }


    // public function show($category_id, $article_id){

    //     // dd($category_id, $article_id);

    //     $article = Article::where('id', $article_id)->first();
    //     // $article = Article::findOrFail($id);
    //     $category = Category::where('id', $category_id)->first();
    //         // $category = $article->category;


    //         return view('public.naviger.article-nav',compact('article', 'category'));

    // }

    public function show($category_id, $article_id){

        $article = Article::where('id', $article_id)->first();
        $category = Category::where('id', $category_id)->first();

        if ($article && $category) {
            return view('public.naviger.article-nav', compact('article', 'category'));
        } else {

            abort(404);
        }
}





}
