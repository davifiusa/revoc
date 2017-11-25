<?php
    require("../requires/config.php");
?>

<div id="loginbox">            
    <form id="loginform" class="form-vertical" action="action_login.php">
            <div class="control-group normal_text"> <h3><img src="img/logo.png" alt="Logo" width="68%" /></h3></div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on" style="background-color: #9a9a9a;"><i class="icon-user"> </i></span><input type="text" placeholder=" Usuário" />
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_ly" style="background-color: #9a9a9a;"   ><i class="icon-lock"></i></span><input type="password" placeholder=" Senha" />
                </div>
            </div>
        </div>
        <div class="form-actions">
            <span class="pull-right"><a type="submit" href="index.html" class="btn btn-success" /> Login</a></span>
        </div>
    </form>
</div>
<script src="<?= $dirRef ?>js/jquery.min.js"></script>  
<script src="<?= $dirRef ?>js/matrix.login.js"></script> 
