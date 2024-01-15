<div id="navigation">
    <!-- Navigation Menu-->
    <ul class="navigation-menu nav-light">
        <li><a href="{{ route('index') }}">خانه</a></li>
        @foreach ($categories as $category)
        <li><a href="{{ route('category.index',$category->id) }}">{{ $category->name }}</a></li>
        @endforeach
    </ul><!--end navigation menu-->
    <div class="buy-menu-btn d-none">
        <a href="login.html" target="_blank" class="btn btn-primary">ورود</a>
    </div><!--end login button-->
</div><!--end navigation-->