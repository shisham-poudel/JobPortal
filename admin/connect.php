<?php
  // Connect to the database
    $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "project";
     $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
     if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
     }

    // Retrieve data from the database
     $mydb->setQuery("SELECT * FROM `tblcompany`");
     $cur = $mydb->loadResultList(); 
     foreach ($cur as $result) {
    echo '<tr>';
    echo '<td width="5%" align="center"></td>';
    echo '<td>
     <input type="checkbox" name="selector[]" id="selector[]" value="'.$result->CATEGORYID. '"/>
     ' . $result->CATEGORIES.'</a></td>';
     echo '<td>' . $result->COMPANYNAME.'</td>';
     echo '<td>' . $result->COMPANYADDRESS.'</td>';
     echo '<td>' . $result->COMPANYCONTACTNO.'</td>';
     echo '<td align="center"><a title="Edit" href="#" class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></a>
     <a title="Delete" href="#" class="btn btn-danger btn-xs  ">  <span class="fa  fa-trash-o fw-fa "></a></td>';
    // echo '<td></td>';
     echo '</tr>';                    
     $conn->close();
     ?>