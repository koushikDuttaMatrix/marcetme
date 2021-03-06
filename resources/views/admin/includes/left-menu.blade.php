<!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ url('admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <!--<form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>-->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="{{action('admin\HomeController@index')}}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
              </a>              
            </li>
         

			<li class="treeview ">
              <a href="Javascript:void(0);">
					<i class="fa fa-users"></i>
					<span>Manage All Users</span>
					<i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-th-list"></i>View All Users</a></li>                           
              </ul>
            </li>
			
			<li class="treeview">
              <a href="Javascript:void(0);">
					<i class="fa fa-cogs"></i>
					<span>Manage Categories</span>
					<i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('admin/category/') }}"><i class="fa fa-th-list"></i>List All</a></li>
                <li><a href="{{ url('admin/category/add/') }}"><i class="fa fa-circle-o"></i> Add New</a></li>               
              </ul>
            </li>

            <li class="treeview">
              <a href="Javascript:void(0);">
          <i class="fa fa-check"></i>
          <span>Manage Business Success</span>
          <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('admin/successes/') }}"><i class="fa fa-th-list"></i>List All</a></li>
                <li><a href="{{ url('admin/success/add/') }}"><i class="fa fa-circle-o"></i> Add New</a></li>               
              </ul>
            </li>
			
			<li class="treeview">
              <a href="Javascript:void(0);">
					<i class="fa fa-comment-o"></i>
					<span>Manage Articles</span>
					<i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('admin/articles/') }}"><i class="fa fa-th-list"></i>List All</a></li>
                <li><a href="{{ url('admin/article/add/') }}"><i class="fa fa-circle-o"></i> Add New</a></li>               
              </ul>
            </li>
	
			<li class="treeview">
              <a href="Javascript:void(0);">
					<i class="fa fa-comments"></i>
					<span>Manage Blogs</span>
					<i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('admin/blogs/') }}"><i class="fa fa-th-list"></i>List All</a></li>
                <li><a href="{{ url('admin/blog/add/') }}"><i class="fa fa-circle-o"></i> Add New</a></li>               
              </ul>
            </li>
			
			<li class="treeview">
              <a href="Javascript:void(0);">
					<i class="fa fa-calendar"></i>
					<span>Manage CMS Pages</span>
					<i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('admin/cms') }}"><i class="fa fa-th-list"></i>List All</a></li>
                <!--<li><a href="{{ url('admin/cms/add') }}"><i class="fa fa-circle-o"></i> Add New</a></li> -->              
              </ul>
            </li>

            <li>
            <a href="{{ url('admin/generalMessage/edit/1') }}"><i class="fa fa-envelope"></i><span>General Message</span></a>
            </li>

             
             <li><a href="#"><i class="fa fa-key"></i><span>Change Password</span></a></li>
			 <li><a href="{{ url('admin/auth/logout') }}"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->