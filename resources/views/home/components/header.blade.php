<div class="header">
    <div class="header1 row">
        <div class="header-left col-sm-6">
            <img src="{{asset("/images/logo.svg")}}">
            <span class="search">
            <i class="bi bi-search"></i>
            <input name="txtSearch" placeholder="Search"/>
        </span>
        </div>
        <div class="header-right col-sm-6">
            <div class="login">
                <i class="bi bi-person-fill"></i>
                <span>Sign In</span>
                <span class="login-nav">
                <i class="bi bi-caret-down-fill" onclick="loginShowHide(this)"></i>
                <ul class="login-menu">
                    <li>
                        <a href="">Login</a>
                    </li>
                    <li>
                         <a href="">Logout</a>
                    </li>
                </ul>
            </span>

            </div>
        </div>
    </div>
    <div class="header2">
        <ul class="menu-top">
            <li class="active menuParent"><a href="#">Giầy nam</a></li>
            <li class="menuParent">
                <a href="javascript:void(0);" onclick="showMenuChild(this)">Giầy nam</a>
                <ul class="menuChild">
                    <li><a href="#">Nam 1</a></li>
                    <li><a href="#">Nam 1</a></li>
                    <li><a href="#">Nam 1</a></li>
                    <li><a href="#">Nam 1</a></li>
                </ul>
            </li>
            <li class="menuParent"><a href="#">Giầy nam</a></li>
            <li class="menuParent"><a href="#">Giầy nam</a></li>
            <li class="menuParent"><a href="#">Giầy nam</a></li>
        </ul>
    </div>
</div>
