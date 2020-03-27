<?php

$data = file_get_contents('php://input');
$data = json_decode($data);

if ($data->event_type === 'chat_ended') {
    // code to send email
    mail('taofiktijani@researchfreelancer.com', 'Chat transcript', print_r($data, true));
}
?>