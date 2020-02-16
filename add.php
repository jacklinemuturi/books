
<?php require_once "header2.php";
?>
<body class="body" style="margin-top:20px;background-size:cover;background-image:url(https://images.unsplash.com/photo-1476469476875-7407909cd861?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=752&q=80)">
    <div class="container">
        <div class="row">
            <div class="col col-3"></div>
            <div class="col col-6">
                <!-- Card -->
                <div class="card">
            <!-- Card body -->
                <div class="card-body"style="background-color:#c7c9c8;">
                    <form action="insert.php" method="post">
                        <p class="h4 text-center py-4">ADD NEW <span style="color:#536349">BOOK</span></p>
                      
                        <label>Your Name</label>
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" name="name" class="form-control" placeholder="Your Name">
                        <label>Book Name</label>
                            <!-- <i class="fa fa-user prefix grey-text"></i> -->
                            <input type="text" name="bookname" class="form-control" placeholder="Add Book Name">
                        <label>Author Name</label>
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" name="aname" class="form-control" placeholder="Author Name">
                            <label>Add ISBN/Serial</label>
                            <input type="text" name="isbn" class="form-control" placeholder="Add ISBN/Serial">
                        <label>Add book profile</label><br>
                            <input type="file" class="fileToUpload" id="fileToUpload" name="file" placeholder="Add book profile">
                        <label>Add Book Details</label><br>
                            <textarea  id="details" name="details" placeholder="Add book details"></textarea>
                        <div class="text-center py-4 ">
                            <button class="btn btn-success btn-block btn-rounded z-depth-1" type="submit" name="submit">ADD</button>
                        </div>
                        <p style="margin-left:150px;">Have an accout?<a href="#" class="create" name="acoount">create one</a></p>
                    </form>
                </div>
            </div>
        </div>
        <div class="col col-3"></div>
    </div>
<?php require_once "footer.php"?>