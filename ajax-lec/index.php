<!DOCTYPE html>
<html>
<head>
    <title>AJAX</title>
    <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="script.js"></script>
    <style type="text/css">
        .addbtn{
            float: right; 
        }
    </style>
</head>
<body class="bg-secondary">

<div id="addModal" class="modal fade card-body" style="color:black !important;" >
  <div class="modal-dialog  modal modal-dialog-centered" role="document">
    <div class="modal-content justify">
      <div class="modal-header">
        <h3>Add User</h3>
      </div>
      <div class="modal-body">
        <form id="addForm" method="post">
        <div class="form-group">
            <input type="number" name="id" placeholder="ID" class="form-control" required>
        </div>
        <div class="form-group">
            <input type="text" name="name" placeholder="Name" class="form-control" required>
        </div>
        <div class="form-group">
            <input type="number" name="age" placeholder="Age" class="form-control" required>
        </div>
        <div class="form-group">
            <input type="text" name="course" placeholder="Course" class="form-control" required>
        </div>
        <div class="form-group">
            <center><button type="submit" class="create btn btn-success form-control col-md-3">Create</button></center>
        </div>
        </form>
      </div>     
    </div>
  </div>
</div>

<div class="container mb-3 mt-3">
    <div class="card">
        <div class="card-header">
            <h4>Activity: AJAX</h4>
        </div>
        <div class="card-body">
            <div id="viewRecords">
                <div class="row m-auto">
                    <div class=""> 

                    <form id="editForm">
                        <h4>Edit</h4>
                        <div class="form-row">
                        <div class="form-group col-md-2">
                            <input type="number" name="id" placeholder="ID" class="form-control mb-3 mt-3">
                        </div>

                        <div class="form-group col-md-2">
                            <input type="text" name="name" placeholder="Name" class="form-control mb-3 mt-3">
                        </div>

                        <div class="form-group col-md-2">
                            <input type="number" name="age" placeholder="Age" class="form-control mb-3 mt-3">
                        </div>

                        <div class="form-group col-md-2">
                            <input type="text" name="course" placeholder="Course" class="form-control mb-3 mt-3">
                        </div>

                        <div class="form-group col-md-2">
                            <button type="submit" class="save btn btn-info mb-3 mt-3">Save</button>
                        </div>  
                        </div>
                    </form>

                    </div>
                    <div class="card">
                    <div class="card-header">
                        <a href="#addModal" class="addbtn btn btn-success" role="button" data-toggle="modal">+ Add</a>
                    </div>
                    <table class="table table-bordered">
                         <thead class="bg-dark text-white">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Course</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">
               
                        </tbody>
                    </table> 
                    </div>

                </div>
            </div>
        </div>
    </div>
    
</div>

    <div class="container mb-3 mt-3">
    <!-- <form id="addForm" method="post">
        <h3>Add</h3>
        <input type="number" name="id" placeholder="ID">
        <input type="text" name="name" placeholder="Name">
        <input type="number" name="age" placeholder="Age">
        <input type="text" name="course" placeholder="Course">
        <button type="submit" class=" btn btn-success">Create</button>
    </form> -->

    <!-- <form id="editForm">
        <h3>Edit</h3>
        <input type="number" name="id" placeholder="ID">
        <input type="text" name="name" placeholder="Name">
        <input type="number" name="age" placeholder="Age">
        <input type="text" name="course" placeholder="Course">
        <button type="submit" class="btn btn-info">Update</button>
    </form> -->
    </div>

</body>

</html>