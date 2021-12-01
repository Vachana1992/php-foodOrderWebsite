<?php include('partials/menu.php') ?>
<div class="main">
    <div class="Wrapper">
        <h1>Add menu</h1><br>
        <form action="" method="post">
            <table class="tbl-30">
                <tr>
                   <td>Full Name:</td>  
                <td>
                    <input type="text" name="full_name" placeholder="Your full name"></td>                
            </tr>

                <tr>
                    <td>UserName: </td>
                    
                <td>
                    <input type="text" name="user_name" placeholder="Your User name"></td>
                </tr>

                <tr>
                    <td>Password: </td>
                <td>
                    <input type="password" name="pwd" placeholder="Password"></td>
                </tr>
                <tr colspan="2">
                    <td><input type="submit" value="Add-Admin" name="add_admin" class="btn-secondary"></td>
                </tr>
            </table>

        </form>
    </div>

</div>
<?php include('partials/footer.php') ?>

<?php 
    if(isset($_POST['submit']))
    {
       echo $full_name=$_POST['full_name'];
        $user_name=$_POST['user_name'];
        $pwd=md5($_POST['pwd']);

        $sql="insert into tbl_admin set
            full_name = '$full_name',
            user_name ='$user_name',
            pwd= '$pwd'
        ";
        $conn = mysqli_connect('localhost','root','c0770767@vach') or die(mysqli_error());
        $db_select = mysqli_select_db($conn,'foodorder') or die(mysqli_error());
        //$res = mysqli_query($conn,$sql) or die(mysqli_error());
    }
?>