<section>
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img
                src="{{ asset('images/123.jpg') }}"
                width="48"
                height="48"
                alt="User"
            />
        </div>
        @auth()
            
        
            <div class="info-container">
                <div
                    class="name"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                >
                    {{ auth()->user()->name }}
                </div>
                <div class="email">{{ auth()->user()->email }}</div>
                <div class="btn-group user-helper-dropdown">
                    <i
                        class="material-icons"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="true"
                        >keyboard_arrow_down</i
                    >
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="register/{{ auth()->user()->id }}/edit"
                                ><i class="material-icons">person</i
                                >Profile</a
                            >
                        </li>
                        <li role="separator" class="divider"></li>
                        
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    {{-- <a href="#" type="button" title="">LOGOUT</a> --}}
                                    <button type="submit" class="btn btn-default">Log Out</button>
                                </form>
                                {{-- <a href="#" title="">Logout</a> --}}
                            </li>
                        
                        {{-- <li>
                            <a href="javascript:void(0);"
                                ><i class="material-icons">input</i>Log Out</a
                            >
                        </li> --}}
                    </ul>
                </div>
            </div>
        @endauth
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="/dashboard">
                    <i class="material-icons">home</i>
                    <span>Home</span>
                </a>
            </li>
            {{-- <li class="{{ Request::is('dashboard/homepage') ? 'active' : '' }}">
                <a href="/dashboard/homepage">
                    <i class="material-icons">view_carousel</i>
                    <span>Homepage-Orang</span>
                </a>
            </li> --}}
            <li class="{{ Request::is('post_orang/crud*') ? 'active' : '' }}">
                <a href="/post_orang/crud">
                    <i class="material-icons">person</i>
                    <span>Kehilangan Seseorang</span>
                </a>
            </li>
            <li class="{{ Request::is('post_hewan') ? 'active' : '' }}">
                <a href="/post_hewan">
                    <i class="material-icons">pets</i>
                    <span>Kehilangan Hewan Peliharaan</span></span>
                </a>
            </li>
            
            {{-- <li class="{{ Request::is('post') ? 'active' : '' }}">
                <a href="/post">
                    <i class="material-icons">folder_shared</i>
                    <span>Riwayat</span>
                </a>
            </li> --}}
            {{-- <li>
                <a href="pages/helper-classes.html">
                    <i class="material-icons">layers</i>
                    <span>Helper Classes</span>
                </a>
            </li> --}}



            @can('admin')
                
            
            <li class="header">KHUSUS ADMIN</li>
            <li class="{{ Request::is('dashboard/all-orang') ? 'active' : '' }}">
                <a href="/dashboard/all-orang">
                    <i class="material-icons">dns</i>
                    <span>Seluruh Postingan Orang</span>
                </a>
            </li>
            
            <li class="{{ Request::is('dashboard/kategori') ? 'active' : '' }}">
                <a href="/dashboard/kategori">
                    <i class="material-icons">view_list</i>
                    <span>Kategori</span>
                </a>
            </li>
            
            <li class="{{ Request::is('dashboard/daftar_user') ? 'active' : '' }}">
                <a href="/dashboard/daftar_user">
                    <i class="material-icons">people</i>
                    <span>Daftar Pengguna</span>
                </a>
            </li>
            @endcan
            {{-- <li>
                <a href="javascript:void(0);">
                    <i class="material-icons col-red"
                        >donut_large</i
                    >
                    <span>Important</span>
                </a>
            </li> --}}
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2022
            <a href="javascript:void(0);"
                >Finden </a
            >.
            <div class="version"><b>Version: </b> 1.0.0</div>
        </div>
    </div>
    <!-- #Footer -->
