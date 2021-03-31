
<footer style="background-color: #E9EBEC" class="shadow" id="contact">

<div class="container py-1 py-lg-4">
<div class="row">

                            <div class="col-lg-5 mb-5 mb-lg-0">
                            <h4 class="contact-line">Touch With Us</h4>
                            <span class="line">&nbsp;</span>

                            <form>

                            <div class="form-group">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter a name">
                            </div>
                            <div class="form-group">
                            <label for="Mobile">Mobile number</label>
                            <input type="text" class="form-control" id="mobile" placeholder="Mobile number">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your mobile number with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" cols="20" class="form-control" rows="6" placeholder="Write your message..."></textarea>
                            </div>
                            <button class="btn btn-primary w-100 btn-form shadow mb-3" id="submit">Touch us</button>

                            <p id="msg" class="shadow-sm"></p>

                            </form>
                            </div>


                            <div class="col-lg-4 mb-5 mb-lg-0">
                            <h4 class="mb-2 mb-lg-5">Opening hours</h4>
                            <p class="" style="font-size: 20px"> <strong>SKP</strong> L.P gas service available for 24/7 </p>
                            <strong style="font-size: 21px; text-decoration:underline;letter-spacing: 1px;">*** If you have any issues regarding these products the SKP ensures you 100% money back gurrantee </strong>
                            



                            </div>


                            <div class="col-lg-3">
                                <h4 class="mb-2 mb-lg-5">Contact with us</h4>
                                <p><i class="fas fa-map-marker"></i> Surma Tower, Road No 19,<br> Block B, Uposhohor, Bangladesh </p>
                                <p><i class="fas fa-mobile-alt font-weight-bolder"></i> 01723190659/01676230906</p>
                                <p style="text-decoration:underline"><i class="fas fa-envelope"></i><a href="#"> chowdhury889@gmail.com</a></p>
                            

                            </div>






</div>
</div>

</footer>

<!--------ajax code for contact form messages --------->

            <script>
                $(document).ready(function(){
                    $("#submit").click(function(){
                    var name = $("#name").val();
                    var mobile = $("#mobile").val();
                    var message = $("#message").val();  
                    $.ajax(
                        {
                            url:"footer_form_contact.php",
                            method:'POST',
                            data: {
                                name:name,
                                mobile:mobile,
                                message:message},

                                success:function(response){
                                $("#msg").html(response);

                            }

                        }
                    );
                    $("#msg").fadeOut(7000);


                    return false;

                    }) 

                })


            </script>


<button class="top-button"><i class="fas fa-arrow-up"></i></button>




</body>
</html>