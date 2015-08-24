<?php

require_once('config.php');

// $_POST['image'];
// ファイルの存在を一旦ここでチェック
// var_dump($_FILES['image']);
// exit;


// エラーチェックをここでする
if ($_FILES['image']['error'] != UPLOAD_ERR_OK) {
	echo "エラーが発生しました : ".$_FILES['image']['error'];
	exit;
}

$size = filesize($_FILES['image']['tmp_name']);
if (!$size || $size > MAX_FILE_SIZE) {
	echo "ファイルサイズが大きすぎます！";
	exit;
}


// 保存するファイル名をここで決める
// 重複したファイル名が保存されないように、することは3つ。

// [1] ここでアップロードする画像の（たて、よこの）サイズと画像の種類を自動解析する
$imagesize = getimagesize($_FILES['image']['tmp_name']);

// 一旦、サイズと種類が出てるかチェックする
// var_dump($imagesize);

// [2] [1]を使ってここで拡張子を決める
switch($imagesize['mime']) {
	case 'image/gif':
		$ext = '.gif';
		break;
	case 'image/jpeg':
		$ext = '.jpg';
		break;
	case 'image/png':
		$ext = '.png';
		break;
	default:
	echo "GIF/JPEG/PNG only";
	exit;
}
// [3] ここでファイル名を乱数に変えている。重複しないよう現在時刻と乱数で指定している。
$imageFileName = sha1(time().mt_rand()) . $ext;
// var_dump($imageFileName);


// ここで元画像を保存する

// ディレクトリ名と保存するファイル名を変数に格納
$imageFilePath = IMAGES_DIR . '/' . $imageFileName;

$rs = move_uploaded_file($_FILES['image']['tmp_name'], $imageFilePath);
if (!$rs) {
	echo "アップロードできません！";
}

// 元の画像が指定したサイズより大きい場合は、ここで縮小した画像を作成して保存する

// index.phpに飛ばす

