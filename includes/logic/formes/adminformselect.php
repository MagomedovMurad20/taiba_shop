<?php
$query = "SELECT * FROM `categories`";
$req = mysqli_query($connection, $query);
$categories = [];
while ($result = mysqli_fetch_assoc($req)) {
    $categories[] = $result;
}
foreach ($categories as $category) {

    echo "<option value=\"{$category['id']}\">{$category['title']}</option>";
}
