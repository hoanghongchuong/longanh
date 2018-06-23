<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ url('public/backend/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> -->
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
          </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <!-- <li class="header">MAIN NAVIGATION</li> -->
        <!-- <li class="treeview ">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Quản lý dự án</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="backend/productcate"><i class="fa fa-circle-o"></i> <span>Danh mục dự án</span></a></li>
            <li><a href="backend/product"><i class="fa fa-circle-o"></i> <span>Dự án</span></a></li>
            <li><a href="backend/about/edit?type=san-pham"><i class="fa fa-th"></i> <span>Giới thiệu sản phẩm</span></a></li>
          </ul>
        </li> -->
        <!-- <li><a href="backend/thuonghieu"><i class="fa fa-circle-o"></i> <span>Quản lý thương hiệu</span></a></li> -->
        <!-- <li><a href="backend/orders"><i class="fa fa-circle-o"></i> <span>Quản lý đơn hàng</span></a></li> -->
        <li class="treeview ">
          <a href="#">

            <i class="fa fa-dashboard"></i> <span>Quản lý phòng</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="backend/productcate"><i class="fa fa-circle-o"></i> <span>Loại phòng</span></a></li>
            <li><a href="backend/product"><i class="fa fa-circle-o"></i> <span>Quản lý phòng</span></a></li>
            <li><a href="backend/about/edit?type=phong"><i class="fa fa-th"></i> <span>Slogan</span></a></li>
          </ul>
        </li>
        <li><a href="backend/orders"><i class="fa fa-circle-o"></i> <span>Quản lý đặt phòng</span></a></li>
        <li><a href="backend/news?type=tin-tuc"><i class="fa fa-circle-o"></i> <span>Tin tức</span></a></li>
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Quản lý danh mục tin tức</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="backend/newscate?type=tin-tuc"><i class="fa fa-circle-o"></i> <span>Danh mục</span></a></li>
            
            <li><a href="backend/news?type=tin-tuc"><i class="fa fa-circle-o"></i> <span>Tin tức</span></a></li>
           
            <li><a href="backend/about/edit?type=dich-vu"><i class="fa fa-circle-o"></i> <span>Giới thiệu dịch vụ</span></a></li>
          </ul>
        </li> -->
        <li><a href="backend/news?type=bar"><i class="fa fa-circle-o"></i> <span>Bar & Nhà hàng</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Quản lý dịch vụ</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">            
            <!-- <li><a href="backend/newscate?type=dich-vu"><i class="fa fa-circle-o"></i> <span>Danh mục</span></a></li> -->
            <li><a href="backend/news?type=dich-vu"><i class="fa fa-circle-o"></i> <span>Dịch vụ</span></a></li>           
            <li><a href="backend/about/edit?type=dich-vu"><i class="fa fa-circle-o"></i> <span> 
            Slogan</span></a></li>
          </ul>
        </li>
         <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Quản lý tuyển dụng</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="backend/news?type=tuyen-dung"><i class="fa fa-circle-o"></i> <span>Tin tuyển dụng</span></a></li>  
            <li><a href="backend/about/edit?type=tuyendung"><i class="fa fa-circle-o"></i> <span>Slogan tuyển dụng</span></a></li>
          </ul>
        </li> -->
       
        <li><a href="{{ asset('backend/langs?type=langs') }}"><i class="fa fa-circle-o"></i> <span>Ngôn ngữ website</span></a></li>
        
        <!-- <li><a href="backend/news?type=tin-tuc"><i class="fa fa-circle-o"></i> <span>Quản lý tin tức</span></a></li> -->
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Quản lý tin tức</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="backend/news?type=tin-tuc"><i class="fa fa-circle-o"></i> <span>Tin tức công nghệ</span></a></li>
            
            <li><a href="backend/news?type=tuyen-dung"><i class="fa fa-circle-o"></i> <span>Tin tức tuyển dụng</span></a></li>
            <li><a href="backend/newscate?type=tin-tuc"><i class="fa fa-circle-o"></i> <span>Danh mục</span></a></li>
            <li><a href="backend/news?type=tin-tuc"><i class="fa fa-circle-o"></i> <span>Tin tức</span></a></li>
          </ul>
        </li> -->
       <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Giới thiệu</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="backend/member"><i class="fa fa-users"></i> <span>Thành viên</span></a></li>  
          </ul>
        </li>
 -->
        <li><a href="backend/about/edit?type=gioi-thieu"><i class="fa fa-circle-o"></i> <span>Giới thiệu</span></a></li>
        
        
        <li><a href="backend/partner"><i class="fa fa-circle-o"></i> <span>Đối tác</span></a></li>
        <!-- <li><a href="backend/video"><i class="fa fa-circle-o"></i> <span>Video</span></a></li> -->
       
        <li><a href="backend/contact"><i class="fa fa-envelope"></i> <span>Quản lý liên hệ</span></a></li>
        <li><a href="backend/newsletter?type=newsletter"><i class="fa fa-circle-o"></i> <span>Đăng ký nhận tin</span></a></li>
        <li><a href="backend/lienket?type=thu-vien"><i class="fa fa-circle-o"></i> <span>Thư viện ảnh</span></a></li>
        <!-- <li><a href="backend/about/edit?type=lien-he"><i class="fa fa-circle-o"></i> <span>Liên hệ</span></a></li> -->
        <!-- <li><a href="backend/lienket?type=gioi-thieu"><i class="fa fa-circle-o"></i> <span>Hình ảnh giới thiệu</span></a></li> -->
        
        
        <!-- <li><a href="backend/slider?type=chinh-sach"><i class="fa fa-circle-o"></i> <span>Quản lý chính sách</span></a></li> -->
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Hình ảnh slider</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="backend/lienket?type=slider"><i class="fa fa-circle-o"></i>Quản lý slider</a></li>
            <li><a href="backend/slider?type=gioi-thieu"><i class="fa fa-circle-o"></i> <span>Quản lý slider</span></a></li>
            <li><a href="backend/lienket?type=chuyen-muc"><i class="fa fa-circle-o"></i> Banner chuyên mục</a></li>
            <li><a href="backend/lienket?type=chi-nhanh"><i class="fa fa-circle-o"></i> Quản lý chi nhánh</a></li>
          </ul>
        </li> -->
        <!-- <li><a href="backend/chinhanh"><i class="fa fa-envelope"></i><span>Quản lý chi nhánh</span></a></li> -->
        <!-- <li><a href="backend/slogan"><i class="fa fa-gear" aria-hidden="true"></i> <span>Quản lý slogan</span></a></li> -->
        <!-- <li><a href="backend/feedback"><i class="fa fa-gear" aria-hidden="true"></i> <span>Ý kiến khách hàng</span></a></li> -->
        <!-- <li><a href="backend/lienket?type=chi-nhanh"><i class="fa fa-circle-o"></i> Quản lý chi nhánh</a></li> -->
        <!-- <li><a href="backend/slider?type=quang-cao"><i class="fa fa-circle-o"></i> <span>Quản lý quảng cáo</span></a></li> -->
        
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Hình ảnh slider-banner</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <!-- <li><a href="backend/lienket?type=slider"><i class="fa fa-circle-o"></i>Quản lý slider</a></li> -->
            <li><a href="backend/slider?type=gioi-thieu"><i class="fa fa-circle-o"></i> <span>Quản lý slider</span></a></li>

           <li><a href="backend/lienket?type=tieu-chi"><i class="fa fa-circle-o"></i> <span>Ảnh quảng cáo sidebar</span></a></li>
             <li><a href="backend/banner"><i class="fa fa-gear" aria-hidden="true"></i> <span>Quản lý banner</span></a></li>
          </ul>
        </li>

        <!-- <li><a href="backend/bankaccount"><i class="fa fa-envelope"></i><span>Quản lý tài khoản ngân hàng</span></a></li> -->
        
        <!-- <li><a href="backend/position"><i class="fa fa-gear" aria-hidden="true"></i> <span>Vị trí quảng cáo</span></a></li> -->
        <li><a href="{{ asset('backend/setting') }}"><i class="fa fa-gear" aria-hidden="true"></i> <span>Quản lý thiết lập</span></a></li>
       
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-gear" aria-hidden="true"></i> <span>Thiết lập hệ thống</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ asset('backend/setting') }}"><i class="fa fa-gear" aria-hidden="true"></i> Quản lý thiết lập</a></li>
            <li><a href="backend/about/edit?type=footer"><i class="fa fa-gear" aria-hidden="true"></i> Quản lý footer</a></li>
          </ul>
        </li> -->
       
        <!-- <li><a href="backend/province"><i class="fa fa-gear" aria-hidden="true"></i> <span>Quản lý tỉnh/ thành phố</span></a></li> -->
         <!-- <li><a href="backend/district"><i class="fa fa-gear" aria-hidden="true"></i> <span>Quản lý quận/ huyện</span></a></li> -->
      </ul>
    </section>
</aside>