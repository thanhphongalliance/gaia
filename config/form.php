<?php
$title_web_vn = isset($detail['title_web_vn']) ? $detail['title_web_vn'] : "";
$title_web_en = isset($detail['title_web_en']) ? $detail['title_web_en'] : "";
$meta_description_vn = isset($detail['meta_description_vn']) ? $detail['meta_description_vn'] : "";
$meta_keywords_vn = isset($detail['meta_keywords_vn']) ? $detail['meta_keywords_vn'] : "";
$meta_description_en = isset($detail['meta_description_en']) ? $detail['meta_description_en'] : "";
$meta_keywords_en = isset($detail['meta_keywords_en']) ? $detail['meta_keywords_en'] : "";
$email = isset($detail['email']) ? $detail['email'] : "";
$phone = isset($detail['phone']) ? $detail['phone'] : "";
$fax = isset($detail['fax']) ? $detail['fax'] : "";
$hotline = isset($detail['hotline']) ? $detail['hotline'] : "";
$zing = isset($detail['zing']) ? $detail['zing'] : "";
$twitter = isset($detail['twitter']) ? $detail['twitter'] : "";
$zalo = isset($detail['zalo']) ? $detail['zalo'] : "";
$line = isset($detail['line']) ? $detail['line'] : "";
$smtp_user = isset($detail['smtp_user']) ? $detail['smtp_user'] : "";
$smtp_pass = isset($detail['smtp_pass']) ? $detail['smtp_pass'] : "";
$facebook = isset($detail['facebook']) ? $detail['facebook'] : "";
$address_vn = isset($detail['address_vn']) ? $detail['address_vn'] : "";
$address_en = isset($detail['address_en']) ? $detail['address_en'] : "";
$address_jp = isset($detail['address_jp']) ? $detail['address_jp'] : "";
$g_plus = isset($detail['g_plus']) ? $detail['g_plus'] : "";
$youtube = isset($detail['youtube']) ? $detail['youtube'] : "";
$linkedin = isset($detail['linkedin']) ? $detail['linkedin'] : "";
$instagram = isset($detail['instagram']) ? $detail['instagram'] : "";
$nick_yahoo = isset($detail['nick_yahoo']) ? $detail['nick_yahoo'] : "";
$name_company_vn = isset($detail['name_company_vn']) ? $detail['name_company_vn'] : "";
$name_company_en = isset($detail['name_company_en']) ? $detail['name_company_en'] : "";
$lienhe_vn = isset($detail['lienhe_vn']) ? stripslashes($detail['lienhe_vn']) : "";
$lienhe_en = isset($detail['lienhe_en']) ? stripslashes($detail['lienhe_en']) : "";
$footer_vn = isset($detail['footer_vn']) ? stripslashes($detail['footer_vn']) : "";
$footer_en = isset($detail['footer_en']) ? stripslashes($detail['footer_en']) : "";
?>
<div id="content">
    <div class="breadcrumb">
        <br />        
    </div>
    <form id="form" action="" onsubmit="return check_input();" method="post" enctype="multipart/form-data" name="LISTFORM">
        <div class="box">
            <div class="left"></div>
            <div class="right"></div>
            <div class="heading">
                <h1 style="background-image: url('access/image/review.png');">
                    <?= $title_header; ?>
                </h1>
                <div class="buttons" style="float:right;">
                    <input type="submit" value="Lưu lại" class="button_v1">              
                </div>
            </div>
            <div class="content">
                <?php
                $messages = $this->messages->get();
                if (is_array($messages)):
                    foreach ($messages as $type => $msgs):
                        if (count($msgs > 0)):
                            foreach ($msgs as $message):
                                echo ('<div id="messages"><div class="' . $type . '">' . $message . '</div></div> ');
                            endforeach;
                        endif;
                    endforeach;
                endif;
                ?>  
                <div id="tabs" class="htabs">
                    <a tab="#tab_vn"><?=IMG_VN?></a>
                    <a tab="#tab_en"><?=IMG_EN?></a>
                </div>
                <div id="tab_vn">                   
                    <div id="language1">
                        <table class="form">
                            <tr>
                                <td>Title:
                                    <span class="required">*</span>
                                    <div class="comments">Tiêu đề mặc định</div>
                                </td>
                                <td><input type="text" class="width_50" name="title_web_vn" value="<?= $title_web_vn; ?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td>Meta Description:<span class="required">*</span></td>
                                <td><textarea name="meta_description_vn" cols="100" rows="5"><?= $meta_description_vn; ?></textarea></td>
                            </tr>
                            <tr>
                                <td>Meta keyword:
                                    <span class="required">*</span>
                                    <div class="comments"></div>
                                </td>
                                <td><textarea name="meta_keywords_vn" cols="100" rows="5"><?= $meta_keywords_vn; ?></textarea></td>
                            </tr>
                            <tr>
                                <td>Tên công ty</td>
                                <td><input type="text" name="name_company_vn" value="<?=$name_company_vn; ?>" size="50"/></td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td><input type="text" name="phone" value="<?= $phone; ?>" size="50"/></td>
                            </tr>
                            <tr>
                                <td>Fax</td>
                                <td><input type="text" name="fax" value="<?= $fax; ?>" size="50"/></td>
                            </tr>
                            <tr>
                                <td>Hotline</td>
                                <td><input type="text" name="hotline" value="<?= $hotline; ?>" size="50"/></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" name="email" value="<?= $email; ?>" size="50"/></td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td><input type="text" name="address_vn" value="<?= $address_vn; ?>" size="50"/></td>
                            </tr>
                            <tr>
                                <td>Thông tin liên hệ</td>
                                <td><?= $this->function->display_CKEditor("lienhe_vn", $lienhe_vn,400); ?></td>
                            </tr>
                            <tr>
                                <td>Thông tin Footer</td>
                                <td><?= $this->function->display_CKEditor("footer_vn", $footer_vn,400); ?></td>
                            </tr>
                             <tr>
                                <td>Facebook</td>
                                <td><input type="text" name="facebook" value="<?= $facebook; ?>" size="50"/></td>
                            </tr>
                             <tr>
                                <td>Twitter</td>
                                <td><input type="text" name="twitter" value="<?= $twitter; ?>" size="50"/></td>
                            </tr>
                            <tr>
                                <td>Instagram</td>
                                <td><input type="text" name="instagram" value="<?= $instagram; ?>" size="50"/></td>
                            </tr>
                            <tr>
                                <td>Youtube</td>
                                <td><input type="text" name="youtube" value="<?= $youtube; ?>" size="50"/></td>
                            </tr>
                            
                            <tr>
                                <td>SMTP USER</td>
                                <td><input type="text" name="smtp_user" value="<?= $smtp_user; ?>" size="50"/></td>
                            </tr>
                             <tr>
                                <td>SMTP PASS</td>
                                <td><input type="text" name="smtp_pass" value="<?= $smtp_pass; ?>" size="50"/></td>
                            </tr>
                           
                        </table>
                    </div>
                </div>
                <div id="tab_en">
                    <div id="language1">
                        <table class="form">
                            <tr>
                                <td>Title:
                                    <span class="required">*</span>
                                    <div class="comments">Tiêu đề mặc định</div>
                                </td>
                                <td><input type="text" class="width_50" name="title_web_en" value="<?= $title_web_en; ?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td>Meta Description:<span class="required">*</span></td>
                                <td><textarea name="meta_description_en" cols="100" rows="5"><?= $meta_description_en; ?></textarea></td>
                            </tr>
                            <tr>
                                <td>Meta keyword:
                                    <span class="required">*</span>
                                    <div class="comments"></div>
                                </td>
                                <td><textarea name="meta_keywords_en" cols="100" rows="5"><?= $meta_keywords_en; ?></textarea></td>
                            </tr>
                            <tr>
                                <td>Tên công ty</td>
                                <td><input type="text" name="name_company_en" value="<?=$name_company_en; ?>" size="50"/></td>
                            </tr>
                            
                            
                            <tr>
                                <td>Địa chỉ</td>
                                <td><input type="text" name="address_en" value="<?= $address_en; ?>" size="50"/></td>
                            </tr>
                            <tr>
                                <td>Thông tin liên hệ</td>
                                <td><?= $this->function->display_CKEditor("lienhe_en", $lienhe_en,400); ?></td>
                            </tr>
                            <tr>
                                <td>Thông tin Footer</td>
                                <td><?= $this->function->display_CKEditor("footer_en", $footer_en,400); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                
            
                
            </div>
        </div>
    </form>
</div>
<script>
$.tabs('#tabs a');

</script>
<script type="text/javascript" src="access/js/form.js"></script>