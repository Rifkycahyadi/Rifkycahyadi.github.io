<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nusantara kuliner</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2>Masakan Nusantara</h2>
    </header>
    
    <div class="form-class">
        <h3>Tambah Masakan</h3>
        <form action="tambah.php" method="post">
            
            <label for="">Nama Masakan</label><br>
            <input type="text" name="masakan" class="form-text"><br>
            
            <label for="">Asal Daerah</label><br>
            <input type="text" name="daerah" class="form-text"><br>
            
            <label for="">Resep</label><br>
            <input type="text" name="resep" class="form-text"><br>
            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>
</body>
</html>