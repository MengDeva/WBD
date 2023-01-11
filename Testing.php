<h1 align="center">HTML Form</h1>
<form action="" method="POST">

<body align="center" bgcolor="#FAEAFF">
    <label for="txt_username">Username</label><br></br>
    <input type="text" name="txt_username"
        id="txt_username"
        placeholder="Please enter your name...."
        size="30" maxlength="5"
        value="" required autocomplete="off"><br></br>

    <label for="txt_username">Password</label><br></br>
    <input type="text" name="txt_passord"
        id="txt_password"
        placeholder="Please enter your Password...."
        size="30" maxlength="5"><br></br>

    <label for="txt_age">Age</label><br></br>
    <input type="number" name="txt_age"
        id="txt_age"
        min="1" max="100"
        style ="width: 250px;"><br></br>

    <label for="txt_dob">Date of Birth</label><br></br>
    <input type="date" name="txt_dob"
        id="txt_dob"
        min="2020-01-01" max="2023-12-31"
        style ="width: 250px;"><br></br>

    <label for="txt_time">Time of Birth</label><br></br>
    <input type="time" name="txt_time"
        id="txt_time"
        style ="width: 250px"><br></br>

    <label for="txt_email">Enter your Email</label><br></br>
    <input type="email" name="txt_email"
        id="txt_email"
        style ="width: 250px;"><br></br>

    <label for="txt_url"> Enter your Website</label><br></br>
    <input type="url" name="txt_url"
        id="txt_url"
        style ="width: 250px;"><br></br>
    
    <label for="txt_id">Your ID</label><br></br>
    <input type="hidden" name="txt_id"
        id="txt_id"
        style ="width: 250px;"><br></br>

    <label for="chk_php">Hypertext Preprocessor: </label>
    <input type="checkbox" name="chk_course" 
        id="chk_course" value="PHP"><br></br>
    
    <label for="rd_php">Hypertext Preprocessor: </label>
    <input type="radio" name="rd_course" 
        id="rd_course" value="PHP"><br></br>
    
    <label for="rd_gender">Gender: </label>
        <input type="radio" name="rd_gender" 
            id="rd_gender" value="f">Female
        <input type="radio" name="rd_gender" 
            id="rd_gender" value="f">Male
        <input type="radio" name="rd_gender" 
            id="rd_gender" value="f">Other
    <br></br>

    <label for="rd_occupation">Please select occupation: </label>
    <select name="id_occupation" id="id_occupation">
        <optgroup label="MIS">
            <option value="1">Web Developer</option>
            <option value="2" selected>Designer</option>
            <option value="3">Mobile App Developer</option>
            <option value="4">Animation</option>
            <option value="5">Networking</option>
        </optgroup>
        <optgroup label="Other">
            <option value="1">Web Developer</option>
            <option value="2" selected>Designer</option>
            <option value="3">Mobile App Developer</option>
            <option value="4">Animation</option>
            <option value="5">Networking</option>
        </optgroup>
    </select><br></br>

    <label for="txt_Message">Please ener your message</label><br>
    <textarea name="txt_Message" id="txt_Message"
        cols="30" rows="7"></textarea><br>

    <label for="File_uploading">Please choose your file: </label>
    <input type="file" name="file_uploading"><br>

    <Input type="submit" value="SUBMIT" name="button_submit"><br>
    <Input type="reset" value="Clear" name="button_clear"><br>
    <Input type="button" value="Click Me" 
        name="button_submit"
        onclick="form.submit()"
        onclick="window.print()"><br>
    
    <button type="submit" name="submit_button_submit">
      Register</button>
   
   <button type="reset" name="reset_button_name">
      Reset Form</button>

   <button type="button" name="button_name">
      Click Me</button>
</body>
</form>
