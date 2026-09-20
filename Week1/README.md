# Example1.php

`Example1.php` is a beginner PHP example that combines HTML and PHP in one web page.

## What the Example Demonstrates

### 1. PHP Output

The file uses `print` and `echo` to display text in the browser:

```php
print "HELLO WORLD PHP";
echo "Hello World!";
```

Both are PHP language constructs used to generate page output.

### 2. Multiple `echo` Parameters

`echo` can accept more than one parameter:

```php
echo "Using echo with ", "two parameters.";
```

`print` accepts only one parameter.

### 3. Ternary Operator

The example compares `$x` and `$y` and uses `print` to display the result:

```php
$x = 10;
$y = 20;

($x < $y)
    ? print "$x is less than $y"
    : print "$x is greater than $y";
```

Because `$x` is less than `$y`, the page displays that `$x` is less than `$y`.

### 4. Single and Double Quotes

Single quotes display the variable name literally:

```php
$a = 10;
echo 'Hellow $a';
```

Double quotes replace the variable with its value:

```php
echo "Hellow $a";
```

The first example displays `Hellow $a`; the second displays `Hellow 10`.

## Run the Example

1. Start **Apache** in the XAMPP Control Panel.
2. Make sure the project is located at:

   ```text
   C:\xampp\htdocs\Week1
   ```

3. Open this URL in your browser:

   ```text
   http://localhost/Week1/Example1.php
   ```

## Check Syntax

From the `Week1` folder, run:

```powershell
C:\xampp\php\php.exe -l Example1.php
```

A successful check reports:

```text
No syntax errors detected in Example1.php
```
