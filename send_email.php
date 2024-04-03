<?php

$data = json_decode(file_get_contents('php://input'), true);

$userName = $data['user_name'];
$userEmail = $data['user_email'];
$message = $data['message'];

$to = "contact@cnassim.com";
$subject = "New message from $userName";
$body = "Name: $userName\nEmail: $userEmail\nMessage: $message";

$headers = "From: $userEmail";

if (mail($to, $subject, $body, $headers)) {
  http_response_code(200);
  echo json_encode(array("message" => "Email sent successfully"));
} else {
  http_response_code(500);
  echo json_encode(array("message" => "Failed to send email"));
}