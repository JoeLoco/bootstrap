<?php
namespace Bootstrap;

/**
 * Create a bootstrap breadcrumb
 * @author joeloco
 */
class Breadcrumb {
    
    private $items = array();

    public function drop($label, $url = null)
    {
        $this->items[] = array("label" => $label, "url" => $url);
        return $this;
    }
    
    public function stop($right = null)
    {
        $output = "";
        $output .= "<ul class='breadcrumb'>";
        
        $last = array_pop($this->items); 
        foreach ($this->items as $item) {
            if(empty($item["url"]))
            {
                $output .= "<li>".$item["label"]."</li>";
            }
            else
            {
                $output .= "<li><a href='" . $item["url"] . "'>".$item["label"]."</a></li>";
            }
            
        }
        $output .= "<li class='last-item'>".$last["label"]."</li>";
        if($right)
        {
            $output .= "<li class='pull-right'>{$right}</li>";
        }
        $output .= "</ul>";

        return $output;
    }
}
