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
                <li class="nav-item has-treeview {{ Request::is('dashboard/hotel/*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-hotel"></i>
                        <p>
                            Hotel Management
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('hotel.index') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Hotels</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('property-facility-group.index')  }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Property Facilities Group</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('property-facility.index')  }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Property Facilities</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Hotel Type</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('room.index')  }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Rooms</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('room-bed-type.index')  }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Room Bed Type</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('room-facility-group.index')  }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Room Facilities Group</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('room-facility.index')  }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Room Facilities</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('room-type.index')  }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Room Type</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('review.index')  }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Review</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{--  tour  --}}
                <li class="nav-item has-treeview {{ Request::is('dashboard/tour/*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-hotel"></i>
                        <p>
                            Tour Management
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('tour.index') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Tour</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('tour-type.index')  }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Tour Type</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('tour-duration.index')  }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Tour Duration</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('destination.index')  }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Destination</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('tour-review.index')  }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Tour Review</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{--  end  tour  --}}
                {{--  Cruise  --}}
                <li class="nav-item has-treeview {{ Request::is('dashboard/cruise/*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-hotel"></i>
                        <p>
                            Cruise Management
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('cruise.index') }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Cruise</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('cruise-review.index')  }}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Cruise Review</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{--  End Cruise  --}}
                <li class="nav-item">
                    <a href="{{ route('booking.index')  }}" class="nav-link">
                        <i class="nav-icon fa fa-envelope"></i>
                        <p>Booking Management</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('admin-contact.index')  }}" class="nav-link">
                        <i class="nav-icon fa fa-envelope"></i>
                        <p>Contact</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('page.index')  }}" class="nav-link">
                        <i class="nav-icon fa fa-edit"></i>
                        <p>Pages</p>
                    </a>
                </li>
                
                <li class="nav-header">SLIDE</li>
                <li class="nav-item">
                    <a href="{{ route('slide.index')  }}" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Slide</p>
                    </a>
                </li>

                <li class="nav-header">Category</li>
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