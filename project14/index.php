<?php
$countries = array(
    "Afghanistan",
    "Albania",
    "Algeria",
    "Andorra",
    "Angola",
    "Anguilla",
    "Antigua & Barbuda",
    "Argentina",
    "Armenia",
    "Aruba",
    "Australia",
    "Austria",
    "Azerbaijan",
    "Bahamas",
    "Bahrain",
    "Bangladesh",
    "Barbados",
    "Belarus",
    "Belgium",
    "Belize",
    "Benin",
    "Bermuda",
    "Bhutan",
    "Bolivia",
    "Bosnia & Herzegovina",
    "Botswana",
    "Brazil",
    "British Virgin Islands",
    "Brunei",
    "Bulgaria",
    "Burkina Faso",
    "Burundi",
    "Vietnam"
);
$names = array(
    "Dũng",
    "Dương",
    "Hoàng",
    "Hưng"
);
?>

                </div>
                <div class="form-group">
                    <div class="label">
                        First Name
                    </div>
                    <div class="input">
                        <input type="text" value="Anne">
                    </div>
                </div>

                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        Title
                    </div>
                    <div class="input">
                        <input type="text" name="title" id="" value="Sales Representative">
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        Suffix
                    </div>
                    <div class="input">
                        <input type="text" name="suffix" id="" value="Ms.">
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        BirthDate
                    </div>
                    <div class="input">
                        <input type="date" name="birthdate" id="" value="Sales Representative">
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        HireDate
                    </div>
                    <div class="input">
                        <input type="date" name="hiredate" id="" value="Sales Representative">
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        SSN # (if applicable)
                    </div>
                    <div class="input">
                        <input type="text" name="ssn" id="">
                    </div>
                </div>

                        </select>
                    </div>
                    <br>
                </div>
            </div>
            <div class="content">
                <div class="title">Contact Info</div>
                <div class="form-group">
                    <div class="label">
                        Email
                    </div>
                    <div class="input">
                        <input type="email" name="email" id="" value="name@example.com">
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        Address
                    </div>
                    <div class="input">
                        <input type="text" name="address" id="" value="7 Houndstooth Rd.">
                    </div>
                </div>

        </div>
    </form>
</body>

</html>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>