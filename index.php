
<?php
require_once("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
    
        <?php include('templates/header.php');?>






<div class="moddho">

    <div class="container middle xyz boundary">
        <div class="yo" >
            <h1 class="text-center"style="font-weight: bold;">Scholarship List </h1>
            <p>(Name of the students who are applying for Scholarship)</p>
            
    </div>
        <div class="container">
         <form class="form-inline"style="float:right" action="search.php" method = "POST">

            <input name="searchbody" type="text" class="form-control" id="pwd" size="25"placeholder=" Type your Semester" name="pswd">

            <!--<button type="submit" class="btn btn-primary">Search</button>-->

	        <input name="search" class="btn btn-primary" id="post_button" type="submit" value="Search Semester"  ><br/>
        </form>
        </div><br/></br><br>

        <div class="container">
         <form class="form-inline"style="float:right" action="searchcategory.php" method = "POST">

            <input name="searchbody1" type="text" class="form-control" id="pwd" size="25"placeholder="Type your Category" name="pswd">

            <!--<button type="submit" class="btn btn-primary">Search</button>-->

	        <input name="search" class="btn btn-primary" id="post_button" type="submit" value="Search Category"  ><br/>
        </form>
        </div><br/></br><br>


 <!--  <div class="container">
         <form class="form-inline"style="float:right" action="/action_page.php">

            <input type="text" class="form-control" id="pwd" size="25"placeholder=" Search Semester/Category" name="pswd">

            <button type="submit" class="btn btn-primary">Search</button>
        </form>
        </div>
        -->
        

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
                         

                        <?php foreach($scholarshiplist as $scholarship){
                            $id = $scholarship['id'];
                            //htmlspecialchars($scholarship['id'])
                            ?>
                         
                          <tr >

                                <td>
                                    <h6> <?php echo htmlspecialchars($scholarship['name']) ?></h6>
                                </td>
                                <td>
                                    <h6> <?php echo   $id; ?></h6>
                                </td>
                                <td>
                                    <h6> <?php echo htmlspecialchars($scholarship['semester']) ?></h6>
                                </td>
                                <td>
                                    <h6> <?php echo htmlspecialchars($scholarship['category']) ?></h6>
                                </td>
                                <td>
                                    <h6 id="demo"> <?php 
                                         if(htmlspecialchars($scholarship['status'])=='DECLINED'){
                                            echo htmlspecialchars($scholarship['status'])."</br></br> REASON: ".
                                            htmlspecialchars($scholarship['reason']).".";

                                         }
                                         else{
                                            echo htmlspecialchars($scholarship['status']);
                                         }
                                      
                                    
                                    ?></h6>
                                </td>
                                 
                                <td class="majhe">  
                                
                                

                                <form action="approve.php?id=<?php echo $id;?> " method="POST">
                                    

                                    <input class="btn btn-outline-success btn-lg"name="approve" id="post_button" type="submit" value="Approve"  ><br/>
                                                            
                                </form> 
                                    <!--<button type="button" class="btn btn-outline-success btn-lg" onclick="myfunction($id)">Approve</button>
                                    -->
                                    <br><br>                                    

                                    <!--<button type="button" class="btn btn-outline-danger btn-lg"name="decline"onclick="myfunction1()">Decline</button> 
                                    -->
                                    <form action="decline.php?id=<?php echo $id;?> " method="POST">
                                    

                                    <input class="btn btn-outline-danger btn-lg" name="decline" id="post_button" type="submit" value="Decline"  ><br/><br/><br>
                                    <div class="form-group space">
                                        <input type="text" name="reason" class="form-control" placeholder="(IF DECLINE) Provide reasons here" required >
                                    </div>
                                                            
                                    </form> 
                                    <!--<br/><br><div class="form-group space">
                                        <input type="text" name="reason" class="form-control" placeholder="(IF DECLINE) Provide reasons here" name="text1">
                                    </div>-->

                                    
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