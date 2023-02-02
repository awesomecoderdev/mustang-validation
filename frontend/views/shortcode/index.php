<?php

use Mustang\Backend\BackendController;


// Configure OAuth2 access token for authorization: default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setHost("https://api.wpplagiarism.one/v1")->setAccessToken('YOUR_ACCESS_TOKEN');
$apiInstance = new BackendController(
    new GuzzleHttp\Client(),
    $config
);


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
    <pre>
    <?php

    print_r($_FILES);
    // print_r($_SESSION);
    $file = isset($_FILES["file"]) ? $_FILES["file"] : false;
    if ($file) {
        $in_file = isset($file["tmp_name"]) && !empty($file["tmp_name"]) ? $file["tmp_name"] : false;
        // $in_file = "https://raw.githubusercontent.com/ZUGFeRD/quba-viewer/master/000resources/testfiles/xrechnung2.xml";
        $in_file = "https://wpplagiarism.one/files/1675361408.xml";
        if ($in_file) {
            $xml_string = file_get_contents($in_file);
            $xml = simplexml_load_string($xml_string);
            $xml = json_encode($xml, JSON_PRETTY_PRINT);
            print_r($xml);
            try {
                $result = $apiInstance->validateFile($in_file);
                print_r($result);
                // print_r($apiInstance->config->getHost());

    ?>
                <?php if ($result) : ?>
                    <!-- Modal HTML -->
                    <div class="modal" id="modal">
                        <div class="modal-dialog modal-confirm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="icon-box ">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="checkmarksvg">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <h4 class="modal-title w-100">Success!</h4>
                                </div>
                                <div class="modal-body">
                                    <p class="text-center"><?php echo _t("Your file has been verified.");  ?></p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-success btn-block" id="closeModal">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <!-- Danger HTML -->
                    <div class="modal" id="modal">
                        <div class="modal-dialog modal-confirm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="icon-box danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="checkmarksvg">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                        </svg>
                                    </div>
                                    <h4 class="modal-title w-100">Error!</h4>
                                </div>
                                <div class="modal-body">
                                    <p class="text-center"><?php echo _t("Something went wrong!");  ?></p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-danger btn-block " id="closeModal">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

            <?php

            } catch (Exception $e) {

            ?>
                <!-- Danger HTML -->
                <div class="modal" id="modal">
                    <div class="modal-dialog modal-confirm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="icon-box danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="checkmarksvg">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                    </svg>
                                </div>
                                <h4 class="modal-title w-100">Error!</h4>
                            </div>
                            <div class="modal-body">
                                <p class="text-center"><?php echo 'Exception when calling MustangControllerApi->validateFile: ', $e->getMessage(), PHP_EOL; ?></p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-danger btn-block " id="closeModal">OK</button>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
            }
        }
    }
            ?>
    </pre>



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