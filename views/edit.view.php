<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Update Record</h2>
                    <p>Please edit the input values and submit to update the employee record.</p>
                    <form action="/" method="POST">
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="form-group">
                            <label>Name</label>
                            <input
                            type="text"
                            name="name"
                            class="form-control <?= (!empty($name_err)) ? 'is-invalid' : ''; ?>"
                            value="<?= $employee['name'] ?? $name; ?>"
                            placeholder='Enter the name of the employee'>
                            <span class="invalid-feedback"><?= $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea
                            name="address"
                            class="form-control <?= (!empty($address_err)) ? 'is-invalid' : ''; ?>"
                            placeholder='Enter the address'
                            ><?= $employee['address'] ?? $address; ?></textarea>
                            <span class="invalid-feedback"><?= $address_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Salary</label>
                            <input
                            type="text"
                            name="salary"
                            class="form-control <?= (!empty($salary_err)) ? 'is-invalid' : ''; ?>"
                            value="<?= $employee['salary'] ?? $salary; ?>"
                            placeholder='Enter the salary'>
                            <span class="invalid-feedback"><?= $salary_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?= $id; ?>"/>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="/" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>