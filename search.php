<?php
// Check if the 'query' GET parameter is set
if (isset($_GET['query']) && !empty($_GET['query'])) {
    // Connection details
    include "dbconnection.php";

    // Sanitize input to prevent SQL injection
    $searchTerm = $connection->real_escape_string($_GET['query']);

    // Queries for different tables
    $queries = [
        'employees' => "SELECT email FROM employees WHERE email LIKE '%$searchTerm%'",
        'tourist' => "SELECT id FROM tourist WHERE id LIKE '%$searchTerm%'",
        'accommodation' => "SELECT id  FROM accommodation WHERE id LIKE '%$searchTerm%'",
        'transport' => "SELECT telephone FROM transport WHERE telephone LIKE '%$searchTerm%'",
        'payment' => "SELECT id FROM payment WHERE id LIKE '%$searchTerm%'",
        'location' => "SELECT id FROM location WHERE location_id LIKE '%$searchTerm%'",
        'signup' => "SELECT firstname FROM signup WHERE firstname LIKE '%$searchTerm%'"
    ];

    // Output search results
    echo "<h2><u>Search Results:</u></h2>";

    foreach ($queries as $table => $sql) {
        $result = $connection->query($sql);
        echo "<h3>Table of $table:</h3>";
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<p>" . $row[array_keys($row)[0]] . "</p>"; // Dynamic field extraction from result
            }
        } else {
            echo "<p>No results found in $table matching the search term: '$searchTerm'</p>";
        }
    }

    // Close the connection
    $connection->close();
} else {
    echo "<p>No search term was provided.</p>";
}
?>
