<aside>
<div id="sidebar" class="nav-collapse">
<div class="leftside-navigation">
<ul class="sidebar-menu" id="nav-accordion">
<li>
<a href="{{ url('admin') }}" class="{{ Request::is('admin') ? 'active' : '' }}">
<i class="fa fa-dashboard"></i>
<span>Dashboard</span>
</a>
</li>
<li class="sub-menu">
<a href="javascript:;" class="{{ Request::is('admin/category/*') ? 'active' : '' }}">
<i class="fa fa-book"></i>
<span>Categories</span>
</a>
<ul class="sub">
<li class="{{ Request::is('admin/category/allcategories') ? 'active' : '' }}"><a href="{{url('admin/category/allcategories')}}">Parent Categories</a></li>
<li class="{{ Request::is('admin/category/allsubcategories') ? 'active' : '' }}"><a href="{{url('admin/category/allsubcategories')}}">Sub Categories</a></li>
</ul>
</li>
<li class="sub-menu">
<a href="javascript:;" class="{{ Request::is('admin/product/*') ? 'active' : '' }}">
<i class="fa fa-book"></i>
<span>Products</span>
</a>
<ul class="sub">
<li class="{{ Request::is('admin/product/allproducts') ? 'active' : '' }}"><a href="{{url('admin/product/allproducts')}}">All Products</a></li>
<li class="{{ Request::is('admin/product/allproofs') ? 'active' : '' }}"><a href="{{url('admin/product/allproofs')}}">Products Proofs</a></li>
<li class="{{ Request::is('admin/product/allaccessories') ? 'active' : '' }}"><a href="{{url('admin/product/allaccessories')}}">Products Accessories</a></li>
<li class="{{ Request::is('admin/product/allwarranty') ? 'active' : '' }}"><a href="{{url('admin/product/allwarranty')}}">Products Warranty</a></li>
</ul>
</li>
<li class="sub-menu">
<a href="javascript:;" class="{{ Request::is('admin/variation/*') ? 'active' : '' }}">
<i class="fa fa-book"></i>
<span>Products Variation</span>
</a>
<ul class="sub">
<li class="{{ Request::is('admin/variation/allvariationcategories') ? 'active' : '' }}"><a href="{{ url('admin/variation/allvariationcategories') }}">Products Variation Category</a></li>
<li class="{{ Request::is('admin/variation/allproductvariation') ? 'active' : '' }}"><a href="{{ url('admin/variation/allproductvariation') }}">Products Variation</a></li>
</ul>
</li>
<li>
<a href="{{ url('admin/resellercode/allresellercode') }}" class="{{ Request::is('admin/resellercode/*') ? 'active' : '' }}">
<i class="fa fa-user"></i>
<span>Reseller Code</span>
</a>
</li>
<li>
<a href="{{ url('admin/profile') }}" class="{{ Request::is('admin/profile') ? 'active' : '' }}">
<i class="fa fa-user"></i>
<span>Profile</span>
</a>
</li>
<li>
<a href="{{ url('admin/logout') }}">
<i class="fa fa-power-off"></i>
<span>Signout </span>
</a>
</li>
</ul>            
</div>
</div>
</aside>