<?php ini_set('display_errors', 'off'); ?>

<?php require_once ('../action/main_work.php')?>
<?php $for->valdateSession('../login.php')?>
<?php if(isset($_GET['user_id'])) //take the use back to profile page }; ?>
<?php $userId = $_GET['user_id']; ?>
<?php $userDetails = $for->getLoggedInUserDetails($userId); ?>

<?php //$userDetails = $for->getLoggedInDepositDetails($userId); ?>
<?php //print_r($userDetails); die();?>
<?php require_once "head_1.php"?>

<?php require_once ('herder_1.php')?>


<!-- start page container -->

<?php require_once ('sidebar_1.php')?>


<?php ini_set('display_errors', 'off'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Create Deposit</h3>
                        </div>
                        <div class="card-body">
                            <?php if(isset($_SESSION['formError'])){?>
                                <?php foreach($_SESSION['formError'] as $k => $eachErrorArray){?>
                                    <?php foreach($eachErrorArray as $k => $eachError){?>
                                        <p class="alert alert-danger"><?php echo $eachError ?></p>
                                    <?php } ?>

                                <?php } ?>
                                <?php unset($_SESSION['formError']); ?>
                            <?php } ?>

                            <?php if(isset($_GET['success'])){?>
                                <p class="alert alert-success"><?php echo trim($_GET['success']); ?></p>
                            <?php } ?>
                            
                            <form action="../action/main_work.php?option=deposit" method="post">
                                <div class="form-group row mb-4">
                                    <label readonly class="col-form-label text-md-right col-12 col-md-3 col-lg-3">UserName</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input readonly type="text" class="form-control" name="username" value="<?php echo ucwords($userDetails->username ); ?>" placeholder="username">
                                    </div>
                                </div>
                                <input type="hidden" name="user_id" value="<?php echo $userId; ?>" />
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input readonly type="text" class="form-control" name="email" value="<?php echo ucwords($userDetails->email); ?>" placeholder="email">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Amount</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="amount" value="<?php if (isset($_SESSION{'amount'})) {echo $_SESSION['amount'];}?>" placeholder="amount">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Interest</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="interest" value="<?php if (isset($_SESSION{'interest'})) {echo $_SESSION['interest'];}?>" placeholder="interest">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Day Counter</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="day_counter" value="<?php if (isset($_SESSION{'day_counter'})) {echo $_SESSION['day_counter'];}?>" placeholder="day_counter">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Plan</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="plan" value="<?php if (isset($_SESSION{'plan'})) {echo $_SESSION['plan'];}?>" placeholder="plan">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ref_id</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input readonly type="text" class="form-control" name="ref_id" value="<?php echo ucwords($userDetails->ref_id); ?>" placeholder="ref_id">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Referral</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="referral" value="<?php echo ucwords($userDetails->referral); ?>" placeholder="referral">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Coin Type</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="coin_type" value="<?php if (isset($_SESSION{'coin_type'})) {echo $_SESSION['coin_type'];}?>" placeholder="coin_type">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">RefNumber</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="ref" value="<?php if (isset($_SESSION{'ref'})) {echo $_SESSION['ref'];}?>" placeholder="ref">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="status" value="<?php if (isset($_SESSION{'status'})) {echo $_SESSION['status'];}?>" placeholder="status">
                                    </div>
                                </div>


                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" name="" class="btn btn-primary">CreateDeposit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<?php require_once "footer_1.php"?>

<?php require_once ('script_1.php')?>

