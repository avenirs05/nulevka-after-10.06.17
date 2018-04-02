<div id="choice-quarters" style="display: none">
    <i>Выберите период</i><br>
    <?php   
        $firstQuarterAttr = array(
            'isFour'    => 'no',        
            'wrapClass' => 'div-quarters',
            'checked'   => 'checked',
            'labelText' => '1-й квартал 2018 года'
        );   
 
        echo firstQuarter($firstQuarterAttr);
        
        require_once 'another-quarters.php'; 
    ?>    
</div>

