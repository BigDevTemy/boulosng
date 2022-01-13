<?php
function fetch_about_us_nav()
{
    global $con;

    $sql = "SELECT * FROM about_us_category";
    $query_sql = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_assoc($query_sql)) {
        extract($row);
        echo "<tr>";
        echo "<td class='text-center'><div class='photo'><img src='../assets/img/tania.jpg' alt='Table image'></div></td>";
        echo "<td>$category_name</td>";


        echo "<td class='text-right'>
        <button type='button' rel='tooltip' class='btn btn-success btn-link btn-sm btn-icon' data-original-title='Tooltip on top' title='Refresh'>
       <i class='tim-icons icon-refresh-01'></i></button>
        <button type='button' rel='tooltip' class='btn btn-danger btn-link btn-sm ' data-original-title='Tooltip on top' title='Delete'>
        <i class='tim-icons icon-simple-remove'></i>
        </button>
        </td>";
        echo "</tr>";
    }
}
