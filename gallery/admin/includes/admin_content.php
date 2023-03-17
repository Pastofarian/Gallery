<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Administration
            <small>Subheading</small>
        </h1>

        <?php

            // $result_set = User::find_all_user();

            // while($row = mysqli_fetch_array($result_set)){
            //     echo $row["username"] . "<br>";
            // }

            $found_user = User::find_user_by_id(2);
            echo $found_user->username;

            // $user = User::instantiation($found_user);
            // echo $user->username;
            // echo "<br>";
            // $users = User::find_all_user();
            // foreach($users as $user){
            //     echo $user->username . "<br>";
            // }

        ?>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-file"></i> Blank Page
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->