<?php

namespace App\Http\Controllers;

use App\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ZoomController extends Controller
{
    //
    public function index(){
      /*
      $client = new Client();
      $res = $client->request('GET', 'https://api.zoom.us/v2/users/', [

          'form_params' => [
              'api_key' => '53E5Fu5xTmWKVU1u_RYQIQ',
              'api_secret' => 'bWV0sbVlBPoFzTJ5YlyJeW5jxEwHdluKAKd1',
              'bearer' =>'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJhdWQiOm51bGwsImlzcyI6IjUzRTVGdTV4VG1XS1ZVMXVfUllRSVEiLCJleHAiOjE1NjQ1ODk4MDcsImlhdCI6MTU2NDU4NDQ4Mn0.KeV6BA0coYXLI1wtcu8_wMOzk0BiqG98T700S3Bp9kk',

          ]
      ]);
      //$res->getStatusCode();
      dd($res->getStatusCode());
      // 200
      echo $res->getHeader('content-type');
      // 'application/json; charset=utf8'
      echo $res->getBody();
      // {"type":"User"...'

      oauth_access_token
      eyJhbGciOiJIUzUxMiJ9.eyJ2ZXIiOiI0IiwiY2xpZW50SWQiOiIyVG5wSEZ0dFRaMk9zd0FCZlFFbXciLCJpc3MiOiJ1cm46em9vbTpjb25uZWN0OmNsaWVudGlkOjJUbnBIRnR0VFoyT3N3QUJmUUVtdyIsImF1dGhlbnRpY2F0aW9uSWQiOiI4M2M5NTcxNjBhNjljNTE4MThmOGU2NTFhNzljNWE4NiIsImVudiI6W251bGxdLCJ1c2VySWQiOiJ6UEtWb3RYTFJfYXBfSGtPaGxCbXJBIiwiYXVkIjoiaHR0cHM6Ly9vYXV0aC56b29tLnVzIiwiYWNjb3VudElkIjoiMklTU1k1UHRUNWFlS2gwejNMV1NHUSIsIm5iZiI6MTU2NDY1MzAzNCwiZXhwIjoxNTY0NjU2NjM0LCJ0b2tlblR5cGUiOiJhY2Nlc3NfdG9rZW4iLCJpYXQiOjE1NjQ2NTMwMzQsImp0aSI6IjA5NzRmZjI4LWY5MDYtNGY1My1hYTQ1LThlY2QxN2MzOWM0NSIsInRvbGVyYW5jZUlkIjowfQ.8Dc4KGHeK8yOn_7W_-gAHHIxSf4u8DysPyCJpsqIUnnt3uShwSfQXFpmgfasQQpGjcNuf1uKGkmz5jahILuYsA
      */
      /*
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.zoom.us/v2/users",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
          "authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJhdWQiOm51bGwsImlzcyI6IjUzRTVGdTV4VG1XS1ZVMXVfUllRSVEiLCJleHAiOjE1NjQ2NDcyNjQsImlhdCI6MTU2NDY0MTkzN30.FyLx6I5ThaxwH8nsp8bYqd_idArEly_pvDYR4CzMutc",
          "content-type: application/json"
        ),
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);

      curl_close($curl);

      if ($err) {
        echo "cURL Error #:" . $err;
      } else {
        echo $response;
      }
      */

      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.zoom.us/v2/users",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\"action\":\"string\",\"user_info\":{\"email\":\"string\",\"type\":\"integer\",\"first_name\":\"string\",\"last_name\":\"string\",\"password\":\"string\"}}",
        CURLOPT_HTTPHEADER => array(
          "authorization: Bearer eyJhbGciOiJIUzUxMiJ9.eyJ2ZXIiOiI0IiwiY2xpZW50SWQiOiIyVG5wSEZ0dFRaMk9zd0FCZlFFbXciLCJpc3MiOiJ1cm46em9vbTpjb25uZWN0OmNsaWVudGlkOjJUbnBIRnR0VFoyT3N3QUJmUUVtdyIsImF1dGhlbnRpY2F0aW9uSWQiOiI4M2M5NTcxNjBhNjljNTE4MThmOGU2NTFhNzljNWE4NiIsImVudiI6W251bGxdLCJ1c2VySWQiOiJ6UEtWb3RYTFJfYXBfSGtPaGxCbXJBIiwiYXVkIjoiaHR0cHM6Ly9vYXV0aC56b29tLnVzIiwiYWNjb3VudElkIjoiMklTU1k1UHRUNWFlS2gwejNMV1NHUSIsIm5iZiI6MTU2NDY1MzAzNCwiZXhwIjoxNTY0NjU2NjM0LCJ0b2tlblR5cGUiOiJhY2Nlc3NfdG9rZW4iLCJpYXQiOjE1NjQ2NTMwMzQsImp0aSI6IjA5NzRmZjI4LWY5MDYtNGY1My1hYTQ1LThlY2QxN2MzOWM0NSIsInRvbGVyYW5jZUlkIjowfQ.8Dc4KGHeK8yOn_7W_-gAHHIxSf4u8DysPyCJpsqIUnnt3uShwSfQXFpmgfasQQpGjcNuf1uKGkmz5jahILuYsA",
          "content-type: application/json"
        ),
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);

      curl_close($curl);

      if ($err) {
        echo "cURL Error #:" . $err;
      } else {
        echo $response;
      }
    }


    public function create($user, Request $request){

    }

}
