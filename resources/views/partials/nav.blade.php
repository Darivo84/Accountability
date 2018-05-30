<!-- PRIMARY NAV -->
<div id='cssmenu'>
<ul>
	<li><a href='/dashboard' class="home_dashboard"><img src="{{ asset('images/logowhite.png') }}"></a></li>
    <li class='last'><a href='{{ url('/') }}'><span>Home</span></a></li>
    <li id="news" class='has-sub'><a href='#'><span>News</span></a>
    	<ul>
            <li id="news_view_all"><a href='{{ url('admin/news') }}'><span>View All</span></a></li>
            <li id="news_view_all"><a href='{{ url('admin/news/create') }}'><span>Create New</span></a></li>
        </ul>
    </li>

    <li id="news" class='has-sub'><a href='#'><span>Users</span></a>
        <ul>
            <li id="news_view_all"><a href='{{ url('admin/users') }}'><span>View All</span></a></li>
            <li id="news_view_all"><a href='{{ url('admin/users/create') }}'><span>Create New</span></a></li>
        </ul>
    </li>


    <li class='last'><a href='{{ url('/logout') }}'><span>Logout</span></a></li>
</ul>
</div>