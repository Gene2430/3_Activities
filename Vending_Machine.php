<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VENDING MACHINE</title>
</head>
        <body>
        <h1>Vendo Machine</h1>
        <form method = "post">
            <fieldset class="fieldset">
                <!-- Drinks Checkbox -->
                <h3 >Product</h3>
                <input type="checkbox" name="drinks[]" id="drinksCoke" value = "Coke" > <label for = "drinksCoke">Coke = 15</label><br>
                <input type="checkbox" name="drinks[]" id="drinksSprite" value = "Sprite"> <label for = "drinksSprite">Sprite = 20</label><br>
                <input type="checkbox" name="drinks[]" id="drinksRoyal" value = "Royal"> <label for = "drinksRoyal">Royal = 20</label><br>
                <input type="checkbox" name="drinks[]" id="drinksPepsi" value = "Pepsi"> <label for = "drinksPepsi">Pepsi = 15</label><br>
                <input type="checkbox" name="drinks[]" id="drinksMountaindew" value = "Mountaindew"> <label for = "drinksMountaindew">Mountain Dew = 20</label><br>
                </fieldset>

                <fieldset class="fieldset">
                <!-- Option for Sizes -->
                <h3>Options</h3>
                    <select name="size[]"><label for="size">Size:</label>
                    <option value="Regular">Regular </option>
                    <option value="UpSize">Up-Size (add ₱5)</option>
                    <option value="Jumbo">Jumbo (add ₱10)</option>
                </select>
                <!-- Option for Quantity of Products -->
                <label for="qtydrinks"> Quantity: </label>
                <input type="number" name="qtydrinks" id="qtydrinks" min="1" max="20" value="1">
                <input type="submit" name="btnprocess" value ="process">
            </fieldset>
        </form>

        <?php
        error_reporting(0);
        if(isset($_REQUEST['btnprocess']) && isset($_REQUEST['drinks']) && isset($_REQUEST['size']) && isset($_REQUEST['qtydrinks'])){
        echo '<hr>';
        echo '<b>Purchase Summary:</b> <br>';

        $arrdrinks = $_REQUEST['drinks'];
        $arrSize = $_REQUEST['size'];
        $drinksQty = $_REQUEST['qtydrinks'];

        foreach($arrdrinks as $key => $drinksValue){
            foreach($arrSize as $key => $SizeValue){
                    // This Statement is for Coke 
                if (($drinksValue == "Coke")&&($SizeValue == "Regular")){
                    $coke = 15 * $drinksQty;
                    $QtyCoke = $drinksQty;

                    if($drinksQty > 1){
                        echo '<li> ',$drinksQty,' ','pieces of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$coke,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$drinksQty,' ','piece of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$coke,'</li> <br>';
                    }      
                                  
                }
                if (($drinksValue == "Coke")&&($SizeValue == "UpSize")){
                    $coke = 20*$drinksQty;
                    $QtyCoke = $drinksQty;
                    if($drinksQty > 1){
                        echo '<li> ',$drinksQty,' ','pieces of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$coke,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$drinksQty,' ','piece of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$coke,'</li> <br>';
                    }    
                                      
                }
                if (($drinksValue == "Coke")&&($SizeValue == "Jumbo")){
                    $coke = 25 * $drinksQty; 
                    $QtyCoke = $drinksQty;
                    if($drinksQty > 1){
                        echo '<li> ',$drinksQty,' ','pieces of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$coke,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$drinksQty,' ','piece of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$coke,'</li> <br>';
                    }   
                                    
                }
              
               
                // This Statement is for Sprite 
                if (($drinksValue == "Sprite")&&($SizeValue == "Regular")){
                    $sprite = 20 * $drinksQty;
                    $QtySprite = $drinksQty;
                    if($drinksQty > 1){
                        echo '&#9; <li> ',$drinksQty,' ','pieces of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$sprite,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$drinksQty,' ','piece of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$sprite,'</li> <br>';
                    }      
                                 
                }
                if (($drinksValue == "Sprite")&&($SizeValue == "UpSize")){
                    $sprite =25*$drinksQty; 
                    $QtySprite = $drinksQty;

                    if($drinksQty > 1){
                        echo '<li> ',$drinksQty,' ','pieces of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$sprite,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$drinksQty,' ','piece of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$sprite,'</li> <br>';
                    }   
                                 
                }
                if (($drinksValue == "Sprite")&&($SizeValue == "Jumbo")){
                    $sprite = 30 * $drinksQty;
                    $QtySprite = $drinksQty;
                    if($drinksQty > 1){
                        echo '<li> ',$drinksQty,' ','pieces of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$sprite,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$drinksQty,' ','piece of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$sprite,'</li> <br>';
                    }   
                                  
                }


                // This Statement is for Royal
                if (($drinksValue == "Royal")&&($SizeValue == "Regular")){
                    $royal = 20 * $drinksQty; 
                    $QtyRoyal = $drinksQty;
                    if($drinksQty > 1){
                        echo '<li> ',$drinksQty,' ','pieces of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$royal,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$drinksQty,' ','piece of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$royal,'</li> <br>';
                    }    
                                   
                }
                if (($drinksValue == "Royal")&&($SizeValue == "UpSize")){
                    $royal = 25*$drinksQty; 
                    $QtyRoyal = $drinksQty;
                    if($drinksQty > 1){
                        echo '<li> ',$drinksQty,' ','pieces of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$royal,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$drinksQty,' ','piece of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$royal,'</li> <br>';
                    }   
                                      
                }
                if (($drinksValue == "Royal")&&($SizeValue == "Jumbo")){
                    $royal= 30 * $drinksQty; 
                    $QtyRoyal = $drinksQty;
                    if($drinksQty > 1){
                        echo '<li> ',$drinksQty,' ','pieces of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$royal,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$drinksQty,' ','piece of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$royal,'</li> <br>';
                    }   
                                      
                }
                

                // This Statement is for Pepsi
                if (($drinksValue == "Pepsi")&&($SizeValue == "Regular")){
                    $pepsi = 15 * $drinksQty;
                    $QtyPepsi = $drinksQty;
                    if($drinksQty > 1){
                        echo '<li> ',$drinksQty,' ','pieces of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$pepsi,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$drinksQty,' ','piece of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$pepsi,'</li> <br>';
                    }    
                                      
                }
                if (($drinksValue == "Pepsi")&&($SizeValue == "UpSize")){
                    $pepsi = 20 * $drinksQty;
                    $QtyPepsi = $drinksQty;
                    if($drinksQty > 1){
                        echo '<li> ',$drinksQty,' ','pieces of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$pepsi,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$drinksQty,' ','piece of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$pepsi,'</li> <br>';
                    }   
                                         
                }
                if (($drinksValue == "Pepsi")&&($SizeValue == "Jumbo")){
                    $pepsi= 25 * $drinksQty;
                    $QtyPepsi = $drinksQty; 
                    if($drinksQty > 1){
                        echo '<li> ',$drinksQty,' ','pieces of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$pepsi,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$drinksQty,' ','piece of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$pepsi,'</li> <br>';
                    }   
                                      
                }




                // This Statement is for Mountaindew
                if (($drinksValue == "Mountaindew")&&($SizeValue == "Regular")){
                    $MountainDew = 20 * $drinksQty;
                    $QtyMountaindew = $drinksQty;
                    if($drinksQty > 1){
                        echo '<li> ',$drinksQty,' ','pieces of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$MountainDew,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$drinksQty,' ','piece of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$MountainDew,'</li> <br>';
                    }    
                     
                }
                if (($drinksValue == "Mountaindew")&&($SizeValue == "UpSize")){
                    $MountainDew = 25 * $drinksQty;
                    $QtyMountaindew = $drinksQty;
                    if($drinksQty > 1){
                        echo '<li> ',$drinksQty,' ','pieces of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$MountainDew,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$drinksQty,' ','piece of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$MountainDew,'</li> <br>';
                    }   
                       
                }
                if (($drinksValue == "Mountaindew")&&($SizeValue == "Jumbo")){
                    $MountainDew = 30 * $drinksQty;
                    $QtyMountaindew = $drinksQty;
                    if($drinksQty > 1){
                        echo '<li> ',$drinksQty,' ','pieces of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$MountainDew,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$drinksQty,' ','piece of ',$SizeValue,' ',$drinksValue,' amounting to ',' ₱ ',$MountainDew,'</li> <br>';
                    }   
                      
                }
            }
        }
        // Computation
         $TotalAmnt = $coke + $sprite + $royal + $pepsi + $MountainDew;
         $Totaldrinks = $QtyCoke + $QtySprite + $QtyRoyal + $QtyPepsi +  $QtyMountaindew;
         echo '<b>Total Amount: </b>',$TotalAmnt,'<br>';
         echo '<b>Total Number of Items: </b>',$Totaldrinks,'<br>';
    }
?>
</body>
</html>