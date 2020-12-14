<?= $this->extend('templates/template_student') ?>

<?= $this->section('content') ?>
<div class="container">
	<div class="row">
		
    <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <input type="text" class="form-control search-slt" placeholder="Search Term">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                           <select class="form-control search-slt" id="exampleFormControlSelect1">
                                <option>--</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                <option>--</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0 form">
                            <button type="button" class="form-control btn btn-danger wrn-btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
		
	</div>
	<div class="row">
		<div class="col-sm-12" >
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
	</div>
</div>
<style type="text/css">
/*search box css start here*/
.search-sec{
    padding: 2rem;
}
.search-slt{
    display: block;
    width: 100%;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #55595c;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    height: calc(3rem + 2px) !important;
    border-radius:0;
}
.wrn-btn{
    width: 100%;
    font-size: 16px;
    font-weight: 400;
    text-transform: capitalize;
    height: calc(3rem + 2px) !important;
    border-radius:0;
}
@media (min-width: 992px){
    .search-sec{
        position: relative;
        top: -114px;
        background: rgba(26, 70, 104, 0.51);
    }
}

@media (max-width: 992px){
    .search-sec{
        background: #1A4668;
    }
}
</style>
<?= $this->endSection() ?>			               