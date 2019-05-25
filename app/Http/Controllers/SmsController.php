<?php

namespace App\Http\Controllers;

use App\Sms;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Sms  $sms
     * @return \Illuminate\Http\Response
     */
    public function show(Sms $sms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sms  $sms
     * @return \Illuminate\Http\Response
     */
    public function edit(Sms $sms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sms  $sms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sms $sms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sms  $sms
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sms $sms)
    {
        //
    }

    public function parse(Sms $sms)
    {
        //dd($sms);
        $filename = public_path().'/sms.csv';
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
            $username = 'movilesinfraestructura@linkdigital.co';
            $password = '%Kkk8T|rcQNA",7r/X:aN89!rzq$(n';
            $api_id = '85HA9cIjSCOSJW1-e6mLZQ==';

            $to = urlencode($value['cel']);
            $url = $value['url'];

            $message = urlencode(utf8_decode("Asegúrate con Allianz !Conoce más seguros aquí¡ ")).$url;

            $results =  file_get_contents("https://api.clickatell.com/http/sendmsg" . "?user=$username&password=$password&api_id=$api_id&to=$to&text=$message");

            echo $results."<br>". "Cel: ".$value['cel']."<pre>";

            //file_put_contents(public_path("results.csv"), file_get_contents("https://api.clickatell.com/http/sendmsg" . "?user=$username&password=$password&api_id=$api_id&to=$to&text=$message"));
/*            $username = 'movilesinfraestructura@linkdigital.co';
            $password = '%Kkk8T|rcQNA",7r/X:aN89!rzq$(n';
            $api_id = '85HA9cIjSCOSJW1-e6mLZQ==';
            $to = urlencode($value['cel']);
            $url = $value['url'];
            $message = 'Asegúrate con Allianz !Conoce más seguros aquí¡ '.$url;
            echo file_get_contents("https://api.clickatell.com/http/sendmsg" . "?user=$username&password=$password&api_id=$api_id&to=$to&text=$message");
*/
/*        $ch = curl_init();

        // set URL and other appropriate options
        curl_setopt($ch, CURLOPT_URL, "http://www.example.com/");
        dd($ch);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        // grab URL and pass it to the browser
        curl_exec($ch);

        // close cURL resource, and free up system resources
        curl_close($ch);*/
        }
    }
}
