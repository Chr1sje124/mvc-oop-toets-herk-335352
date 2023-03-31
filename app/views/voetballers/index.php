<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../public/css/style.css">
</head>

<body>
    <h3><?= $data['title']; ?></h3>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Club</th>
                <th>Leeftijd</th>
                <th>Nationaliteit</th>
                <th>Salaris</th>
            </tr>
        </thead>
        <tbody>
        <?= $data['rows']; ?>
        </tbody>
    </table>
    <a href="<?= URLROOT; ?>/home/index">home</a>
</body>

</html>