<<<<<<< HEAD
# Web Application Development — PHP & MySQL

<p align="center">
  <strong>Professional Course README</strong>
</p>

<p align="center">
  PHP • MySQL • HTML • CSS • JavaScript • jQuery • AJAX • JSON • REST API • Laravel
</p>

---

## 👨‍🎓 Student Information

| Field | Details |
|---|---|
| **Student Name** | **Omar Abdinor** |
| **Student ID** | **CA1230198** |
| **Class** | **CA233** |
| **Lecturer** | **Yahye Ali Isse** |
| **Course** | **Web Application Development — PHP & MySQL** |

---

## 📚 Course Overview

**Web Application Development — PHP & MySQL** is a practical course focused on developing dynamic, interactive, and database-driven web applications.

The course introduces PHP as a server-side scripting language and MySQL as a relational database system. It also covers the technologies and development practices required to build complete web applications, including HTML, CSS, JavaScript, jQuery, AJAX, JSON, RESTful APIs, authentication, authorization, security, MVC, and fundamental Laravel concepts.

The course is designed to progress from fundamental PHP programming to complete PHP/MySQL web application development.

---

## 🎯 Course Objectives

By completing this course, the student should be able to:

- Understand web application development using PHP and MySQL.
- Develop dynamic and interactive web applications with PHP.
- Apply fundamental PHP programming concepts.
- Develop and validate web forms.
- Use jQuery, AJAX, and JSON for interactive applications.
- Design databases and perform SQL operations using MySQL.
- Develop secure PHP and MySQL CRUD applications.
- Develop and consume RESTful APIs using PHP and JSON.
- Implement sessions, authentication, authorization, and basic security.
- Apply MVC and modern PHP application practices.
- Understand fundamental Laravel concepts.
- Design, develop, test, and present a complete PHP and MySQL web application.

---

## 🛠️ Technologies Covered

### Frontend
- HTML
- CSS
- JavaScript
- jQuery

### Backend
- PHP
- Laravel fundamentals

### Database
- MySQL
- SQL

### Web & Data Communication
- HTTP
- AJAX
- JSON
- RESTful APIs

### Development Tools
- XAMPP
- Apache
- Visual Studio Code
- Git & GitHub
- Web Browser

---

## 🧠 Prerequisites

Before starting this course, the student should have:

- Basic knowledge of HTML.
- Understanding of HTML forms and their syntax.
- Basic programming knowledge.
- Basic familiarity with using a computer and web browser.

---

# 📖 Course Roadmap

## 1. Introduction to PHP & MySQL

The course begins with the fundamentals of web application development.

### Main concepts
- What is a web application?
- Client and server
- HTTP request and response
- HTML
- Web browsers
- Web servers
- PHP
- MySQL
- Dynamic vs. static web pages
- Server-side scripting

### PHP

PHP is an HTML-embedded server-side scripting language used to create dynamic and interactive web pages.

PHP code is executed on the server and can generate HTML, JSON, redirects, and other responses. PHP can also communicate with databases such as MySQL.

---

## 2. Web Application Architecture

A basic web application follows a client-server communication process:

```text
User
  ↓
Web Browser
  ↓
HTTP Request
  ↓
Web Server
  ↓
PHP Application
  ↓
MySQL Database
  ↓
PHP Response
  ↓
Web Server
  ↓
HTTP Response
  ↓
Web Browser
```

### Important concepts

- **Client:** The computer or browser making a request.
- **Server:** The system that receives the request and provides a response.
- **HTTP:** Communication standard governing requests and responses.
- **HTML:** Markup language used to display documents in a browser.
- **PHP:** Server-side programming language.
- **MySQL:** Database system used to store and manage application data.

---

# 🖥️ 3. Setting Up the Development Environment

The course uses **XAMPP** as a local development environment.

XAMPP provides the main components needed to develop and test PHP applications locally:

```text
XAMPP
├── Apache
├── MySQL
├── PHP
└── Perl
```

For Windows development, the typical environment is:

```text
Windows
   ↓
XAMPP
   ├── Apache → Web Server
   ├── MySQL → Database
   └── PHP → Server-side Language
```

---

## 📦 Recommended Tools

### XAMPP

Use XAMPP to run PHP and MySQL applications on your local computer.

Typical installation directory:

```text
C:\xampp
```

The XAMPP document root is:

```text
C:\xampp\htdocs
```

All local PHP projects should normally be placed inside the `htdocs` directory.

### Visual Studio Code

The course uses **Visual Studio Code** as the program editor.

VS Code provides features such as:

- Syntax highlighting
- Autocompletion
- IntelliSense
- Debugging support
- Code navigation
- Extensions
- Integrated terminal

### Web Browser

Recommended browsers include:

- Google Chrome
- Microsoft Edge
- Mozilla Firefox
- Opera

---

# 🌐 4. Running PHP Locally

After installing XAMPP:

1. Open **XAMPP Control Panel**.
2. Start **Apache**.
3. Start **MySQL** when working with database applications.
4. Open a web browser.
5. Visit:

