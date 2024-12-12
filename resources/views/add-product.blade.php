@extends("layout")

@section("pageContent")

    <form method="POST" action= {{route('add.product')}}>

        @if($errors->any())
            <p>Error: {{$errors->first() }}</p>
       @endif

        {{csrf_field()}}

        <div class="mb-3">
            <input type="text"  name="name" class="form-control"  placeholder="Enter name a new product">
        </div>

            <select class="form-select form-select-lg mb-3" name="type" aria-label=".form-select-lg example">
                <option selected>Select type</option>
                <option value="Cold appetizer">Cold appetizer</option>
                <option value="Warm appetizer">Warm appetizer</option>
                <option value="Main course">Main course</option>
                <option value="Desert">Desert</option>
            </select>

        <div class="form-floating">
            <textarea class="form-control" name="description"  placeholder="Enter a description"  style="height: 100px"></textarea>
            <label >Description</label>
        </div>
        <br>
        <button class="btn btn-primary">Add Product</button>
    </form>
@endsection
