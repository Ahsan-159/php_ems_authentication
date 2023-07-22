<?php include ('actions/header.php');?>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header">   
                <h3 class="text-center">Login Here</h3>
                </div>
                <div class="card-body">
                    <form action="actions/login.php" method="POST">
                        <div class="form-group">
                            <label for="">E-Mail:</label>
                            <input type="text" name="email" id="" class="form-control" placeholder="E-Mail">
                        </div>
                        <div class="form-group">
                            <label for="">Password:</label>
                            <input type="password" name="password" id="" class="form-control" placeholder="Password">
                        </div>
                    
                </div>
                <div class="card-footer">
                        <button type="submit" class="btn btn-danger float-right">Login</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>


<?php include ('actions/footer.php');?>