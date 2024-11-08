<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
	<form action="Upload.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
                <label for="deskripsi">Upload Berkas Raport</label>
                <input type="file" id="deskripsi" name="URaport"></input>
            </div>
            <div class="form-group">
                <label for="deskripsi">Upload Berkas Raport</label>
                <input type="file" id="deskripsi" name="UK"></input>
            </div>
            <div class="form-group">
                <label for="deskripsi">Upload Berkas Raport</label>
                <input type="file" id="deskripsi" name="UO"></input>
            </div>
            <div class="form-group">
                <label for="deskripsi">Upload Berkas Raport</label>
                <input type="file" id="deskripsi" name="UKS"></input>
            </div>
            <div class="form-group">
                <label for="deskripsi">Upload Berkas Raport</label>
                <input type="file" id="deskripsi" name="UL"></input>
            </div>
            <div class="form-group">
                <label for="deskripsi">Upload Berkas Raport</label>
                <input type="file" id="deskripsi" name="UKA"></input>
            </div>
                <button type="submit" name="submit" value="upload">Submit</button>
	</form>
</body>
</html>