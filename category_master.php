<?php

include 'all file/header.php';
include 'all file/connection.php';


if (isset($_POST['submit'])) {
    $category_name = $_POST['category_name'];

    $query = mysqli_query($con, "SELECT * FROM `category_master` WHERE category_name = '$category_name' ");
    if (mysqli_num_rows($query) > 0) {

?>
        <div class="alert alert-danger text-center" role="alert">
            <?php print " <span style='font-weight: bold; font-size: 1.3rem;'> $category_name </span> Category is Already Exist, Please Another Try !... " ?>
        </div>
        <?php

    } else {
        $insert_query = "INSERT INTO `category_master` (category_name) VALUES ('$category_name') ";
        $result = mysqli_query($con, $insert_query);

        if ($result) {
        ?>
            <div class="alert alert-success text-center" role="alert">
                Data is Inserted !...
            </div>
        <?php
        } else {
        ?>
            <div class="alert alert-danger text-center" role="alert">
                Data Dose't Inserted !...
            </div>
<?php
        }
    }
}


?>

<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400&display=swap" rel="stylesheet">


<div class="container">
    <div class="row">

        <div class="col-lg-6">
            <!-- <a href="category_master.php"><button class="btn btn-light rounded-0 card border-left-primary">Add Category</button></a> -->
            <h3 class="text-center" style="font-family: 'Josefin Sans', sans-serif;">All Category</h3>

            <table class="table mt-5 border border-info">
                <thead>
                    <tr>
                        <th scope="col">Category ID</th>
                        <th scope="col">Category Name</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">

                    <?php

                    $select_query = "SELECT * FROM `category_master` ";
                    $query = mysqli_query($con, $select_query);
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <th scope="row"><?= $data['category_id'] ?></th>
                            <td><?= $data['category_name'] ?></td>
                        </tr>
                    <?php
                    }

                    ?>

                </tbody>
            </table>
        </div>

        <div class="col-lg-6">
            <h3 class="text-center" style="font-family: 'Josefin Sans', sans-serif;">Add Category</h3>

            <form method="POST">
                <div class="mt-3">
                    <label class="form-label">➕ Add Category</label>
                    <input type="text" name="category_name" class="form-control rounded-0" required>
                </div>

                <div class="mx-auto w-50 mt-3 mb-3">
                    <button class="btn btn-info rounded-0 w-100" type="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>

    </div>
</div>

<?php include 'all file/footer.php';
?>