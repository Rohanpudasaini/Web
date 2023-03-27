<?php
$conn = mysqli_connect("localhost", "root", "", "registration");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$result = mysqli_query($conn, "SELECT * FROM user");

$html = "<table><tr><th>Username</th><th>Email</th><th>Fullname</th><th>Delete</th><th>Edit</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    $html .= '<tr>
                <td>' . $row['username'] . '</td>
                <td>' . $row['email'] . '</td>
                <td>' . $row['fullname'] . '</td>
                <td><a href="delete.php?id=' . $row['ID'] . '">Delete</a></td>
                <td><a href="edit.php?id=' . $row['ID'] . '">Edit</a></td>
              </tr>';
}

$html .= '</table>';

echo $html;

mysqli_free_result($result);
mysqli_close($conn);
?>