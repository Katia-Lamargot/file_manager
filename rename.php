<?php
require_once 'inc/config.php';

$product_pictures = glob('img/*');
//debug($product_pictures);


foreach ($product_pictures as $picture_path) {

		$picture_filename = basename($picture_path);

		$query = $db->prepare('SELECT name, picture FROM products WHERE picture= :picture');
		$query->bindValue(':product_picture', $picture_filename, PDO::PARAM_STR);
		$query->execute();
		$query_results = $query->fetch();

		$old_name = $product['name'];
		$new_name = cleanString($old_name);

		debug($picture_filename);
		debug($old_name);
		debug($new_name);
		echo '<hr>';

}


