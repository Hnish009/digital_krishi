<!-- C:\xampp\htdocs\krishi\index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Digital Krishi</title>
</head>
<body>
    <div class="container">
        <h1>Welcome to Digital Krishi</h1>
        <div class="row">
            <div class="col-md-4">
                <h2>Farmer Registration</h2>
                <form action="farmer.php" method="POST">
                    <input type="text" name="name" placeholder="Name" required class="form-control">
                    <select name="state" class="form-control" required>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
                    </select>
                    <select name="district" class="form-control" required>
                    <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
<option value="VISAKHAPATNAM">VISAKHAPATNAM</option>
<option value="VIJAYAWADA">VIJAYAWADA</option>
<option value="GUNTUR">GUNTUR</option>
<option value="TIRUPATI">TIRUPATI</option>

<option value="ARUNACHAL PRADESH">ARUNACHAL PRADESH</option>
<option value="ITANAGAR">ITANAGAR</option>
<option value="TALI">TALI</option>
<option value="ZIRO">ZIRO</option>
<option value="TEZU">TEZU</option>

<option value="ASSAM">ASSAM</option>
<option value="GUWAHATI">GUWAHATI</option>
<option value="SILCHAR">SILCHAR</option>
<option value="DIBRUGARH">DIBRUGARH</option>
<option value="JORHAT">JORHAT</option>

<option value="BIHAR">BIHAR</option>
<option value="PATNA">PATNA</option>
<option value="MUZAFFARPUR">MUZAFFARPUR</option>
<option value="BHAGALPUR">BHAGALPUR</option>
<option value="GAYA">GAYA</option>

<option value="CHHATTISGARH">CHHATTISGARH</option>
<option value="RAIPUR">RAIPUR</option>
<option value="BILASPUR">BILASPUR</option>
<option value="DURG">DURG</option>
<option value="RAJNANDGAON">RAJNANDGAON</option>

<option value="GOA">GOA</option>
<option value="PANAJI">PANAJI</option>
<option value="MARGAO">MARGAO</option>
<option value="VASCO DA GAMA">VASCO DA GAMA</option>
<option value="MAPUSA">MAPUSA</option>

<option value="GUJARAT">GUJARAT</option>
<option value="AHMEDABAD">AHMEDABAD</option>
<option value="SURAT">SURAT</option>
<option value="VADODARA">VADODARA</option>
<option value="RAJKOT">RAJKOT</option>

<option value="HARYANA">HARYANA</option>
<option value="CHANDIGARH">CHANDIGARH</option>
<option value="FARIDABAD">FARIDABAD</option>
<option value="GURUGRAM">GURUGRAM</option>
<option value="KURUKSHETRA">KURUKSHETRA</option>

<option value="HIMACHAL PRADESH">HIMACHAL PRADESH</option>
<option value="SHIMLA">SHIMLA</option>
<option value="MANALI">MANALI</option>
<option value="KULLU">KULLU</option>
<option value="DHARAMSHALA">DHARAMSHALA</option>

<option value="JHARKHAND">JHARKHAND</option>
<option value="RANCHI">RANCHI</option>
<option value="JAMSHEDPUR">JAMSHEDPUR</option>
<option value="DUMKA">DUMKA</option>
<option value="Hazaribagh">HAZARIBAGH</option>

<option value="KARNATAKA">KARNATAKA</option>
<option value="BENGALURU">BENGALURU</option>
<option value="MYSURU">MYSURU</option>
<option value="MANGALURU">MANGALURU</option>
<option value="DAVANAGERE">DAVANAGERE</option>

<option value="KERALA">KERALA</option>
<option value="THIRUVANANTHAPURAM">THIRUVANANTHAPURAM</option>
<option value="KOCHI">KOCHI</option>
<option value="KOZHIKODE">KOZHIKODE</option>
<option value="KOTTAYAM">KOTTAYAM</option>

<option value="MADHYA PRADESH">MADHYA PRADESH</option>
<option value="BHOPAL">BHOPAL</option>
<option value="INDORE">INDORE</option>
<option value="JABALPUR">JABALPUR</option>
<option value="GUNA">GUNA</option>

<option value="MAHARASHTRA">MAHARASHTRA</option>
<option value="MUMBAI">MUMBAI</option>
<option value="PUNE">PUNE</option>
<option value="NAGPUR">NAGPUR</option>
<option value="AURANGABAD">AURANGABAD</option>

<option value="MANIPUR">MANIPUR</option>
<option value="IMPHAL">IMPHAL</option>
<option value="THOUBAL">THOUBAL</option>
<option value="CHURACHANDPUR">CHURACHANDPUR</option>
<option value="KAKCHING">KAKCHING</option>

<option value="MEGHALAYA">MEGHALAYA</option>
<option value="SHILLONG">SHILLONG</option>
<option value="JOWAI">JOWAI</option>
<option value="TURA">TURA</option>
<option value="NONGSTOIN">NONGSTOIN</option>

