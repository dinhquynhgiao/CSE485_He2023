<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Manarger</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
  <body>
    <div class="container">
        <h3 class="text-center text-uppercase text-success my-3">LIST OF EMPLOYEES</h3>
       <a class="btn btn-success" href="<?= DOMAIN.'/app/views/patient/add.php';?>">ADD</a>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Salary</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach($employee as $employees){
            ?>
            <tr>
                <th scope="row"><?= $employees->getEmployeeID();?></th>
                <td><?= $employees->getName();?></td>
                <td><?= $employees->getAddress();?></td>
                <td><?= $employees->getSalary();?></td>
                <td>
                    <a href="<?= DOMAIN.'/app/views/patient/edit.php?id='.$employees->getEmployeeID();?>"><i class="bi bi-pencil-square"></i></a>
                </td>
                <td>
                    <a href="<?= DOMAIN.'/app/views/patient/delete.php?id='.$employees->getEmployeeID();?>"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
     <?php 
            
        }
   
    ?>
  </tbody>
</table>
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>