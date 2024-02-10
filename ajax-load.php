<?php
$conn = mysqli_connect("localhost", "root", "", "php-ajax-crud") or die("Couldn't connect to " . mysqli_connect_error());
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql) or die("Query failed" . mysqli_error($conn));
$output = '';

if (mysqli_num_rows($result) > 0) {
    $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">
    <tr>
        <th width="100px">ID</th>
        <th>Name</th>
        <th width="100px">Delete</th>
        <th width="100px">edit</th>
    </tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "<tr>
        <td>{$row['id']}</td>
        <td>{$row['first_name']} {$row['last_name']}</td>
        <td>
                <button class='delete-btn' data-id='{$row['id']}'>Delete</button>
        </td>
        <td>
                <button class='edit-btn' data-id='{$row['id']}'>edit</button>
        </td>
        </tr>";
    }

    $output .= "</table>";
    mysqli_close($conn);
    echo $output;
} else {
    echo "<h2>No Record Found.</h2>";
}