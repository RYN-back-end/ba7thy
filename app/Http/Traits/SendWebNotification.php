<?php

namespace App\Http\Traits;

use App\Models\AdminTokens;

trait SendWebNotification{


    public function sendWebNotification($userIds,$data)
    {
        $serverToken = env('FIREBASE_SERVER_KEY');
        $tokens = AdminTokens::wherein('admin_id',$userIds)->pluck('token')->toArray();

        if (!isset($data['type']))
        {
            $data['type'] = 'normal';
        }

        $fields = array
        (
            'registration_ids' => $tokens,
            'data' => $data,
            'notification' => $data
        );
        $headers = array
        (
            'Authorization: key=' . $serverToken,
            'Content-Type: application/json'
        );
        $ch = curl_init();
        $json = json_encode($fields);
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;

    }//end fun

}
