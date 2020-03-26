<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    protected function simpleDocWorldWide(){

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://covid-19-data.p.rapidapi.com/totals?format=json",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 300,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "x-rapidapi-host: covid-19-data.p.rapidapi.com",
                "x-rapidapi-key: e70578f237msh4f0d672f1df9440p175795jsn92fbc83901bc"
            ),

        ));

        $response = curl_exec($curl);

        $err = curl_error($curl);

        curl_close($curl);

       // dd($response);
        //dd($response->date);
        if ($err) {
            echo "cURL Error #:" . $err;
            return null;
        } else {
            return $response;
        }


    }
    protected function simpleDoc(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://covid-19-coronavirus-statistics.p.rapidapi.com/v1/stats?country=Tunisia",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 1,
            CURLOPT_TIMEOUT => 300,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "x-rapidapi-host: covid-19-coronavirus-statistics.p.rapidapi.com",
                "x-rapidapi-key: b5b47b1da6msh2b1b178ad685e11p14ad64jsn2a3fb8cfdd10"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);



        if ($err) {
            echo "cURL Error #:" . $err;
            return null;
        } else {

            return $response;
        }


    }

    /**
     * @Route("/api/test", name="admin.property.delete", methods="GET")
     */
    public function getDataWorldFromAPI(){

        $response=json_decode($this->simpleDocWorldWide());

            return  $response;


    }
    public function getDataFromAPI(){

        $response = json_decode($this->simpleDoc());
        //dd($response);
        if($response->error="false"&& $response->statusCode=200 && $response->message= "OK"){
            $response=$response->data;
            return  $response;
        }

        //dd($response);

        else{
            return false;
        }

    }

    public function index()
    {
        if(Auth::guard('benevole')->check()||Auth::guard('quarantaine')->check()){
      return view('index');
   }else{
            $resultat= $this->getDataFromAPI();
            $resultatWorld=$this->getDataWorldFromAPI()[0];

            return view('guestHome',compact('resultat'))->with('resultatWorld',$resultatWorld);

        }

    }


}
