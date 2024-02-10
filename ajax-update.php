$id = $_POST['id'];
$conn = mysqli_connect("localhost", "root", "", "php-ajax-crud") or die("Couldn't connect to " .
mysqli_connect_error());

$id = mysqli_real_escape_string($conn, $id);

$sql = "DELETE FROM students WHERE id = $id";
if (mysqli_query($conn, $sql)) {
echo 1;
mysqli_close($conn);
} else {
echo 0;
}