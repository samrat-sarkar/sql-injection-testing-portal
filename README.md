# SQL Injection Testing Portal

## Description
The SQL Injection Testing Portal is a PHP-based application designed to help users practice SQL injection techniques on a local server. This tool demonstrates a SQL injection vulnerability for educational purposes. Use it to test your SQL injection skills and understand how to exploit such vulnerabilities in a controlled environment.

## Setup

### Prerequisites
- A local server environment with PHP and MySQL (e.g., XAMPP, WAMP, MAMP).
- Basic knowledge of SQL and PHP.
- MySQL client or phpMyAdmin for database management.

### Clone the Repository
First, clone the repository to your local machine:
```bash
git clone https://github.com/samrat-sarkar/sql-injection-testing-portal.git
cd sqli-testing-portal

Import the SQL File
To set up the database, you need to import the `sqli.sql` file into your MySQL server.

Using the MySQL Command Line
1. Open your terminal or command prompt.
2. Run the following command to import the SQL file:
    mysql -u yourusername -p yourpassword < sqli.sql
    Replace `yourusername` and `yourpassword` with your MySQL credentials.

Using phpMyAdmin
1. Log in to phpMyAdmin.
2. Create a new database named `sqli`.
3. Select the `sqli` database and navigate to the "Import" tab.
4. Choose the `sqli.sql` file and click "Go" to import it.

Configure Database Credentials
Edit the PHP file to update the database connection settings if necessary:
$host = "localhost";
$username = "root";
$password = "";
$database = "sqli";

Run the Application
1. Place the PHP files in your local server's root directory (e.g., `htdocs` in XAMPP).
2. Start your local server and access the application via your browser at `http://localhost/sql-injection-testing-portal`.

Usage
Use the search form on the application page to input various SQL payloads and test SQL injection. The results and data from the user inputs will be displayed, demonstrating the effects of SQL injection.

