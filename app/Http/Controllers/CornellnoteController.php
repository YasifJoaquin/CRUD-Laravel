<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator; //importar funciones de validacion de laravel
use App\Models\Cornellnote;
use App\Models\Topic;
use App\Models\Subject;

class CornellnoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$notas = Cornellnote::where('user_id',auth()->user()->id)->get();
        //dd($notas);
        $notas =  DB::table('cornellnotes')
            ->join('topics','cornellnotes.topic_id','=','topics.id')
            ->join('subjects','topics.subject_id','=','subjects.id')
            ->select('subjects.nombre','cornellnotes.titulo','cornellnotes.id')
            ->where('cornellnotes.user_id',auth()->user()->id)
            ->get();
        //dd($notas);
        return view('cornellnotes.index', compact('notas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $temas = DB::table('cornellnotes')
            ->join('topics', 'cornellnotes.topic_id', '=', 'topics.id')
            ->select('topics.id', 'topics.tema')
            ->where('cornellnotes.user_id', auth()->user()->id)
            ->get();
        //dd($temas);
        return view('cornellnotes.create', compact('temas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titulo' => 'required',
            'palabrasClave' => 'required',
            'texto' => 'required',
            'conclusion' => 'required',
            'tema' => 'required'
        ]);
        //validación
        if ($validator->fails()) {
            return redirect('cornellnotes/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        //inserción
        $nota = new Cornellnote();
        $nota->titulo = $request->titulo;
        $nota->PalabrasClave = $request->palabrasClave;
        $nota->Texto = $request->texto;
        $nota->Conclusion = $request->conclusion;
        $nota->user_id = auth()->user()->id;
        $nota->topic_id = $request->tema;
        $nota->save();

        return redirect()->route('cornellnotes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $detalle_nota=Cornellnote::find($id);
        //$notas = Cornellnote::where('id',auth()->user()->id)->get();
        //dd($id_nota);
        
        $notas = DB::table('cornellnotes')
            ->join('topics','cornellnotes.topic_id','=','topics.id')
            ->join('subjects','topics.subject_id','=','subjects.id')
            ->where('cornellnotes.id', $detalle_nota->id)
            ->get();

        //dd($notas);
        //dd($detalle_nota);
        return view('cornellnotes.show', compact('detalle_nota', 'notas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $detalle_nota=Cornellnote::find($id);
        
        $notas = DB::table('cornellnotes')
            ->join('topics','cornellnotes.topic_id','=','topics.id')
            ->select('topics.tema','topics.unidad','cornellnotes.titulo','cornellnotes.PalabrasClave','cornellnotes.Texto','cornellnotes.Conclusion')
            ->where('cornellnotes.id', $detalle_nota->id)
            ->get();
        //dd($notas);
        return view('cornellnotes.edit', compact('detalle_nota','notas'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'titulo' => 'required',
            'palabrasClave' => 'required',
            'texto' => 'required',
            'conclusion' => 'required',
            'tema' => 'required'
        ]);
        //validación
        if ($validator->fails()) {
            return redirect("notas/$id/edit")
                        ->withErrors($validator)
                        ->withInput();
        }
        //inserción
        $nota = Cornellnote::find($id);
        $nota->titulo = $request->titulo;
        $nota->PalabrasClave = $request->palabrasClave;
        $nota->Texto = $request->texto;
        $nota->Conclusion = $request->conclusion;
        $nota->user_id = auth()->user()->id;
        $nota->topic_id = $request->tema;
        $nota->save();

        return redirect()->route('cornellnotes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $nota=Cornellnote::find($id);
        $nota->delete();

        return redirect()->route('cornellnotes.index');
    }
}
