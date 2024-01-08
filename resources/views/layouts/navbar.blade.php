<nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">

            
            
                    <!-- Topbar Navbar -->
                    <div class="head-navbar">
                        <h2 class="text-white">UNS News</h2>
                    </div>

                    @guest
                    <div>
                        <a href="/login">                       
                            <button class="btn-header btn-primary-header" >
                            Masuk 
                            </button>
                        </a>
                    
                    </div> 
                    @endguest
                    
                        
                    <ul class="navbar-nav navbar">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            @auth
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-solid fa-bars mr-2"></i>
                                <span class="mr-2 d-none d-lg-inline text-white  ">Menu</span>
                            </a>
                            @endauth

                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-left shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                @canany(['admin', 'bendahara', 'user'])
                                <a class="dropdown-item" href="/profil">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil
                                </a>
                                <div class="dropdown-divider"></div>

                                @endcanany

                                @can('user')
                                <a class="dropdown-item" href="/draft/create">
                                    <i class="fas fa-file fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Buat Postingan
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/draft">
                                    <i class="fas fa-book fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Draft
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/postinganku">
                                    <i class="fas fa-cloud fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Postinganku
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/dompet">
                                    <i class="fas fa-wallet fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Dompet
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/withdraw">
                                    <i class="fas fa-dollar-sign fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Withdraw
                                </a>
                                <div class="dropdown-divider"></div>
                                @endcan

                                @can('admin')
                                <a class="dropdown-item" href="/daftar-berita">
                                    <i class="fas fa-newspaper fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Review Berita
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/withdraw-request">
                                    <i class="fas fa-dollar-sign fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Withdraw Req
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/iklan">
                                    <i class="fas fa-tv fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Setting Iklan
                                </a>
                                <div class="dropdown-divider"></div>
                                @endcan

                                @can('bendahara')
                                <a class="dropdown-item" href="/request-withdraw">
                                    <i class="fas fa-dollar-sign fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Req Withdraw
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/uang-masuk">
                                    <i class="fas fa-money-bill fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Uang Masuk
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/uang-keluar">
                                    <i class="fas fa-money-bill-wave fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Uang Keluar
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/laporan">
                                    <i class="fas fa-flag fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Laporan
                                </a>
                                <div class="dropdown-divider"></div>
                                @endcan

                                @canany(['admin', 'bendahara', 'user'])
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Keluar
                                </a>
                                @endcanany
                            </div>
                        </li>

                        <div class="head-navbar2">
                            <a class="text-white " href="/home">                       
                                Politik 
                            </a>
                        </div>
                        <div class="head-navbar2">
                            <a class="text-white " href="/home">                       
                                Dunia 
                            </a>
                        </div>
                        <div class="head-navbar2">
                            <a class="text-white " href="/home">                       
                                Ekonomi 
                            </a>
                        </div>
                        <div class="head-navbar2">
                            <a class="text-white " href="/home">                       
                                Sains & Teknologi 
                            </a>
                        </div>
                        <div class="head-navbar2">
                            <a class="text-white " href="/home">                       
                                Bisnis 
                            </a>
                        </div>
                        <div class="head-navbar2">
                            <a class="text-white " href="/home">                       
                                Travel 
                            </a>
                        </div>
                        <div class="head-navbar2">
                            <a class="text-white " href="/home">                       
                                Iklim 
                            </a>
                        </div>
                     
                    </ul>
                    <div class="input-group-header mb- head-navbar2">
                        <form action="/pencarian" method="post" class="row">
                            @csrf
                            <input type="text" class="form-control col" placeholder="Cari Kata Kunci" name="cari" width="10000">
                            <div class="input-group-header-append col">
                                <a  ><button class="btn-header btn-primary-header" type="submit">Cari</button>  </a>
                            </div>
                        </form>
                      </div>

                      @auth
                      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title font-weight-bold text-primary" id="exampleModalLabel" >Keluar?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">Apakah Anda yakin ingin keluar?</div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                                        <a class="btn btn-primary" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Keluar</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                      </div>
                      @endauth
                </nav>