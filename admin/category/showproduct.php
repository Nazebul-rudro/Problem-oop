<section class="px-5" style="padding:0 200px;">

<div class="px-5">
    <div class="pt-3">
        <a href="/product/inc/addButton.php" class="btn btn-success">Add Product</a>
    </div>
<table id="example" class="table table-striped mt-4" style="width:100%">
        <thead>
            <tr>
                <th>SL</th>
                <th>Book Name</th>
                <th>Athor Name</th>
                <th>Product Quantity</th>
                <th>Price</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Good person</td>
                <td>Mohiuddin khan alongir</td>
                <td>20</td> 
                <td>100</td>
                <td class="d-flex justify-content-center">
                    <form action="update.php" method="post" class="mx-2">
                        <input type="submit" value="Update" class="btn btn-warning">
                    </form>
                    <form action="" method="post" class="mx-2">
                        <input type="submit" value="Deleted" class="btn btn-danger">
                    </form>
                </td>
            </tr>
            
        </tbody>
        <tfoot>
            <tr>
                <th>SL</th>
                <th>Book Name</th>
                <th>Athor Name</th>
                <th>Product Quantity</th>               
                <th>Price</th>
                <th class="text-center">Action</th>
            </tr>
        </tfoot>
    </table>
</div>



</section>