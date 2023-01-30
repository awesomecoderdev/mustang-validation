<?php
$_token = md5(time());
$token = isset($_REQUEST["token"]) ? $_REQUEST["token"] : $_token;

$form = rtrim(get_the_permalink(), '/') . "/?token=$token";
$error = isset($_REQUEST["error"]) ? $_REQUEST["error"] : false;

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

?>

<?php if ($error) : ?>

    <?php if ($error == "invalid_token") : ?>
        <div class="alert warning">
            <span class='alert-close' onclick="this.parentElement.style.display='none';">&times;</span>
            <b><?php echo _t("Invalid token , Please choose file again."); ?></b>
        </div>
    <?php endif; ?>


    <?php if ($error == "invalid_file") : ?>
        <div class="alert warning">
            <span class='alert-close' onclick="this.parentElement.style.display='none';">&times;</span>
            <b><?php echo _t("Invalid file , Please choose a valid file."); ?></b>
        </div>
    <?php endif; ?>

    <?php if ($error == "invalid_file_type") : ?>
        <div class="alert warning">
            <span class='alert-close' onclick="this.parentElement.style.display='none';">&times;</span>
            <b><?php echo _t("Invalid file type , Please choose a valid <strong>pdf or xml</strong> file."); ?></b>
        </div>
    <?php endif; ?>


    <!-- <div class="alert info"><span class='alert-close' onclick="this.parentElement.style.display='none';">&times;</span><b>Warning</b><br>
        <ul>
            <li>Before stepping into the tutorial, make sure you have backup the template first.</li>
            <li>Before stepping into the tutorial, make sure you have backup the template first.
                Before stepping into the tutorial, make sure you have backup the template first.</li>
        </ul>
    </div>
    <div class="alert success"><span class='alert-close' onclick="this.parentElement.style.display='none';">&times;</span><b>Warning</b><br>
        <ul>
            <li>Before stepping into the tutorial, make sure you have backup the template first.</li>
            <li>Before stepping into the tutorial, make sure you have backup the template first.
                Before stepping into the tutorial, make sure you have backup the template first.</li>
        </ul>
    </div>
    <div class="alert tip"><span class='alert-close' onclick="this.parentElement.style.display='none';">&times;</span><b>Warning</b><br>
        <ul>
            <li>Before stepping into the tutorial, make sure you have backup the template first.</li>
            <li>Before stepping into the tutorial, make sure you have backup the template first.
                Before stepping into the tutorial, make sure you have backup the template first.</li>
        </ul>
    </div> -->

<?php else : ?>
    <h1>Result popup here</h1>
    <?php

    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    ?>
<?php endif; ?>
<br>

<form action="<?php echo $form; ?>" method="post" enctype='multipart/form-data'>
    <?php wp_nonce_field('mustang_action', 'mustang'); ?>
    <input type="hidden" name="_token" value="<?php echo $_token; ?>">
    <label for="file" style="display: none;"><?php echo _t("Choose File"); ?></label>
    <input type="file" name="file" id="file" style="display: block;">
    <!-- <input type="file" name="file" id="file" accept="application/pdf" style="display: block;"> -->
    <br>
    <input type="checkbox" id="privacy" name="privacy">
    <label for="privacy"><?php echo _t("By checking this box, you are agreeing to our") ?> <a target="_blank" href="<?php echo $props["privacy"]; ?>"> <?php echo _t("terms of service.") ?> </a></label><br>
    <br>
    <button type="submit"><?php echo _t("Submit"); ?></button>
</form>