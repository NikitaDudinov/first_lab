<?php
const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DATABASE = 'blog';
$salt = 'MyPass';
$method = $_SERVER['REQUEST_METHOD'];
if ($method != "POST")
{
  echo 'Метод запроса не является POST\n';
} 
else 
{
  $conn = createDBConnection();
    $dataAsJson = File_Get_Contents("php://input");
    $dataAsArray = json_decode($dataAsJson, true);
    $email = $dataAsArray['email'];
    $password = (string) $dataAsArray['password'];
    $password = (md5($password  . $salt));   
    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
    if($user !==null && $user['password'] == $password){   
        $session_name = 'auth';
        session_name($session_name);
        session_start();  
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['color'] = rand_color();
        echo('200');
    }
    else{
        echo('401');
    }
}
function rand_color() {
  return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
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