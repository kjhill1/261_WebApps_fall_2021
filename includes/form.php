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

<label for="interest"><u>My Feedback is About:</u></label>

    <ul>
        <li><input type="checkbox" name="interest[]" value="design"<?php if(isset($_POST['interest']) && in_array('design', $interest)) echo 'checked="checked"';?>>Soaps</li>
        <li><input type="checkbox" name="interest[]" value="brand"<?php if(isset($_POST['interest']) && in_array('cab', $interest))  echo 'checked="checked"';?>>General Skin Care</li>
        <li><input type="checkbox" name="interest[]" value="life"<?php if(isset($_POST['interest']) && in_array('life', $interest)) echo 'checked="checked"' ;?>>Samples</li>
        <li><input type="checkbox" name="interest[]" value="life"<?php if(isset($_POST['interest']) && in_array('life', $interest)) echo 'checked="checked"' ;?>>Feedback On a Product</li>
        <li><input type="checkbox" name="interest[]" value="life"<?php if(isset($_POST['interest']) && in_array('life', $interest)) echo 'checked="checked"' ;?>>Product Suggestion</li>
       
    </ul> 
<span class="error"><?php echo $interest_Err;?></span>

<label for="skin_type"><u>My Skin Type is</u></label>

<select name="skin_type">
    <option value="skin_type" <?php if(isset($_POST['skin_type']) && $_POST['skin_type'] == NULL) echo 'selected="unselected"' ;?>
    
    >Select One</option>
    <option value="normal"<?php if(isset($_POST['skin_type']) && $_POST['skin_type'] == 'normal') echo 'selected="unselected"' ;?>>Normal</option>
    
    <option value="special"<?php if(isset($_POST['skin_type']) && $_POST['skin_type'] == 'special') echo 'selected="unselected"' ;?>>Special</option>
    
    <option value="challenging" <?php if(isset($_POST['skin_type']) && $_POST['skin_type'] == 'challenging') echo 'selected="unselected"' ;?>>Challenging</option>
    
    <span class="error"><?php echo $skin_type_Err;?></span>

    <label for="comments">Tell Me More</label>
    <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST ['comments']) ;?>Please give your comments</textarea>
    <span class="error"><?php echo $comments_Err;?></span>


    <input type="submit" value="Send it!">
    <p><a href="">Reset it!</a></p>

</fieldset>

</form>