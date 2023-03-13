<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
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
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="/" method="POST">
                        <div class="form-group">
                            <label>Name</label>
                            <input
                            type="text"
                            name="name"
                            class="form-control <?= (!empty($name_err)) ? 'is-invalid' : ''; ?>"
                            value="<?= $name ?? ''; ?>"
                            placeholder='Enter the name of the employee'>
                            <span class="invalid-feedback"><?= $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea
                            name="address"
                            class="form-control <?= (!empty($address_err)) ? 'is-invalid' : ''; ?>"
                            placeholder='Enter the address'
                            ><?= $address ?? ''; ?></textarea>
                            <span class="invalid-feedback"><?= $address_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Salary</label>
                            <input
                            type="text"
                            name="salary"
                            class="form-control <?= (!empty($salary_err)) ? 'is-invalid' : ''; ?>"
                            value="<?= $salary ?? ''; ?>"
                            placeholder='Enter the salary'>
                            <span class="invalid-feedback"><?= $salary_err;?></span>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button> 
                        <a href="/" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>