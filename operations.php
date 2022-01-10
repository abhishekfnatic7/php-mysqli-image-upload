<?php
function inputfiled($type,$name,$placeholder,$value){
    $element="
    <div class=\"form-group my-4\">
                <input type='$type' name='$name' placeholder='$placeholder' value='$value' class=\"form-control\">
            </div>
    
    
    ";
    echo $element;
}


?>