<?php 
$active = 1;
include_once $_SERVER['DOCUMENT_ROOT'] . "/template/prepare_sql.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'head.php' ?>
<body>

<?php include 'nav.php' ?>
  
<div class="container">
	<h3><u>Pokemon Yellow/Red/Blue/Green</u></h3>
  	<div class="panel-group" id="accordion">
    		<div class="panel panel-primary">
      			<div class="panel-heading" data-toggle="collapse" data-parent="#accordion" data-target="#collapseRBY"><a class="accordion-toggle"><h4 class="panel-title">Pokemon R/B/Y</a></h4></div>
      			
			<div id="collapseRBY" class="panel-collapse collapse in">
      				<div class="panel-body">
	 			<?php
  
				$sql = "SELECT * FROM cheats WHERE game_id = :game_id";
				$items = array_prepare_select ($sql, $pdo, ['game_id' => 4]);				
				
				foreach ($items as $item) {
					echo "<div id='br'>";
					echo "<p data-toggle='collapse' data-target='#collapse$item[cheat_id]'><b><a class = 'toggle'>$item[title]</a></b></p>";
					echo "<div id = 'collapse$item[cheat_id]' class='collapse'>$item[content]</div>";
					echo "</div>";
					echo "<p>";
				}
				?>
   			   	</div>
			</div>
    		</div>
    		<div class="panel panel-primary">
      			<div class="panel-heading" data-toggle="collapse" data-parent="#accordion" data-target="#collapseY"><a class="accordion-toggle"><h4 class="panel-title">Pokemon Yellow</a></h4></div>
    			<div id="collapseY" class="panel-collapse collapse">  
    				<div class="panel-body">
					<div class="panel-body">
	 			<?php
  
				$sql = "SELECT * FROM cheats WHERE game_id = :game_id";
				$items = array_prepare_select ($sql, $pdo, ['game_id' => 3]);				
				
				foreach ($items as $item) {
					echo "<div id='br'>";
					echo "<p data-toggle='collapse' data-target='#collapse$item[cheat_id]'><b><a class = 'toggle'>$item[title]</a></b></p>";
					echo "<div id = 'collapse$item[cheat_id]' class='collapse'>$item[content]</div>";
					echo "</div>";
					echo "<p>";
				}
				?>
      				</div>
      			</div>
    		</div>
			
		<div class="panel panel-primary">
      			<div class="panel-heading" data-toggle="collapse" data-parent="#accordion" data-target="#collapseY"><a class="accordion-toggle"><h4 class="panel-title">Pokemon Blue</a></h4></div>
    			<div id="collapseY" class="panel-collapse collapse">  
    				<div class="panel-body">
					<div class="panel-body">
	 			<?php
  
				$sql = "SELECT * FROM cheats WHERE game_id = :game_id";
				$items = array_prepare_select ($sql, $pdo, ['game_id' => 2]);				
				
				foreach ($items as $item) {
					echo "<div id='br'>";
					echo "<p data-toggle='collapse' data-target='#collapse$item[cheat_id]'><b><a class = 'toggle'>$item[title]</a></b></p>";
					echo "<div id = 'collapse$item[cheat_id]' class='collapse'>$item[content]</div>";
					echo "</div>";
					echo "<p>";
				}
				?>
      				</div>
      			</div>
    		</div>	
			
		<div class="panel panel-primary">
      			<div class="panel-heading" data-toggle="collapse" data-parent="#accordion" data-target="#collapseY"><a class="accordion-toggle"><h4 class="panel-title">Pokemon Red</a></h4></div>
    			<div id="collapseY" class="panel-collapse collapse">  
    				<div class="panel-body">
					<div class="panel-body">
	 			<?php
  
				$sql = "SELECT * FROM cheats WHERE game_id = :game_id";
				$items = array_prepare_select ($sql, $pdo, ['game_id' => 1]);				
				
				foreach ($items as $item) {
					echo "<div id='br'>";
					echo "<p data-toggle='collapse' data-target='#collapse$item[cheat_id]'><b><a class = 'toggle'>$item[title]</a></b></p>";
					echo "<div id = 'collapse$item[cheat_id]' class='collapse'>$item[content]</div>";
					echo "</div>";
					echo "<p>";
				}
				?>
      				</div>
      			</div>
    		</div>
	</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
