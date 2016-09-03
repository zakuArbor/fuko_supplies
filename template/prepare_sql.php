<?php
/*
SQL PREPARED STATEMENT
*/
include ($_SERVER['DOCUMENT_ROOT'].'/template/open.php'); //connects to pal database

function array_prepare_select ($sql, $pdo, $variables, $errorMessage='ERROR: Failed to retrieve data from database', $successMessage = '') {
  if (isset ($sql)) {
  	try {
            $prep = $pdo -> prepare($sql);            
         		$prep->execute($variables);
            $results = $prep->fetchAll();
            if ($successMessage != null) {
              echo "<p>$successMessage</p>";
            }
            return $results;
  	}
  	catch (PDOException $e) {
          	echo "<p>$errorMessage</p>";
          	echo "$e";
          	exit(); //terminates all future code
  	}
  }
}

function single_return_prepare_select ($sql, $pdo, $variables, $errorMessage='ERROR: Failed to retrieve data from database', $successMessage = '') {
  if (isset ($sql)) {
      try {
              $prep = $pdo -> prepare($sql);
              $prep->execute($variables);
              $results = $prep->fetch(PDO::FETCH_ASSOC);
              if ($successMessage != null) {
                echo "<p>$successMessage</p>";
              }
              return $results;
              #$count_affected = $results -> rowCount(); //counts affected rows
      }
      catch (PDOException $e) {
              echo "<p>$errorMessage</p>";
              echo "$e";
              exit(); //terminates all future code
      }
    }

}

function prepare_non_query ($sql, $pdo, $variables, $errorMessage='ERROR: Failed to retrieve data from database', $successMessage = '') {
  if (isset ($sql)) {
      try {
              $prep = $pdo -> prepare($sql);
              $prep->execute($variables);
              if ($successMessage != null) {
                echo "<p>$successMessage</p>";
              }
      }
      catch (PDOException $e) {
              echo "<p>$errorMessage</p>";
              echo "$e";
              exit(); //terminates all future code
      }
    }

}

?>