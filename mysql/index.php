<html>
<head>
    <title>PHP Test</title>
</head>
<body>
<?php echo '<p>Hello Php</p>'; ?>
<?php

/**
 * Exercises of Mysql taken from this link:
 * https://www.w3resource.com/mysql-exercises/
 */


$servername = "mariadb";
$username = "drupal";
$password = "drupal";
$dbname = "drupal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


/**MySQL Create Table statement [5 Exercises]*/
//1

//$sql = "CREATE TABLE countries (country_id VARCHAR(2), country_name VARCHAR(40), region_id decimal(10,0))";

//2

//$sql = "CREATE TABLE IF NOT EXISTS countries (country_id VARCHAR(2), country_name VARCHAR(40), region_id decimal(10,0))";

//3

//$sql = "CREATE TABLE dup_countries LIKE countries";

//4

//$sql = "CREATE TABLE IF NOT EXISTS dup_countries AS SELECT * FROM countries";

//5

//$sql = "CREATE TABLE countries1 (country_id VARCHAR(2) NOT NULL, country_name VARCHAR(40) NOT NULL, region_id decimal(10,0) NOT NULL)";

/**MySQL Insert Into statement [5 Exercises]*/
//1

//$sql = "INSERT INTO countries(country_id, country_name, region_id) VALUES ('c6', 'Serbia', 1389)";

//2

//$sql = "INSERT INTO countries(country_id, country_name) VALUES ('c5', 'Croatia')";

//3

//$sql = "CREATE TABLE countries_new2 AS SELECT * FROM countries";

//4

//$sql = "INSERT INTO countries (country_id,country_name,region_id) VALUES('C4','Mongolia',1500),('C5','Russia', 1501),('C6','Kuwait', 1502);";

//5

//$sql = "INSERT INTO countries SELECT * FROM country_new;";


/**MySQL Update Table statement [5 Exercises]*/
//1
//2
//3
//4
//5

/**MySQL Alter Table statement [5 Exercises]*/
//1

//$sql = "ALTER TABLE countries RENAME country_new;";

//2

//$sql = "ALTER TABLE locations ADD region_id  INT;";

//3

//$sql = "ALTER TABLE locations ADD ID  INT FIRST;";

//4

//$sql = "ALTER TABLE locations ADD region_id INT AFTER state_province;";

//5

//$sql = "ALTER TABLE locations MODIFY country_id INT";

/**MySQL JOINS [5 Exercises]*/
//1

//$sql = "SELECT location_id, street_address, city, state_province, country_name FROM locations  JOIN country_new3";

//2

//$sql = "SELECT first_name, last_name, department_id, department_name FROM employees JOIN departments USING (department_id)";

//3

//$sql = "SELECT e.first_name, e.last_name, e.job_id, e.department_id, d.department_name FROM employees e JOIN departments d ON(e.department_id = d.department_id) JOIN locations l ON (d.location_id = l.location_id) WHERE LOWER(l.city) = 'London';";

//4

//$sql = "SELECT e.employee_id 'Emp_Id', e.last_name 'Employee',m.employee_id 'Mgr_Id', m.last_name 'Manager'FROM employees ejoin employees m ON (e.manager_id = m.employee_id);";

//5

//$sql = "SELECT e.first_name, e.last_name, e.hire_dateFROM employees eJOIN employees daviesON (davies.last_name = 'Jones')WHERE davies.hire_date < e.hire_date;SELECT e.first_name, e.last_name, e.hire_dateFROM employees eJOIN employees daviesON (davies.last_name = 'Jones')WHERE davies.hire_date < e.hire_date;";





if ($conn->multi_query($sql) === TRUE) {
    echo "Query succesfull.";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();


?>


