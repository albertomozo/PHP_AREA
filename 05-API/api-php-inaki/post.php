<?php
include "config.php";
include "utils.php";
$dbConn =  connect($db);
echo "<div style='margin-left:50px;margin-top:50px;'>";
/*
  listar todos los posts o solo uno
 */

echo "<h3 style='color:blue;'>Writing from post.php</h3>";
 
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (isset($_GET['id'])) {
      //Mostrar un post
      $sql = $dbConn->prepare("SELECT * FROM posts where id=:id");
      $sql->bindValue(':id', $_GET['id']);
      $sql->execute();
      header("HTTP/1.1 200 OK");

      // first View: json format
      $result = json_encode( $sql->fetch(PDO::FETCH_ASSOC)  );
      echo "<p><b>1.- View in JSON format</b></p>";
      echo "<div style='margin-left:50px;'>";
        echo "REQUEST_METHOD ==> " . $_SERVER['REQUEST_METHOD'] . "<br><br>";
        echo $result;
      echo "</div>";

      // second View: pass to array format and deploy with ViewObject function          
      $result = json_decode($result);
      // echo "<p><b>-------------------------------------</b></p>";   
      echo "<p><b>2.- View in Object type Array</b></p><br>";
      echo "<div style='margin-left:50px;'>";
        ViewObject($result,'$result',0);
      echo "</div>";

      // visualize $_SERVER array
      // ViewObject($_SERVER,'$_SERVER',0);   
      
      exit();

	  } else {

      //Mostrar lista de post
      $sql = $dbConn->prepare("SELECT * FROM posts");
      $sql->execute();
      $sql->setFetchMode(PDO::FETCH_ASSOC);
      header("HTTP/1.1 200 OK");     

      // first View: json format
      $result = json_encode( $sql->fetchAll()  );
      echo "<p><b>1.- View in JSON format</b></p>";
      echo "<div style='margin-left:50px;'>";
        echo "REQUEST_METHOD ==> " . $_SERVER['REQUEST_METHOD'] . "<br><br>";
        echo $result;
      echo "</div>";

      // second View: pass to array format and deploy with ViewObject function          
      $result = json_decode($result);
      // echo "<p><b>-------------------------------------</b></p>";   
      echo "<p><b>2.- View in Object type Array</b></p><br>";
      echo "<div style='margin-left:50px;'>";
        ViewObject($result,'',0);
      echo "</div>";
      // visualize $_SERVER array
      // ViewObject($_SERVER,'$_SERVER',0);

      exit();
	}
}


// Crear un nuevo post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // ViewObject('\$_POST',$_POST,0);
    $input = $_POST;
/*  
    $title = $_POST[title];
    $estatus = $_POST['estatus'];
    $content = $_POST['content'];
    $user_id = $_POST['user_id']; 
*/  
    $sql = "INSERT INTO posts
          (title, estatus, content, user_id)
          VALUES
          (:title, :estatus, :content, :user_id)";

    $statement = $dbConn->prepare($sql);
    bindAllValues($statement, $input);
    $statement->execute();
    $postId = $dbConn->lastInsertId();

    if( $postId ) {

      $input['id'] = $postId;
      header("HTTP/1.1 200 OK");

      // first View: json format      
      echo "<p><b>1.- View in JSON format</b></p>"; 
      echo "<div style='margin-left:50px;'>";     
        echo "REQUEST_METHOD ==> " . $_SERVER['REQUEST_METHOD'] . "<br><br>";
        echo json_encode($input);
        echo $input;
      echo "</div>";

      // second View: pass to array format and deploy with ViewObject function          
      // echo "<p><b>-------------------------------------</b></p>";   
      echo "<p><b>2.- View in Object type Array</b></p>";
      echo "<div style='margin-left:50px;'>";
        $result = json_encode($input);
        $result = json_decode($result);
        ViewObject($result,'',0);    
      echo "</div><br>";  

      // echo json_encode($input);
      exit();

	 } else {
      // upssssss.....
   }

}

//Borrar
if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
	$id = $_GET['id'];
  $statement = $dbConn->prepare("DELETE FROM posts where id=:id");
  $statement->bindValue(':id', $id);
  $statement->execute();
	header("HTTP/1.1 200 OK");

  // first View: json format      
  echo "<p><b>1.- View in JSON format</b></p>";      
  echo "REQUEST_METHOD ==> " . $_SERVER['REQUEST_METHOD'] . "<br><br>";
  echo json_encode($statement);
  echo $statement;

  // second View: pass to array format and deploy with ViewObject function          
  echo "<p><b>-------------------------------------</b></p>";   
  // echo "<p><b>2.- View in Object type Array</b></p><br>";
  $result = json_encode($statement);
  $result = json_decode($result);
  ViewObject($result,'',0);      



	exit();
}

//Actualizar
if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
   parse_str(file_get_contents("php://input"),$put_vars);
   $postId = $_GET['id'];
   $fields = getParams($put_vars);
       $sql = "
          UPDATE posts
          SET $fields
          WHERE id='$postId'
           ";
          
    $statement = $dbConn->prepare($sql);
    bindAllValues($statement, $put_vars);
    $statement->execute();
    header("HTTP/1.1 200 OK");
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
  /* For analyze object type
      echo "\$obj -> " . gettype($obj) . "<br><br>";
      echo "<pre style='font-size:10px; width:98%; overflow:scroll;'>var_dump of \$obj-> ";
      var_dump($obj);
      echo "</pre><br>";
  */
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

