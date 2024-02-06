<?php
// echo "Test";die;
// if(empty($settings->email) OR empty($settings->email) OR empty($settings->password))
// {}else{ 
?>

<div class="container">
    <h1>Tell Me What You Want</h1>
    <p>Send me an email, which includes your demands</p>

    <form>
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" autofocus required id="firstName" name="firstName" placeholder="Enter your first name" />
        </div>

        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" required id="lastName" name="lastName" placeholder="Enter your last name" />
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" required id="subject" name="subject" placeholder="What is the subject?" />
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" required id="message" name="message" placeholder="Enter your message"></textarea>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Send The Mail</button>
    </form>
</div>

<?php
// } 
?>