<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = "info@gulfbookpublishers.com";
    $subject = "New eBook Submission";

    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $country = htmlspecialchars($_POST['country'] ?? '');
    $genre = htmlspecialchars($_POST['genre'] ?? '');
    $book_title = htmlspecialchars($_POST['book_title'] ?? '');
    $details = htmlspecialchars($_POST['details'] ?? '');
    $accepted = isset($_POST['terms']) ? 'Yes' : 'No';

    // Compose the message
    $message = "Full Name: $name\nEmail: $email\nPhone: $phone\nCountry: $country\n";
    $message .= "Genre: $genre\nBook Title: $book_title\nDetails: $details\nAccepted Terms: $accepted\n";

    // Boundary for file attachments
    $boundary = md5(time());
    $headers = "From: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

    // Email body
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $body .= $message . "\r\n";

    // Handle attachments
    if (!empty($_FILES['artwork']['name'][0])) {
        foreach ($_FILES['artwork']['tmp_name'] as $i => $tmpName) {
            if ($_FILES['artwork']['error'][$i] === UPLOAD_ERR_OK) {
                $fileName = basename($_FILES['artwork']['name'][$i]);
                $fileData = chunk_split(base64_encode(file_get_contents($tmpName)));
                $fileType = $_FILES['artwork']['type'][$i];

                $body .= "--$boundary\r\n";
                $body .= "Content-Type: $fileType; name=\"$fileName\"\r\n";
                $body .= "Content-Disposition: attachment; filename=\"$fileName\"\r\n";
                $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
                $body .= $fileData . "\r\n";
            }
        }
    }

    $body .= "--$boundary--";

    // Send email
    $success = mail($to, $subject, $body, $headers);

    if ($success) {
        echo "<script> alert('Thank you! Your message has been sent.'); window.history.back()</script>";
        exit;
    } else {
        echo "<script>alert('Failed to send email. Please try again.'); window.history.back();</script>";
    }
}
?>
