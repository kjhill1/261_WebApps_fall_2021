<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
method="post">

<fieldset>
    <label for="first_name"><u>First Name</u></label>
    <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST ['first_name']); ;?>">
<span class="error"><?php echo $first_name_Err;?></span>

    <label for="last_name"><u>Last Name</u></label>
    <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST ['last_name']); ;?>">
<span class="error"><?php echo $last_name_Err;?></span>

    <label for="email"><u>Email</u></label>
    <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST ['email']); ;?>">
<span class="error"><?php echo $email_Err;?></span>

<label for="phone"><u>Phone</u></label>
    <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST ['phone']); ;?>">
    <span class="error"><?php echo $phone_Err;?></span>

<label for="interest"><u>I am interested in:</u></label>

    <ul>
        <li><input type="checkbox" name="interest[]" value="design"<?php if(isset($_POST['interest']) && in_array('design', $interest)) echo 'checked="checked"';?>>Web Design</li>

        <li><input type="checkbox" name="interest[]" value="brand"<?php if(isset($_POST['interest']) && in_array('cab', $interest))  echo 'checked="checked"';?>>Brand Design</li>
        <li><input type="checkbox" name="interest[]" value="life"<?php if(isset($_POST['interest']) && in_array('life', $interest)) echo 'checked="checked"' ;?>>The Answers to life</li>
        <li><input type="checkbox" name="interest[]" value="not sure"<?php if(isset($_POST['interest']) && in_array('not sure', $interest)) echo 'checked="checked"' ;?>>Not Sure</li> 
    
    </ul> 
<span class="error"><?php echo $interest_Err;?></span>

<label for="business"><u>Type of Business</u></label>

<select name="business">
    <option value="" NULL<?php if(isset($_POST['business']) && $_POST['business'] == NULL) echo 'selected="unselected"' ;?>
    
    >Select One</option>
    <option value="e-commerce"<?php if(isset($_POST['business']) && $_POST['business'] == 'nw') echo 'selected="unselected"' ;?>>E-commerce</option>
    <option value="service"<?php if(isset($_POST['business']) && $_POST['business'] == 'service') echo 'selected="unselected"' ;?>>Business Services</option>
    <option value="hospitality" <?php if(isset($_POST['business']) && $_POST['business'] == 'hospitality') echo 'selected="unselected"' ;?>>Hospitality</option>
    <option value="other" <?php if(isset($_POST['business']) && $_POST['business'] == 'other') echo 'selected="unselected"' ;?>>Other</option>
    </select>

    <span class="error"><?php echo $business_Err;?></span>

    <label for="comments">Tell Me More</label>
    <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST ['comments']) ;?> Please give your comments</textarea>
    <span class="error"><?php echo $comments_Err;?></span>

    <label for="privacy"><u>Do you want privacy?</u></label>
        <ul>
            <li><input type="radio" name="privacy" value="agree" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'agree') 
       echo 'checked ="checked" ';?>>I agree!</li>
        </ul>
        <span class="error"><?php echo $privacy_Err;?></span>


    <input type="submit" value="Send it!">
    <p><a href="">Reset it!</a></p>

</fieldset>

</form>