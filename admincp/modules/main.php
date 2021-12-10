<div class="clear"></div>
<div class="main">
    <?php
    if (isset($_GET['action']) && $_GET['query']) {
        $tam = $_GET['action'];
        $query = $_GET['query'];
    } else {
        $tam = '';
        $query = '';
    }
    //Quản lý danh mục sản phẩm
    if ($tam == 'quanlydanhmucsanpham' && $query=='them') {
        include("modules/quanlydanhmucsp/them.php");
        include("modules/quanlydanhmucsp/lietke.php");

    } 
    else if($tam == 'quanlydanhmucsanpham' && $query=='sua'){
        include("modules/quanlydanhmucsp/sua.php");

    }   

    //Quản lý sản phẩm
    else if($tam == 'quanlysp' && $query=='them'){
        include("modules/quanlysp/them.php");
        include("modules/quanlysp/lietke.php");

    }  
    else if($tam == 'quanlysp' && $query=='sua'){
        include("modules/quanlysp/sua.php");

    }
    else if($tam == 'quanlydonhang' && $query=='lietke'){
        include("modules/quanlydonhang/lietke.php");

    }
    else if($tam == 'donhang' && $query=='xemdonhang'){
        include("modules/quanlydonhang/xemdonhang.php");

    }

    //Quản lý danh mục bài viết
    else if($tam == 'quanlydanhmucbaiviet' && $query=='them'){
        include("modules/quanlydanhmucbaiviet/them.php");
        include("modules/quanlydanhmucbaiviet/lietke.php");
        
    }
    else if($tam == 'quanlydanhmucbaiviet' && $query=='sua'){
        include("modules/quanlydanhmucbaiviet/sua.php");
        
    }

    //Quản lý bài viết
    else if($tam == 'quanlybaiviet' && $query=='them'){
        include("modules/quanlybaiviet/them.php");
        include("modules/quanlybaiviet/lietke.php");
        
    }
    else if($tam == 'quanlybaiviet' && $query=='sua'){
        include("modules/quanlybaiviet/sua.php");
        
    }

    //thông tin web
    else if($tam == 'quanlyweb' && $query=='capnhat'){
        include("modules/thongtinweb/quanly.php");
        
    }
    
    else {
        include("modules/dashboard.php");
    }
    ?>
</div>