```text
http://localhost
```

or:

```text
http://127.0.0.1
```

The default Apache port is commonly:

```text
80
```

If port 80 is already being used by another application, Apache can be configured to use another port such as:

```text
8080
```

Then the application can be accessed through:

```text
http://localhost:8080
```

---

# 📁 5. PHP Project Structure

A basic project can be created inside:

```text
C:\xampp\htdocs\
```

Example:

```text
C:\xampp\htdocs\php-course\
```

A simple project may look like:

```text
php-course/
├── index.php
├── about.php
├── contact.php
├── css/
├── js/
└── images/
```

The project can then be accessed through:

```text
http://localhost/php-course/
```

---

# 🧪 6. First PHP Application

Create a file named:

```text
index.php
```

Example:

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Course</title>
</head>
<body>

    <h1>Welcome to PHP & MySQL</h1>

    <?php
        echo "Welcome to PHP & MYSQL Course";
    ?>

</body>
</html>
```

Save the file inside:

```text
C:\xampp\htdocs\php-course\index.php
```

Open:

```text
http://localhost/php-course/
```

The `index.php` file can automatically serve as the default/index page when the project directory is opened.

---

# 🗄️ 7. MySQL & Database Development

MySQL is used to store and manage structured application data.

Database-driven PHP applications typically follow this flow:

```text
PHP Application
      ↓
Database Connection
      ↓
MySQL
      ↓
SQL Query
      ↓
Database Result
      ↓
PHP Application
```

The course includes database design and SQL operations as part of developing complete PHP/MySQL applications.

---

# 🔄 8. CRUD Applications

CRUD represents the four fundamental database operations:

| Operation | Meaning |
|---|---|
| **C** | Create |
| **R** | Read |
| **U** | Update |
| **D** | Delete |

A typical PHP/MySQL CRUD application allows users to:

- Add records
- View records
- Edit records
- Delete records
- Validate submitted data
- Store information in MySQL

The course also emphasizes secure PHP and MySQL CRUD application development.

---

# 📝 9. Web Forms

PHP applications commonly use HTML forms to collect information from users.

Important areas include:

- Form creation
- Form submission
- Processing form data with PHP
- Input validation
- Error handling
- Database insertion
- Secure processing of user input

Typical form flow:

```text
HTML Form
    ↓
User Input
    ↓
PHP Processing
    ↓
Validation
    ↓
Database Operation
    ↓
Response
```

---

# ⚡ 10. JavaScript, jQuery, AJAX & JSON

The course includes technologies for creating more interactive web applications.

### JavaScript
Used for client-side interaction and dynamic behavior.

### jQuery
A JavaScript library used to simplify common JavaScript operations.

### AJAX
Allows web applications to communicate with the server asynchronously without requiring a complete page reload.

### JSON
A lightweight data format commonly used to exchange data between client and server.

Example:

```json
{
    "name": "Omar Abdinor",
    "class": "CA233"
}
```

---

# 🔐 11. Sessions, Authentication & Authorization

The course introduces important concepts for user-based applications:

### Sessions
Used to maintain information about a user across multiple requests.

### Authentication
Determines **who the user is**.

Example:

```text
Login
  ↓
Username / Email
  ↓
Password
  ↓
Authentication
  ↓
User Session
```

### Authorization
Determines **what an authenticated user is allowed to do**.

Example:

```text
Admin
 ├── Create
 ├── Read
 ├── Update
 └── Delete

Normal User
 ├── Read
 └── Limited Actions
```

---

# 🛡️ 12. Basic Web Security

Secure application development is an important part of the course.

Security-related areas include:

- Input validation
- Secure form processing
- Authentication
- Authorization
- Session management
- Database security
- Secure CRUD operations

Security should be considered throughout the development process rather than added only at the end.

---

# 🔌 13. RESTful APIs & JSON

The course introduces developing and consuming RESTful APIs using PHP and JSON.

A typical API architecture is:

```text
Client
  ↓
HTTP Request
  ↓
REST API
  ↓
PHP
  ↓
MySQL
  ↓
JSON Response
  ↓
Client
```

Common HTTP methods include:

```text
GET     → Retrieve data
POST    → Create data
PUT     → Update data
DELETE  → Delete data
```

---

# 🏗️ 14. MVC Architecture

The course introduces MVC and modern PHP application practices.

MVC means:

```text
Model
View
Controller
```

### Model
Responsible for application data and database-related operations.

### View
Responsible for the user interface and presentation.

### Controller
Handles application requests and coordinates between the Model and View.

Basic structure:

```text
User Request
     ↓
Controller
   ↙     ↘
Model    View
  ↓        ↓
