<?php
error_reporting(0);
session_start();

$SellerKey = "a31f6de55b0728265e3fb001c81d882e"; // Your KeyGen Seller Key - DON'T SHARE IT WITH ANYONE!
$KeyMask = "*****-*****-*****-*****-*****";

$LinkVer1 = "https://link-target.net/978551/bassglide-keygen-1"; // Link 1 TO Linkverise that returns here
$LinkVer2 = "https://link-hub.net/978551/bassglide-keygen-2"; // Link 2 TO Linkverise that returns here
$LinkVer3 = "https://link-target.net/978551/bassglide-keygen-3"; // Link 3 TO Linkverise that returns here
$LinkVer4 = "https://link-center.net/978551/bassglide-keygen-4"; // Link 4 TO Linkverise that returns here
$LinkVer5 = "https://link-target.net/978551/bassglide-keygen-finish"; // Link 5 TO Linkverise that returns here



if (time() - $_SESSION['FSTimeOne'] < 15 || !isset($_SESSION['FSTimeOne'])) {
    if (!isset($_SESSION['FSTimeOne'])) {
        $_SESSION['FSTimeOne'] = time();
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" sizes="200x200" href="logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shed</title>
        <link rel="stylesheet" href="MainDesign.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <meta http-equiv="refresh" content="5; url=<?php echo $LinkVer1; ?>">
    </head>

    <body>
        <header>
            <nav>
                <div class="logo">
                    <img src="logo.png" alt="logo">
                </div>
                <div class="links">
                    <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-square-whatsapp"></i></a>
                </div>
            </nav>
        </header>
        <div class="keysyscontainer">
            <div class="main-content">
                <div class="loader-container">
                    <div class="loader"></div>
                    <div class="countdown-container">
                        <div id="countdown" class="countdown">
                            <?php
                            $seconds = 5;
                            echo $seconds;
                            ?>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="result">

                        <span class="title">KeyGen:</span>
                        <span class="completed">1</span>
                        /
                        <span class="total">5</span>
                    </div>

                    <div class="show">
                        <p class="time">You will have to go through 5 Linkvertises. Your key will last ~10 minutes.</p>

                        <div class="nb">
                            <i class="fa-solid fa-arrow-right"></i>
                            <p>No one likes ads, but going through this really helps me.</p>
                        </div>

                    </div>
                </div>
            </div>
            <script>
                // JavaScript to handle the countdown
                let countdown;
                countdown = document.getElementById('countdown');
                let seconds = <?php echo $seconds; ?>;

                // Update the countdown every second
                let countdownInterval;
                countdownInterval = setInterval(() => {
                    seconds--;
                    if (seconds >= 1) {
                        countdown.textContent = seconds;
                    } else {
                        clearInterval(countdownInterval);
                        countdown.style.display = 'none'; // Hide countdown after it reaches 0
                    }
                }, 1000);
            </script>
    </body>

    </html>


<?php
    die();
}

if (time() - $_SESSION['FSTimeTwo'] < 15 || !isset($_SESSION['FSTimeTwo'])) {
    if (!isset($_SESSION['FSTimeTwo'])) {
        $_SESSION['FSTimeTwo'] = time();
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" sizes="200x200" href="logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shed</title>
        <link rel="stylesheet" href="MainDesign.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <meta http-equiv="refresh" content="5; url=<?php echo $LinkVer2; ?>">
    </head>

    <body>
        <header>
            <nav>
                <div class="logo">
                    <img src="logo.png" alt="logo">
                </div>
                <div class="links">
                    <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-square-whatsapp"></i></a>
                </div>
            </nav>
        </header>
        <div class="keysyscontainer">
            <div class="main-content">
                <div class="loader-container">
                    <div class="loader"></div>
                    <div class="countdown-container">
                        <div id="countdown" class="countdown">
                            <?php
                            $seconds = 5;
                            echo $seconds;
                            ?>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="result">

                        <span class="title">KeyGen:</span>
                        <span class="completed">2</span>
                        /
                        <span class="total">5</span>
                    </div>

                    <div class="show">
                        <p class="time">You will have to go through 5 Linkvertises. Your key will last ~10 minutes.</p>

                        <div class="nb">
                            <i class="fa-solid fa-arrow-right"></i>
                            <p>No one likes ads, but going through this really helps me.</p>
                        </div>

                    </div>
                </div>
            </div>
            <script>
                // JavaScript to handle the countdown
                countdown = document.getElementById('countdown');
                let seconds = <?php echo $seconds; ?>;

                // Update the countdown every second
                countdownInterval = setInterval(() => {
                    seconds--;
                    if (seconds >= 1) {
                        countdown.textContent = seconds;
                    } else {
                        clearInterval(countdownInterval);
                        countdown.style.display = 'none'; // Hide countdown after it reaches 0
                    }
                }, 1000);
            </script>
    </body>

    </html>
<?php
    die();
};


if (time() - $_SESSION['FSTimeThree'] < 15 || !isset($_SESSION['FSTimeThree'])) {
    if (!isset($_SESSION['FSTimeThree'])) {
        $_SESSION['FSTimeThree'] = time();
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" sizes="200x200" href="logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shed</title>
        <link rel="stylesheet" href="MainDesign.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <meta http-equiv="refresh" content="5; url=<?php echo $LinkVer3; ?>">
    </head>

    <body>
        <header>
            <nav>
                <div class="logo">
                    <img src="logo.png" alt="logo">
                </div>
                <div class="links">
                    <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-square-whatsapp"></i></a>
                </div>
            </nav>
        </header>
        <div class="keysyscontainer">
            <div class="main-content">
                <div class="loader-container">
                    <div class="loader"></div>
                    <div class="countdown-container">
                        <div id="countdown" class="countdown">
                            <?php
                            $seconds = 5;
                            echo $seconds;
                            ?>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="result">

                        <span class="title">KeyGen:</span>
                        <span class="completed">3</span>
                        /
                        <span class="total">5</span>
                    </div>

                    <div class="show">
                        <p class="time">You will have to go through 5 Linkvertises. Your key will last ~10 minutes.</p>

                        <div class="nb">
                            <i class="fa-solid fa-arrow-right"></i>
                            <p>No one likes ads, but going through this really helps me.</p>
                        </div>

                    </div>
                </div>
            </div>
            <script>
                // JavaScript to handle the countdown
                countdown = document.getElementById('countdown');
                let seconds = <?php echo $seconds; ?>;

                // Update the countdown every second
                countdownInterval = setInterval(() => {
                    seconds--;
                    if (seconds >= 1) {
                        countdown.textContent = seconds;
                    } else {
                        clearInterval(countdownInterval);
                        countdown.style.display = 'none'; // Hide countdown after it reaches 0
                    }
                }, 1000);
            </script>
    </body>

    </html>

<?php
    die();
}

if (time() - $_SESSION['FSTimeFour'] < 15 || !isset($_SESSION['FSTimeFour'])) {
    if (!isset($_SESSION['FSTimeFour'])) {
        $_SESSION['FSTimeFour'] = time();
    }
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" sizes="200x200" href="logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shed</title>
        <link rel="stylesheet" href="MainDesign.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <meta http-equiv="refresh" content="5; url=<?php echo $LinkVer4; ?>">
    </head>

    <body>
        <header>
            <nav>
                <div class="logo">
                    <img src="logo.png" alt="logo">
                </div>
                <div class="links">
                    <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-square-whatsapp"></i></a>
                </div>
            </nav>
        </header>
        <div class="keysyscontainer">
            <div class="main-content">
                <div class="loader-container">
                    <div class="loader"></div>
                    <div class="countdown-container">
                        <div id="countdown" class="countdown">
                            <?php
                            $seconds = 5;
                            echo $seconds;
                            ?>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="result">

                        <span class="title">KeyGen:</span>
                        <span class="completed">4</span>
                        /
                        <span class="total">5</span>
                    </div>

                    <div class="show">
                        <p class="time">You will have to go through 5 Linkvertises. Your key will last ~10 minutes.</p>

                        <div class="nb">
                            <i class="fa-solid fa-arrow-right"></i>
                            <p>No one likes ads, but going through this really helps me.</p>
                        </div>

                    </div>
                </div>
            </div>
            <script>
                // JavaScript to handle the countdown
                countdown = document.getElementById('countdown');
                let seconds = <?php echo $seconds; ?>;

                // Update the countdown every second
                countdownInterval = setInterval(() => {
                    seconds--;
                    if (seconds >= 1) {
                        countdown.textContent = seconds;
                    } else {
                        clearInterval(countdownInterval);
                        countdown.style.display = 'none'; // Hide countdown after it reaches 0
                    }
                }, 1000);
            </script>
    </body>

    </html>

<?php
    die();
}

if (time() - $_SESSION['FSTimeFive'] < 15 || !isset($_SESSION['FSTimeFive'])) {
    if (!isset($_SESSION['FSTimeFive'])) {
        $_SESSION['FSTimeFive'] = time();
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" sizes="200x200" href="logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shed</title>
        <link rel="stylesheet" href="MainDesign.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <meta http-equiv="refresh" content="5; url=<?php echo $LinkVer5; ?>">
    </head>

    <body>
        <header>
            <nav>
                <div class="logo">
                    <img src="logo.png" alt="logo">
                </div>
                <div class="links">
                    <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-square-whatsapp"></i></a>
                </div>
            </nav>
        </header>
        <div class="keysyscontainer">
            <div class="main-content">
                <div class="loader-container">
                    <div class="loader"></div>
                    <div class="countdown-container">
                        <div id="countdown" class="countdown">
                            <?php
                            $seconds = 5;
                            echo $seconds;
                            ?>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="result">

                        <span class="title">KeyGen:</span>
                        <span class="completed">5</span>
                        /
                        <span class="total">5</span>
                    </div>

                    <div class="show">
                        <p class="time">You will have to go through 5 Linkvertises. Your key will last ~10 minutes.</p>

                        <div class="nb">
                            <i class="fa-solid fa-arrow-right"></i>
                            <p>No one likes ads, but going through this really helps me.</p>
                        </div>

                    </div>
                </div>
            </div>
            <script>
                // JavaScript to handle the countdown
                countdown = document.getElementById('countdown');
                let seconds = <?php echo $seconds; ?>;

                // Update the countdown every second
                countdownInterval = setInterval(() => {
                    seconds--;
                    if (seconds >= 1) {
                        countdown.textContent = seconds;
                    } else {
                        clearInterval(countdownInterval);
                        countdown.style.display = 'none'; // Hide countdown after it reaches 0
                    }
                }, 1000);
            </script>
    </body>

    </html>
<?php
    die();
}

$GenResult = GenLicense($SellerKey, $KeyMask);
$Json = json_decode($GenResult);

if ($Json->success) {
} else {
    die("Error: " . $Json->message);
}

session_unset();
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" sizes="200x200" href="logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shed</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="MainDesign.css">
</head>

<body>
    <div class="keysyscontainer">
        <div class="key-box">

            <center><span class="title">ClassyGen - Enjoy your key!</span></center>

            <span class="text"> Thanks for supporting me!
                Here is your Key / License: <span class="bold smool"><?php echo $Json->key ?></span></span>
            <button onclick="return copyToClipboard()" class="button Copy">Copy Key</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <script>
        function copyToClipboard() {

            var e = "<?php echo $Json->key ?>";
            var tempItem = document.createElement('input');
            tempItem.setAttribute('type', 'text');
            tempItem.setAttribute('display', 'none');
            let content = e;
            if (e instanceof HTMLElement) {
                content = e.innerHTML;
            }
            tempItem.setAttribute('value', content);
            document.body.appendChild(tempItem);
            tempItem.select();
            document.execCommand('Copy');
            tempItem.parentElement.removeChild(tempItem);
            const notyf = new Notyf();
            notyf.success({
                message: "Successfully copied key to checkboard!",
                duration: 3500,
                dismissible: true
            });
        }
    </script>

    <?php
    function GenLicense($sellerKey, $keyMask)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://keyauth.win/api/seller/?sellerkey=" . $sellerKey . "&type=add&expiry=0.00694444444&mask=" . $keyMask . "&level=1&amount=1&format=json");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
    ?>

</body>

</html>