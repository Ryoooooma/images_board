<?php

require_once('config.php');

?>

<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>画像掲示板</title>
	</head>
	<body>
		<h1>画像掲示板</h1>
		<form action="upload.php" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_FILE_SIZE; ?>">
			<p><input type="file" name="image"></p>
			<p><input type="submit" value="アップロード"></p>
		</form>
	</body>
</html>