@extends("layout")

@section("title")
    Menu
@endsection

@section("pageContent")
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Type</th>
            <th scope="col">Description</th>
        </tr>
        </thead>
        <tbody>
        @foreach($allProducts as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->type }}</td>
                <td>{{ $product->description }}</td>
            </tr>
                @endforeach
        </tbody>
    </table>
@endsection
