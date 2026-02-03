@extends("layout")

@section("title")
    Menu
@endsection

@section("pageContent")

    <div id="menuBanner">
        <h1 class="page-title">Our Menu Experience</h1>
    </div>

    <div class="menus-wrapper">
        @foreach($menus as $menu)
            <section class="menu-card">
                <div class="menu-text">
                    <h2>{{ $menu->title }}</h2>
                    <p class="menu-desc">{{ $menu->description }}</p>

                    <ul class="menu-highlights">
                        @foreach($menu->highlights as $highlight)
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                {{ $highlight }}
                            </li>
                        @endforeach
                    </ul>

                    <a href="#" class="viewMenuBtn">Explore Menu</a>
                </div>

                <div class="menu-image"
                     style="background-image: url('{{ asset('img/menu-bg.png') }}')">
                </div>
            </section>
        @endforeach
    </div>

@endsection
