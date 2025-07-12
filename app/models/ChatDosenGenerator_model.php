<?php

class ChatDosenGenerator_model
{
    public function getCurl($url, $prompt)
    {
        $data = [
            "contents" =>
            [[
                "parts" => [[
                    "text" => $prompt
                ]]
            ]]
        ];
        $jsonData = json_encode($data);
        $curl = curl_init($url);
        curl_setopt_array($curl, [
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                'Content-Type: aplication/json'
            ],
            CURLOPT_POSTFIELDS => $jsonData
        ]);
        $response = curl_exec($curl);
        if (curl_errno($curl)) {
            return false;
        } else {
            return json_decode($response, true);
        }
    }
}

?>