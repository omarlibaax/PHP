<?php
session_start();

$fields = [
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

$values = array_fill_keys(array_keys($fields), '');
$errors = [];
$imageError = '';
$imagePath = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($fields as $key => $label) {
        $values[$key] = trim((string) ($_POST[$key] ?? ''));
        if ($values[$key] === '') {
            $errors[$key] = "$label is required.";
        }
    }

    if ($values['student_name'] !== '' && !preg_match("/^[\p{L} ]+$/u", $values['student_name'])) {
        $errors['student_name'] = 'Student name must contain only letters and spaces.';
    }

    if ($values['parent_name'] !== '' && !preg_match("/^[\p{L} ]+$/u", $values['parent_name'])) {
        $errors['parent_name'] = 'Parent/guardian name must contain only letters and spaces.';
    }

    if ($values['email'] !== '' && !filter_var($values['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Enter a valid email address.';
    }

    if (!in_array($values['gender'], ['Female', 'Male'], true)) {
        $errors['gender'] = 'Choose a valid gender option.';
    }

    $image = $_FILES['student_image'] ?? null;
    if (!$image || $image['error'] === UPLOAD_ERR_NO_FILE) {
        $imageError = 'Student image is required.';
    } elseif ($image['error'] !== UPLOAD_ERR_OK) {
        $imageError = 'The image could not be uploaded. Please try again.';
    } elseif ($image['size'] > 5 * 1024 * 1024) {
        $imageError = 'The image must be 5 MB or smaller.';
    } else {
        $allowedTypes = [
            'image/jpeg' => 'jpg',
            'image/png' => 'png',
            'image/gif' => 'gif',
            'image/webp' => 'webp',
        ];
        $fileInfo = new finfo(FILEINFO_MIME_TYPE);
        $mimeType = $fileInfo->file($image['tmp_name']);
        if (!isset($allowedTypes[$mimeType])) {
            $imageError = 'Upload an image in JPG, PNG, GIF, or WEBP format.';
        } else {
            $uploadDirectory = __DIR__ . '/uploads';
            if (!is_dir($uploadDirectory) && !mkdir($uploadDirectory, 0755, true) && !is_dir($uploadDirectory)) {
                $imageError = 'The upload folder could not be created. Contact the site administrator.';
            } else {
                $fileName = bin2hex(random_bytes(16)) . '.' . $allowedTypes[$mimeType];
                if (move_uploaded_file($image['tmp_name'], $uploadDirectory . '/' . $fileName)) {
                    $imagePath = 'uploads/' . $fileName;
                } else {
                    $imageError = 'The image could not be saved. Please try again.';
                }
            }
        }
    }

    if (!$errors && $imageError === '') {
        $_SESSION['student_registration'] = [
            'values' => $values,
            'image' => $imagePath,
        ];
        header('Location: Result.php');
        exit;
    }
}

function escape(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

$firstInvalid = array_key_first($errors);
if ($firstInvalid === null && $imageError !== '') {
    $firstInvalid = 'student_image';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f2f5f1; color: #1e302a; }
        .page-header { background: #174b3b; color: white; }
        .section-title { color: #174b3b; border-bottom: 1px solid #d9e3dc; }
        .form-control:focus, .form-select:focus { border-color: #38836a; box-shadow: 0 0 0 .2rem #38836a30; }
        .btn-register { background: #174b3b; color: white; }
        .btn-register:hover { background: #103a2d; color: white; }
    </style>
</head>
<body>
    <header class="page-header py-4 mb-4">
        <div class="container">
            <p class="mb-1 text-uppercase small">Student Services</p>
            <h1 class="h2 mb-0">Student Registration</h1>
        </div>
    </header>

    <main class="container pb-5" style="max-width: 960px">
        <?php if ($errors || $imageError !== ''): ?>
            <div class="alert alert-danger" role="alert" tabindex="-1" id="form-errors">
                <strong>Please correct the following:</strong>
                <ul class="mb-0 mt-2">
                    <?php foreach ($errors as $message): ?><li><?= escape($message) ?></li><?php endforeach; ?>
                    <?php if ($imageError !== ''): ?><li><?= escape($imageError) ?></li><?php endif; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="Assigment.php" method="post" enctype="multipart/form-data" id="registration-form" novalidate>
            <input type="hidden" name="MAX_FILE_SIZE" value="5242880">

            <section class="mb-4" aria-labelledby="personal-heading">
                <h2 class="section-title h5 pb-2 mb-3" id="personal-heading">Personal Information</h2>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label" for="student_name">Full name</label>
                        <input class="form-control" id="student_name" name="student_name" value="<?= escape($values['student_name']) ?>" required pattern="[\p{L} ]+" autocomplete="name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="place_of_birth">Place of birth</label>
                        <input class="form-control" id="place_of_birth" name="place_of_birth" value="<?= escape($values['place_of_birth']) ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="date_of_birth">Date of birth</label>
                        <input class="form-control" type="date" id="date_of_birth" name="date_of_birth" value="<?= escape($values['date_of_birth']) ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="address">Address</label>
                        <input class="form-control" id="address" name="address" value="<?= escape($values['address']) ?>" required autocomplete="street-address">
                    </div>
                    <fieldset class="col-md-6">
                        <legend class="form-label fs-6">Gender</legend>
                        <?php foreach (['Female', 'Male'] as $gender): ?>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="gender-<?= strtolower(str_replace(' ', '-', $gender)) ?>" name="gender" value="<?= escape($gender) ?>" <?= $values['gender'] === $gender ? 'checked' : '' ?> required>
                                <label class="form-check-label" for="gender-<?= strtolower(str_replace(' ', '-', $gender)) ?>"><?= escape($gender) ?></label>
                            </div>
                        <?php endforeach; ?>
                    </fieldset>
                    <div class="col-md-6">
                        <label class="form-label" for="student_telephone">Telephone</label>
                        <input class="form-control" type="tel" id="student_telephone" name="student_telephone" value="<?= escape($values['student_telephone']) ?>" required autocomplete="tel">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control" type="email" id="email" name="email" value="<?= escape($values['email']) ?>" required autocomplete="email">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="student_image">Student image</label>
                        <input class="form-control" type="file" id="student_image" name="student_image" accept=".jpg,.jpeg,.png,.gif,.webp,image/jpeg,image/png,image/gif,image/webp" required>
                        <div class="form-text">JPG, PNG, GIF, or WEBP; maximum 5 MB.</div>
                    </div>
                </div>
            </section>

            <section class="mb-4" aria-labelledby="parent-heading">
                <h2 class="section-title h5 pb-2 mb-3" id="parent-heading">Parent / Guardian Information</h2>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label" for="parent_name">Name</label>
                        <input class="form-control" id="parent_name" name="parent_name" value="<?= escape($values['parent_name']) ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="parent_telephone">Telephone</label>
                        <input class="form-control" type="tel" id="parent_telephone" name="parent_telephone" value="<?= escape($values['parent_telephone']) ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="relationship">Relationship to student</label>
                        <input class="form-control" id="relationship" name="relationship" value="<?= escape($values['relationship']) ?>" required>
                    </div>
                </div>
            </section>

            <section class="mb-4" aria-labelledby="academic-heading">
                <h2 class="section-title h5 pb-2 mb-3" id="academic-heading">Academic Information</h2>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label" for="student_id">Student ID</label>
                        <input class="form-control" id="student_id" name="student_id" value="<?= escape($values['student_id']) ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="faculty">Faculty</label>
                        <input class="form-control" id="faculty" name="faculty" value="<?= escape($values['faculty']) ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="department">Department</label>
                        <input class="form-control" id="department" name="department" value="<?= escape($values['department']) ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="class">Class</label>
                        <input class="form-control" id="class" name="class" value="<?= escape($values['class']) ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="registration_date">Registration date</label>
                        <input class="form-control" type="date" id="registration_date" name="registration_date" value="<?= escape($values['registration_date']) ?>" required>
                    </div>
                </div>
            </section>

            <div class="d-flex gap-2">
                <button class="btn btn-register px-4" type="submit">Register student</button>
                <button class="btn btn-outline-secondary" type="reset">Clear form</button>
            </div>
        </form>
    </main>
    <script>
        const form = document.getElementById('registration-form');
        form.addEventListener('submit', (event) => {
            const name = document.getElementById('student_name');
            const parentName = document.getElementById('parent_name');
            name.setCustomValidity(/^[\p{L} ]+$/u.test(name.value.trim()) ? '' : 'Use letters and spaces only.');
            parentName.setCustomValidity(/^[\p{L} ]+$/u.test(parentName.value.trim()) ? '' : 'Use letters and spaces only.');
            if (!form.checkValidity()) {
                event.preventDefault();
                form.reportValidity();
            }
        });
        form.addEventListener('input', (event) => {
            if (event.target.id === 'student_name' || event.target.id === 'parent_name') {
                event.target.setCustomValidity('');
            }
        });
        <?php if ($firstInvalid !== null): ?>
            document.getElementById(<?= json_encode($firstInvalid) ?>)?.focus();
        <?php endif; ?>
    </script>
</body>
</html>