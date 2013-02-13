<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/dev/templates/user/categories.html */
function haanga_02aa3200a76a3811d14617c144531123a18b270a($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<form action="" method="POST"> <fieldset style="clear: both;"> <legend>'._('categorías personalizadas').'</legend> ';
    foreach ($metas as  $meta) {
        echo ' <dl class="categorylist" id="meta-'.$meta->category_id.'"><dt> <label><input ';
        if ($user->id != $current_user->user_id) {
            echo 'disabled="true"';
        }
        echo ' name="meta_category[]" type="checkbox" value="'.$meta->category_id.'" ';
        if (!$selected || $selected[$meta->category_id]) {
            echo 'checked="true"';
        }
        echo ' onchange="select_meta(this, '.$meta->category_id.')" />'.$meta->category_name.'</label></dt> ';
        foreach ($categories[$meta->category_id] as  $category) {
            echo ' <dd><label><input ';
            if ($user->id != $current_user->user_id) {
                echo 'disabled="true"';
            }
            echo ' name="categories[]" type="checkbox" ';
            if (!$selected || $selected[$category->category_id]) {
                echo 'checked="true"';
            }
            echo ' value="'.$category->category_id.'"/>'.$category->category_name.'</label></dd> ';
        }
        echo ' </dl> ';
    }
    echo ' <br style="clear: both;"/> </fieldset> ';
    if ($user->id == $current_user->user_id) {
        echo ' <input class="button" type="submit" value="'._('grabar').'"/> ';
    }
    echo ' </form> <script type="text/javascript"> function select_meta(input, meta) { if (input.checked) new_value = true; else new_value = false; $(\'#meta-\'+meta+\' input\').attr({checked: new_value}); return false; } </script> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}