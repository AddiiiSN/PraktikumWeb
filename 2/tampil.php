<!DOCTYPE html>
<html>

<head>
    <title>Tampil Data Makanan</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 20px;
    }

    h2 {
        color: #333;
        text-align: center;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        background-color: #fff;
        border: 1px solid #ddd;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 4px;
        box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
    }

    li:hover {
        background-color: #eee;
    }
    </style>
</head>

<body>
    <h2>Data Makanan</h2>
    <ul>
        <?php
        $makanan[1] = 'Lumpia';
        $makanan[4] = 'Bakpia';
        $makanan[7] = 'Dodol Garut';
        $makanan[8] = 'Siomay';
        $makanan[9] = 'Soto Makassar';

        $list = 1;
        while ($list <= 9) {
            if (isset($makanan[$list])) {
                echo '<li>'.$makanan[$list].'</li>';
            }
            ++$list;
        }
        ?>
    </ul>
</body>

</html>