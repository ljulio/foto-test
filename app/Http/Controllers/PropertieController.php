<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Propertie;
use Input;
use Auth;
use App\User;
Use Carbon\Carbon;

class PropertieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if( !Auth::check() )
            return redirect('auth/login');

        $user = Auth::user();

        $properties = $user->properties();


        return view('properties.index', [ 'properties' => $properties ]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            if( !Auth::check() )
                return redirect('auth/login');

            return view('properties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make( $request->all(), 
            [
                'titulo' => 'required|min:3',
                'descripcion' => 'required|min:5'

            ] 
            );

        if( $validator->fails() )
        {
            return redirect('propiedades/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $nombre = $this->uploadImage($request);
        $user_id = Auth::user()->id;
        $data = [
                    'titulo' => Input::get('titulo'),
                    'descripcion' => Input::get('descripcion'),
                    'foto' => $nombre,
                    'user_id' => $user_id
        ];

        Propertie::create( $data );

        return redirect('/propiedades');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        if( !Auth::check() )
            return redirect('auth/login');

        $user_id = Auth::user()->id;
        $propertie = Propertie::where('id',$id)
        ->where('user_id',$user_id)
        ->get();

        $data = [
                    'titulo' => $propertie[0]["titulo"],
                    'descripcion' => $propertie[0]["descripcion"],
                    'foto' => $propertie[0]["foto"]
        ];
        return view('properties.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user_id = Auth::user()->id;
        $validator = Validator::make( $request->all(), 
            [
                'titulo' => 'required|min:3',
                'descripcion' => 'required|min:5'
            ] 
            );

        if( $validator->fails() )
        {
            return redirect("propiedades/{$id}")
                        ->withErrors($validator)
                        ->withInput();
        }

        $nombre = $this->uploadImage($request);


        Propertie::where('id' , $id)
                    ->where('user_id',$user_id)
                    ->update([
                                'titulo' => Input::get('titulo'),
                                'descripcion' => Input::get('descripcion'),
                                'foto' => $nombre
                        ]);
        return redirect('/propiedades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Propertie::destroy( $id );
        return redirect('/propiedades');
    }

    /*
    *
    * @param  Request  $request
    *
    */
    private function uploadImage($request){

        $path = "";
        $imagen = $request->file('imagen');

        if(isset($imagen)){

            $ruta = '/img/';
            $nombre = sha1(Carbon::now()).'.'.$imagen->guessExtension();
            $imagen->move(getcwd().$ruta, $nombre);

            $path = $ruta.$nombre;
        }

        return $path;

    }

}
