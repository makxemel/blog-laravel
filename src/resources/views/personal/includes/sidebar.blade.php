<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-header">
                    <a href="{{ route('personal.main.index')}}">to Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('personal.liked.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-solid fa-heart"></i>
                        <p>
                            Liked Posts
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('personal.comment.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-solid fa-comment"></i>
                        <p>
                            Comments
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
</aside>