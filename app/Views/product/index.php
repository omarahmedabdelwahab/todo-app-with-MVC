<?php  include(VIEWS.'inc'.DS.'header.php'); ?>

<h1 class="text-center  my-5 py-3">View All Products </h1>

<div class="container">
    <div class="row">
        <!-- <div class="col-10 mx-auto p-4 border mb-5">
               
                    <h3 class="alert alert-success text-center"></h3>
               
                    <h3 class="alert alert-danger text-center"></h3> -->
               
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                   <?php foreach($products as $prod): ?>
                    <tr>
                    <td><?php echo $prod['id'];?></td>
                     <td><?=$prod['name'];?></td>
                     <td><?=$prod['price'];?> <b class="float-right"> $ </b></td>
                     <td><?=$prod['description'];?></td>
                     <td><?=$prod['qty'];?></td>
                     <td>
                         <a href="<?php url('product/edit/'.$prod['id']) ?>" class="btn btn-info" >Edit</a>
                     </td>
                     <td>
                         <a href="<?php url('product/delete/'.$prod['id']) ?>" class="btn btn-danger" >Delete</a>
                     </td>
                    </tr>
                    
                  
                 <?php endforeach; ?>
                
                       
                </tbody>
            </table>


        </div>
    </div>
</div>
<?php  include(VIEWS.'inc'.DS.'footer.php'); ?>