<html>
     <head>
          <title> Patient Registration Form </title>
          <link rel="stylesheet" type ="text/css" href="./Patient Registration Form.css">
     </head>
     <body>
          <div class=" Registration ">
               <h1> Patient Registration Form </h1>
               <form Method="POST" action="Registrationnn.php" onsubmit="return validation()" >
                    <p> Patient Full Name:</p>
                    <input type="text" Name="Patient_Full_Name" placeholder=" Patient Full Name" id ="Patient_Full_Name" >
                    <p> Contact Details:</p>

                    <input type="text" name='Contact_Details' placeholder='Contact Details'  id ='Contact_Details'>
                    <p> Other Contact Details:</p>
                    <input type="text"  placeholder=" Other Contact Details"  Name="Other_Contact_Details" id="Other_Contact_Details">
                    <p> Ward:</p>
                    <input type="text" Name="Ward" placeholder="Ward" id="Ward">
                    <p> Room no:</p>
                    <input type="text" Name="Room_no" placeholder="Room no" id="Room_no" >
                 
                    <button type="submit"> Submit </button>
          
               </form>
          </div>
          <script>

          function validation()
          {
               var id= document.f1.user.value;
               var id= document.f1.user.value;
               if(id.length==""&&ps.lengthe==""){
                    alert("Required fields are empty");
                    return false;
                    else arguments{
                         if(id.length==""){
                              alert("Username is empty");
                              return false;
                         }
                    }
                         }
                   
                    }
          
          
          </script>
     </body>
</html>