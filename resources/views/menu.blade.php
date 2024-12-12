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
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($allProducts as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->type }}</td>
                <td>{{ $product->description }}</td>
                <td>
                    <a type="button" class="btn btn-primary">Edit</a>
                    <a href="/admin/delete-product/{{$product->id}}" type="button" class="btn btn-danger">Delete</a>
                </td>
            </tr>
                @endforeach
        </tbody>
    </table>
@endsection
