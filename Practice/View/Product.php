<?php
class View_Product extends Lib_sql_Query_Builder
{
   
        
    public function __construct()
    {
       
    }

    public function createForm()
    {
        $form = '<form action="" method="POST">';
        $form .= '<div>';
        $form .= $this->createTextfield('data[Product_name]',"Product_name: ",);
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createTextfield('data[Sku]',"Sku: ");
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createTextfield('data[Manufacturer_Cost]',"Manufacturer_Cost: ");
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createTextfield('data[Shipping_Cost]',"Shipping_Cost: ");
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->submitbtn('Submit');
        $form .= '</div>';
        $form .= '</form>';

        return $form;
    }

    public function createTextfield($name,$title,$value = '',$id ='')
    {
        return '<label>' . $title .'</label><input type="text" name ="' . $name .'"id="' . $id .'" value = "' . $value .'">';
    }

    public function submitbtn($title)
    {
        return '<input type = "submit" name = "submit" value ="' . $title .'">';
    }

    public function tohtml()
    {
        return $this->createForm();
    }
}
