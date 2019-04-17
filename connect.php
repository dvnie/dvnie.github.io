<?php 

$Player_Name=isset($_POST['Player_Name']) ? $_POST['Player_Name'] : '';
$Father_Name=isset($_POST['Father_Name']) ? $_POST['Father_Name'] : '';
$Mother_Name=isset($_POST['Mother_Name']) ? $_POST['Mother_Name'] : '';
$Gender=isset($_POST['Gender']) ? $_POST['Gender'] : '';
$Street_Address=isset($_POST['Street_Address']) ? $_POST['Street_Address'] : '';
$City=isset($_POST['City']) ? $_POST['City'] : '';
$Phone_Number=isset($_POST['Phone_Number']) ? $_POST['Phone_Number'] : '';
$Email=isset($_POST['Email']) ? $_POST['Email'] : '';
$Volunteer=isset($_POST['Volunteer']) ? $_POST['Volunteer'] : '';
$Birth_Date=isset($_POST['Birth_Date']) ? $_POST['Birth_Date'] : '';
$Shirt_Number=isset($_POST['Shirt_Number']) ? $_POST['Shirt_Number'] : '';
$Shirt_Size=isset($_POST['Shirt_Size']) ? $_POST['Shirt_Size'] : '';
$Pant_Size=isset($_POST['Pant_Size']) ? $_POST['Pant_Size'] : '';
$Medication=isset($_POST['Medication']) ? $_POST['Medication'] : '';
$Medical_Conditions=isset($_POST['Medical_Conditions']) ? $_POST['Medical_Conditions'] : '';
$Doctor=isset($_POST['Doctor']) ? $_POST['Doctor'] : '';
$Doctor_Phone=isset($_POST['Doctor_Phone']) ? $_POST['Doctor_Phone'] : '';
$Dentist=isset($_POST['Dentist']) ? $_POST['Dentist'] : '';
$Dentist_Phone=isset($_POST['Dentist_Phone']) ? $_POST['Dentist_Phone'] : '';
$Hospital=isset($_POST['Hospital']) ? $_POST['Hospital'] : '';
$Hospital_Phone=isset($_POST['Hospital_Phone']) ? $_POST['Hospital_Phone'] : '';
$Emergency_Contact=isset($_POST['Emergency_Contact']) ? $_POST['Emergency_Contact'] : '';
$Emergency_Phone=isset($_POST['Emergency_Phone']) ? $_POST['Emergency_Phone'] : '';

$conn = mysqli_connect("localhost","root","", "baseball_signups");

//mysql_select_db("baseball_signups");

$sql = "INSERT INTO signupforms(Player_Name, Father_Name, Mother_Name, Gender, Street_Address, City, Phone_Number, Email, Volunteer, Birth_Date, Shirt_Number, Shirt_Size, Pant_Size, Medication, Medical_Conditions,
Doctor, Doctor_Phone, Dentist, Dentist_Phone, Hospital, Hospital_Phone, Emergency_Contact, Emergency_Phone) 
VALUES ('$Player_Name', '$Father_Name', '$Mother_Name', '$Gender', '$Street_Address', '$City', '$Phone_Number', '$Email', '$Volunteer', '$Birth_Date', '$Shirt_Number', '$Shirt_Size', 
'$Pant_Size', '$Medication', '$Medical_Conditions', '$Doctor', '$Doctor_Phone', '$Dentist', '$Dentist_Phone', '$Hospital', '$Hospital_Phone', '$Emergency_Contact', '$Emergency_Phone')";

 if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 
?>
