
<?php
    include 'main.php';
    $countries = array (
        "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla",
        "Antigua & Barbuda",
        "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan",
        "Bahamas", "Bahrain",
        "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
        "Bermuda", "Bhutan",
        "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin
        Islands", "Brunei",
        "Bulgaria", "Burkina Faso", "Burundi", "Vietnam"
    );
?>
    <div class="container">
        <div>
            <div class = "titleHeader">Basic Info</div>
            <form action="">
                <div class="form-group" style="display:flex">
                    <div class = "label"> Employee ID</div>
                    <div class = "input"> 9</div>
                </div>
                <div class="form-group" >
                    <div class = "label">Last Name</div>
                    <div class = "input"> Dodsworth</div>
                </div>
                <div class="form-group" >
                    <div class = "label"><label >First Name</label></div>
                    <div class = "input"><input type="text" style="width:80%"></div>
                </div>
                <div class="form-group" style="display:flex">
                    <div class = "label">Gender</div>
                    <div>
                        <input type="radio" name="gender" > Male<br>
                        <input type="radio" name="gender" > Female<br>
                        <input type="radio" name="gender" > XXX<br>
                        <input type="radio" name="gender" > ZZZ
                    </div>
                </div>
                <div class="form-group">
                    <div class = "label"><label >Title</label></div>
                    <div class = "input"><input type="text" style="width:80%"></div>
                </div>
                <div class="form-group">
                    <div class = "label"><label >Suffix</label></div>
                    <div class = "input"><input type="text" style="width:80%"></div>
                </div>
                <div class="form-group">
                    <div class = "label"><label >BirthDate</label></div>
                    <div class = "input"><input type="date" style="width:80%"></div>
                </div>
                <div class="form-group">
                    <div class = "label"><label >HireDate</label></div>
                    <div class = "input"><input type="date" style="width:80%"></div>
                </div>
                <div class="form-group">
                    <div class = "label"><label >SSN # (if applicable)</label></div>
                    <div class = "input"><input type="text" style="width:80%"></div>
                </div>
                <div class="form-group" style="display:flex">
                    <div class = "label">Reports To</div>
                    <div class = "input">
                        <select class="form-select" aria-label="Default select example" style="width:30%">
                            <option selected>Buchanan</option>
                                <?php foreach ($countries as $item) : ?>
                                    <option value = ""><?php echo $item; ?></option>
                                <?php endforeach; ?>
                        </select>
                        <br>
                    </div>
                </div>
            </form>
            <div class = "titleHeader">Contact Info</div>
            <form action="">
                    <div class="form-group">
                        <div class = "label"><label >Email</label></div>
                        <div class = "input" ><input type="text" style="width:80%" placeholder="name@example.com"></div>
                    </div>
                    </div> 
                    <div class="form-group">
                        <div class = "label"><label >Address</label></div>
                        <div class = "input"><input type="text" style="width:80%"></div>
                    </div> 
                    <div class="form-group">
                        <div class = "label"><label >City</label></div>
                        <div class = "input"><input type="text" style="width:80%"></div>
                    </div>  
                    <div class="form-group">
                        <div class = "label"><label >Region</label></div>
                        <div class = "input"><input type="text" style="width:80%"></div>
                    </div>   
                    <div class="form-group">
                        <div class = "label"><label >Postal Code</label></div>
                        <div class = "input"><input type="text" style="width:80%"></div>
                    </div>  
                    <div class="form-group" style="display:flex">
                        <div class = "label">Country</div>           
                        <div class = "input">
                            <select class="form-select" aria-label="Default select example" style="width:30%">
                                <option selected>Russian Federation</option>
                                    <?php foreach ($countries as $item) : ?>
                                        <option value = ""><?php echo $item; ?></option>
                                    <?php endforeach; ?>
                            </select>
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class = "label"><label >US Home Phone</label></div>
                        <div class = "input"><input type="text" style="width:80%"></div>
                    </div>    
                    <div class="form-group">
                        <div class = "label"><label >Photo</label></div>
                        <div class = "input"><input type="text" style="width:80%"></div>
                    </div>    
            </form>
            <div class = "titleHeader">Optional Info</div>
            <form action="">
                <div >
                        <div class = "label" style="margin-bottom: 10px"> Notes</div>
                        <div id="editor" > <p>Anne has a BA</p></div>
                    </div>
                <div class="form-group" style="display:flex">
                    <div class = "label">Preferred Shift</div>
                    <div class = "input">
                        <input type="checkbox" value="Regular"> Regular<br>
                        <input type="checkbox" value="Gravy Yard"> Gravy Yard
                    </div>
                </div>
                <div class="form-group" style="display:flex">
                    <div class = "label">Actives</div>
                    <div class = "input">
                        <input type="checkbox" ><br>
                    </div>
                </div>
                <div class="form-group">
                    <div class = "label">Are you human?</div>
                    <div class = "input">
                        <input type="text" name="question" style="width:80%">
                    </div>
                </div>
                <div class="button-container" style="display:flex">
                    <div>
                        <button type = "submit">Submit</button>
                    </div>
                    <div>
                        <button type = "submit" >Cancel</button>
                    </div>
                </div>
            </form>
            
            <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
            </script> 
        </div>
    </div>
