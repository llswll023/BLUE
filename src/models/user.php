<?php
namespace Models;

use \Models\Database;

class user
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  /**
   * CREATE
   * @return boolean
   */
  public function createUser($id,$nickname,$pw,$name,$phone,$email) //: bool
  {
    $this->db->query("INSERT INTO user (`id`,`nickname`,`pw`,`name`,`phone`,`email`) VALUES (`$id`,`$nickname`,`$pw`,`$name`,`$phone`,`$email`)");
    //$this->db->bind(':task', $description);
    if ($this->db->execute())
      return true;
    return false;
  }

  /**
   * READ
   * @return array
   */
  public function selectMydata($nickname, $pw) //: array
  {
    $stmt=$this->db->query("SELECT * FROM user where nickname=:nickname");
    $this->db->bind(':nickname',$nickname);
    $this->db->excute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if($nickname=$row['nickname']&&$pw==$row['pw']){
        return 0; //login 성공
    }else{
        return 1; //login 실패
        }
    }
  }

  /**
   * UPDATE
   * @return boolean
   */
  public function changeTaskStatus($id) : bool
  {
    $this->db->query("UPDATE task SET completed = 1 WHERE id = :id");
    $this->db->bind(':id', $id);
    if ($this->db->execute())
      return true;
    return false;
  }

  /**
   * DELETE
   * @return boolean
   */
  public function deleteTask($id) : bool
  {
    $this->db->query("DELETE FROM task WHERE id = :id");
    $this->db->bind(':id', $id);
    if ($this->db->execute())
      return true;
    return false;
  }
}