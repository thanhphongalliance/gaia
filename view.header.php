<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en" xml:lang="en">
    <head>
        <base href="<?= base_url(); ?>"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?= isset($title_header) ? $title_header : "Untitle" ?></title>    
        <link rel="stylesheet" type="text/css" href="access/js/jquery.countdownTimer.css" />
        <link rel="stylesheet" type="text/css" href="access/css/stylesheet.css" />
        <link rel="stylesheet" type="text/css" href="access/js/jquery/ui/themes/ui-lightness/ui.all.css" />
        <link rel="stylesheet" type="text/css" href="access/css/phantrang.css" />
        <link rel="Stylesheet" type="text/css" href="access/css/smoothness/jquery-ui-1.7.1.custom.css"  />
        <script type="text/javascript" src="access/js/jquery/jquery-1.3.2.min.js"></script>
        <script type="text/javascript" src="access/js/jquery/ui/ui.core.js"></script>
		<script type="text/javascript" src="<?=base_url('editor/ckeditor/ckeditor.js')?>"></script> 
		<script type="text/javascript" src="<?=base_url('editor/kcfinder/ckfinder.js')?>"></script> 
        <script type="text/javascript" src="access/js/jquery/superfish/js/superfish.js"></script>
        <script type="text/javascript" src="access/js/jquery/tab.js"></script>
        <script src='access/js/admin.js' type="text/javascript" language="javascript"></script>
        <script type="text/javascript" src="access/js/jquery.countdownTimer.js"></script>
            
        <script>
            var PATH_FOLDER_ADMIN = '<?= PATH_FOLDER_ADMIN; ?>';
            var IMG_LOADING = '<?= IMG_LOADING; ?>';
            var PATH_THUMB  = '<?= PATH_THUMB;?>';
            
        </script>
        <script type="text/javascript"><!--
            $(document).ready(function() {
                $('.nav').superfish({
                    hoverClass: 'sfHover',
                    pathClass: 'overideThisToUse',
                    delay: 0,
                    animation: {height: 'show'},
                    speed: 'normal',
                    autoArrows: false,
                    dropShadows: false,
                    disableHI: false, /* set to true to disable hoverIntent detection */
                    onInit: function() {
                    },
                    onBeforeShow: function() {
                    },
                    onShow: function() {
                    },
                    onHide: function() {
                    }
                });

                $('.nav').css('display', 'block');
            });
            //--></script>
            <style>
li.image-thumb {
    float:left;
    width:140px;
    border: 1px solid #dddddd;
    padding:3px;
    margin-right: 3px;
    text-align: center;
}
li.image-thumb img {
    max-width: 100%;
}
</style>
    </head>
    <body>
        <div id="container">            
            <div id="menu">
                <ul class="nav left" style="display: none;">
<?= $this->load->view(PATH_FOLDER_ADMIN . '/view.menu.php'); ?>
                </ul> 

                <!-- Right -->
                <ul class="nav right">
                    <li id="store"><a class="top">Chào: <?= $this->session->userdata("nameAdmin"); ?></a></li>
                    <li id="store"><a class="top" href="<?= PATH_FOLDER_ADMIN ?>/logout">Thoát</a></li>
                </ul>
                <!-- Right -->                
            </div>    
