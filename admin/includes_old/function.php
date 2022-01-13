<?php




function onlineUser()
{
  if (isset($_GET['onlineUser'])) {


    global $con;
    if (!$con) {
      session_start();
      include("./connections/conn.php");
      $session = session_id();
      $time = time();
      $time_out_seconds = 30;
      $time_out = $time - $time_out_seconds;

      $lecrosoft = "SELECT * FROM user_online WHERE session = '$session'";
      $lecrosoft_query_online_users = mysqli_query($con, $lecrosoft);
      $count = mysqli_num_rows($lecrosoft_query_online_users);

      if ($count == NULL) {
        $lecrosoft = "INSERT INTO user_online (session,time) VALUES ('$session','$time')";
        $query_lecrosoft = mysqli_query($con, $lecrosoft);
      } else {
        $lecrosoft = "UPDATE user_online SET time = '$time' WHERE session = '$session'";
        $query_lecrosoft = mysqli_query($con, $lecrosoft);
      }
      $lecrosoft = "SELECT * FROM user_online WHERE time > '$time_out'";
      $query_lecrosoft = mysqli_query($con, $lecrosoft);
      echo $online_user_counter = mysqli_num_rows($query_lecrosoft);
    }
  }
}
onlineUser();


function recordSuccessMessage()
{
  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
<strong>Record!</strong> Successfully Added.
<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
<span aria-hidden='true'>&times;</span>
</button>
</div>";
}


function recordNotDeleted()
{
  echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
<strong>Record!</strong> has not been  Deleted.
<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
<span aria-hidden='true'>&times;</span>
</button>
</div>";
}

function selectForumCategory()
{
  global $con;
  $query = "SELECT * FROM forum_category";
  $select_category_sql_query = mysqli_query($con, $query);
  while ($row = mysqli_fetch_assoc($select_category_sql_query)) {
    $cat_id = $row['id'];
    $cat_title = $row['forum_cat_title'];
    $cat_img = $row['forum_category_img'];

    echo '<tr>';
    echo "<td> $cat_id </td>";
    echo "<td> $cat_title </td>";
    echo "<td>$cat_img  </td>";
    echo "<td class='text-nowrap'><a href='forum-category.php?edit_id=$cat_id' data-toggle='tooltip' data-original-title='Edit'> <i class='fa fa-pencil text-inverse m-r-10'></i> </a> <a onClick=\"javascript: return confirm ('Are you sure you want to delete this category?');\" href='forum-category.php?del_id=$cat_id'  data-toggle='tooltip' data-original-title='Delete'> <i class='far fa-trash-alt text-danger'></i> </a> </td>";
    echo '</tr>';
  }
}
function deleteForumCategory()
{
  global $con;
  if (isset($_GET['del_id'])) {
    $del_id = $_GET['del_id'];
    $sql = "DELETE FROM forum_category WHERE id = $del_id";
    $del_query = mysqli_query($con, $sql);
    if ($del_query) {
      echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
<strong>Record!</strong> Successfully Deleted.
<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
<span aria-hidden='true'>&times;</span>
</button>
</div>";
      echo "<script type='text/javascript'> location = 'forum-category.php'</script> ";
    } else {
      echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
<strong>Record!</strong> has not been  Deleted.
<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
<span aria-hidden='true'>&times;</span>
</button>
</div>";
    }
  }
}
function selectCategory()
{
  global $con;
  $query = "SELECT * FROM blog_category";
  $select_category_sql_query = mysqli_query($con, $query);
  while ($row = mysqli_fetch_assoc($select_category_sql_query)) {
    $cat_id = $row['category_id'];
    $cat_title = $row['category_title'];

    echo '<tr>';
    echo "<td> $cat_id </td>";
    echo "<td> $cat_title </td>";
    echo "<td class='text-nowrap'><a href='category.php?edit_id=$cat_id' data-toggle='tooltip' data-original-title='Edit'> <i class='fa fa-pencil text-inverse m-r-10'></i> </a> <a onClick=\"javascript: return confirm ('Are you sure you want to delete this category?');\" href='category.php?del_id=$cat_id'  data-toggle='tooltip' data-original-title='Delete'> <i class='far fa-trash-alt text-danger'></i> </a> </td>";
    echo '</tr>';
  }
}
function deleteCategory()
{
  global $con;
  if (isset($_GET['del_id'])) {
    $del_id = $_GET['del_id'];
    $sql = "DELETE FROM blog_category WHERE category_id = $del_id";
    $del_query = mysqli_query($con, $sql);
    if ($del_query) {
      echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
<strong>Record!</strong> Successfully Deleted.
<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
<span aria-hidden='true'>&times;</span>
</button>
</div>";
      echo "<script type='text/javascript'> location = 'category.php'</script> ";
    } else {
      echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
<strong>Record!</strong> has not been  Deleted.
<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
<span aria-hidden='true'>&times;</span>
</button>
</div>";
    }
  }
}

function deleteComment()
{
  global $con;
  if (isset($_GET['del_id'])) {
    $del_id = $_GET['del_id'];
    $sql = "DELETE FROM comment WHERE comment_id = $del_id";
    $del_query = mysqli_query($con, $sql);
    if ($del_query) {
      echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
<strong>Holy Record!</strong> Successfully Deleted.
<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
<span aria-hidden='true'>&times;</span>
</button>
</div>";
      echo "<script type='text/javascript'> location = 'comment.php'</script> ";
    } else {
      echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
<strong>Holy Record!</strong> has not been  Deleted.
<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
<span aria-hidden='true'>&times;</span>
</button>
</div>";
    }
  }
}

function editCategoryForm()
{

  global $con;

  if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];
    $sql = "SELECT blog_category WHERE category_id = $edit_id ";
    $fetch_category_query = mysqli_query($con, $sql);
    // if(!$fetch_category_query){
    //     die("QUERY ERROR" . mysqli_error($con));
    // }
    while ($row = mysqli_fetch_assoc($fetch_category_query)) {
      $cat_id = $row['category_id'];
      $cat_title = $row['category_title'];

?>
      <h3 class="box-title m-b-0">Laboratory Test</h3>
      <p class="text-muted">this is the sample data here for crm</p>
      <form action="category.php" method="POST">
        <div class="form-group">
          <input type="text" name="category-title" class="form-control" value='<?php echo "$cat_title" ?>'>

        </div>
        <div class="form-group">
          <input type="submit" name="submit" class="btn btn-success">
        </div>
      </form>
  <?php
    }
  }
  ?>

  <?php
  function updateCategory()
  {
    global $con;
    if (isset($_GET['update_id'])) {
      $update_id = $_GET['update_id'];
      if (isset($_POST['category-title'])) {
        $category_title = $_POST['category-title'];
        $update_id = $_GET['update_id'];
        $sql = "UPDATE blog_category SET category_title = '$category_title' WHERE category_id = $update_id ";
        $sql_query = mysqli_query($con, $sql);
        if (!$sql_query) {
          die("QUERY ERROR" . mysqli_error($con));

          //header('location: category.php');

        } else {
          echo '<script type="text/javascript">location="category.php"</script>';
        }
      }
    }
  }
  ?>


<?php
}
?>