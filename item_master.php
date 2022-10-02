<?php

include 'all file/header.php';
include 'all file/connection.php';

if (isset($_POST['submit'])) {

    $category_id = $_POST['category_id'];
    $item_name = $_POST['item_name'];
    $editor1 = $_POST['editor1'];

    if (isset($_FILES['item_image'])) {

        $file_name = $_FILES['item_image']['name'];
        $file_size = $_FILES['item_image']['size'];
        $file_tmp = $_FILES['item_image']['tmp_name'];
        $file_type = $_FILES['item_image']['type'];

        if (move_uploaded_file($file_tmp, "upload/" . $file_name)) {
?>
            <!-- <div class="alert alert-success text-center" role="alert">
                item_image is Uploaded !...
            </div> -->
        <?php
        } else {
        ?>
            <div class="alert alert-danger text-center" role="alert">
                Your item_image Dose't Uploaded !...
            </div>
        <?php
        }
    }


    $insert_query = "INSERT INTO `item_masters` (category_id, item_name, editor1, item_image) VALUES ('$category_id', '$item_name', '$editor1', '$file_name') ";
    $query = mysqli_query($con, $insert_query);

    if ($query) {
        ?>
        <div class="alert alert-success text-center" role="alert">
            Item is Successfully Inserted !...
        </div>
    <?php
    } else {
    ?>
        <div class="alert alert-danger text-center" role="alert">
            Item is Not Inserted !...
        </div>
<?php
    }
}
?>


<div class="container w-50 border border-info">

    <form method="POST" enctype="multipart/form-data">

        <div class="mt-3">

            <label class="form-label">🖊 Category Name</label>
            <select class="form-control rounded-0" name="category_id">

                <?php
                $select_query = mysqli_query($con, "SELECT * FROM `category_master` ");

                if (mysqli_num_rows($select_query) > 0) {
                    foreach ($select_query as $row) {
                ?>
                        <option value="<?= $row['category_id']; ?>" name="category_id"><?= $row['category_name']; ?></option>
                    <?php
                    }
                } else {
                    ?>
                    <option value="">No Record Found</option>
                <?php
                }

                ?>
            </select>
        </div>


        <div class="mt-3">
            <label class="form-label">➕ Add Item</label>
            <input type="text" name="item_name" class="form-control rounded-0" required>
        </div>

        <div class="mt-3">
            <label class="form-label">🖼 Item Image</label>
            <input type="file" name="item_image" class="form-control rounded-0" required>
        </div>

        <div class="form-floating mt-3">
            <label for="floatingTextarea">✏ Remarks</label>
            <textarea class="form-control rounded-0" name="editor1"></textarea>
        </div>

        <div class="mx-auto w-50 mt-3 mb-3">
            <button class="btn btn-info rounded-0 w-100" type="submit" name="submit">Submit</button>
        </div>

    </form>

</div>

<script src="https://cdn.ckeditor.com/4.19.1/full/ckeditor.js"></script>

<script>
    CKEDITOR.replace('editor1');
</script>

<?php include 'all file/footer.php';
?>