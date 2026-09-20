# Week 2 Example1.php

`Example1.php` introduces PHP fundamentals and basic control structures. It combines HTML and PHP in one page and can be opened through XAMPP.

## Topics Covered

### Constants and Variables

The example creates values that can be reused in the program:

- `COURSE_NAME` is a constant created with `define()`.
- `PASSING_SCORE` is a constant created with `const`.
- `$studentName` and `$score` are variables.

Constants do not change while the script runs. Variables can be changed.

### If, Elseif, and Else

The score is checked with conditions:

- A score of 80 or more displays `Excellent`.
- A score from 50 to 79 displays `Passed`.
- A lower score displays `Failed`.

### Switch Statement

The `$day` variable is checked with `switch`. Each `case` represents a possible day. `break` stops PHP from continuing into the next case. `default` runs when no case matches.

### Ternary Operator

The ternary operator is a short way to write a simple `if-else` condition:

```php
$message = $loginStatus ? "The user is logged in." : "The user is logged out.";
```

The first message is used when `$loginStatus` is true. The second message is used when it is false.

### While Loop

The `while` loop prints numbers from 1 to 5. PHP checks the condition before each repetition. The loop stops when `$number` becomes greater than 5.

### Do-While Loop

The `do-while` loop also prints numbers from 1 to 5. Its code runs once before PHP checks the condition, so a `do-while` loop always runs at least one time.

## Run the Example

1. Start **Apache** in the XAMPP Control Panel.
2. Open this URL in your browser:

   ```text
   http://localhost/PhpCourse/Week2/Example1.php
   ```

## Check Syntax

From the project folder, run:

```powershell
C:\xampp\php\php.exe -l Week2\Example1.php
```
