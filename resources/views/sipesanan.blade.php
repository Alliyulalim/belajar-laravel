<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>Pesanan</center>
    
    {{$pesanan->nama_pelanggan}} - {{$pesanan->nama_barang}}<br>
    {{$pesanan->qty}} - {{$pesanan->tgl_lahir}}<br>
    <hr>
</body>
</html>