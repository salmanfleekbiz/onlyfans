<div class="col-md-3">
<div class="dashboard-search">
<input type="text" placeholder="Search here..." />
</div>
<div class="recommeded-profile-post">
<div class="recommended-title">
<p>RECOMMENDED FOR YOU</p>
</div>
<div class="recomment-posts">
<div class="owl-carousel owl-theme">
<div class="item">
<div class="recommented-post-col-1">
<img src="{{ asset('frontassets/images/dash-img1.png') }}" alt="" />
</div>
<div class="recommented-post-col-1">
<img src="{{ asset('frontassets/images/dash-img2.png') }}" alt="" />
</div>
<div class="recommented-post-col-1">
<img src="{{ asset('frontassets/images/dash-img3.png') }}" alt="" />
</div>
<div class="recommented-post-col-1">
<img src="{{ asset('frontassets/images/dash-img4.png') }}" alt="" />
</div>
</div>
<div class="item">
<div class="recommented-post-col-1">
<img src="{{ asset('frontassets/images/dash-img1.png') }}" alt="" />
</div>
<div class="recommented-post-col-1">
<img src="{{ asset('frontassets/images/dash-img2.png') }}" alt="" />
</div>
<div class="recommented-post-col-1">
<img src="{{ asset('frontassets/images/dash-img3.png') }}" alt="" />
</div>
<div class="recommented-post-col-1">
<img src="{{ asset('frontassets/images/dash-img4.png') }}" alt="" />
</div>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
jQuery(document).ready(function($) {
$('.owl-carousel').owlCarousel({
items: 1,
lazyLoad: true,
loop: true,
navigation:true,
margin: 10
});
});
</script>