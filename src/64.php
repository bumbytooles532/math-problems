<?php
function calculate_expression($expression) {
    $values = explode(' ', $expression);
    $result = array();
    
    foreach ($values as $value) {
        if (is_numeric($value)) {
            $result[] = $value;
        } else {
            if (!in_array($value, $result)) {
                $result[] = "Invalid operator";
            }
        }
    }
    
    return implode(' ', $result);
}
?>
