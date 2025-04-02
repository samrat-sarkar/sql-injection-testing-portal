# 🔒 SQL Injection Testing Portal

## 📝 Description
The SQL Injection Testing Portal is a PHP-based application designed to help users practice SQL injection techniques on a local server. This tool demonstrates a SQL injection vulnerability for educational purposes. Use it to test your SQL injection skills and understand how to exploit such vulnerabilities in a controlled environment.

## 🖼️ Screenshots
![SQL Injection Testing Portal](https://samrat-sarkar.github.io/sql-injection-testing-portal/screenshots/1.png)
![SQL Injection Testing Portal](https://samrat-sarkar.github.io/sql-injection-testing-portal/screenshots/2.png)

## 🛠️ Setup

### ⚙️ Prerequisites
- A local server environment with PHP and MySQL (e.g., XAMPP, WAMP, MAMP)
- Basic knowledge of SQL and PHP
- MySQL client or phpMyAdmin for database management

### 📥 Installation

1. **Clone the Repository**
   ```bash
   git clone https://github.com/samrat-sarkar/sql-injection-testing-portal.git
   cd sql-injection-testing-portal
   ```

2. **Import the SQL File**
   
   **Using MySQL Command Line:**
   ```bash
   mysql -u yourusername -p yourpassword < sqli.sql
   ```
   > Replace `yourusername` and `yourpassword` with your MySQL credentials

   **Using phpMyAdmin:**
   1. Log in to phpMyAdmin
   2. Create a new database named `sqli`
   3. Select the `sqli` database and navigate to the "Import" tab
   4. Choose the `sqli.sql` file and click "Go" to import it

3. **Configure Database Credentials**
   ```php
   $host = "localhost";
   $username = "root";
   $password = "";
   $database = "sqli";
   ```

4. **Run the Application**
   1. Place the PHP files in your local server's root directory (e.g., `htdocs` in XAMPP)
   2. Start your local server
   3. Access the application via your browser at `http://localhost/sql-injection-testing-portal`

## 🚀 Usage
Use the search form on the application page to input various SQL payloads and test SQL injection. The results and data from the user inputs will be displayed, demonstrating the effects of SQL injection.

## ⚠️ Security Note
This tool is intended for educational purposes only. Always practice SQL injection techniques in controlled environments and never attempt to exploit vulnerabilities on unauthorized systems.

## 🤝 Contributing
Contributions are welcome! Please feel free to submit a Pull Request.

## 👤 Author
- **Samrat Sarkar**
  - LinkedIn: [samratsarkar9999](https://www.linkedin.com/in/samratsarkar9999/)
  - Website: [samratsarkar.in](https://samratsarkar.in/)

