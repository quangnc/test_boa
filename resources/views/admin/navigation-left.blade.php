<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('getDashboard')}}" class="brand-link">
        <img src="{{ asset('interface/admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">VACI Dashboard</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('interface/admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                     alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('getDashboard')}}" class="nav-link">
                        <i class="nav-icon fa fa-dashboard"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin-contact.index')  }}" class="nav-link">
                        <i class="nav-icon fa fa-envelope"></i>
                        <p>Contact</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('partner.index')  }}" class="nav-link">
                        <i class="nav-icon fa fa-envelope"></i>
                        <p>Partner</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('slide.index')  }}" class="nav-link">
                        <i class="nav-icon fa fa-envelope"></i>
                        <p>Slide</p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('page.index')  }}" class="nav-link">
                        <i class="nav-icon fa fa-edit"></i>
                        <p>Pages</p>
                    </a>
                </li> --}}
                
                {{-- <li class="nav-header">Category</li>
                <li class="nav-item">
                    <a href="{{ route('blog-category.index')  }}" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Category</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('blog-post.index')  }}" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Category Description</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('blog-post.index')  }}" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Category Description Item</p>
                    </a>
                </li> --}}

                <li class="nav-header">BLOG</li>
                <li class="nav-item">
                    <a href="{{ route('blog-category.index')  }}" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Blog Category</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('blog-post.index')  }}" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Blog Post</p>
                    </a>
                </li>

                <li class="nav-header">Products</li>
                <li class="nav-item">
                    <a href="{{ route('product.index')  }}" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Product</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('application-form.index')  }}" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Application Form</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('document.index')  }}" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Document</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('data-product.index')  }}" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Data Product</p>
                    </a>
                </li>

                

                <li class="nav-header">DESIGN</li>
                <li class="nav-item">
                    <a href="{{ route('module.index')  }}" class="nav-link">
                        <i class="nav-icon fa fa-th-list"></i>
                        <p>Module</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('layout.index')  }}" class="nav-link">
                        <i class="nav-icon fa fa-desktop"></i>
                        <p>Layout</p>
                    </a>
                </li>
                <li class="nav-header">SYSTEM</li>
                <li class="nav-item">
                    <a href="{{ route('setting.index')  }}" class="nav-link">
                        <i class="nav-icon fa fa-cog"></i>
                        <p>Setting</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>