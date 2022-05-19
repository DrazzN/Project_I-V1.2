<?php
//include 'Dbconn.class.php';
class Query extends DBConnection {

  public function getUsers() {
    $sql = "SELECT COUNT(user_id) FROM users;";
    $stmt = $this->connect()->query($sql);
    $row = $stmt->fetch();
      echo $row['COUNT(user_id)']. '<br>';
     return $stmt;
    
  }

  public function getUsersStmt($username, $password) {
    $sql = "SELECT * FROM users WHERE username = ? AND email = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$username, $password]);
    $result = $stmt->fetchAll();
    
    foreach($result as $result) {
      echo $result['username'] . ' <br>';
    }
  }

  public function setUsersStmt($username, $email, $password) {
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$username, $email, $password]);
    
  }
}
