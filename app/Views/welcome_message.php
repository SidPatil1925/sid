<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/7ff457b077.js" crossorigin="anonymous"></script>
	
</head>
<body>
<div class="container col-sm-12">
	<div class="card card-info shadow-lg">
		<div class="card-header" style="background-color:#059752;">
			<h3 class="card-title text-white">GramworkX File Upload</h3>
		</div> 
		<div class="card-body">
               <form action="<?php echo site_url('home/store');?>" enctype="multipart/form-data" method="post">
               <div class="col-md-12">
			   <?php
  $session = session();
  if($session->getFlashdata('success')) {
  ?>
  <div class="alert alert-info alert-dismissible">
	<i class="fas fa-circle-check" style="color: green;"></i>
  <?php echo $session->getFlashdata('success'); ?>
  </div>
  <?php
  }
  ?>
			
				
                    <div class="form-group">
						<label class="form-label text-secondary h5" for="deviceModel">Device Model</label>
						<select class="form-control form-control-lg" name="deviceModel" id="deviceModel" required>
						<label class="form-label" for="name">Device Model </label>
                        <option  value="">--Select Model--</option>
						<option  value="gwx100">gwx100</option>
						<option  value="gwx200">gwx200</option>
						</select>
                       
                    </div>
</br>
                </div>
				<div class="row">
                <div class="col-md-6">
					<div class="form-group">
						<label class="form-label text-secondary h5" for="name">Firmware Version </label>
						<input class="form-control form-control-lg" id="name" name="firmversion" type="text" value="" required />
					</div>
				</div>
                <div class="col-md-6">
					<div class="form-group">
					    <label class="form-label text-secondary h5" for="name">Select Firmware</label>
					    <input class="form-control form-control-lg" id="name" name="firmname" type="file" />
				    </div>
</br>
				</div>
				

               <div class="row d-flex justify-content-center mb-2">
			   		<label class="form-label text-secondary h6" style="padding-left:200px"  for="button1"><span class="">*</span>All fields are manditory</label>
				    <button type="submit" id="button1" class="btn btn-outline-success btn-lg col-md-8">UPDATE NEW FIRMWARE</button>
			   </div>
                </div>
               </form>
		</div>
		
</div>
</div>
<br><br>
<div class="col-md-12" style="margin-bottom: 50px;">
<div class="card card-info m-3 shadow-lg">
		<div class="card-header" style="background-color:#059752;">
			<h3 class="card-title text-white"><i></i>Firmware Table</h3>
		</div> 
		<div class="card-body">
              <table class="table table-hover table-bordered">
                <thead>
                    <tr>
						<th class="text-secondary h5">GWX</th>
						<th class="text-secondary h5">Firmware</th>
						<th class="text-secondary h5">File Path</th>
						<th class="text-secondary h5">created_at</th>
					</tr>
                </thead>
				<tbody>
					<?php foreach($documents as $document){ ?>
						<tr>
						<td><?php echo $document['device_model']; ?></td>
						<td><?php echo $document['firmware_version']; ?></td>
						<td><?php echo $document['firmware_path']; ?></td>
						<td><?php echo $document['created_at']; ?></td>
					</tr>
					<?php } ?>
				</tbody>
              </table>
		</div>
		
	</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>