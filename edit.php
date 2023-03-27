<?php $conn = mysqli_connect("localhost", "root", "", "registration");
if (isset($_POST['btnUpdate'])) {
    $id = $_POST['txtId'];
    $fn = $_POST['txtFN'];
    $email = $_POST['txtEmail'];
    $user = $_POST['txtUsername'];
    $pass = $_POST['txtPassword'];

    $sql = "update user set fullname='$fn', email='$email', username='$user', password='$pass' where ID='$id'";
    $msg = $conn->query($sql);
    if ($msg)
        echo "Updated Successfully";
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("select * from user where ID='$id'");
    $row = $result->fetch_assoc();
    $fn = $row['fullname'];
    $email = $row['email'];
    $user = $row['username'];
    $pass = $row['password'];
    ?>

    <form action="" method="post">
        <input type="hidden" name="txtId" value="<?php echo $id; ?>" /> <br>
        Fullname <input type="text" name="txtFN" value="<?php echo $fn; ?>" /><br />
        Email <input type="text" name="txtEmail" value="<?php echo $email; ?>" /><br />
        Username <input type="text" name="txtUsername" value="<?php echo $user; ?>" /><br />
        Password <input type="password" name="txtPassword" value="<?php echo $pass; ?>" /><br />
        <input type="submit" value="update" name="btnUpdate" />
    </form>
<?php } ?>