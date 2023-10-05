<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    helper('form');
    $attributs = ['classe' => 'maclasse', 'id' => 'monid'];
    echo form_open('my-route', $attributs);
    $data = [
        'name'      => 'username',
        'id'        => 'username',
        'value'     => 'johndoe',
        'maxlength' => '100',
        'size'      => '50',
        'style'     => 'width:50%',
    ];
    echo form_input($data);
    ?>
</body>

</html>