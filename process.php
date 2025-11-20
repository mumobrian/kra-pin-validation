<?php

// --------------------------
// 1. Get form data
// --------------------------
$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$kra_pin = trim($_POST['kra_pin'] ?? '');


// --------------------------
// 2. Basic validation
// --------------------------
if (empty($name) || empty($email) || empty($kra_pin)) {
    die("All fields are required.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format.");
}


// --------------------------
// 3. KRA PIN validation using regex
// --------------------------
$pattern = "/^[A-Z]{1}[0-9]{9}[A-Z]{1}$/";

if (!preg_match($pattern, $kra_pin)) {
    die("Invalid KRA PIN format. A valid PIN looks like A123456789B");
}


// ---------------------------------------------------
// 4. Check for duplicates
// ---------------------------------------------------
$file = "kra_data.txt";

if (!file_exists($file)) {
    file_put_contents($file, "");
}

$existing_data = file($file, FILE_IGNORE_NEW_LINES);

foreach ($existing_data as $line) {
    if (strpos($line, $kra_pin) !== false) {
        die("This KRA PIN already exists in the system.");
    }
}


// ---------------------------------------------------
// 5. Save record into kra_data.txt
// ---------------------------------------------------
$record = $name . " | " . $email . " | " . $kra_pin . "\n";
file_put_contents($file, $record, FILE_APPEND);


// ---------------------------------------------------
// 6. Additional logic
// ---------------------------------------------------
$all = file($file, FILE_IGNORE_NEW_LINES);
$total_entries = count($all);

$count_A = 0;
foreach ($all as $entry) {
    $parts = explode(" | ", $entry);
    $pin = $parts[2] ?? "";
    if (strtoupper($pin[0]) === "A") {
        $count_A++;
    }
}


// ---------------------------
// 7. UI Styling for Output
// ---------------------------
?>

<!DOCTYPE html>
<html>
<head>
    <title>Submission Successful</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eef1f5;
            padding: 40px;
        }

        .card {
            background: white;
            padding: 25px;
            width: 70%;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 5px 12px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: rgba(255, 0, 0, 1);
        }

        .stats {
            margin-top: 20px;
            margin-bottom: 25px;
            font-size: 18px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 18px;
        }

        table, th, td {
            border: 1px solid #bbb;
        }

        th {
            background: #f21616ff;
            color: white;
            padding: 10px;
        }

        td {
            padding: 12px;
            background: #fafafa;
        }
    </style>

</head>
<body>

<div class="card">
    <h2>Submission Successful!</h2>

    <div class="stats">
        <p><strong>Total Registered Entries:</strong> <?= $total_entries ?></p>
        <p><strong>Entries Starting With A:</strong> <?= $count_A ?></p>
    </div>

    <h3>All Registered Entries</h3>

    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>KRA PIN</th>
        </tr>

        <?php foreach ($all as $entry): ?>
            <?php $parts = explode(" | ", $entry); ?>
            <tr>
                <td><?= htmlspecialchars($parts[0]) ?></td>
                <td><?= htmlspecialchars($parts[1]) ?></td>
                <td><?= htmlspecialchars($parts[2]) ?></td>
            </tr>
        <?php endforeach; ?>

    </table>
</div>

</body>
</html>
