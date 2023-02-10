<!DOCTYPE html>
<html lang="en">
<?php $menu = "Education";?>
<?php include("head.php"); ?> 

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <?php include("navbar.php"); ?> 
  <!-- /.navbar -->
  <?php include("menu.php"); ?> 
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Education</li>
            <li class="breadcrumb-item"><a href="Skill.php">Skill</a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <h1> การศึกษา <h1>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
           <div class="col-md-10">
            <?php 
            $act = (isset($_GET['act']) ? $_GET['act'] : '');
            if ($act == 'add') {
            include('Education_add.php');
            
            }else{
              
            include('XXXXX.php'); 
            }
            ?>
          </div>
        </div>
      </div>
    </section>
  </div>
  <aside class="control-sidebar control-sidebar-dark"></aside>
</div>
</body>
</html>
