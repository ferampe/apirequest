<?php namespace ApiRequest\FormRequest;

class FormRequestUtil {


	public function isSpan($request)
  {

      //PALABRAS DE POSIBLE SPAN O INJECTION
      $words = array("Content-Type:",
                     "Content-Type:",
                     "Content-Transfer-Encoding:",
                     "Return-path:",
                     //"From:",
                     "Envelope-to:",
                     //"To:",
                     "bcc:",
                     "cc:",
                     "\[url=",
                     "Russian Federation");

      foreach ($request as $value) {
          foreach($words as $w){
            if (preg_match("/".$w."/i",$value)){
               return TRUE;
            }
          }
      }

      if(isset($request['names'])){
        if (preg_match("/http/i",$request['names'])){ return TRUE;}
        if ($request['names'] == "1"){ return TRUE;}  
      }

      if(isset($request['telephone'])){
        if (preg_match("/http/i",$request['telephone'])){ return TRUE;}
      }

      if(isset($request['comments'])){
        if (preg_match("/href/i",$request['comments'])){ return TRUE;}
      }

      if(isset($request['email'])){
        if ($request['email'] == "1"){ return TRUE;}
        if ($request['email'] == "@"){ return TRUE;}
        if ($request['email'] == "mark357177@hotmail.com"){ return TRUE;}
      }

      return FALSE;
        
    }

    public function getDataIp($ip)
  	{

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,'http://api.ipinfodb.com/v3/ip-city/?key=6fd63c7ba8a1b06bca2423fb0d01903feba706d4810fb178d77da8534e7bd6a0&ip='.$ip.'&format=json');
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $content = curl_exec($ch);
        //echo curl_error($ch) . ' (' . curl_errno($ch) . ')';
        curl_close($ch);

        return json_decode($content);

  	}

    public function getBodyEmail($request, $email = true)
    {

      if($email)
      {
        return view('emails.form_request', $request)->render();
      }

      return view('emails.form_request_for_app', $request)->render();
      

    }

}