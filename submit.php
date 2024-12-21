<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usn = htmlspecialchars($_POST['usn']);
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $arrear = htmlspecialchars($_POST['arrear']);
    
    $subjects = [];
    if (isset($_POST['subjects']) && is_array($_POST['subjects'])) {
        foreach ($_POST['subjects'] as $subject) {
            $subjects[] = htmlspecialchars($subject);
        }
    }

    $otherSubject = htmlspecialchars($_POST['otherSubject']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Registration Successful!</h1>
        <p><strong>USN:</strong> <?php echo $usn; ?></p>
        <p><strong>Full Name:</strong> <?php echo $name; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Phone Number:</strong> <?php echo $phone; ?></p>
        <p><strong>Arrear:</strong> <?php echo $arrear; ?></p>

        <h3>Selected Subjects</h3>
        <?php if (!empty($subjects)) : ?>
            <ul>
                <?php foreach ($subjects as $subject) : ?>
                    <li><?php echo $subject; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else : ?>
            <p>No subjects selected.</p>
        <?php endif; ?>

        <?php if (!empty($otherSubject)) : ?>
            <p><strong>Additional Subjects:</strong> <?php echo nl2br($otherSubject); ?></p>
        <?php endif; ?>

        <a href="index.html"><button>Go Back</button></a>
    </div>
</body>
</html>
