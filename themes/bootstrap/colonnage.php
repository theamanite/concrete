<?php $this->inc('elements/header.php'); ?>

 <div class="container">
    
		<div class="row">
		    <div class="span4">
		        <div class="hero-unit">
				  <?php
					$a = new Area('Col1');
					$a->display($c); 
				  ?>
				</div>
		 
			</div>
			<div class="span4">
		        <div class="hero-unit">
				  <?php
					$a = new Area('Col2');
					$a->display($c); 
				  ?>
				</div>
			</div>
			<div class="span4">
		        <div class="hero-unit">
				  <?php
					$a = new Area('Col3');
					$a->display($c); 
				  ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<?php
				   $a = new Area('BAS');
				   $a->display($c);
				?>
			</div>
		</div>
  </div>

<?php $this->inc('elements/footer.php'); ?>