<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>干支早見表</title>
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
    <div class="container table-responsive col-5">
        <!-- 横並び -->
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr class="table-secondary table-divider-head">
                    <th scope="col">西暦</th>
                    <?php 
                        include 'config-eto.php';
                        include 'eto_horizontal.php';
                        include 'eto_vertical.php';
                        
                        showYear(TOTAL_YEAR, START_YEAR);
                    ?>
                </tr>
            </thead>
            <tbody class="table-divider-body">
               <tr class="table-primary">
                    <td scope="col">干支</td>
                    <?php 
                        showEto(TOTAL_YEAR, ETO_LIST_ARR, CNT_ETO_LIST);
                    ?>
               </tr>
            </tbody>
        </table>
    </div>
    <div class="container col-1">
        <!-- 縦並び -->
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr class="table-secondary table-divider-head">
                    <th scope="col">西暦</th>
                    <th scope="col">干支</th>
                </tr>
            </thead>
            <tbody class="table-divider-body">
                <?php showEtoListVertically();?>
            </tbody>
        </table>
    </div>
</body>
</html>