<?

require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/logic/cart/db.php");
session_start();
$category_id = $_GET['category_id'];

var_dump($category_id);


$sql = "SELECT * FROM `products` WHERE `category_id`  $category_id";
$select = $_POST['select'];
switch ($select) {
    default:
        $sql = "SELECT * FROM `products`";
        break;
    case "":
        $sql = "SELECT * FROM `products` WHERE `category_id` LIKE $category_id ";
        break;
    case "a_z":
        $sql = "SELECT * FROM `products` WHERE `category_id` LIKE $category_id ORDER BY `title` ";
        break;
    case "z_a":
        $sql = "SELECT * FROM `products` WHERE `category_id` LIKE $category_id ORDER BY `title` DESC";
        break;
    case "priceMax":
        $sql = "SELECT * FROM `products` WHERE `category_id` LIKE $category_id ORDER BY `price` DESC";
        break;

    case "priceMin":
        $sql = "SELECT * FROM `products` WHERE `category_id` LIKE $category_id ORDER BY `price`  ";
        break;
}





$req = mysqli_query($connection, $sql);
$data_from_db = [];

while ($result = mysqli_fetch_assoc($req)) {
    $data_from_db[] = $result;
}
