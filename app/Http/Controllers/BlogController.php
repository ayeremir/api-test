<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Resources\Article as ResourcesArticle;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ResourcesArticle::collection(Article::where('draft_status', '=', 0)->orderByDesc('created_at')->paginate(10));//10 articles per page + only published + orderby created_at desc
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['slug'] = Str::slug($request->title);//For seo we need to set the slug referreing to the title
        if (Article::create($request->all())) {
            return response()->json([
                'success' => 'Votre article est dans la BDD maintenant'
            ]);
        }
        // else {
        //     return response()->json([
        //         'error' => 'Problème d\'unicité !Soyez plus créatif !!'
        //     ], 400);
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return new ResourcesArticle($article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        if ($article->update($request->all())) {
            return response()->json([
                'success' => ' Votre article a bien été modifié .'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        if ($article->delete($article)) {
            return response()->json([
                'success' => ' Votre article a bien été supprimé .'
            ]);
        }
    }
}
