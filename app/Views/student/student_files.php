<?= $this->extend('templates/template_student') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<?php
			$files=scandir('app/views/files');
			foreach($files as $file)
			{
			    if($file=='.'||$file=='..') continue;
			    echo '<div><a target="_blank" href="app/views/files/'.$file.'">'. $file.'</a></div>';
			}
			?>
		</div>
	</div>
	
</div>
<?= $this->endSection() ?>			               