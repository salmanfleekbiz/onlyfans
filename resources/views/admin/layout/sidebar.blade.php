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