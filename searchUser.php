<html>
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body  style="background-image: url('movies-tiles.jpg');">
   <div class="container">
      <div class="jumbotron" style="font-size: 40px;background-color: #000000;">
         Pandora Movies Production
      </div>
      <div style="background-color: #E2E6EA">
      	<form method="post" action="/searchFirstName.php">
            <div class="form-group">
               <input type="text" class="form-control input-sm" name="first_name"placeholder="First Name" required />
            </div>
            <button type="submit" class="btn btn-secondary btn-lg">Search By First Name</button>
        </form>
        <form method="post" action="searchLastName.php">
            <div class="form-group">
               <input type="text" class="form-control input-sm" name="last_name" placeholder="Last Name" required />
            </div>
            <button type="submit" class="btn btn-secondary btn-lg">Search By Last Name</button>
        </form>
        <form method="post" action="searchEmail.php">
            <div class="form-group">
               <input type="email" class="form-control input-sm" name="email" placeholder="Email" required />
            </div>
            <button type="submit" class="btn btn-secondary btn-lg">Search By Email</button>
        </form>
        <form>
            <div class="form-group" action="searchPhone.php">
               <input type="number" class="form-control input-sm" name="cell_phone" placeholder="Cell Phone Number"/ required>
            </div>
            <button type="submit" class="btn btn-secondary btn-lg">Search By Phone Number</button>
         </form>
      </div>
  </div>
</body>
</html>