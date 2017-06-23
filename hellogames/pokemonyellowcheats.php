<?php $active = 0; ?>
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
      			
			<div id="collapseRBY" class="panel-collapse collapse">
      				<div class="panel-body">
	 			<?php
				foreach ($items as $item) {
					echo "<div id='br'>";
					echo "<p><b>$item['title']</b></p>";
					echo $item['content'];
					echo "</div>";
					echo "<p>";
				}
				?>
   			   	</div>
			</div>
    		</div>
    		<div class="panel panel-primary">
      			<div class="panel-heading" data-toggle="collapse" data-parent="#accordion" data-target="#collapseY"><a class="accordion-toggle"><h4 class="panel-title">Pokemon Yellow</a></h4></div>
    			<div id="collapseY" class="panel-collapse collapse in">  
    				<div class="panel-body">
      				</div>
      			</div>
    		</div>
	</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
