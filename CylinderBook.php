<?php include "header.php";?>

<div class="container" style="background-color:#00405C;">



     <form class='text-light p-4'>

      <h4 class='text-center mb-4'>Beximco LPG Gas Cylinder Price 1200 Taka</h4>

    <div class='form-row'>

    <div class='form-group col-md-6'>
        <label for='name'>Name</label>
        <input type='text' class='form-control' id='name' placeholder='Name'>
      </div>
      <div class='form-group col-md-6'>
        <label for='mobile'>Mobile Number</label>
        <input type='text' class='form-control' id='mobile' placeholder='Mobile Number'>
      </div>
    </div>
    
    <div class='form-row'>
    <div class='form-group col-md-4'>
        <label for='tower'>Tower Name</label>
      <select id='tower' class='form-control'>
        <option>Select Tower</option>
        <option value='Shurma'>Shurma</option>
        <option value='Kushiaara'>Kushiaara</option>
        <option value='Piyaaain'>Piyaaain</option>
        
      </select>
      
      </div>
      <div class='form-group col-md-4'>
        <label for='flat'>Flat Number </label>
        <input type='text' class='form-control' id='flat' placeholder='Example 1-9'>
      </div>
      <div class='form-group col-md-4'>
        <label for='unit'>Select Unit</label>
        <select id='unit' class='form-control'>
        <option>Select Unit</option>
        <option value='A'>A</option>
        <option value='B'>B</option>
        <option value='C'>C</option>
        <option value='D'>D</option>
      </select>
      </div>
      
      </div>
      <button class='btn btn-primary'>Order Now</button>

      <p id='status'></p>
      
        </form>

        


</div>



<!------------------All Js/Jquery Plug in------------------>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="includes/bootstrap/bootstrap.min.js"></script>
<script src="includes/owlcarousel/owl.carousel.min.js"></script>

<!------------All Js/Jquery Plug in---------------------->




  <script>

    $(document).ready(function(){

    $("button").click(function(){

    var NameVal = $("#name").val();
    var MobileVal = $("#mobile").val();
    var TowerVal = $("#tower").val();
    var FlatVal = $("#flat").val();
    var UnitVal = $("#unit").val();
    $.ajax({

        url: "SendToEmail.php",
        method: "POST",
        data : { 
          name: NameVal,
          mobile: MobileVal,
          tower: TowerVal,
          flat: FlatVal,
          unit: UnitVal
          },
         success : function(data){

          $("#status").html(data);
      

         }




      });

    


     
    
  return false;





    });




    })
  
  </script>





