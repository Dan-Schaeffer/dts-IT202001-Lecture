<?php
require_once('database.php');
class Item
{
   public $itemID;
   public $itemName;
   public $categoryID;
   public $listPrice;
   function __construct(
        $itemID,
        $itemName,
        $categoryID,
        $listPrice
       ) {
       $this->itemID = $itemID;
       $this->itemName = $itemName;
       $this->categoryID = $categoryID;
       $this->listPrice = $listPrice;
   }
   function __toString()
   {
       $output = "<h2>Item : $this->itemID</h2>" .
           "<h2>Name: $this->itemName</h2>\n";
       "<h2>Category ID: $this->categoryID at $this->listPrice</h2>\n";
       return $output;
   }
   function saveItem()
   {
       $db = getDB();
       $query = "INSERT INTO items VALUES (?, ?, ?, ?)";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "isid",
           $this->itemID,     // integer data type
           $this->itemName,   // string data type
           $this->categoryID, // integer data type
           $this->listPrice   // float data type
       );
           $result = $stmt->execute();
       $db->close();
       return $result;
   }
}
?>
