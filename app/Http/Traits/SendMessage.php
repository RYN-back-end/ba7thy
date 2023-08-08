<?php


namespace App\Http\Traits;



use Illuminate\Support\Facades\Http;

trait SendMessage
{
    private $url = 'https://api.taqnyat.sa/v1/messages';
    public function sendMessage($phone,$message)
    {

        if (substr( $phone, 0, 3 ) != "966")
        {
            $phone = '966'.$phone;
        }
        $method = array(
            'body' =>$message,
            'recipients'=>"$phone",
            'bearerTokens'=>env('MESSAGE_TOKEN'),
            'sender'=>env('MESSAGE_SENDER'),
        );
        return Http::get($this->url,$method);
    }//end fun

    public function sendWebMessage($phone,$message)
    {

        if (substr( $phone, 0, 3 ) != "966")
        {
            $phone = '966'.$phone;
        }
        $method = array(
            'body' =>$message,
            'recipients'=>$phone,
            'bearerTokens'=>env('MESSAGE_TOKEN'),
            'sender'=>env('MESSAGE_WEB_SENDER'),
        );
        return Http::get($this->url,$method);
    }//end fun
    public function sendArrayMessage($phone,$message)
    {

        $method = array(
            'body' =>$message,
            'recipients'=>$phone,
            'bearerTokens'=>env('MESSAGE_TOKEN'),
            'sender'=>env('MESSAGE_SENDER'),
        );
        return Http::get($this->url,$method);
    }//end fun

}//end trait
