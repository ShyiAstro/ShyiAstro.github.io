<?php
header('Content-Type: application/json');
$api_key = 'AIzaSyDePZhHqAlVqPz_7LRIEWvkenju0pb7jeI';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    $user_message = isset($input['message']) ? trim($input['message']) : '';

    if (!empty($user_message)) {
        $gemini_url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=" . urlencode($api_key);

         $data = [
             "contents" => [
                [
                    "parts" => [
                        ["text" => $user_message]
                     ]
                ]
             ]
         ];
        $json_data = json_encode($data);

        $ch = curl_init($gemini_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
       

        $response = curl_exec($ch);
        
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if (curl_errno($ch)) {
            $error_msg = curl_error($ch);
            curl_close($ch);
              echo json_encode(['error' => 'API Error : ' . $error_msg]);
              exit;
        }


        curl_close($ch);


        if ($httpcode == 200) {
           $decoded_response = json_decode($response, true);
        // Adjust this based on the actual structure of the response
            if (isset($decoded_response['candidates'][0]['content']['parts'][0]['text'])) {

                $bot_response = $decoded_response['candidates'][0]['content']['parts'][0]['text'];
            
                  echo json_encode(['response' => $bot_response]);
            }else{
                 echo json_encode(['response' => "Error: Could not parse API response"]);
            }
        }else{
             echo json_encode(['response' => "API Error: HTTP Code: $httpcode, Response: $response"]);
        }
       
    } else {
        echo json_encode(['response' => 'Please enter a message.']);
    }
} else {
    echo json_encode(['error' => 'Invalid request method.']);
}
?>