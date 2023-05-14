<!DOCTYPE html>
<html>
    <head>
        <title>Deret Fibonacci</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f0f0f0;
                margin: 0;
                padding: 0;
            }

            .container {
                width: 90%;
                max-width: 800px;
                margin: 0 auto;
                padding: 20px;
                background-color: #fff;
                box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            }

            h1 {
                text-align: center;
                font-size: 36px;
                margin-top: 0;
                color: #333;
            }

            form {
                display: flex;
                align-items: center;
                justify-content: center;
                margin-top: 20px;
            }

            input[type="number"] {
                font-size: 24px;
                padding: 10px;
                margin-right: 10px;
                border-radius: 5px;
                border: none;
                box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            }

            button {
                font-size: 24px;
                padding: 10px 20px;
                background-color: #4CAF50;
                color: #fff;
                border-radius: 5px;
                border: none;
                box-shadow: 0 2px 4px rgba(0,0,0,0.1);
                cursor: pointer;
            }

            .fibonacci {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                margin-top: 20px;
            }

            .fibonacci .number {
                background-color: #4CAF50;
                color: #fff;
                font-size: 36px;
                font-weight: bold;
                width: 80px;
                height: 80px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 10px;
                animation-name: rotate;
                animation-duration: 1s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }

            .fibonacci .number:nth-child(2n) {
                background-color: #3e8e41;
                animation-direction: reverse;
            }

            @keyframes rotate {
                from {
                    transform: rotate(0deg);
                }
                to {
                    transform: rotate(360deg);
                }
            }
	    </style>
    </head>
    <body>
        <div class="container">
            <h1>Deret Fibonacci</h1>

            <form method="post">
                <label for="n">Masukkan jumlah bilangan:</label>
                <input type="number" name="n" id="n" min="1" max="20" value="<?php echo isset($_POST['n']) ? $_POST['n'] : 10; ?>">
                <button type="submit">Tampilkan</button>
            </form>

            <?php
                if (isset($_POST['n'])) {
                    $n = $_POST['n'];

                    $prev = 0;
                    $current = 1;

                    echo '<div class="fibonacci">';

                    for ($i = 1; $i <= $n; $i++) {
                        $temp = $current;
                        $current += $prev;
                        $prev = $temp;

                        echo '<div class="number">' . $prev . '</div>';
                    }

                    echo '</div>';
                }
            ?>
        </div>
    </body>
</html>