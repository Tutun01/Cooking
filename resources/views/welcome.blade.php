@extends("layout")

@section("title")
    Dashboardpage
@endsection

@section("pageContent")

    <div id="banner"></div>

    <div id="procedure">

        <h2 class="section-title"> How it all works! </h2>

        <div class="steps">
            <div class="step">
                <i class="bi bi-egg-fried"></i>
                <h4>Choose a Service</h4>
                <p>Select the experience that fits your needs</p>
            </div>

            <div class="step">
                <i class="bi bi-calendar-check"></i>
                <h4>Pick a Date</h4>
                <p>Choose a date that works for you</p>
            </div>

            <div class="step">
                <i class="bi bi-person-workspace"></i>
                <h4>We Cook at Your Place</h4>
                <p>We prepare everything in your kitchen</p>
            </div>

            <div class="step">
                <i class="bi bi-stars"></i>
                <h4>Enjoy the Experience</h4>
                <p>Relax and enjoy premium dining</p>
            </div>
        </div>
    </div>

    <div id="service">
            <h2 class="section-title">Choose a Service</h2>
            <div class="services-wrapper">
                @foreach($services as $service)
                    <div class="service-card">
                        <img
                            src="{{ asset('img/' . ($service->id == 1 ? 'personal-chef.png' : 'event-evening.png')) }}"
                            alt="{{ $service->title }}">

                        <div class="service-content">
                            <h4>{{ $service->title }}</h4>
                            <p>{{ $service->description }}</p>
                        </div>
                        <a href="{{route('displayMenu')}}" class="menuBtn">View Menu</a>
                    </div>
                @endforeach
            </div>
    </div>
@endsection
