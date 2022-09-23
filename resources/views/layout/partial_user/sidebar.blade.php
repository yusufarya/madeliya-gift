<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="/dashboard">
                <i class="mdi mdi-view-dashboard menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        @foreach ($menu as $m)
        <li class="nav-item nav-category">{{$m->title}}</li>
            @foreach($submenu as $sm)
                @if($m->id == $sm->menu_id)
                <?php 
                $url = $sm->url;
                $kategori = '';
                $arrow = '';
                if ($sm->category == 'Y') { 
                    $kategori = $sm->name;
                    $arrow = "<i class='menu-arrow'></i>";
                }
                ?>
                <li class="nav-item">
                    @if($kategori != '')
                    <a class="nav-link" data-bs-toggle="collapse" href="#{{$kategori}}" aria-expanded="false" aria-controls="{{$kategori}}">
                    @else
                    <a class="nav-link" href="{{ $url }}">
                    @endif
                        <i class="mdi {{$sm->icon}} menu-icon"></i>
                        <span class="menu-title">{{ $sm->name }}</span>
                        <?= $arrow ?>
                    </a>
                    @if($kategori != '')
                    <div class="collapse" id="{{$kategori}}">
                        <ul class="nav flex-column sub-menu"> 
                        @if(count($category) > 0)
                            @foreach($category as $c) 
                                <li class="nav-item"> 
                                    <a class="nav-link" href="{{ $c->url }}">{{ $c->name }}</a>
                                </li> 
                            @endforeach
                        @endif
                        </ul>
                    </div>
                    @endif
                </li>
                @endif
            @endforeach
        @endforeach 
    </ul>
</nav>