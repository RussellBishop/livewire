<?php

    function live($fieldName, $structure)
    {

        $fieldReturn = '';

        // is it empty?
        if(empty($fieldName)) {
            $fieldReturn .= 'data-forcefeed="'.$structure.'"';
        }

        // end the tag
        $fieldReturn .= '>';

        // add the contents of that field before the closing tag
        $fieldReturn .= $fieldName;

        return $fieldReturn;
    }

?>
