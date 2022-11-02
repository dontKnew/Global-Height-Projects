<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<div class="col-sm-3 mb-4">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" data-tabs="tabs">
        <a href="<?=$routes['mypage']?>" class="nav-link <?php if($contentFile == 'mypage_tpl.php')echo 'active';?>">Profile</a>
<!--        <a href="<?=$routes['credit_history']?>" class="nav-link <?php if($contentFile == 'credit_history_tpl.php')echo 'active';?>">Credit History</a>
        <a href="<?=$routes['credits']?>" class="nav-link <?php if($contentFile == 'credits_tpl.php')echo 'active';?>">Payments (India)</a>
        <a href="<?=$routes['int_payment']?>" class="nav-link <?php if($contentFile == 'international_payment_tpl.php')echo 'active';?>">Payments (International)</a>-->
<!--         <a href="<?=$routes['settings']?>" class="nav-link <?php if($contentFile == 'settings_tpl.php')echo 'active';?>">Settings</a> -->
        <a href="<?=$routes['logout']?>" class="nav-link">Logout</a>
    </div>
</div>