Database  UI
```

---

# 🚀 15. Laravel Fundamentals

The course also introduces fundamental Laravel concepts.

Laravel is a PHP framework used to develop modern web applications.

The Laravel section builds on concepts learned in core PHP, including:

- Routing
- Controllers
- Models
- Views
- Database interaction
- MVC architecture
- Modern PHP development practices

---

# 💻 16. Types of Applications

PHP can be used to develop many types of web applications, including:

- Social media applications
- E-commerce applications
- Blogs
- Content Management Systems (CMS)
- Search engines
- Knowledge bases
- E-learning platforms
- Entertainment applications

---

# 📚 17. Course Learning Path

The recommended learning progression is:

```text
HTML & Forms
     ↓
Web Fundamentals
     ↓
PHP Basics
     ↓
PHP Programming
     ↓
Forms & Validation
     ↓
MySQL & SQL
     ↓
PHP + MySQL
     ↓
CRUD Applications
     ↓
Sessions & Authentication
     ↓
AJAX + JSON + jQuery
     ↓
RESTful APIs
     ↓
Security
     ↓
MVC
     ↓
Laravel Fundamentals
     ↓
Complete Web Application
```

---

# 🎓 18. Final Course Project

The final goal of the course is to design, develop, test, and present a complete PHP and MySQL web application.

A complete project should demonstrate appropriate use of:

- PHP
- HTML
- CSS
- JavaScript
- MySQL
- Forms
- Validation
- CRUD operations
- Authentication
- Authorization
- Sessions
- Security
- JSON/AJAX where appropriate
- API concepts where appropriate
- MVC principles
- Version control

---

# 📌 19. Development Checklist

Before considering a PHP/MySQL application complete, verify:

### Environment
- [ ] XAMPP installed
- [ ] Apache running
- [ ] MySQL running
- [ ] Project inside `htdocs`
- [ ] Application opens through `localhost`

### PHP
- [ ] PHP syntax is correct
- [ ] Variables and functions are used correctly
- [ ] Forms are processed correctly
- [ ] Input is validated
- [ ] Errors are handled appropriately

### Database
- [ ] Database created
- [ ] Tables designed correctly
- [ ] SQL operations work
- [ ] PHP connects successfully to MySQL
- [ ] CRUD operations work

### Application
- [ ] User interface works
- [ ] Authentication works where required
- [ ] Authorization rules are implemented
- [ ] Sessions work correctly
- [ ] Application handles invalid input safely

### Final Project
- [ ] Application tested
- [ ] Bugs fixed
- [ ] Code organized
- [ ] Project documented
- [ ] Project presented successfully

---

# 📖 20. References & Learning Resources

The course material references:

1. **Learning PHP, MySQL, JavaScript, CSS & HTML5 — 6th Edition**  
   Robin Nixon

2. **PHP Manual**  
   Stig Sæther Bakken

3. **PHP Official Documentation**

4. **W3Schools**

5. **TutorialsPoint**

6. **PHP and MySQL for Dynamic Web Sites**  
   Larry Ullman

7. **Lecturer's Notes**

---

# 👨‍🏫 Lecturer

**Yahye Ali Isse**  

Course:

**Web Application Development — PHP & MySQL**

---

# 👨‍🎓 Student

**Omar Abdinor**  
**Student ID:** CA1230198  
**Class:** CA233

---

## ⭐ Course Goal

> Build a strong foundation in PHP and MySQL and progress toward developing complete, secure, database-driven web applications.

---

## 📜 Academic Note

This README is organized from the provided **Web Application Development — PHP & MySQL** course material. The course material identifies PHP, MySQL, HTML, JavaScript, jQuery, CSS, AJAX, JSON, RESTful APIs, authentication, authorization, security, MVC, Laravel fundamentals, and complete PHP/MySQL application development as key areas of study.

# PHP Introduction Examples

This folder contains beginner PHP examples in `Example1.php`.

## Topics Covered

- Basic PHP output with `echo` and `print`
- Using more than one parameter with `echo`
- Using `print` in a ternary operator
- The difference between single and double quotation marks
- Variable interpolation in double-quoted strings

## Requirements

- XAMPP, WAMP, or another PHP web server
- PHP enabled and the Apache server running

## Run with XAMPP

1. Place this folder inside the web server document root:

   ```text
   C:\xampp\htdocs\Week1
   ```

2. Start **Apache** from the XAMPP Control Panel.
3. Open the example in a browser:

   ```text
   http://localhost/Week1/Example1.php
   ```

## Example Details

### `echo` and `print`

Both constructs display text in the browser. `echo` can accept multiple parameters, while `print` accepts one parameter and returns a value.

### Ternary Operator

The example compares `$x` and `$y` and uses `print` to display the result:

```php
($x < $y)
    ? print "$x is less than $y"
    : print "$x is greater than $y";
```

### Quotation Marks

Single-quoted strings display variable names literally:

```php
echo 'Hellow $a';
```

Double-quoted strings replace variables with their values:

```php
echo "Hellow $a";
```

## Syntax Check

From the `Week1` folder, run:

```powershell
C:\xampp\php\php.exe -l Example1.php
```

A successful check reports:

```text
No syntax errors detected in Example1.php
```
