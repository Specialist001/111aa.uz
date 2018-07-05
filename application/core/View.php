<?php

class View
{

    //public $template_view; // здесь можно указать общий вид по умолчанию.

    function generate($content_view, $template_view, $data = null)
    {
        /*
		if(is_array($data)) {
			// преобразуем элементы массива в переменные
			extract($data);
		}
		*/

        include 'application/views/'.$template_view;
    }

    function generateSidebar($sidebar_content_view, $sidebar_view, $data = null)
    {
        include 'application/views/'.$sidebar_view;
    }
}