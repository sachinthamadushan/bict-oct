<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style/main.css">
    <title>Document</title>
</head>

<body onload="loadAllColor();">
    <?php include '../view/navigation.php'; ?>
    <div class="container-fluid mt-5 pt-4">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header p-3">
                        <div class="row">
                            <div class="col-4">
                                <h4 class="card-title fw-light">Vehicle Category</h4>
                            </div>
                            <div class="col-8">
                                <div class="input-group">
                                    <input type="text" class="form-control me-2" placeholder="Enter category">
                                    <button class="btn btn-outline-success">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Category</th>
                                <th></th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header p-3">
                        <div class="row">
                            <div class="col-3">
                                <h5 class="card-title fw-light">Color</h5>
                            </div>
                            <div class="col-9">
                                <div class="input-group">
                                    <input id="color" type="text" class="form-control me-2">
                                    <button onclick="saveColor();" class="btn btn-outline-success">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="color-msg">

                        </div>
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Color</th>
                                <th></th>
                            </tr>
                            <tbody id="color-data">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/vehicle.js"></script>
    <script src="../js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>