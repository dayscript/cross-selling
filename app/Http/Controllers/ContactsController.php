<?php

namespace App\Http\Controllers;

use App\Contacts;
use App\Subscriptions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $contact = Contacts::where('key', $request->contact)->first();
        if($contact){
            return view('welcome')->with('data', $contact);    
        }else{
            abort(404);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function show(Contacts $contact)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacts $contact)
    {
        return view('allianz_aliado_experto', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contacts $contacts)
    {
        if (!isset($request->salud) && !isset($request->vida) && !isset($request->hogar) && !isset($request->autos)) {
           $request->validate([
                'salud' => 'required',
                'terminos_condiciones' => 'required',
            ],
            [
                'salud.required' => 'Selecciona por lo menos un producto que sea de tu interés',
                'terminos_condiciones.required' => 'Debe aceptar los términos y condiciones'
            ]
            );
        }
        $user = Subscriptions::where('cedula', '=', $request->cedula)->first();
        if (isset($user)) {
            return view('gracias')->with('success','Tu información ya ha sido enviada, en cualquier momento un asesor se comunicará contigo.');
        }else{
            $request->validate([
                'terminos_condiciones' => 'required',
            ],
            [
                'terminos_condiciones.required' => 'Para poder continuar debes aceptar los términos y condiciones'
            ]);
            $subscriptions = new Subscriptions;
            $data = $request->all();
            $subscriptions->fill($data);
            $subscriptions->save();
            \Mail::send('correo', ['data' => $data], function($message) use ($request)
            {
                //remitente
                $message->from($request->correo, $request->nombres);
                //asunto
                $message->subject('Nueva solicitud de seguro');
                //receptor
                $message->to($request->correo_director, $request->director);
            });
            return view('gracias')->withSuccess('Registro exitoso, en un momento un asesor se comunicará contigo.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacts $contacts)
    {
        //
    }

    public function contacts(Request $request, Contacts $contacts)
    {
        $data = Contacts::where('key', $request->key)->first();
        if (is_null($data)) {
            return 'Es nulo';
        }else{
            return view('welcome')->with('data', $data);
        }
    }

    public function import()
    {
        $filename = public_path().'/test-2.csv';
        $delimiter = ';';
        if (!file_exists($filename) || !is_readable($filename))
            return false;

        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
            {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }
        foreach ($data as $key => $value){
            $contacts = Contacts::firstOrCreate(
                                        [
                                        'key' => str_random(8),
                                        'tipo_documento' => $value['tipo_documento'],
                                        'cedula' => $value['cedula'],
                                        'nombres' => $value['nombres'],
                                        'apellidos' => $value['apellidos'],
                                        'celular' => $value['celular'],
                                        'correo' => $value['correo'],
                                        'nomage' => $value['nomage'],
                                        'director' => $value['director'],
                                        'celular_director' => $value['celular_director'],
                                        'correo_director' => $value['correo_director'],
                                        ]
                                    );
            $contacts->key = str_random(8);
            $contacts->tipo_documento = $value['tipo_documento'];
            $contacts->cedula = $value['cedula'];
            $contacts->nombres = $value['nombres'];
            $contacts->apellidos = $value['apellidos'];
            $contacts->celular = $value['celular'];
            $contacts->correo = $value['correo'];
            $contacts->nomage = $value['nomage'];
            $contacts->director = $value['director'];
            $contacts->celular_director = $value['celular_director'];
            $contacts->correo_director = $value['correo_director'];
            $contacts->save();
        }
    }
    public function dataUpdate()
    {
        $filename = public_path().'/test-2.csv';
        $delimiter = ';';
        if (!file_exists($filename) || !is_readable($filename))
            return false;

        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
            {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }
        foreach ($data as $key => $value){
            $contacts = Contacts::where('cedula', $value['cedula'], '=' )->get()->first();
            $contacts->cedula_correcta = $value['cedula_correcta'];
            $contacts->correo_agente = $value['correo_agente'];
            $contacts->save();
        }
    }
}