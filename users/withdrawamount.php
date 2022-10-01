<?php // session_start()?>
<?php require_once ('../action/main_work.php')?>
<?php if (isset($_GET['user_id']))
    $userId = $_GET['user_id'];
$userDetails = $for->getLoggedInUserDetails($_SESSION['userUniqueId']);
?>
<?php require_once "head.php"?>

<?php require_once ('herder.php')?>


<!-- start page container -->

<?php require_once ('sidebar.php')?>


<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <form action="../action/main_work.php?option=withdrawamount" method="post">
                        <div class="card-header">
                            <h3>Deposit</h3> <br>
                            
                        </div>
                        <div class="alert alert-success">
                        
                        <h4>Please dear Esteemed Customer kindly contact Itxis@gmail.com to know the current company deposit option</h4>
                        </div>
                </div>
            </div>
        </div>
    </section>
</div>


<?php require_once "foote.php"?>

<?php require_once ('script.php')?>

