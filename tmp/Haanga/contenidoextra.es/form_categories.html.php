<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /homepages/9/d377857919/htdocs/meneame/www/templates/form_categories.html */
function haanga_64377fdc478ed428de5419ec75b3def0f2d1b882($vars, $return=FALSE, $blocks=array())
{
    global $globals, $current_user;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<fieldset style="clear: both;"> <legend>'._('selecciona la categoría más apropiada').'</legend> ';
    foreach ($metas as  $meta) {
        echo ' <dl class="categorylist"><dt>'.$meta->category_name.'</dt> ';
        foreach ($meta->categories as  $category) {
            echo ' <dd> <input name="category" type="radio"';
            if ($selected == $category->category_id) {
                echo ' checked="true"';
            }
            echo ' value="'.$category->category_id.'" />'._($category->category_name).' </dd> ';
        }
        echo ' </dl> ';
    }
    echo ' <br style="clear: both;"/> </fieldset> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}