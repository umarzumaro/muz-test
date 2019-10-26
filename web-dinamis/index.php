<?php

include 'config.php';

$kwl = $db->Tampil_data();

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <title>Coffe Shop Arkademy</title>
</head>

<body>



    <nav class="navbar navbar-expand-lg  bg-light navbar">
        <div class="container">

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <p class="nav-item  txt-arka">Arkademy </p>
                    <p class="nav-item  txt-coffeShop ml-3">COFFEE SHOP</p>

                </ul>
                <button type="button" class="btn tombol" data-toggle="modal" data-target="#add">Add</button>
            </div>
        </div>
    </nav>

    <div class="container">
        <table class="table mt-5 ">
            <thead class="thead tbl">
                <tr>
                    <th>No</th>
                    <th>Cashier</th>
                    <th>Product</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //echo $kwl;
                foreach ($kwl as $x) {

                    ?>
                    <tr>
                        <td><?php echo $x['id'] ?></td>
                        <td><?php echo $x['nama_csr'] ?></td>
                        <td><?php echo $x['nama_prd'] ?></td>
                        <td><?php echo $x['category'] ?></td>
                        <td><?php echo $x['price'] ?></td>
                        <td>
                            <a href="#" class="btn-edit" data-toggle="modal" data-target="#edit">edit</a> | <a href="" class="btn-del" data-toggle="modal" data-target="#delete">delete</a>
                        </td>

                    </tr>
                <?php } ?>


            </tbody>
        </table>

        <!-- DELETE MODAL -->
        <div class="modal fade mdl" id="delete">
            <div class="modal-dialog">

                <div class="alert alert-primary" role="alert">
                    Data berhasil dihapus
                </div>

            </div>
        </div>

        <!-- ADD MODAL -->
        <div class="modal fade mdl" id="add">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">ADD</h5>
                        <button class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group">
                            <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Kharismawulan">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Kharisma</a>
                                    <a class="dropdown-item" href="#">Lazuardini Nur</a>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mt-4">
                            <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Ice Tea">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Ice tea</a>
                                    <a class="dropdown-item" href="#">Latte</a>
                                </div>
                            </div>
                        </div>
                        <input class="form-control mt-4" id="exampleInputEmail1" placeholder="Drinks">
                        <input class="form-control mt-4" id="exampleInputEmail1" placeholder="Rp. 10.000">
                    </div>
                    <div class="modal-footer">
                        <button class="btn  tombol" data-dismiss="modal">ADD</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- EDIT MODAL -->
        <div class="modal fade mdl" id="edit">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">EDIT</h5>
                        <button class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group">
                            <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Kharismawulan">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Kharisma</a>
                                    <a class="dropdown-item" href="#">Lazuardini Nur</a>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mt-4">
                            <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Ice Tea">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Ice tea</a>
                                    <a class="dropdown-item" href="#">Latte</a>
                                </div>
                            </div>
                        </div>
                        <input class="form-control mt-4" id="exampleInputEmail1" placeholder="Drinks">
                        <input class="form-control mt-4" id="exampleInputEmail1" placeholder="Rp. 10.000">
                    </div>
                    <div class="modal-footer">
                        <button class="btn  tombol" data-dismiss="modal">EDIT</button>
                    </div>
                </div>
            </div>
        </div>


    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>