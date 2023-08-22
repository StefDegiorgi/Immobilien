<!DOCTYPE html>
<html lang="de-CH">

<head>
    <meta charset="utf-8">
    <title>Wert der Immobilien - Feedback</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="origin" name="referrer">
    <link rel="canonical" href="https://wert-der-immobilien.rf.gd/feedback">
    <meta name="keywords" content="immobilien,immobilienmarkt,feedback">
    <meta name="robots" content="noindex,nofollow">
    <meta name="theme-color" content="#181818">
    <meta name="description" content="Feedbackformular">
    <meta property="og:title" content="Wert der Immobilien - Immobilienmarkt erklärt">
    <meta property="og:description" content="Feedbackformular">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://wert-der-immobilien.rf.gd/img/logo/open-graph.png">
    <meta property="og:url" content="https://wert-der-immobilien.rf.gd/feedback">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="feedback.css">
    <link rel="icon" type="image/svg+xml" href="img/logo/favicon.svg">
    <link rel="apple-touch-icon" sizes="180x180" href="img/logo/apple-touch-icon.png">
</head>

<body>
    <nav>
        <a href="index.html" title="Home">
            <svg viewBox="0 0 18 18">
                <path d="M14 8V0H4v4H0v14h8v-4h2v4h8V8zM4 16H2v-2h2zm0-4H2v-2h2zm0-4H2V6h2zm4 4H6v-2h2zm0-4H6V6h2zm0-4H6V2h2zm4 8h-2v-2h2zm0-4h-2V6h2zm0-4h-2V2h2zm4 12h-2v-2h2zm0-4h-2v-2h2z" />
            </svg>
            <p>Immobilien</p>
        </a>
        <a href="/" id="themes" title="Themen" aria-label="Themen">
            <svg viewBox="0 0 18 18">
                <path d="M13 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5zm3 16H2V2h10v4h4zM4 14h10v-2H4zM9 4H4v2h5zm-5 6h10V8H4z" />
            </svg>
            <p>Themen</p>
        </a>
        <a href="feedback.php" title="Feedback">
            <svg viewBox="0 0 20 20">
                <path d="M13 2v7H3.17l-.59.59-.58.58V2h11m1-2H1a1 1 0 0 0-1 1v14l4-4h10a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1zm5 4h-2v9H4v2a1 1 0 0 0 1 1h11l4 4V5a1 1 0 0 0-1-1z" />
            </svg>
            <p>Feedback</p>
        </a>
    </nav>
    <main>
        <form action="feedback.php" method="POST">
            <div>
                <label for="first">Vorname</label>
                <input id="first" name="firstname" type="text" pattern="[A-Za-z ]{2,64}" maxlength="64" required autofocus>
            </div>
            <div>
                <label for="last">Nachname</label>
                <input id="last" name="lastname" type="text" pattern="[A-Za-z ]{2,64}" maxlength="64" required>
            </div>
            <div>
                <label for="email">E-Mail</label>
                <input id="email" name="email" type="text" required>
            </div>
            <div>
                <label for="feedback">Feedback</label>
                <textarea id="feedback" name="feedback"></textarea>
            </div>
            <input type="hidden" name="submit" value="true">
            <button type="submit">Senden</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $email = $_POST["email"];
            $feedback = $_POST["feedback"];

            $to = "stef.degiorgi@bluewin.ch";
            $subject = "Feedback from $firstname $lastname";
            $message = "Name: $firstname $lastname\n";
            $message .= "Email: $email\n";
            $message .= "Feedback:\n$feedback";
            $headers = "From: $email";

            if (mail($to, $subject, $message, $headers)) {
                echo "Email sent successfully!";
            } else {
                echo "Email sending failed.";
            }
        }
        ?>
    </main>
    <footer>
        Immobilien © 2021
    </footer>
</body>
</html>