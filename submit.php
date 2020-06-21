<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
         
        $to = "rohan.kadam.5011@gmail.com"; // You can change here your Email
        $subject = "'$name' has sent an enquiry"; // This is your subject
         
        // HTML Message Starts here
        $message ="
        <html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>Name: </strong></td>
                            <td style='width:400px'>$name</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Email ID: </strong></td>
                            <td style='width:400px'>$email</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Mobile No: </strong></td>
                            <td style='width:400px'>$subject</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Message: </strong></td>
                            <td style='width:400px'>$message</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>
        ";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
        $headers .= 'From: Admin <rohan.kadam.5011@gmail.com>' . "\r\n"; 
     //   $headers .= 'Cc: info@websapex.com' . "\r\n"; 
     //   $headers .= 'Bcc: boss@websapex.com' . "\r\n"; 
         
        if(mail($to,$subject,$message,$headers)){
        
            echo "<script>
                    alert('Mail has been sent Successfully.');
                </script>";
        }
 
        else{
           
            echo "<script>
                    alert('EMAIL FAILED');
                </script>";
        }
    }
?>