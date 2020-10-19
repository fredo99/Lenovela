<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <form method="POST" action="<?= base_url() . 'Kepala/kirim_email'; ?>">
        <label>NIP</label>
        <input type="text" name="nip">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Email</label>
        <input type="text" name="email">
        <label>Password</label>
        <input type="password" name="password">
    </form>
</body>

</html>