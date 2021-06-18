<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2> nguyen ba nam </h2>

                <h3>Thông tin lấy từ form</h3>
                <table class="table table-bordered tablefa-inverse table-responsive">
                    <thead class="thead-default">
                        <tr>
                            <th>name</th>
                            <th>email address</th>
                            <th>address</th>
                            <th>content</th>
                        </tr>
                    </thead>
                    <?php
                    echo '<pre>';
                    ?>
                        <tbody>
                            <tr>
                                <td scope="row"><?php echo $arr['name']?></td>
                                <td><?php echo $arr['email'] ?></td>
                                <td><?php echo $arr['address'] ?></td>
                                <td><?php echo $arr['content'] ?></td>
                            </tr>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
