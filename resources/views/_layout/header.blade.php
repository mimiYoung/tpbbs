<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a href="#" class="navbar-brand">ThinkPHP 入门教程</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a href="{{ url('welcome/index/home') }}" class="nav-link">主页
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('welcome/index/help') }}" class="nav-link">帮助</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('welcome/index/about') }}" class="nav-link">关于</a>
                    </li>
                </ul>
                <a href="{{ url('user/auth/create') }}" class="btn btn-outline-success my-2 my-sm-0">注册</a>
            </div>
        </div>
    </nav>
</header>