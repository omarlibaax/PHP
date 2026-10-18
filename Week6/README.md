# Week 6 Assignment: Student Registration Form

This assignment practices HTML forms, PHP validation, file uploads, sessions, redirects, and displaying submitted data.

## Files

- [Assigment.php](Assigment.php) contains the registration form and validates submitted information.
- [Result.php](Result.php) displays a successful registration as a table.
- Uploaded student images are saved in the `uploads` directory.

## Included fields

- Personal information: name, place and date of birth, address, gender, telephone, email, and image.
- Parent/guardian information: name, telephone, and relationship to the student.
- Academic information: student ID, faculty, department, class, and registration date.

## Validation

- All fields, including the image, are required.
- Student and parent/guardian names may contain only letters and spaces.
- Gender must be Female or Male.
- Email must use a valid email format.
- Images must be JPG, PNG, GIF, or WEBP and no larger than 5 MB. The uploaded file's MIME type is checked by PHP.
- Invalid submissions show an error and focus the first field that needs attention.
- Valid submissions are stored in the session and redirected to the results page.

## Run with XAMPP

1. Start Apache in the XAMPP Control Panel.
2. Open the form at:

```text
http://localhost/PhpCourse/Week6/Assigment.php
```

The Bootstrap stylesheet is loaded from jsDelivr, so an internet connection is needed for the styled layout. PHP's Fileinfo extension must be enabled for image MIME validation.

## Check PHP syntax

From the course folder in PowerShell, run:

```powershell
C:\xampp\php\php.exe -l Week6\Assigment.php
C:\xampp\php\php.exe -l Week6\Result.php
```