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
        $Subscriptions = new Subscriptions;
        $data = $request->all();
        $Subscriptions->fill($data);
        $Subscriptions->save();
        return view('gracias')->with('message', 'Gracias por registrarte');
        //return Redirect::route('home', array($Subscriptions->id));

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
        $filename = public_path().'/users-sin-duplicados-1.csv';
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
        foreach ($data as $key => $data2){
            $contacts = Contacts::firstOrCreate(
                                        [
                                        'key' => str_random(8),
                                        'nombre' => $data2['nombre'],
                                        'tipo_documento' => $data2['tipo_documento'],
                                        'id_tomador' => $data2['id_tomador'],
                                        'celular' => $data2['celular'],
                                        'correo' => $data2['correo'],
                                        'director' => $data2['director'],
                                        'celular_director' => $data2['celular_director'],
                                        'correo_director' => $data2['correo_director'],
                                        'envio_form' => '0',
                                        ]
                                    );
            $contacts->key = str_random(8);
            $contacts->nombre = $data2['nombre'];
            $contacts->tipo_documento = $data2['tipo_documento'];
            $contacts->id_tomador = $data2['id_tomador'];
            $contacts->celular = $data2['celular'];
            $contacts->correo = $data2['correo'];
            $contacts->director = $data2['director'];
            $contacts->celular_director = $data2['celular_director'];
            $contacts->correo_director = $data2['correo_director'];
            $contacts->envio_form = 0;
            $contacts->save();
        }
    }
}
