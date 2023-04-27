<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link href="<?= base_url('css/style.css')?>" rel="stylesheet">
</head>
<body>
    <table border='1'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Faculty</th>
        </tr>
        <!-- <tr>
            <td>Rabin</td>
            <td>Jhapa</td>
            <td>BCA</td>
        </tr>
        
        <tr>
            <td>Prabin</td>
            <td>KTM</td>
            <td>BBA</td>
        </tr>
        
        <tr>
            <td>Suman</td>
            <td>BRT</td>
            <td>BIM</td>
        </tr>
        
        <tr>
            <td>Ayush</td>
            <td>BTM</td>
            <td>BCA</td>
        </tr>
        
        <tr>
            <td>Pritam</td>
            <td>Jhapa</td>
            <td>BSC</td>
        </tr> -->

        <tbody>
            <?php foreach($students as $item){?>
                <tr>
                    <td><?php echo $item['Id']?></td>
                    <td><?php echo $item['Name']?></td>
                    <td><?php echo $item['Address']?></td>
                    <td><?php echo $item['Faculty']?></td>
                </tr>

            <?php } ?>
        </tbody>
</body>
</html>