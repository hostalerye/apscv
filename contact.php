<?php
if ($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $subject = $_POST['prestation'];
    $message = $_POST['message'];

    if ($name && $email && $phone && $city && $subject && $message) {
        $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
        $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        $message = sprintf('<html><body>Nom : %s<br>Ville : %s<br>Téléphone : %s<br>Email : %s<br>Message : %s</body>', $name, $city, $phone, $email, $message);

        if ($mailSent = mail('auxpetitssoinschezvous@gmail.com', $subject, $message, $headers)) {
            http_response_code(200);
            header('Content-Type: application/json');
            echo json_encode(['success' => true]);
        } else {
            http_response_code(500);
            header('Content-Type: application/json');
            echo json_encode(['success' => false]);
        }
    } else {
        http_response_code(400);
        header('Content-Type: application/json');
        echo json_encode(['success' => false]);
    }
}
