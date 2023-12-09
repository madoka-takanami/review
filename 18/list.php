<!DOCTYPE html>
<html>
  <head>
    <title>PHP基礎</title>
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
    <div class="container table-responsive col-5 ml-3">
      <h1>PHP基礎</h1>
      <table class="table table-bordered">
        <thead class="thead-dark">
            <tr class="table-secondary table-divider-head">
              <th scope="col">課題名</th>
              <th scope="col" colspan="3" class="text-center">ファイル名</th>
            </tr>
        </thead>
        <tbody class="table-divider-body">
          <tr>
          </tr>
          <?php
            include 'config.php';

            foreach (FILE_LIST as $items) {
              echo '<tr class="table-primary">';

              $max_items_count = 0;
              foreach ($items as $value) {
                if (strpos($value, KEYWORD) !== false) {
                  echo '<td class="secondary"><a href="' . $value . '">' . $value . '</a></td>';
                } else {
                  echo '<td>' . $value . '</td>';
                }

                $max_items_count++;
              }

              for ($i = $max_items_count; $i < MAX_ITEMS; $i++) {
                echo '<td></td>';
              }

              echo '</tr>';
            }
          ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
