<?php
// SAMPLE CODE: Ready to run.
// Use this to show students how variables hold values and combine.

$studentName = "Alice Smith";
$currentCourse = "Web Mobile Application Development (WMAD)";

// The dot (.) operator is used for Concatenation (joining strings)
$welcomeMessage = "Welcome back, " . $studentName . "! ";
$welcomeMessage .= "You are currently enrolled in " . $currentCourse;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sample 1: Variables</title>
    <style>
        body {
            font-family: sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .card {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            text-align: center;
        }

        h2 {
            color: #1a0dab;
        }
    </style>
</head>

<body>
    <div class="card">
        <h2>Dashboard</h2>
        <p><?php echo $welcomeMessage; ?></p>
    </div>
</body>

</html>