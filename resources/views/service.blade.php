@extends("layout")

@section("title")
    Service
@endsection

@section("pageContent")
    <table class="table">
        <thead>
        <tr>

            <th class="table-success" scope="col">Type of cooking</th>
            <th class="table-success" scope="col">Number of people</th>
            <th class="table-success" scope="col">Price</th>


        </tr>
        </thead>
        <tbody>
        @foreach($allType as $type)
            <tr>

                <td  >{{ $type->typeOfCooking }}</td>
                <td  >{{ $type->numberOfPeople }}</td>
                <td>{{ $type->price }}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

