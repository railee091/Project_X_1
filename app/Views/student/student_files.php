<?= $this->extend('templates/template_student') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
            <form class="card card-sm">
                <div class="card-body row no-gutters align-items-center">
                    <div class="col-auto">
                       
                    </div>
                    <!--end of col-->
                    <div class="col">
                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search library">
                    </div>
                    <!--end of col-->
                    <div class="col-auto">
                        <button class="btn btn-lg btn-success" type="submit"><i class="fas fa-search h4 text-body"></i></button>
                    </div>
                    <!--end of col-->
                </div>
            </form>
        </div>
	</div>
	<div class="row">
		<div class="col-sm-3">
			
		</div>
		<div class="col-sm-6">
			<table style="width:100%">
			  	<tr>
			    	<th>Filetype</th>
			    	<th>Filename</th>
			    	<th>Options</th>
			  	</tr>
			  	<?php
				$files=scandir('app/views/files');
				foreach($files as $file)
				{
				    if($file=='.'||$file=='..') continue;
				?>
			  	<tr>
			    	<td>
			    		<div class="col-sm-2">
							<a target="_blank" href="app/views/files/<?php echo $file;?>">
								<div class="bordercard">
								  	<div class="card-body">
								  		<i  alt="Card image cap" class="card-img-top fas fa-file-pdf fa-2x"></i>
								  	</div>
								</div>
							</a>
						</div>
			    	</td>
			    	<td>
			    		<p style="font-size: 10pt;" class="card-title"><?php echo $file; ?></p>
			    	</td>
			    	<td>
				    	<a target="_blank" href="app/views/files/<?php echo $file;?>">	
				    		<button class="btn btn-primary  form-control">
				    			<p style="font-size: 10pt;" class="card-title">OPEN</p>
				    		</button>
				    	</a>
			    	</td>
			  	</tr>
			    <?php
				}
				?>
			</table>
		</div>
		<div class="col-sm-3">
			
		</div>
	</div>
</div>
<?= $this->endSection() ?>			               