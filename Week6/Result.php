<?php
session_start();

$registration = $_SESSION['student_registration'] ?? null;
unset($_SESSION['student_registration']);

if (!$registration || !isset($registration['values'], $registration['image'])) {
    header('Location: Assigment.php');
    exit;
}

function escape(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

$labels = [
    'student_name' => 'Student name',
    'place_of_birth' => 'Place of birth',
    'date_of_birth' => 'Date of birth',
    'address' => 'Address',
    'gender' => 'Gender',
    'student_telephone' => 'Student telephone',
    'email' => 'Email',
    'parent_name' => 'Parent/guardian name',
    'parent_telephone' => 'Parent/guardian telephone',
    'relationship' => 'Relationship to student',
    'student_id' => 'Student ID',
    'faculty' => 'Faculty',
    'department' => 'Department',
    'class' => 'Class',
    'registration_date' => 'Registration date',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Complete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f2f5f1; color: #1e302a; }
        .page-header { background: #174b3b; color: white; }
        .table th { width: 32%; color: #174b3b; }
        .student-photo { width: 112px; height: 132px; object-fit: cover; border: 1px solid #d9e3dc; }
    </style>
</head>
<body>
    <header class="page-header py-4 mb-4">
        <div class="container">
            <p class="mb-1 text-uppercase small">Student Services</p>
            <h1 class="h2 mb-0">Registration Complete</h1>
        </div>
    </header>
    <main class="container pb-5" style="max-width: 960px">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h2 class="h4 mb-0">Submitted student information</h2>
            <a class="btn btn-outline-success" href="Assigment.php">New registration</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle bg-white">
                <tbody>
                    <tr>
                        <th scope="row">Student image</th>
                        <td><img class="student-photo" src="<?= escape($registration['image']) ?>" alt="Student portrait"></td>
                    </tr>
                    <?php foreach ($labels as $key => $label): ?>
                        <tr>
                            <th scope="row"><?= escape($label) ?></th>
                            <td><?= escape((string) ($registration['values'][$key] ?? '')) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>