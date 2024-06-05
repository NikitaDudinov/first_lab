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
    $password = $dataAsArray['password'];
    //$password = (md5(md5($dataAsArray['password']) . $salt) . PHP_EOL);
    try{    
        $sql = "SELECT * FROM user WHERE email = '$email'";
        $result = $conn->query($sql);
        $user = $result->fetch_assoc();
        if($user['password'] == $password){
            echo('200');
        }
        else{
            echo('401');
        }
    }
    catch(Exception){
        echo('401');
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