</aside>
<!-- #END# Left Sidebar -->
<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs tab-nav-right" role="tablist">
        <li role="presentation" class="active">
            <a href="#skins" data-toggle="tab">SKINS</a>
        </li>
        <li role="presentation">
            <a href="#settings" data-toggle="tab">SETTINGS</a>
        </li>
    </ul>
    <div class="tab-content">
        <div
            role="tabpanel"
            class="tab-pane fade in active in active"
            id="skins"
        >
            <ul class="demo-choose-skin">
                <li data-theme="red" class="active">
                    <div class="red"></div>
                    <span>Red</span>
                </li>
                <li data-theme="pink">
                    <div class="pink"></div>
                    <span>Pink</span>
                </li>
                <li data-theme="purple">
                    <div class="purple"></div>
                    <span>Purple</span>
                </li>
                <li data-theme="deep-purple">
                    <div class="deep-purple"></div>
                    <span>Deep Purple</span>
                </li>
                <li data-theme="indigo">
                    <div class="indigo"></div>
                    <span>Indigo</span>
                </li>
                <li data-theme="blue">
                    <div class="blue"></div>
                    <span>Blue</span>
                </li>
                <li data-theme="light-blue">
                    <div class="light-blue"></div>
                    <span>Light Blue</span>
                </li>
                <li data-theme="cyan">
                    <div class="cyan"></div>
                    <span>Cyan</span>
                </li>
                <li data-theme="teal">
                    <div class="teal"></div>
                    <span>Teal</span>
                </li>
                <li data-theme="green">
                    <div class="green"></div>
                    <span>Green</span>
                </li>
                <li data-theme="light-green">
                    <div class="light-green"></div>
                    <span>Light Green</span>
                </li>
                <li data-theme="lime">
                    <div class="lime"></div>
                    <span>Lime</span>
                </li>
                <li data-theme="yellow">
                    <div class="yellow"></div>
                    <span>Yellow</span>
                </li>
                <li data-theme="amber">
                    <div class="amber"></div>
                    <span>Amber</span>
                </li>
                <li data-theme="orange">
                    <div class="orange"></div>
                    <span>Orange</span>
                </li>
                <li data-theme="deep-orange">
                    <div class="deep-orange"></div>
                    <span>Deep Orange</span>
                </li>
                <li data-theme="brown">
                    <div class="brown"></div>
                    <span>Brown</span>
                </li>
                <li data-theme="grey">
                    <div class="grey"></div>
                    <span>Grey</span>
                </li>
                <li data-theme="blue-grey">
                    <div class="blue-grey"></div>
                    <span>Blue Grey</span>
                </li>
                <li data-theme="black">
                    <div class="black"></div>
                    <span>Black</span>
                </li>
            </ul>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="settings">
            <div class="demo-settings">
                <p>GENERAL SETTINGS</p>
                <ul class="setting-list">
                    <li>
                        <span>Report Panel Usage</span>
                        <div class="switch">
                            <label
                                ><input
                                    type="checkbox"
                                    checked /><span
                                    class="lever"
                                ></span
                            ></label>
                        </div>
                    </li>
                    <li>
                        <span>Email Redirect</span>
                        <div class="switch">
                            <label
                                ><input type="checkbox" /><span
                                    class="lever"
                                ></span
                            ></label>
                        </div>
                    </li>
                </ul>
                <p>SYSTEM SETTINGS</p>
                <ul class="setting-list">
                    <li>
                        <span>Notifications</span>
                        <div class="switch">
                            <label
                                ><input
                                    type="checkbox"
                                    checked /><span
                                    class="lever"
                                ></span
                            ></label>
                        </div>
                    </li>
                    <li>
                        <span>Auto Updates</span>
                        <div class="switch">
                            <label
                                ><input
                                    type="checkbox"
                                    checked /><span
                                    class="lever"
                                ></span
                            ></label>
                        </div>
                    </li>
                </ul>
                <p>ACCOUNT SETTINGS</p>
                <ul class="setting-list">
                    <li>
                        <span>Offline</span>
                        <div class="switch">
                            <label
                                ><input type="checkbox" /><span
                                    class="lever"
                                ></span
                            ></label>
                        </div>
                    </li>
                    <li>
                        <span>Location Permission</span>
                        <div class="switch">
                            <label
                                ><input
                                    type="checkbox"
                                    checked /><span
                                    class="lever"
                                ></span
                            ></label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>
<!-- #END# Right Sidebar -->
</section>
