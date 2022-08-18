<?php 

namespace App\Helpers;

class Helper
{
    public static function menu($menus, $parent_id = 0, $char = '')
    {
        $html = '';

        foreach ($menus as $key => $menu)
        {
            if ($menu->parent_id == $parent_id){

                //lay menu cha:
                $html .= '
                        <tr>
                            <td>' . $menu->id . '</td>
                            <td>'. $char . $menu->name . '</td>
                            <td>' . self::active($menu->active) .'</td>
                            <td>' . $menu->updated_at . '</td>
                            <td>
                                <a href="/admin/menu/edit/' . $menu->id . '" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="#" onclick="removeRow('. $menu->id .', \'/admin/menu/destroy\')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                ';

                //xoa list cu~
                unset($menus[$key]);

                //tiep tuc chay de tim` menu con
                $html .= self::menu($menus, $menu->id, $char . '---');
            }
        }

        return $html;
        
    }

    public static function active($active = 0)
    {
        return $active == 0 ? '<span class="btn btn-danger btn-sm" >NO</span>' : '<span class="btn btn-success btn-sm" >YES</span>';
    }


    public static function price($price, $price_sale)
    {
       
        if ($price_sale != 0)
        {
            return number_format($price_sale, '0','','.') . '₫';
        }
        
        if ($price == 0)
        {
            return '<a href="/lien-he" style="color: #248ee9; font-size: 16px; font-weight: bold">Liên Hệ</a>';

        } else {

            return number_format($price, '0','','.') . '₫';
        }

       
    }
} 