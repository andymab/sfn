<?php

namespace Avroraloc;

class Avroraloc__
{



    public function catalog_img()
    {

        $elements = \Connect::get_content('catalogs', ['mgroup_id', 'metal', 'specifications', 'img']);
        foreach ($elements as $element) {
            if (strpos($element->img, '/')) {
                $path =  str_replace('/' . basename($element->img), '', $element->img); // basename($element->img); die;
                if (!file_exists(rPATH . '/media/' . $path)) {

                    mkdir(rPATH . '/media/' . $path, 0777, 1);
                }

                if (!file_exists(rPATH . '/media/products/m/' . $element->img)) {
                    echo "отсутствуем файл {$element->img}...\n<br>";
                }

                $oldpath = rPATH . '/media/products/m/' . $element->img; 
                if (!copy($oldpath, rPATH . '/media/' . $element->img)) {
                    //echo "не удалось скопировать {$element->img}...\n<br>";
                }else {
                    echo "скопирован {$element->img}...\n<br>";
                }
            } else {
                echo "файл {$element->img}...\n<br>";
            }
        }
    }
}
