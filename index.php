<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "sqli";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$search_result = null;
$search_name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search_name = $_POST["search_name"];
    $sql = "SELECT * FROM users WHERE name = '$search_name'";
    echo "<p class='sql-query'><strong>SQL Query:</strong> SELECT * FROM users WHERE name = '<span style='color: red;'>$search_name</span>'</p>";
    $search_result = $conn->query($sql);
}


$all_users_sql = "SELECT * FROM users";
$all_users_result = $conn->query($all_users_sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>SQLi</title>
<style type="text/css">
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.container {
    width: 80%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    background: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

form {
    margin-bottom: 20px;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 16px;
    margin-bottom: 10px;
}

button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #0056b3;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 12px;
    text-align: left;
}

th {
    background-color: #007bff;
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #ddd;
}

.sql-query {
    background-color: #f4f4f4;
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 10px;
    margin-top: 20px;
    font-family: monospace;
    font-size: 14px;
    color: #333;
}

.sql-query strong {
    color: #007bff;
}
</style>
</head>
<body>

<h3>Search for a User:</h3>
<form method="POST" action="">
    <input type="text" name="search_name" placeholder="Enter Name" value="<?php echo $search_name; ?>" required>
    <button type="submit">Search</button>
</form>

<?php
if ($search_result && $search_result->num_rows > 0): ?>
    <h3>SQL Query Results:</h3>
    <table border="1">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php while ($row = $search_result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
<?php elseif ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <p>No users found. [ <span style='color: red;'><?php echo $search_name; ?></span> ]</p>
<?php endif; ?>

<h3>All Users Data:</h3>
<table border="1">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
    </tr>
    <?php if ($all_users_result && $all_users_result->num_rows > 0): ?>
        <?php while ($row = $all_users_result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["password"]; ?></td>
            </tr>
        <?php endwhile; ?>
    <?php else: ?>
        <tr>
            <td colspan="4">No users available.</td>
        </tr>
    <?php endif; ?>
</table>

</body>
</html>

<?php
$conn->close();
?>
