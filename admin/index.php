<?php
include('includes/config.php');
 if ($_POST != null) {
    if (isset($_POST['send'])) {

        if ($_POST['category_title'] != "") {
            $category_title = $_POST['category_title'];
        } else {

            echo "empty category title";
            die();

        }

        if ($_POST['category_desc'] != "") {
            $category_desc = $_POST['category_desc'];
        } else {
            echo "empty field" . "category description";
            die();

        }
        if (isset($_POST['is_active'])) {
            $is_active = $_POST['is_active'];
        } else {
            echo "empty field is active";
            die();

        }

        if (isset($_POST['parent_category'])) {
            $parent_category = $_POST['parent_category'];
        } else {
            echo "empty field parent category";
            die();
        }
        
        $query = $category->insert_query('tb1_category',$_POST);
        //echo $query;
        $result = $category->exec_query($query);
        //echo $result;
        if ($result) {
            echo "Inserted into database";
            header('Location:'.ADMINURL.'index.php?page=category');
        } else {
            header('Location:'.ADMINURL.'index.php');
        }
    }
}
$b="sujan";
$data = array(
    array( $b, 'row_1_col_2', 'row_1_col_3' ),
    array( 'row_2_col_1', 'row_2_col_2', 'row_2_col_3' ),
    array( 'row_3_col_1', 'row_3_col_2', 'row_3_col_3' ),
);



    $filename = "example";

    header("Content-type: text/csv");
    header("Content-Disposition: attachment; filename={$filename}.csv");
    header("Pragma: no-cache");
    header("Expires: 0");

$a = $category->outputCSV($data);

// Set path to CSV file
$csvFile = 'example.csv';
$csv = $category->readCSV($csvFile);
echo '<pre>';
print_r($csv);
echo '</pre>';
?>