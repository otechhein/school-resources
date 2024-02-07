<?php

require_once("../classes/Home.php");

$homeClass = new Home($db->conn);

$home = $homeClass->getHome()->fetch(PDO::FETCH_OBJ);

?>
<div class="container mt-5">
        <h1>Manage The Home Page</h1>
        <p>You can change the fields in the home page above</p>

        <form action="" method="POST">
            <table class="table">
                <tr>
                    <td>Headline:</td>
                    <td><input type="text" required class="form-control" name="headline"
                            placeholder="Enter a headline" value="<?php echo $home->Headline; ?>" /></td>
                </tr>
                <tr>
                    <td>Content:</td>
                    <td><textarea required class="form-control" name="content"
                            placeholder="Enter the content"><?php echo $home->Content; ?></textarea></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" name="change" class="btn btn-primary">Save Changes</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>