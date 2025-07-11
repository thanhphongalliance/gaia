<li><a class="top">Gaia</a>
    <ul>
        <li><a href="<?=PATH_FOLDER_ADMIN?>/staticbaiviet/edit/chung-toi-la-ai">Chúng tôi là ai</a></li>
        <li><a href="<?=PATH_FOLDER_ADMIN?>/staticbaiviet/edit/doi-ngu">Đội ngủ</a></li>
        <li><a href="<?=PATH_FOLDER_ADMIN?>/staticbaiviet/edit/don-vi-tai-tro-va-ung-ho">Đơn vị tài trợ và ủng hộ</a></li>
    </ul>
</li>
<li><a class="top">Chương trình</a>
    <ul>
        <li><a href="<?=PATH_FOLDER_ADMIN?>/staticbaiviet/edit/giao-duc-bao-ton">Giáo dục bảo tồn</a></li>
        <li><a href="<?=PATH_FOLDER_ADMIN?>/staticbaiviet/edit/nang-cao-nang-luc">Nâng cao năng lực</a></li>
        <li><a href="<?=PATH_FOLDER_ADMIN?>/staticbaiviet/edit/dieu-tra-va-nghien-cuu-da-dang-sinh-hoc">Điều tra và nghiên cứu đa dạng sinh học</a></li>
        <li><a href="<?=PATH_FOLDER_ADMIN?>/staticbaiviet/edit/quan-ly-tai-nguyen-co-su-tham-gia-cua-cong-dong">Quản lý tài nguyên có sự tham gia của cộng đồng</a></li>
        <li><a href="<?=PATH_FOLDER_ADMIN?>/staticbaiviet/edit/chuong-trinh">Chương Trình</a></li>
    </ul>
</li>
<li>
    <a class="top">Tin tức</a>
    <ul>
        <li><a href="<?=PATH_FOLDER_ADMIN?>/tintuc/p/24">Sự kiện</a></li>
        <li><a href="<?=PATH_FOLDER_ADMIN?>/tintuc/p/23">Tin Gaia</a></li>
        <li><a href="<?=PATH_FOLDER_ADMIN?>/tintuc/p/22">Chuyên gia viết</a></li>
        
    </ul>
</li>
<li>
    <a class="top">Thư viện - chơi mà học</a>
    <ul>
        <li><a>Trò chơi</a>
            <ul>
                <li><a href="<?=PATH_FOLDER_ADMIN ?>/game/p/25">Trò chơi máy tính</a></li>
                <li><a href="<?=PATH_FOLDER_ADMIN ?>/game/p/26">Tải về, in và chơi</a></li>
                <li><a href="<?=PATH_FOLDER_ADMIN ?>/game/p/27">Trò chơi vận động</a></li>
            </ul>
        </li>
        <li><a href="<?= PATH_FOLDER_ADMIN ?>/tintuc/p/25">Tờ thông tin</a></li>
        <li><a href="<?= PATH_FOLDER_ADMIN ?>/tintuc/p/26">Sách và ấn phẩm</a></li>
        <li><a href="<?= PATH_FOLDER_ADMIN ?>/video">Video</a></li>
        <li><a href="<?= PATH_FOLDER_ADMIN ?>/anhh">Ảnh</a></li>
        <li><a href="<?= PATH_FOLDER_ADMIN ?>/album">Gallery</a>
            <ul>
            <?php $category = $this->album_category_model->display(); 
            foreach($category as $cat):
            ?>
                <li><a href="<?= PATH_FOLDER_ADMIN?>/album/p/<?=$cat['id']?>"><?=$cat['title_vn']?></a></li>
                <?php endforeach; ?>
            </ul>
        </li>
    </ul>
</li>
<li><a class="top">Tham gia</a>
    <ul>
        <li><a href="<?=PATH_FOLDER_ADMIN?>/staticbaiviet/edit/tai-tro">Tài trợ</a></li>
        <li><a href="<?=PATH_FOLDER_ADMIN?>/staticbaiviet/edit/gay-quy-ung-ho-gaia">Gây quỹ ủng hộ gaia</a></li>
        <li><a href="<?=PATH_FOLDER_ADMIN?>/staticbaiviet/edit/su-dung-dich-vu-tu-van-cua-gaia">Sử dụng dịch vụ tư vấn của gaia</a></li>
        <li><a href="<?=PATH_FOLDER_ADMIN?>/album/p/3">Mua để ủng hộ</a></li>
        <li><a href="<?=PATH_FOLDER_ADMIN?>/tintuc/p/27">Cơ hội nghề nghiệp</a></li>
        <li><a href="<?=PATH_FOLDER_ADMIN?>/staticbaiviet/edit/tinh-nguyen-vien">Tình nguyện viên</a></li>
        <li><a href="<?=PATH_FOLDER_ADMIN?>/staticbaiviet/edit/hanh-dong-khac">Hành động khác</a></li>
    </ul>
</li>
<li><a class="top" href="<?= PATH_FOLDER_ADMIN ?>/slider">Slideshow</a></li>
<li><a class="top" href="<?= PATH_FOLDER_ADMIN ?>/contact">QL Liên hệ</a></li>
<li><a class="top">Settings</a>
  <ul>
    <li><a href="<?= PATH_FOLDER_ADMIN ?>/config">Cấu hình</a></li>
    <li><a href="<?= PATH_FOLDER_ADMIN ?>/administrator">Admistrator</a></li>
  </ul>
</li>