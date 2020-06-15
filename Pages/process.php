<?php
 include 'config.php';

 $update=false;
    // capturing data from form & working fine
    if (isset($_POST['add'])) {
        $pro_code   = $_POST['pro_code'];
        $pro_name   = $_POST['pro_name'];
        $pro_dim  = $_POST['pro_dim'];
        $price = $_POST['price'];
        $status = $_POST['status'];
        $pro_created = $_POST['pro_created'];
        $photo  = $_FILES['photo']['name'];
        $upload = "../../images/uploads/".$photo;
        

        // inserting to DB & its working
        $query = "INSERT INTO product_images(pro_code, pro_name, pro_dim, price, photo) VALUES(?,?,?,?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssss", $item, $cost, $price, $upload);
        $stmt->execute();
        move_uploaded_file($_FILES['photo']['tmp_name'], $upload);
        header('location:basic-table.php');
        $_SESSION['response']="Succesfully saved to database ";
        $_SESSION['res_type'] = "primary";
    }


    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        
        // deleting photo
        $sql ="SELECT photo FROM products WHERE ID=?";
        $stmt2 = $conn->prepare($sql);
        $stmt2->bind_param("i", $id);
        $stmt2->execute();
        $result2 =$stmt2->get_result();
        $row= $result2->fetch_assoc();

        $imagepath=$row['photo'];
        unlink($imagepath);


        // deleting data
        $query= "DELETE FROM products WHERE id=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        // Move to index and alert message on action
        header('location:basic-table.php');
        $_SESSION['response'] = "Successfully Removed from the database !";
        $_SESSION['res_type'] = "danger";
    }

    if(isset($_GET['edit'])){
        $id=$_GET['edit'];

        $query="SELECT * FROM products WHERE id=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result=$stmt->get_result();
        $row= $result->fetch_assoc();

        $id= $row['id'];
        $item= $row['item'];
        $cost = $row['cost'];
        $price = $row['price'];
        $photo = $row['photo'];


    $update = true;
    }

?>