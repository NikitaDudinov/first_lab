<?php
const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DATABASE = 'blog';
$bool = true;
$method = $_SERVER['REQUEST_METHOD'];
function authByCookie(): bool
{
    session_name('auth');
    session_start();
    if(isset($_SESSION['user_id'])){
        return true;
    }
    return false;
}

if ($method != "POST") {
  echo 'Метод запроса не является POST\n';
} else {
  if(authByCookie()){
    $conn = createDBConnection();
    $sql = "SELECT MAX(ID) FROM post";
    $result = $conn->query($sql);
    $post = $result->fetch_assoc();
    $dataAsJson = File_Get_Contents("php://input");
    $dataAsArray = json_decode($dataAsJson, true);
    if (is_array($dataAsArray) && !empty($dataAsArray)) {
      foreach ($dataAsArray as $item) {
        if ($item != '') {
          $bool = $bool && TRUE;
        } else {
          $bool = $bool && FALSE;
        }
      }
      if ($bool) {
        $UrlImageAuthor = saveImage($dataAsArray['author_url'], $post['MAX(ID)'], "authors");
        $UrlImage = saveImage($dataAsArray['image_url'], $post['MAX(ID)'], "fonts");
        $UrlImageCard = saveImage($dataAsArray['image_card_url'],  $post['MAX(ID)'], "card_images");
        $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
        $sql = "INSERT INTO post (title, subtitle, content, author, author_url, publish_date, image_url, featured, image_card_url) VALUES ('{$dataAsArray['title']}', '{$dataAsArray['subtitle']}', '{$dataAsArray['content']}', '{$dataAsArray['author']}', '{$UrlImageAuthor}', '{$dataAsArray['publish_date']}', '{$UrlImage}', {$dataAsArray['featured']}, '{$UrlImageCard}')";
        if ($conn->query($sql)) {
          echo "Данные успешно добавлены\n";
        } else {
          echo "Ошибка: " . $conn->error;
        }
      } else {
        echo "Некорректно введены данные\n";
      }
    }
    closeDBConnection($conn);
  }else{
    header("Location: /home");
    die();
  }
}

function createDBConnection(): mysqli
{
  $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  return $conn;
}

function closeDBConnection(mysqli $conn): void
{
  $conn->close();
}
function saveImage(string $imageBase64, int $idPost, string $dir)
{
  $imageBase64Array = explode(';base64,', $imageBase64);
  $imgExtention = str_replace('data:image/', '', $imageBase64Array[0]);
  $imageDecoded = base64_decode($imageBase64Array[1]);
  $idPost = $idPost + 1;
  saveFile("images/{$dir}/image{$idPost}.{$imgExtention}", $imageDecoded);
  $UrlImage = "http://localhost:8001/static/images/{$dir}/image{$idPost}.{$imgExtention}";
  return $UrlImage;
}
function saveFile(string $file, string $data)
{
  $myFile = fopen($file, 'w');
  if ($myFile) {
    $result = fwrite($myFile, $data);
    if ($result) {
      echo "Данные успешно сохранены в файл\n";
    } else {
      echo "Произошла ошибка при сохранении данных в файл\n";
    }
    fclose($myFile);
  } else {
    echo "Произошла ошибка при открытии файла\n";
  }
}
