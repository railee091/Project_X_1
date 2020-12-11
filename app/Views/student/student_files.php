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
				    echo '<a target="_blank" href="app/views/files/'.$file.'"><i class="fas fa-file-pdf fa-10x"></i></a>';
				}
				?>
		</div>
	</div>
	
</div>
<?= $this->endSection() ?>			               