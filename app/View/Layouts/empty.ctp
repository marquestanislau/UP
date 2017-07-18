<?php
	  echo $this->Html->meta('icon');
	   # Load jsquery libs for ajax and other effects
	  echo $this->Html->script('jquery/jquery');

	  echo $this->Html->css('w3');
	  echo $this->Html->css('font-awesome/css/font-awesome.min');
	 
	  echo $this->Html->script('script');

	  echo $this->fetch('meta');
	  echo $this->fetch('css');
	  echo $this->fetch('script');
	?>
<?php echo $this->fetch('content'); ?>