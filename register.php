<?php 

$conn = mysqli_connect("localhost", "root", "", "registration");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['btnSave'])) {
    $fn = mysqli_real_escape_string($conn, $_POST['txtEmail']);
    $email = mysqli_real_escape_string($conn, $_POST['txtEmail']);
    $user = mysqli_real_escape_string($conn, $_POST['txtUsername']);
    $pass = mysqli_real_escape_string($conn, $_POST['txtPassword']);

    $sql = "INSERT INTO user(fullname, email, username, password)
                VALUES('$fn', '$email', '$user', '$pass')";

    if (mysqli_query($conn, $sql)) {
        echo "Inserted Success";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);

?>


<form action="" method="post">

    Fullname <input type="text" name="txtFN" /><br />
    Email <input type="text" name="txtEmail" /><br />
    Username <input type="text" name="txtUsername" /><br />
    Password <input type="password" name="txtPassword" /><br />
    <input type="submit" value="save" name="btnSave" />
</form>
