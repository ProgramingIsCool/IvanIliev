<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "ingiliev@abv.bg"; // 🔁 смени с твоя имейл
    $subject = "Съобщение от сайта";

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/plain; charset=utf-8";

    $body = "Име: $name\nИмейл: $email\n\nСъобщение:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Благодарим! Вашето съобщение беше изпратено успешно.</h2>";
    } else {
        echo "<h2>Възникна проблем при изпращането. Моля, опитайте отново.</h2>";
    }
}
?>
