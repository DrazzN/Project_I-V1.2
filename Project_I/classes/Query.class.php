<?php
//include 'Dbconn.class.php';
class Query extends DBConnection {

  public function getUsers() {
    $sql = "SELECT COUNT(level), level FROM subject GROUP BY level;";
    $stmt = $this->connect()->query($sql);
    //while($row = $stmt->fetch()) {
     // echo $row['level']. '<br>';
     return $stmt;
    //}
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
