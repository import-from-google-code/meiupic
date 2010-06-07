<?php
/**
 * $Id$
 * 
 * @author : Lingter
 * @support : http://www.meiu.cn
 * @copyright : (c)2010 meiu.cn lingter@gmail.com
 */

class setting extends modelfactory{
    
    function save_setting($new_setting){
        if($new_setting['demand_resize'] == 'true'){
            if(!file_exists(DATADIR.'.htaccess')){
                if(function_exists('apache_get_modules') && in_array('mod_rewrite',apache_get_modules())){
                    @copy(ROOTDIR.'root.htaccess',DATADIR.'.htaccess');
                    @chmod(DATADIR.'.htaccess',0755);
                }else{
                    $new_setting['demand_resize'] = 'false';
                }
            }
        }else{
            $f = @unlink(DATADIR.'.htaccess');
        }
        
        $setting_content = "<?php \n";
        $setting_content .= "\$setting['url'] = '".$new_setting['url']."';\n";
        $setting_content .= "\$setting['imgdir'] = '".$new_setting['imgdir']."';\n";
        $setting_content .= "\$setting['upload_runtimes'] = '".$new_setting['upload_runtimes']."';\n";
        $setting_content .= "\$setting['open_pre_resize'] = ".$new_setting['open_pre_resize'].";\n";
        $setting_content .= "\$setting['resize_img_width'] = '".$new_setting['resize_img_width']."';\n";
        $setting_content .= "\$setting['resize_img_height'] = '".$new_setting['resize_img_height']."';\n";
        $setting_content .= "\$setting['demand_resize'] = ".$new_setting['demand_resize'].";\n";
        $setting_content .= "\$setting['resize_quality'] = '".$new_setting['resize_quality']."';\n";
        $setting_content .= "\$setting['imgdir_type'] = '".$new_setting['imgdir_type']."';\n";
        $setting_content .= "\$setting['extension_allow'] = '".$new_setting['extension_allow']."';\n";
        $setting_content .= "\$setting['size_allow'] = '".$new_setting['size_allow']."';\n";
        $setting_content .= "\$setting['pageset'] = '".$new_setting['pageset']."';\n";
        $setting_content .= "?>";
        
        return @file_put_contents(ROOTDIR.'conf/setting.php',$setting_content);
    }
    
    function get_setting(){
        global $setting;
        return $setting;
    }
    
    function change_admin_pass($id,$newpass){
        $this->db->update('#admin','id='.intval($id),array('userpass'=>$newpass));
        return $this->db->query();
    }
}