<?php

/*
 * Falta incluir el try catch para los queries de mysql en cada method,
 *       así como el chequeo de la existencia del 'user_id'
*/

include "config.php";
include "utils.php";
$dbConn =  connect($db);

echo "<div style='margin-left:50px;margin-top:50px;'>";
echo "<h3 style='color:blue;'>Writing from my_http_request.php</h3>";

echo "<p style='color:red;font-size:15px;'><b>\$_SERVER['REQUEST_METHOD]=></b> " . $_SERVER['REQUEST_METHOD'] . "</p><br>";
 
if ($_SERVER['REQUEST_METHOD'] == 'GET') {   /*  listar todos los posts o solo uno  */

    if ( isset($_GET['id']) && $_GET['id'] != '' ) {
      //Mostrar un post
      $sql = $dbConn->prepare("SELECT * FROM posts where id=:id");
      $sql->bindValue(':id', $_GET['id']);
      $sql->execute();
      header("HTTP/1.1 200 OK");

      // First View: JSON format
      $result = json_encode( $sql->fetch(PDO::FETCH_ASSOC)  );
      echo "<p><b>1.- View in JSON format</b></p>";
      echo "<div style='margin-left:50px;'>";
        echo "REQUEST_METHOD ==> " . $_SERVER['REQUEST_METHOD'] . "<br><br>";
        echo $result;
      echo "</div>";

      // Second View: pass to array format and deploy with ViewObject function          
      $result = json_decode($result);
      // echo "<p><b>-------------------------------------</b></p>";   
      echo "<p><b>2.- View in Object type Array</b></p><br>";
      echo "<div style='margin-left:50px;'>";
        ViewObject($result,'$result',0);
      echo "</div>";
      
      exit();

	  } else {

      //Mostrar lista de post
      $sql = $dbConn->prepare("SELECT * FROM posts");
      $sql->execute();
      $sql->setFetchMode(PDO::FETCH_ASSOC);
      header("HTTP/1.1 200 OK");     

      // First View: JSON format
      $result = json_encode( $sql->fetchAll()  );
      echo "<p><b>1.- View in JSON format</b></p>";
      echo "<div style='margin-left:50px;'>";
        echo "REQUEST_METHOD ==> " . $_SERVER['REQUEST_METHOD'] . "<br><br>";
        echo $result;
      echo "</div>";

      // Second View: pass to array format and deploy with ViewObject function          
      $result = json_decode($result);
      // echo "<p><b>-------------------------------------</b></p>";   
      echo "<p><b>2.- View in Object type Array</b></p><br>";
      echo "<div style='margin-left:50px;'>";
        ViewObject($result,'',0);
      echo "</div>";

      exit();
	}
}

// Crear un nuevo post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // ViewObject('\$_POST',$_POST,0);
    $input = $_POST;
    $sql = "INSERT INTO posts (title, estatus, content, user_id) VALUES (:title, :estatus, :content, :user_id)";

    $statement = $dbConn->prepare($sql);
    bindAllValues($statement, $input);
    $statement->execute();
    $postId = $dbConn->lastInsertId();

    if( $postId ) {

      $input['id'] = $postId;
      header("HTTP/1.1 200 OK");

      // First View: JSON format      
      echo "<p><b>1.- View in JSON format</b></p>"; 
      echo "<div style='margin-left:50px;'>";     
        echo "REQUEST_METHOD ==> " . $_SERVER['REQUEST_METHOD'] . "<br><br>";
        echo json_encode($input);
        echo $input;
      echo "</div>";

      // Second View: pass to array format and deploy with ViewObject function          
      // echo "<p><b>-------------------------------------</b></p>";   
      echo "<p><b>2.- View in Object type Array</b></p>";
      echo "<div style='margin-left:50px;'>";
        $result = json_encode($input);
        $result = json_decode($result);
        ViewObject($result,'',0);    
      echo "</div><br>";  

      //echo json_encode($input);

      exit();

	 } else {
      // upssssss.....
   }

}

// UPDATE RECORD
if ($_SERVER['REQUEST_METHOD'] == 'PUT') {

  // https://stackoverflow.com/questions/17403723/parsing-result-from-file-get-contentsphp-input
  // https://es.stackoverflow.com/questions/382369/php-obtener-los-par%C3%A1metros-de-las-peticiones-put-delete-etc
    
    parse_str(file_get_contents("php://input"),$put_vars);
    
    $fields = getParams($put_vars);
    
    $postId = $_GET['id'];
    $sql = "UPDATE posts SET $fields WHERE id='$postId'";
    
    $statement = $dbConn->prepare($sql);
    bindAllValues($statement, $put_vars);
    $statement->execute();

    if ( $statement ) {

        header("HTTP/1.1 200 OK");
        // First View: JSON format      
        echo "<p><b>1.- View in JSON format</b></p>"; 
        echo "<div style='margin-left:50px;'>";     
          echo "REQUEST_METHOD ==> " . $_SERVER['REQUEST_METHOD'] . "<br><br>";
          echo json_encode($postId);
          //echo $input;
        echo "</div>";
  
    }

    exit();
}

// DELETE RECORD
if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
	$id = $_GET['id'];
  $statement = $dbConn->prepare("DELETE FROM posts where id=:id");
  $statement->bindValue(':id', $id);
  $statement->execute();
	header("HTTP/1.1 200 OK");

  // First View: JSON format      
  echo "<p><b>1.- View in JSON format</b></p>";      
  echo "REQUEST_METHOD ==> " . $_SERVER['REQUEST_METHOD'] . "<br><br>";
  echo json_encode($statement);  

  // Second View: pass to array format and deploy with ViewObject function          
  echo "<p><b>-------------------------------------</b></p>";   
  // echo "<p><b>2.- View in Object type Array</b></p><br>";
  $result = json_encode($statement);
  $result = json_decode($result);
  ViewObject($result,'',0);      

	exit();
}

echo "</div>";
//En caso de que ninguna de las opciones anteriores se haya ejecutado
header("HTTP/1.1 400 Bad Request");

?>

<?php 

/* functions for view object and display with style */
function ViewObject($obj, $titulo, $nIndent=0) {
  echo "<div style='width:90%;  font-size:11px; color: blue; border:1px solid #cccccc;'>";		
      if ( isset($obj) && ( gettype( $obj ) == 'object' || gettype( $obj ) == 'array' )  ) {
          if ( empty($titulo) ) {
              echo "" . str_repeat("\t",$nIndent) . "<ol>\n";
          } else {
              echo "" . str_repeat("\t",$nIndent) . "<b>$titulo</b><br><br>\n";
              echo "" . str_repeat("\t",$nIndent) . "<ol>\n";
          }
          foreach ($obj as $key => $value) {
              if ( gettype( $value ) == 'object' || gettype( $value ) == 'array' ) {
                  echo "" . str_repeat("\t",$nIndent + 1) . "<li>[" . $key . "] => " . gettype($value) . "\n";
                  viewObject($value, "", $nIndent +1);
              } else {
                  echo "" . str_repeat("\t",$nIndent + 1) . "<li>[" . $key . "] => " . $value . "\n";
              } 
          }
          echo "</ol>\n";
      } elseif ( gettype( $obj ) == 'string' || gettype( $obj ) == 'integer' || gettype( $obj ) == 'double' || gettype( $obj ) == 'boolean' || gettype( $obj ) == null )  {
          echo "" . str_repeat("\t",$nIndent + 1) . "value => " . $obj . "\n";
      } else {
          echo "upsssssss ....<b>object: '$obj', type:" . gettype($obj) . "</b> not included in type list<br>\n";
      }
  echo "</div>";	
}


?>

