<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>Pembeli</center>
   
    {{$pembeli->nama}} - {{$pembeli->jns_kelamin}}<br>
    {{$pembeli->alamat}} - {{$pembeli->kode_pos}}<br>
    {{$pembeli->kota}} - {{$pembeli->tgl_lahir}}
    <hr>
</body>
</html>