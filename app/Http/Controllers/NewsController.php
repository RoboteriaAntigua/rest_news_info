<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Reader;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        return $news;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $noticia = News::find($id);
        //Para ver los suscriptores, accedemos a la tabla pivote
        $names ="";
        $suscriptores =  DB::table('news_reader')->select('reader_id')->where('news_id',$noticia->id)->get();    //Escribo $noticia->id en lugar de $noticia o solo $id, que tambien son validos, por visual
        foreach ($suscriptores as $suscriptores){
            $reader=Reader::find($suscriptores->reader_id);
            $names=$names." | ".$reader->name;
            }
        $noticia->suscriptores=$names;
        return response()->json($noticia);
    }


}
