
<div class="card">
    <header class="card-header">
        <p class="card-header-title">Products</p>
    </header>
    <div class="card-content">
        <div class="content">
            <table class="table is-hoverable" border="1">
                <thead class=" text-primary">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Stock</th>
                    <th colspan="3" align="center">Actions</th>

                </tr>
                </thead>
                <tbody>

                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id }}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->stock}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>


