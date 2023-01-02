<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
    <script src="scripts/helpers.js"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="heading">
        <h1>Projects</h1>
    </div>
    <div class="container">
        <div class="nav">
            <a href="#"><i class="fal fa-home"></i></a>
        </div>    
        <div class="list">
            <?php
                $scan = scandir('./');
                $ignore = array('scripts', 'index.html', 'style.css', '.', '..', 'index.php', 'favicon.ico');
                foreach($scan as $file) {
                    if (!in_array($file.'', $ignore)) {
                        echo
                        '<div class="num" onclick="redirectTo(this.dataset.url)" data-url="'.$file.'">
                            <h3>'.$file.'</h3>
                        </div>';
                    }
                }
            ?>
        </div>
    </div>
    <h5 class="message">Index of timslipko.tk</h5>
</body>
</html>