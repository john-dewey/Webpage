<?php
/**
 * Performs a search
 *
 * This class is used to perform search functions in a MySQL database
 *
 * @version 1.2
 * @author John Morris <support@johnmorrisonline.com>
 * @author Kirill Krasin <kirillkrasin@gmail.com>
 */
class search {
  /**
   * MySQLi connection
   * @access private
   * @var object
   */
  private $mysqli;
  
  /**
   * Constructor
   *
   * This sets up the class
   */
  public function __construct() {
    // Connect to our database and store in $mysqli property
    $this->connect();
  }
  /**
   * Database connection
   * 
   * This connects to our database
   */
  private function connect() {
    $username = 'root';

    $password = '';

    $hostname = 'localhost'; 

    $database='bdwxkmy_ProjectText';

    $this->mysqli = new mysqli( $hostname, $username, $password);

    // Check connection
    // if ($conn->connect_error) {
    //   die("Connection failed: " . $conn->connect_error);
    // }
    // echo "Connected successfully";
  }
  
  /**
   * Search routine
   * 
   * Performs a search
   * 
   * @param string $search_term The search term
   * @param string $attribute The Attribute
   * @param string $table The Table
   * 
   * @return string $search_results Array of search results or false
   */
  public function search($search_term, $attribute, $table) {
    $sql = "SELECT $attribute FROM $table WHERE id='$search_term'";
    echo $sql;
    $result = $this->mysqli->query($sql);

    $this->mysqli->close();
    return $result;
  }

  
  public function lookup($sql_query){
    $stmt = $this->mysqli->prepare("$sql_query limit 1");
    //$result = $this->mysqli->query("$sql_query limit 1");
    $stmt->execute();
    $result = $stmt->get_result();
    $value = $result->fetch_object();
    $_SESSION['projectName'] = $value->projectName;
    return $result;
  }
}