@extends("layout")

@section("title")
    Menu Items
@endsection

@section("pageContent")

    <div id="itemWrapper">
        <div id="menuTitle">
            <h2> {{ $menuId == 1 ? 'Mediterranean Menu' : 'Traditional Menu' }} </h2>
        </div>

        <div class="menu-section">
            <h3>Starters</h3>
            <ul>
                @forelse($starters as $item)
                    <li>
                        <span class="item-name">{{ $item->name }}</span>
                        <span class="item-price">{{ number_format($item->price, 2) }} €</span>
                    </li>
                @empty
                    <li>No starters available.</li>
                @endforelse
            </ul>
        </div>

        <div class="menu-section">
            <h3>Main Courses</h3>
            <ul>
                @foreach($mainCourses as $item)
                    <li>
                        <span class="item-name">{{ $item->name }}</span>
                        <span class="item-price">{{ number_format($item->price, 2) }} €</span>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="menu-section">
            <h3>Desserts</h3>
            <ul>
                @foreach($desserts as $item)
                    <li>
                        <span class="item-name">{{ $item->name }}</span>
                        <span class="item-price">{{ number_format($item->price, 2) }} €</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection

