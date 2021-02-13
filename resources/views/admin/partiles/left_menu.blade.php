
<div class="sidebar" id="sidebar">

    <div class="sidebar-inner slimscroll">
      <div id="sidebar-menu" class="sidebar-menu">
        <ul>
          <li> <a href="{{ route('admin.index') }}">Dashboard</a>  </li>
		  <!--
          <li> <a href="#">Basic Manage</a> </li>
		  -->
          
              <li><a class="{{ Request::is('admin/slider/create') ? 'active' : '' }}" href="{{ route('admin.slider.create') }}">Slide Manage</a></li>
              <li><a class="{{ Request::is('admin/subcategory/create') ? 'active' : '' }}" href="{{ route('admin.subcategory.create') }}"> Category Manage</a></li>
			  <li><a class="{{ Request::is('admin/product/create') ? 'active' : '' }}" href="{{ route('admin.product.create') }}">Service Manage</a></li>
			   <li><a class="{{ Request::is('admin/brand/create') ? 'active' : '' }}" href="{{ route('admin.brand.create') }}">Content Manage</a></li>
			   <li><a class="{{ Request::is('admin/blogcategory/create') ? 'active' : '' }}" href="{{ route('admin.blogcategory.create') }}"> Blog Category Manage</a></li>
			   <li><a class="{{ Request::is('admin/blogproduct/create') ? 'active' : '' }}" href="{{ route('admin.blogproduct.create') }}"> Blog Manage</a></li>
			   <li><a class="{{ Request::is('admin/our_team/create') ? 'active' : '' }}" href="{{ route('admin.our_team.create') }}">Our Team</a></li>
			   <li><a class="{{ Request::is('admin/client_reviews/create') ? 'active' : '' }}" href="{{ route('admin.client_reviews.create') }}">Client Reviews </a></li>

			   			 
			
              
			  
		  <!--
		  <li class="submenu"> <a href="#"><span> Order Manage</span> <span class="menu-arrow"></span></a>
            <ul class="list-unstyled" style="display: none;">
              <li><a href="#">New Order</a></li>
              <li><a href="#">Complete Order</a></li>
            </ul>
          </li>
		  -->
		  <li class="submenu"> <a href="#"><span>Admin Profile</span> <span class="menu-arrow"></span></a>
            <ul class="list-unstyled" style="display: none;">
              <li><a href="#">My  Profile</a></li>
			  <li><a href="#">Password  Change</a></li>
              <li><a href="#">
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" >
                    @csrf
                <input class="btn btn-danger" type="submit" value="Log Out"></input>
              </form>
              </a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
