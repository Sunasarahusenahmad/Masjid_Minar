<?php

include 'all file/header.php';
include 'all file/connection.php';

?>

<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400&display=swap" rel="stylesheet">

<div class="container" style="font-family: 'Josefin Sans', sans-serif;">
    <div class="col-lg-12">
        <h3 class="text-center" style="font-family: 'Josefin Sans', sans-serif;">All Category</h3>

        <table class="table mt-5 border border-info">
            <thead>
                <tr>
                    <th scope="col">Item Name</th>
                    <th scope="col">Item Image</th>
                    <th scope="col">Item Description</th>
                    <th scope="col"><a href="item_master.php" class="text-decoration-none"><button class="btn btn-light rounded-0 card border-left-info" style="margin-right: 2rem; width: 8rem;">Add Items</button></a></th>


                </tr>
            </thead>
            <tbody class="table-group-divider">

                <?php

                $select_query = "SELECT * FROM `item_masters` ";
                $query = mysqli_query($con, $select_query);
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?= $data['item_name'] ?></td>
                        <td><img src="upload/<?= $data['item_image'] ?>" class="border border-info rounded" height="100" width="100"></td>
                        <td><?= $data['editor1'] ?></td>
                    </tr>   
                <?php
                }

                ?>

            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.19.1/full/ckeditor.js"></script>

<script>
    CKEDITOR.replace('editor1');
</script>

<?php include 'all file/footer.php';
?>