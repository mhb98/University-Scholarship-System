
<?php
require_once("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
    
        <?php include('templates/header.php');?>






<div class="moddho">

    <div class="container middle xyz boundary">
        <div class="yo" >
            <h1 class="text-center"style="font-weight: bold;">Scholarship List <h2 style="color:red"> (CATEGORY WISE)</h2> </h1>
            <p>(Name of the students who are applying for Scholarship in this category)</p>
            
    </div>

        <div class="container abc">            
                <table class="table table-hover table-bordered ">
                  <thead class="theadColor">
                    <tr>
                      <th>Name</th>
                      <th>ID</th>
                      <th>Semester</th>
                      <th>Category</th>
                      <th>Status</th>
                      <th class="majhe">Decision</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                         

                        <?php 
                        // Here
                        $searchtext = $_REQUEST['searchbody1'];
                        $query = "SELECT * FROM `scholarshiplist` WHERE category = '$searchtext'";
                        $runQuery = mysqli_query($conn, $query);
                       
                        //$array = mysqli_fetch_array($runQuery);
                         while($scholarship = mysqli_fetch_array($runQuery)){
                             $id = $scholarship['id'];
                            //htmlspecialchars($scholarship['id'])
                            ?>
                         
                          <tr >

                                <td>
                                    <h6> <?php echo htmlspecialchars($scholarship['name']) ?></h6>
                                </td>
                                <td>
                                    <h6> <?php echo   htmlspecialchars($scholarship['id'])  ?></h6>
                                </td>
                                <td>
                                    <h6> <?php echo htmlspecialchars($scholarship['semester']) ?></h6>
                                </td>
                                <td>
                                    <h6> <?php echo htmlspecialchars($scholarship['category']) ?></h6>
                                </td>
                               <!-- <td>
                                    <h6 id="demo"> <?php echo htmlspecialchars($scholarship['status']) ?></h6>
                                </td> -->
                                <td>
                                    <h6 id="demo"> <?php 
                                         if(htmlspecialchars($scholarship['status'])=='DECLINED'){
                                            echo htmlspecialchars($scholarship['status'])."</br></br>(".
                                            htmlspecialchars($scholarship['reason']).")";

                                         }
                                         else{
                                            echo htmlspecialchars($scholarship['status']);
                                         }
                                      
                                    
                                    ?></h6>
                                </td>

                                 
                                <td class="majhe">  
                                
                                

                                <form action="approve.php?id=<?php echo $id;?> && from = 'search' " method="POST">
                                    

                                    <input name="approve" class="btn btn-outline-success btn-lg" id="post_button" type="submit" value="Approve"  ><br/>
                                                            
                                </form> 
                                    <!--<button type="button" class="btn btn-outline-success btn-lg" onclick="myfunction($id)">Approve</button>
                                    -->
                                    <br><br>                                    

                                    <!--<button type="button" class="btn btn-outline-danger btn-lg"name="decline"onclick="myfunction1()">Decline</button> 
                                    -->
                                    <form action="decline.php?id=<?php echo $id;?> && from = 'search' " method="POST">
                                    

                                    <input name="decline"class="btn btn-outline-danger btn-lg" id="post_button" type="submit" value="Decline"  ><br/>
                                                            
                                    </form> 
                                    <br/><br><div class="form-group space">
                                        <input type="text" name="reason" class="form-control" placeholder="(IF DECLINE) Provide reasons here" name="text1"required>
                                    </div>

                                    
                                </td>
                                
                                
                          </tr>
                          
                          
                        <?php } ?>
                   </tbody>
                      
                </table>
          </div>
          
          </div>
    </div>
    
</div>
                    


        <?php include('templates/footer.php');?>
        
    

</html>