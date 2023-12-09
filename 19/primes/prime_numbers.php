<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>素数を探して落ち着こう！</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        .table-divider-body {
            border-top: 2px solid #000;
        }

        .table-divider-head {
            border: 2px solid #000; 
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Hero section -->
        <div class="hero">
            <div class="hero__title">
                <h1>そうだ。。。素数を数えよう</h1>
            </div>
            <?php
                include 'prime_numbers_display.php';
                include 'config-prime_numbers.php';

                echo showWhatAlgorithmIs();
            ?>

            <div class="hero__items">
                <p>2・・・3</p>
                <p>5・・・7・・・</p>

                <p>11・・・13・・・17</p>

                <p>・・・・・19</p>

                <p>落ちつくんだ・・・</p>

                <p>『素数』を数えて
                落ちつくんだ・・・</p>

                <p>『素数』は
                1と自分の数でしか
                割ることのできない
                孤独な数字・・・・・</p>

                <p>わたしに
                勇気を与えてくれる</p>

                <p>※プッチ神父 (ジョジョの奇妙な冒険第6部 スターオーシャン より) </p>
            </div>

        </div>

        <!-- table section -->
        <div class="table__container table-responsive">
            <table class="table table-bordered col-3 ml-3">
                <thead class="thead-dark">
                    <tr class="table-secondary table-divider-head">
                        <th scope="col">番号</th>
                        <?php
                            showIndex(PRIMES_ARR_LENGTH);
                        ?>
                    </tr>
                </thead>
                <tbody class="table-divider-body">
                <tr class="table-primary">
                        <td scope="col">素数</td>
                        <?php 
                            showPrimes(PRIMES_ARR, PRIMES_ARR_LENGTH);
                        ?>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>