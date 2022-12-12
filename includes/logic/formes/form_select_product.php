<?

require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/logic/cart/db.php");

$category_id = $_GET['category_id'];
$sql = "SELECT * FROM `products` WHERE `category_id` = $category_id";
$select = $_POST['select'];
switch ($select) {

    case "":

    case "a_z":
        $sql .= " ORDER BY `title` ";
        break;
    case "z_a":
        $sql .= " ORDER BY `title` DESC";
        break;
    case "priceMax":
        $sql .= " ORDER BY `price` DESC";
        break;

    case "priceMin":
        $sql .= " ORDER BY `price`  ";
        break;
}



if (!$category_id) {
    $sql = " SELECT * FROM `products` ";
    switch ($select) {


        case "a_z":
            $sql .= " ORDER BY `title` ";
            break;
        case "z_a":
            $sql .= " ORDER BY `title` DESC";
            break;
        case "priceMax":
            $sql .= " ORDER BY `price` DESC";
            break;

        case "priceMin":
            $sql .= " ORDER BY `price`  ";
            break;
    }
}


$req = mysqli_query($connection, $sql);
$data_from_db = [];

while ($result = mysqli_fetch_assoc($req)) {
    $data_from_db[] = $result;
}