<option value="MIZORAM">MIZORAM</option>
<option value="AIZAWL">AIZAWL</option>
<option value="LUHATLA">LUHATLA</option>
<option value="SAWANG">SAWANG</option>
<option value="CHHIMTUIPUI">CHHIMTUIPUI</option>

<option value="NAGALAND">NAGALAND</option>
<option value="KOHIMA">KOHIMA</option>
<option value="DIMAPUR">DIMAPUR</option>
<option value="MOKOKCHUNG">MOKOKCHUNG</option>
<option value="WOKHA">WOKHA</option>

<option value="ODISHA">ODISHA</option>
<option value="BHUBANESWAR">BHUBANESWAR</option>
<option value="CUTTACK">CUTTACK</option>
<option value="ROURKELA">ROURKELA</option>
<option value="BERHAMPUR">BERHAMPUR</option>

<option value="PUNJAB">PUNJAB</option>
<option value="CHANDIGARH">CHANDIGARH</option>
<option value="AMRITSAR">AMRITSAR</option>
<option value="JALANDHAR">JALANDHAR</option>
<option value="LUDHIANA">LUDHIANA</option>

<option value="RAJASTHAN">RAJASTHAN</option>
<option value="JAIPUR">JAIPUR</option>
<option value="JODHPUR">JODHPUR</option>
<option value="UDAIPUR">UDAIPUR</option>
<option value="KOTA">KOTA</option>

<option value="SIKKIM">SIKKIM</option>
<option value="GANGTOK">GANGTOK</option>
<option value="NAMCHI">NAMCHI</option>
<option value="RANGPO">RANGPO</option>
<option value="MANGAN">MANGAN</option>

<option value="TAMIL NADU">TAMIL NADU</option>
<option value="CHENNAI">CHENNAI</option>
<option value="COIMBATORE">COIMBATORE</option>
<option value="MADURAI">MADURAI</option>
<option value="TRICHY">TRICHY</option>

<option value="TELANGANA">TELANGANA</option>
<option value="HYDERABAD">HYDERABAD</option>
<option value="WARANGAL">WARANGAL</option>
<option value="KHAMMAM">KHAMMAM</option>
<option value="NIZAMABAD">NIZAMABAD</option>

<option value="TRIPURA">TRIPURA</option>
<option value="AGARTALA">AGARTALA</option>
<option value="UDAIPUR">UDAIPUR</option>
<option value="SABROOM">SABROOM</option>
<option value="KAILASHAHAR">KAILASHAHAR</option>

<option value="UTTAR PRADESH">UTTAR PRADESH</option>
<option value="LUCKNOW">LUCKNOW</option>
<option value="KANPUR">KANPUR</option>
<option value="AGRA">AGRA</option>
<option value="VARANASI">VARANASI</option>

<option value="UTTARAKHAND">UTTARAKHAND</option>
<option value="DEHRA DUN">DEHRA DUN</option>
<option value="HARIDWAR">HARIDWAR</option>
<option value="RISHIKESH">RISHIKESH</option>
<option value="NAINITAL">NAINITAL</option>

<option value="WEST BENGAL">WEST BENGAL</option>
<option value="KOLKATA">KOLKATA</option>
<option value="SILIGURI">SILIGURI</option>
<option value="DURGAPUR">DURGAPUR</option>
<option value="ASANSOL">ASANSOL</option>



                    </select>
                    <select name="village" class="form-control" required>
                        <option value="">Select Village</option>
                        <option value="Village1">Village1</option>
                        <option value="Village2">Village2</option>
                        <!-- Add more villages as needed -->
                    </select>
                    <input type="number" name="area" placeholder="Area of Farm (in acres)" required class="form-control">
                    <select name="soil_type" class="form-control" required>
                        <option value="">Select Soil Type</option>
                        <option value="Alluvial">Alluvial</option>
                        <option value="Black">Black</option>
                        <option value="Red">Red</option>
                        <option value="Laterite">Laterite</option>
                        <option value="Mountain">Mountain</option>
                        <option value="Desert">Desert</option>
                    </select>
                    <input type="number" name="budget" placeholder="Budget" required class="form-control">
                    <input type="number" name="manpower" placeholder="Manpower Available" required class="form-control">
                    <input type="text" name="phone_number" placeholder="Phone Number" required class="form-control">
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
            <div class="col-md-3">
                <h2>Admin Panel</h2>
                <form action="admin_login.php" method="POST">
                    <input type="text" name="username" placeholder="Username" required class="form-control">
                    <input type="password" name="password" placeholder="Password" required class="form-control">
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
            <div class="col-md-3">
                <h2>Store</h2>
                <form action="store.php" method="POST">
                    <input type="text" name="item_name" placeholder="Item Name" required class="form-control">
                    <input type="number" name="price" placeholder="Price" required class="form-control">
                    <input type="text" name="phone_number" placeholder="Farmer Phone Number" required class="form-control">
                    <button type="submit" class="btn btn-primary">Purchase</button>
                </form>
            </div>
            <div class="col-md-3">
                <h2>Farmer Passbook</h2>
                <a href="passbook.php" class="btn btn-primary btn-block">View Passbook</a>
            </div>
        </div>
    </div>
</body>
</html>