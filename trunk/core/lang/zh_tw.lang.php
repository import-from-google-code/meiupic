<?php

$language = array(
    
'lang_name'                        => '中文-繁體',
//core
'file_not_exists'                  => '%s文件不存在!',
'db_config_error'                  => '數據庫配置錯誤,請檢查配置文件!',
'sqlite_not_exists'                => 'Sqlite數據庫不存在!',
'miss_dbname'                      => '請設置數據庫名!',
'connect_mysql'                    => '連接至Mysql (%s,%s) 失敗!',
'can_not_use_db'                   => '不能使用數據庫%s',
'img_engine_not_exists'            => '加載圖像引擎錯誤: %s 不存在！ ',
'storage_engine_not_exists'        =>   '存儲引擎錯誤: %s 不存在！',
'plugin_can_not_call'              => '插件%s 不能執行！ ',
'config_file_error'                => '配置文件格式錯誤！ ',
'config_file_not_exists'           => '配置文件不存在！ ',
'load_model_error'                 => '裝載model "%s" 錯誤!',
'load_lib_error'                   => '裝載library "%s" 錯誤!',
'pagination_tpl_not_exists'        => '分頁模版不存在！ ',
'system_notice'                    => '系統消息',
//page
'pageset_total'                    => '共%s頁',
'pageset_prev'                     => '前頁',
'pageset_next'                     => '後頁',
'no_records'                       => '沒有記錄！ ',

//公共
'type'                             => '類型',
'no_limit'                         => '無限制',
'config'                           => '配置',
'enable'                           => '啟用',
'disable'                          => '禁用',
'disabled'                         => '已禁用',
'enabled'                          => '已啟用',
'not_installed'                    => '未安裝',
'install'                          => '安裝',
'unkown'                           => '未知',
'manual'                           => '手動',
'auto'                             => '自動',
'delete'                           => '刪除',
'cancel'                           => '取消',
'copy'                             => '複製',
'not_authorized'                   => '您沒有權限，需要登錄！ ',
'sort'                             => '排序',
'show_nums_per_page'               => '顯示數',
'404_not_found'                    => '404 頁面不存在!',
'others'                           => '其他',
'not_defined'                      => '未定義',
'open'                             => '打開',
'close'                            => '關閉',
'save'                             => '保存',
'modify'                           => '修改',
'sel_all'                          => '全選',
'no_access'                        => '沒有訪問權限',
'confirm'                          => '確定',
'submit'                           => '提交',
'all'                              => '全部',
'album'                            => '相冊',
'photo'                            => '照片',
'using'                            => '啟用中',
'edit'                             => '編輯',
'not_set'                          => '未指定',

//head
'myalbum'                          => '我的相冊',
'album_index'                      => '首頁',
'tags_title'                       => '查看所有標籤列表，快速找到照片',
'tags'                             => '標籤',
'upload_photo'                     => '上傳照片',
'upload_photo_title'               => '上傳照片',
'sys_setting'                      => '系統設置',
'sys_setting_title'                => '系統設置',
'trash'                            => '回收站',
'trash_title'                      => '進入回收站',
'login'                            => '登錄',
'login_title'                      => '登錄後管理',
'profile'                          => '我的資料',
'profile_title'                    => '查看/修改我的資料',
'logout'                           => '登出',
'logout_title'                     => '退出管理',
//head html
'you_can'                          => '你可以',
'click_to_login'                   => '點擊這裡登錄',
'back_to_index'                    => '返回首頁',

//notices
'no_album_notice'                  => '當前沒有任何相冊，點擊“創建新相冊”建立您自己的相冊吧。',
'no_cate_album_notice'             => '當前分類沒有相冊，點擊“創建新相冊”按鈕創建相冊。',
'no_cate_album_notice_notlogin'    => '當前分類還沒有相冊！',
'no_album_notice_notlogin'         => '系統中目前還沒有任何相冊。',
'no_album_search_notice'           => '未能搜索到相冊，請重新使用其他關鍵字搜索。 ',
'no_photo_search_notice'           => '未能搜索到相關照片，請重新使用其他關鍵字搜索。 ',
'no_script_notice'                 => '<h1>程序需要JavaScript支持，您需要改變瀏覽器設置！ </h1>
<p> 美優相冊系統需要<strong>JavaScript</strong>。所有現代的瀏覽器都支持 JavaScript。您只需要修改瀏覽器的一個設置項就可以打開此功能。 </p>
<p>請看這裡: <a href="http://www.google.com/support/bin/answer.py?answer=23852" target="blank">如何開啟JavaScript</a>。 </p>
<p>如果您安裝了屏蔽廣告的軟件，那麼請將該網站設為允許JavaScript。 </p>
<p>一旦你開啟了JavaScript, <a href="">點擊此處重載頁面</a>.</p>
<p>謝謝.</p>',


//album
'create_time'                      => '創建時間',
'upload_time'                      => '上傳時間',
'photo_nums'                       => '照片數',
'album_name_empty'                 => '相冊名不能為空！ ',
'album_password_empty'             => '密碼不能為空！ ',
'album_question_empty'             => '問題不能為空！ ',
'album_answer_empty'               => '答案不能為空！ ',
'create_album_success'             => '創建相冊成功！ ',
'create_album_failed'              => '創建相冊失敗！ ',
'modify_album_success'             => '修改相冊成功！ ',
'modify_album_failed'              => '修改相冊失敗！ ',
'set_cover_success'                =>'成功設為封面！ ',
'set_cover_failed'                 => '未能成功設為封面！ ',
'delete_album_success'             => '成功刪除相冊！ ',
'delete_album_failed'              => '刪除相冊失敗！ ',
'pls_sel_album_to_delete'          =>'請先選擇要刪除的相冊！ ',
'batch_delete_album_success'       => '成功批量刪除相冊！ ',
'batch_delete_album_failed'        => '批量刪除相冊失敗！ ',
'failed_to_rename_album'           => '修改相冊名失敗！ ',
'modify_tags_failed'               => '編輯相冊標籤失敗！ ',
'empty_album_desc'                 => '相冊描述不能為空！ ',
'modify_album_desc_failed'         => '編輯相冊描述失敗！ ',
'modify_album_priv_success'        => '修改相冊權限成功！ ',
'modify_album_priv_failed'         => '修改相冊權限失敗！ ',
//album html
'total_ablum'                      => '共%s個相冊',
'album_list'                       => '相冊列表',
'create_new_album'                 => '創建新相冊',
'notice_title'                     => '提示',
'confirm_delete_album'             => '確定要刪除相冊“%s” 麼？刪除後的相冊及相冊內圖片可以在“回收站”恢復！ ',
'confirm_delete_album_batch'       => '確定要刪除這些相冊麼？刪除後的相冊可以在“回收站”恢復！ ',
'create_album'                     => '創建相冊',
'album_name'                       => '相冊名',
'album_desc'                       => '相冊描述',
'priv_setting'                     => '權限設置',
'type_private'                     => '私人',
'type_public'                      => '公開',
'type_passwd'                      => '密碼訪問',
'type_ques'                        => '問題訪問',
'input_passwd'                     => '輸入密碼',
'show_pass'                        => '顯示密碼',
'input_question'                   => '輸入問題',
'input_answer'                     => '問題答案',
'input_question_tips'              => '舉例：我的名字？ ',
'input_answer_tips'                => '舉例：張三',
'album_tags'                       => '相冊標籤',
'tags_tips'                        => '用空格或,分割',
'modify_album'                     => '修改相冊',
'move_to_trash'                    => '移動到回收站',
'move_to_trash_short'              => '刪除',
'click_to_rename'                  => '點擊重命名',
'photos_num'                       => '%s張照片',
'delete_selected'                  => '刪除選中項',
'create_after_login'               => '登錄後創建',
'view_all_album'                   => '查看所有相冊',
'in_upload_time'                   => '上傳於',
'in_create_time'                   => '創建於',
'modify_album_priv'                => '修改相冊權限',

//photo
'upload_time'                      => '上傳時間',
'taken_time'                       => '拍攝時間',
'hits'                             => '瀏覽數',
'comments_nums'                    => '評論數',
'photo_name'                       => '照片名',
'album_not_exists'                 => '您要訪問的相冊不存在！ ',
'view_type'                        => '瀏覽模式',
'flat_mode'                        => '平鋪模式',
'slide_mode'                       => '幻燈模式',
'album_pass_error'                 => '相冊密碼輸入錯誤！ ',
'validate_success'                 => '驗證成功！ ',
'album_answer_error'               => '相冊答案輸入錯誤！ ',
'album_priv_error'                 => '相冊權限錯誤！ ',
'has_validate'                     => '已認證，正在轉入...',
'title_need_validate'              => '訪問需要驗證',
'slideshow'                        => '幻燈片',
'search_result'                    => '搜索結果',
'photo_name_empty'                 => '照片名不能為空！ ',
'modify_photo_success'             => '修改照片信息成功！ ',
'modify_photo_failed'              => '修改照片信息失敗！ ',
'havnt_sel_album'                  => '您沒有選擇要移動至的相冊！ ',
'move_photo_success'               => '移動照片成功！ ',
'move_photo_failed'                => '移動照片失敗！ ',
'pls_sel_photo_want_to_move'       => '請先選擇要移動的照片！ ',
'batch_move_photo_success'         => '成功批量移動照片！ ',
'batch_move_photo_failed'          => '批量移動照片失敗！ ',
'delete_photo_success'             => '成功刪除照片！ ',
'delete_photo_failed'              => '刪除照片失敗！ ',
'pls_sel_photo_want_to_delete'     => '請先選擇要刪除的照片！ ',
'batch_delete_photo_success'       => '成功批量刪除照片！ ',
'batch_delete_photo_failed'        => '批量刪除照片失敗！ ',
'save_photo_name_failed'           => '照片名保存失敗！ ',
'photo_not_exists'                 => '您要訪問的照片不存在！ ',
'no_access_view_exif'              => '無權查看EXIF！ ',
'view_photo_exif'                  => '查看照片%s的EXIF信息',
'view_exif'                        => '查看EXIF信息',
'modify_photo_tags_failed'         => '編輯照片標籤失敗！ ',
'empty_photo_desc'                 => '照片描述不能為空！ ',
'modify_photo_desc_failed'         => '編輯照片描述失敗！ ',
'confirm_delete_photo'             => '確定要刪除圖片“%s” 麼？刪除後的圖片可以在“回收站”恢復！ ',
'confirm_delete_photo_batch'       => '確定要刪除這些圖片麼？刪除後的圖片可以在“回收站”恢復！ ',
//photo html
'photo_list'                       => '照片列表',
'total_photo'                      => '共%s張圖片',
'upload_new_photo'                 => '上傳新照片',
'set_cover'                        => '設為封面',
'move_photo'                       => '移動照片',
'in_taken_time'                    => '拍攝於',
'view_nums'                        => '%s瀏覽',
'cover'                            => '封面',
'move_selected'                    => '移動選中項',
'all_photo_this_album'             => '此相冊所有照片',
'click_editable'                   => '點擊可編輯',
'no_album_desc'                    => '還沒有描述，為相冊添加描述吧！ ',
'no_album_tags'                    => '點擊添加標籤吧！ ',
'view_priv'                        => '訪問權限',
'create_date'                      => '創建日期：',
'uploaded_date'                    => '最近上傳：',
'current_album'                    => '當前相冊',
'all_album'                        => '所有相冊',
'go_back'                          => '返回頁面',
'view_more_meta'                   => '查看照片%s的更多信息',
'modify_photo'                     => '修改照片信息',
'photo_name'                       => '照片名',
'photo_desc'                       => '照片描述',
'photo_tags'                       => '照片標籤',
'move_photo'                       => '移動照片',
'move_photo_to'                    => '移動照片到',
'move_photo_short'                 => '至相冊',
'move_photo_batch'                 => '批量移動照片',
'album_need_auth'                  => '相冊“%s”需要認證',
'pls_input_passwd'                 => '請輸入訪問密碼',
'question'                         => '問題',
'pls_input_answer'                 => '請輸入答案',
'owner_could'                      => '如果您是相冊擁有者，您可以',
'you_can_also'                     => '您也可以',
'view_photo'                       => '查看照片',
'photo_nav_title'                  => '當前第%s張，共%s張',
'back_to_photo_list'               => '返回照片列表',
'first_photo'                      => '第一張',
'prev_photo'                       => '上一張',
'next_photo'                       => '下一張',
'last_photo'                       => '最後張',
'slideshow_view'                   => '幻燈瀏覽',
'image_size'                       => '圖片尺寸',
'taken_width'                      => '由%s拍攝',
'more_exif'                        => '更多Exif',
'viewed_nums'                      => '被查看了%s次',
'view_orgi_photo'                  => '查看原圖',
'no_photo_desc'                    => '還沒有描述，為照片添加描述吧！ ',
'no_photo_tags'                    => '點擊添加標籤吧！ ',
'post_comments'                    => '發表評論',
'this_first_photo'                 => '這是首張',
'this_last_photo'                  => '這是末張',

//tags
'tag_list'                         => '標籤列表',
'search_tag'                       => '標籤：%s',
//tags html
'no_tags'                          => '當前沒有標籤！ ',
//users
'modify_profile'                   => '修改個人資料',
'username_empty'                   => '請輸入用戶名！ ',
'userpass_empty'                   => '請輸入密碼！ ',
'login_success'                    => '登錄成功！ ',
'username_pass_error'              => '請驗證用戶名和密碼是否正確！ ',
'old_pass_error'                   => '舊密碼輸入錯誤！ ',
'pass_twice_error'                 => '兩次密碼輸入不一致！ ',
'modify_success'                   => '修改成功！ ',
'modify_failed'                    => '修改失敗！ ',
'pass_edit_ok'                     => '您的密碼已經修改，請重新登錄！ ',
'logout_success'                   => '退出登錄成功！ ',


//users html
'user_login'                       => '用戶登錄',
'username'                         => '用戶名',
'password'                         => '密碼',
'remember_pass'                    => '記住密碼',
'my_profile'                       => '我的資料',
'loginname'                        => '登錄名',
'nickname'                         => '暱稱',
'old_passport'                     => '原始密碼',
'new_passport'                     => '新密碼',
'confirm_newpass'                  => '確認新密碼',


'photo_has_priv'                   => '圖片設置了訪問權限，您無權查看！ ',

'album_type_private'               => '私人相冊',
'album_type_public'                => '公開相冊',
'album_type_passwd'                => '憑密碼訪問',
'album_type_ques'                  => '憑問題答案',

//search
'search_albums'                    => '搜索相冊',
'search_photos'                    => '搜索照片',
'search'                           => '搜索',
'search_s'                         => '搜索：%s',
//comments languages
'comments_num'                     => '%s評論',
'all_album_comments'               => '對該相冊的評論',
'all_photo_comments'               => '對該照片的評論',
'comments_num'                     => '共%s個評論',
'email'                            => 'Email',
'comment_user'                     => '評論者',
'comment_content'                  => '評論內容',
'album_comment_closed'             => '相冊關閉了評論！ ',
'error_email'                      => '請輸入有效的Email地址！ ',
'error_comment_author'             => '請輸入評論者名字！ ',
'empty_content'                    => '內容不能為空！ ',
'miss_argument'                    => '參數丟失！ ',
'post_comment_success'             => '評論成功！ ',
'post_comment_failed'              => '評論失敗！ ',
'reply_failed'                     => '回复失敗！ ',
'delete_comment_success'           => '成功刪除評論!',
'delete_comment_failed'            => '刪除評論失敗!',
'block_comment_success'            => '成功屏蔽評論！ ',
'block_comment_failed'             => '屏蔽評論失敗！ ',
'loginwith'                        => '以 %s 的身份登錄。 ',

'confirm_delete_comments'          => '確定要刪除這條評論麼？刪除後無法恢復！ ',
'reply'                            => '回复',
'block'                            => '屏蔽',
'approve'                          => '獲准',
'load_more_comments'               => '載入更多評論',
'comments_manage_title'            => '評論管理',
'comments_manage'                  => '評論管理',
'comments_manage_list_title'       => '評論列表',
'no_comments'                      => '當前還沒有評論！ ',
'approve_comment_success'          => '審核評論成功！ ',
'approve_comment_failed'           => '審核評論失敗！ ',
'pls_sel_comments_want_to_delete'  => '請選擇需要刪除的評論！ ',
'batch_delete_comments_success'    => '批量刪除評論成功！ ',
'batch_delete_comments_failed'     => '批量刪除評論失敗！ ',
'pls_sel_comments_want_to_block'   => '請選擇需要屏蔽的評論！ ',
'batch_block_comments_success'     => '批量屏蔽評論成功！ ',
'batch_block_comments_failed'      => '批量屏蔽評論失敗！ ',
'pls_sel_comments_want_to_approve' => '請選擇需要獲准的評論！ ',
'batch_approve_comments_success'   => '批量獲准評論成功！ ',
'batch_approve_comments_failed'    => '批量獲准評論失敗！ ',
'confirm_approve_comments_batch'   => '確定要獲准這些評論麼？仔細檢查後按確定。 ',
'confirm_block_comments_batch'     => '確定要屏蔽這些評論麼？屏蔽後遊客將無法看到這些評論！ ',
'confirm_delete_comments_batch'    => '確定要刪除這些評論麼？刪除後將無法恢復。 ',
'moderated'                        => '待審',
'blocked'                          => '已屏蔽',
'approved'                         => '已獲准',
'reply_to'                         => '回應給',
'block_selected'                   => '屏蔽選中項',
'approve_selected'                 => '獲准選中項',
'posted_at'                        => '提交於',
'replyed_to'                       => '回复給',

//trash
'recycle'                          => '回收站',
'real_delete_success'              => '徹底刪除成功！ ',
'real_delete_failed'               => '徹底刪除失敗！ ',
'pls_sel_photo_album_del'          => '請先選擇要徹底刪除的照片/相冊！ ',
'real_delete_batch_success'        => '成功批量刪除！ ',
'restore_success'                  => '成功還原！ ',
'restore_failed'                   => '還原失敗！ ',
'pls_sel_photo_album_restore'      => '請先選擇要還原的照片/相冊！ ',
'restore_batch_success'            => '成功批量還原！ ',
'empty_trash_success'              => '成功清空回收站!',
//trash html
'trash_is_empty'                   => '您的回收站是空的！ ',
'clear_recycle'                    => '清空回收站',
'real_delete'                      => '徹底刪除',
'restore'                          => '還原',
'real_delete_selected'             => '徹底刪除選中項',
'restore_selected'                 => '還原選中項',
'no_album_in_trash'                => '回收站中沒有已刪除的相冊！ ',
'no_photo_in_trash'                => '回收站中沒有已刪除的照片！ ',
'confirm_real_delete'              => '確定要徹底刪除“%s” 麼？刪除後無法恢復！ ',
'confirm_real_delete_batch'        => '確定要刪除這些圖片/相冊麼？刪除後的無法恢復！ ',
'confirm_emptying_trash'           => '確定清空回收站麼？刪除後的無法恢復！ ',
'confirm_restore_batch'            => '確定要還原這些圖片/相冊麼？ ',

//upload
'pls_login_before_upload'          => '請先登錄後上傳',
'pls_sel_album'                    => '請先選擇相冊！ ',
'upload_photo_success'             => '上傳照片成功！ ',
'view_album'                       => '查看相冊',
'need_sel_upload_file'             => '您沒有選擇圖片上傳，請重新上傳！ ',
'file_upload_failed'               => '文件%s上傳失敗！ ',
'failed_larger_than_server'        => '文件%s上傳失敗:文件大小超過服務器限制！ ',
'failed_larger_than_usetting'      => '文件%s上傳失敗:大小超過用戶限制！ ',
'failed_if_file'                   => '文件%s上傳失敗:請確認上傳的是否為文件！ ',
'failed_not_support'               => '文件%s上傳失敗:不支持此格式！ ',
//u html
'switch_upload_type'               => '切換上傳方式',
'expert_mode'                      => '高級上傳',
'normal_mode'                      => '普通模式',
'select_album'                     => '選擇相冊',
'new_album'                        => '新建相冊',
'upload_immediatly'                => '立即上傳',
'loading'                          => '載入中...',
'if_no_response_click_here'        => '如果長時間沒有響應，可以點此處切換至普通上傳方式！ ',
'must_upload_one'                  => '至少選擇一個文件上傳.',
'filename'                         => '文件名',
'status'                           => '狀態',
'size'                             => '大小',
'add_file'                         => '添加圖片',
'stop_upload'                      => '停止上傳',
'start_upload'                     => '開始上傳',
'upload_status'                    => '已上傳 %%d/%%d 圖片',
'drag_file_here'                   => '拖拽文件至此處.',
'Failed to save file.'             => '文件上傳失敗！ ',

//Exif languages
'exif_Make'                        => '相機品牌',
'exif_Model'                       => '相機型號',
'exif_ApertureFNumber'             => '光圈',
'exif_ExposureTime'                => '曝光時間',
'exif_Flash'                       => '閃光燈',
'exif_FocalLength'                 => '焦距',
'exif_FocalLengthIn35mmFilm'       => '35mm等效焦距',
'exif_ISOSpeed​​Ratings'           => 'ISO感光度',
'exif_WhiteBalance'                => '白平衡',
'exif_ExposureBiasValue'           => '曝光補償',
'exif_DateTimeOriginal'            => '拍攝時間',
'exif_FocusDistance'               => '對焦距離',
'exif_FileSize'                    => '文件大小',
'exif_MimeType'                    => '文件類型',
'exif_Width'                       => '圖片寬度',
'exif_Height'                      => '圖片高度',
'exif_Orientation'                 => '方向',
'exif_XResolution'                 => '水平分辨率',
'exif_YResolution'                 => '垂直分辨率',
'exif_ResolutionUnit'              => '分辨率單位',
'exif_Software'                    => '創建軟件',
'exif_DateTime'                    => '修改時間',
'exif_Artist'                      => '作者',
'exif_Copyright'                   => '版權',
'exif_MaxApertureValue'            => '最大光圈',
'exif_FNumber'                     => 'F-Number',
'exif_MeteringMode'                => '測光模式',
'exif_LightSource'                 => '光源',
'exif_ColorSpace'                  => '色彩空間',
'exif_ExposureMode'                => '曝光模式',
'exif_ExposureProgram'             => '曝光程序',
'exif_DateTimeDigitized'           => '數字化時間',

'standard_procedure'               => '標準程序',
'aperture_priority'                => '光圈先決',
'shutter_priority'                 => '快門先決',
'depth_priority'                   => '景深先決',
'sport_mode'                       => '運動模式',
'portrait_mode'                    => '肖像模式',
'landscape_mode'                   => '風景模式',
'top_left'                         => '上/左',
'top_right'                        => '上/右',
'bottom_right'                     => '下/右',
'bottom_left'                      => '下/左',
'left_top'                         => '左/上',
'right_top'                        => '右/上',
'right_bottom'                     =>  '右/下',
'left_bottom'                      => '左/下',
'in-ch'                            => '英寸',
'cm'                               => '厘米',

'avg'                              => "平均",
'center_weighted_average'          => "中央重點平均測光",
'point_measurement'                => "點測",
'zoning'                           => "分區",
'assess'                           => "評估",
'portion'                          => "局部",
'sun_light'                        => "日光",
'fluorescent'                      => "熒光燈",
'tungsten'                         => "鎢絲燈",
'flash_lamp'                       => "閃光燈",
'standard_lighting_A'              => "標準燈光A",
'standard_lighting_B'              => "標準燈光B",
'standard_lighting_C'              => "標準燈光C",
'd55'                              => "D55",
'd65'                              => "D65",
'd75'                              => "D75",

'open1'                            => "打開(不探​​測返迴光線)",
'open2'                            => "打開(探測返迴光線)",
'open3'                            => "打開(強制)",
'open4'                            => "打開(強制/不探測返迴光線)",
'open5'                            => "打開(強制/探測返迴光線)",
'open6'                            => "關閉(強制)",
'close1'                           => "關閉(自動)",
'open7'                            => "打開(自動)",
'open8'                            => "打開(自動/不探測返迴光線)",
'open9'                            => "打開(自動/探測返迴光線)",
'no_flash'                         => "沒有閃光功能",
'open10'                           => "打開(防紅眼)",
'open11'                           => "打開(防紅眼/不探測返迴光線)",
'open12'                           => "打開(防紅眼/探測返迴光線)",
'open13'                           => "打開(強制/防紅眼)",
'open14'                           => "打開(強制/防紅眼/不探測返迴光線)",
'open15'                           => "打開(強制/防紅眼/探測返迴光線)",
'open16'                           => "打開(自動/防紅眼)",
'open17'                           => "打開(自動/防紅眼/不探測返迴光線)",
'open18'                           => "打開(自動/防紅眼/探測返迴光線)",

//setting
'system_setting'                   => '系統設置',
'basic_setting'                    => '基本設置',
'empty_site_name'                  => '站點名稱不能為空！ ',
'empty_site_url'                   => '相冊URL不能為空！ ',
'save_setting_success'             => '保存設置成功！ ',
'save_setting_failed'              => '保存設置失敗！ ',
'upload_setting'                   => '上傳設置',
'resize_width_error'               => '圖片的最大寬度不能為空，並且必須為數字！ ',
'resize_height_error'              => '圖片的最大高度不能為空，並且必須為數字！ ',
'resize_quality_error'             => '圖片質量必須介於1-100！ ',
'watermark_setting'                => '水印設置',
'water_mark_image_error'           => '圖片水印地址不能為空！ ',
'water_mark_opacity_error'         =>'水印透明度必須介於0-100！ ',
'water_mark_string_error'          => '水印文字內容不能為空！ ',
'water_mark_fontsize_error'        => '水印文字大小必須大於1！ ',
'water_mark_color_error'           => '水印文字顏色不是有效的顏色！ ',
'water_mark_font_error'            => '請選擇水印文字字體！ ',
'water_mark_angle_error'           => '水印文字角度必須在0-360度之間！ ',
'water_mark_opacity_error'         => '水印透明度必須介於0-100！ ',
'upload_error'                     => '上傳失敗！ ',
'theme_setting'                    => '主題設置',
'enable_success'                   => '啟用成功！ ',
'empty_theme'                      => '請確認要刪除的主題是否存在！ ',
'can_not_delete_default'           => '默認主題不能刪除！ ',
'theme_is_using'                   => '此主題正在使用中，無法刪除！ ',
'delete_theme_success'             => '成功刪除主題！ ',
'delete_theme_failed'              => '刪除主題失敗！ ',
'user_theme'                       => '用戶主題',
'plugin_setting'                   => '插件管理',
'install_plugin_success'           => '安裝插件成功！ ',
'install_plugin_failed'            => '安裝插件失敗！ ',
'enable_plugin_success'            => '啟用插件成功！ ',
'enable_plugin_failed'             => '啟用插件失敗！ ',
'stop_plugin_success'              => '停用插件成功！ ',
'stop_plugin_failed'               => '停用插件失敗！ ',
'remove_plugin_success'            => '刪除插件成功！ ',
'remove_plugin_failed'             => '刪除插件失敗！ ',
'system_info'                      => '系統信息',
'clear_cache_success'              => '清空緩存成功！ ',

'site_title_label'                 => '站點名稱',
'site_title_tips'                  => '顯示在每個頁面的最頂端',

'site_url_label'                   => '你的相冊URL',
'site_url_tips'                    => '圖片地址時及超鏈接的前綴，請保留最後的"/"',
'site_keywords_label'              => '你的相冊默認關鍵字',
'site_keywords_tips'               => '便於搜索引擎抓取，meta keywords',
'site_logo_label'                  => '相冊LOGO',
'site_logo_tips'                   => '顯示於頁面左上角，請上傳logo或填入logo的相對地址',

'site_description_label'           => '你的相冊描述',
'site_description_tips'            => '便於搜索引擎抓取，meta description',
'site_footer_label'                => '頁面底部代碼',
'site_footer_tips'                 => '可以插入備案號，統計代碼等，支持html',
'show_process_info_label'          => '顯示頁腳程序運行信息',
'show_process_info_tips'           => '包括頁面執行時間和數據庫請求次數',
'enable_comment_label'             => '是否允許評論',
'enable_comment_tips'              => '如果關閉此選項，用戶無法對所有相冊/照片進行評論',
'gravatar_url_label'               => 'Gravatar頭像地址設置',
'gravatar_url_tips'                => '系統將自動替換{idstring}為相應的gravatar_id',

'save_setting'                     => '保存設置',
'cache_size'                       => '緩存大小：',
'clear_all_cache'                  => '清空所有緩存',
'more_system_info'                 => '更多系統信息',
'edit_plugin_setting'              => '編輯插件配置',
'in_safe_mode'                     => '您當前處在安全模式，所有插件均未生效，若想使用插件請關閉安全模式！ ',
'no_plugins'                       => '沒有任何可用的插件！ ',
'plugin_id'                        => '插件id',
'plugin_name'                      => '插件名',
'plugin_desc'                      => '插件介紹',
'version'                          => '版本',
'developer'                        => '開發者',
'status'                           => '狀態',
'operate'                          => '操作',
'confirm_delete_theme'             => '確定要刪除主題“%s” 麼？ ',
'edit_style'                       => '編輯風格',
'enable_pre_resize_label'          => '是否開啟客戶端預處理',
'enable_pre_resize_tips'           => '啟用此選項，在高級模式下會自動將大圖片縮小，然後再上傳，有利於大大減少網絡傳輸，縮短上傳時間。 ',
'upload_resize_width_label'        => '圖片的最大寬度',
'upload_resize_width_tips'         =>'客戶端預處理圖片的最大寬度',
'upload_resize_height_label'       => '圖片的最大高度',
'upload_resize_height_tips'        => '客戶端預處理圖片的最大高度',
'upload_resize_quality_label'      => '圖片質量',
'upload_resize_quality_tips'       => '客戶端預處理圖片的質量1-100',
'upload_allow_size_label'          => '允許上傳的圖片大小',
'upload_allow_size_tips'           => '請謹慎選擇，如果空間服務商配置有限制，尺寸過大可能會導致系統癱瘓，高級上傳不受影響',
'watermark_type_label'             => '是否啟用水印',
'watermark_type_tips'              =>'啟用此選項，會在每張上傳的圖片上打上水印，可以防止別人盜用圖片。 ',
'enable_img_wm'                    => '啟用圖片水印',
'enable_font_wm'                   => '啟用文字水印',
'water_mark_image_label'           => '圖片水印地址',
'water_mark_image_tips'            => '請上傳水印圖片，或填入水印圖片的相對地址',
'upload'                           => '上傳',
'view'                             => '查看',
'water_mark_string_label'          => '水印文字',
'water_mark_string_tips'           => '水印文字內容',
'water_mark_font_label'            => '水印文字字體',
'water_mark_font_tips'             => '請把所需的字體文件上傳到相冊服務器根目錄下的/statics/font文件夾中，字體文件位於本機C:\WINDOWS\Fonts下，例如文件SimSun.ttc表示宋體',
'water_mark_fontsize_label'        => '水印文字大小',
'water_mark_fontsize_tips'         => '水印文字大小設置，單位為px',
'water_mark_color_label'           => '水印文字顏色',
'water_mark_color_tips'            => '請使用HEX顏色代碼。如:#332211',
'water_mark_angle_label'           => '水印角度',
'water_mark_angle_tips'            => '角度可取值範圍為0-360度，逆時針方向（即如果值為90 則表示從下向上閱讀文本）',
'water_mark_opacity_label'         => '水印透明度',
'water_mark_opacity_tips'          => '透明度請設置為0-100之間的數字，0代表完全透明，100代表不透明。若水印圖片本身透明請填0',
'water_mark_pos_label'             => '水印位置',
'water_mark_pos_label'             => '設置水印位置',
'pos_topleft'                      => '頂部居左',
'pos_topcenter'                    => '頂部居中',
'pos_topright'                     => '頂部居右',
'pos_centerleft'                   => '左部居中',
'pos_center'                       => '圖片中心',
'pos_centerright'                  => '右部居中',
'pos_bottomleft'                   => '底部居左',
'pos_bottomcenter'                 => '底部居中',
'pos_bottomright'                  => '底部居右',
'pos_random'                       => '隨機',

'language_and_locale'              => '區域語言設置',
'system_language_label'            => '選擇系統語言',
'system_language_tips'             => '如果沒有您要的語言可以從meiupic.meiu.cn下載相應的語言包',
'system_timeoffset_label'          => '選擇時區',
'system_timeoffset_tips'           => '請選擇所在地的時區',
'empty_langset'                    => '請選擇語言！',
'empty_timezone'                   => '請選擇時區！',

//系統信息
'meiupic_version'                  => '相冊系統版本',
'operate_system'                   => '操作系統',
'server_software'                  => '服務器軟件',
'php_runmode'                      => 'php運行模式',
'php_version'                      => 'php版本',
'mysql_support'                    => '是否支持Mysql',
'mysqli_support'                   => '是否支持Mysqli',
'sqlite_support'                   => '是否支持Sqlite',
'database_version'                 => '數據庫及版本',
'gd_info'                          => 'GD庫',
'imagick_support'                  => 'Imagick擴展',
'exif_support'                     => 'Exif支持',
'zlib_support'                     => '是否支持Zlib',
'support'                          => '支持',
'notsupport'                       => '不支持',

'nothing_to_do'                    => '未做任何操作！ ',
'recounter_success'                => '更新統計成功！ ',
'recounter'                        => '更新統計',
'comment_recounter'                => '評論數重計',
'photo_recounter'                  => '照片數重計',
'tag_recounter'                    => '標籤數重計',
'check_update'                     => '檢查更新',
'connect_to_server_failed'         => '連接服務器失敗！',

'sel_album_to_upload'              => '選擇要上傳的相冊',
'you_chose_album'                  => '您選擇了相冊',
'back_to_re_select'                => '返回重選',
'rotate_image'                     => '旋轉圖片',
'rotate_image_short'               => '旋轉',
'rotate_left_90'                   => '向左旋轉90°',
'rotate_right_90'                  => '向右旋轉90°',

'do_nothing'                       => '您沒有做任何操作！ ',
'rotate_image_success'             => '旋轉圖片成功！ ',
'rotate_image_failed'              => '旋轉圖片失敗！ ',

//重新上傳
'new_photo'                        => '新照片',
'reupload_photo'                   => '重新上傳照片',
'reupload_photo_short'             => '重新上傳',
//分类
'category'                         => '分類',
'category_list'                    => '分類列表',
'all_category'                     => '所有分類',
'create_category_succ'             => '創建分類成功！',
'create_category_fail'             => '創建分類失敗！',
'edit_category_succ'               => '編輯分類成功！',
'edit_category_fail'               => '編輯分類失敗,上級分類不能是自己或子分類!',
'confirm_delete_category'          => '確定要刪除分類“%s”嗎？分類下的相冊將自動移動到未分類相冊！',
'create_category'                  => '創建分類',
'create_sub_category'              => '創建子分類',
'category_name'                    => '分類名',
'parent_category'                  => '上級分類',
'no_parent'                        => '無上級',
'back_to_manage_album'             => '返回相冊管理',
'delete_cate_succ'                 => '刪除分類成功！',
'delete_cate_fail'                 => '刪除分類失敗！請先刪除子分類！',
'not_cate'                         => '未分類',
'belong_category'                  => '所屬的分類',
'add_to_nav'                       => '添加到菜單',
//自定義菜單
'setting_nav'                      => '自定義菜單',
'delete?'                          => '刪?',
'add_menu'                         => '添加菜單',
'nav_sort'                         => '排序',
'nav_name'                         => '名稱',
'nav_url'                          => '鏈接',
'nav_inside'                       => '內置',
'nav_custom'                       => '自定義',
'nav_save_succ'                    => '保存成功！ ',
'nav_save_fail'                    => '部分內容保存失敗，請確認是否內容都填寫正確了！ ',
'no_cate_album'                    => '未分類相冊',

//分享按鈕提示設置
'share_title_label'                => '自定義分享內容設置',
'share_title_tips'                 => '{name}為照片名',
'side_category'                    => '按分類篩選相冊',
'share_title'                      => '分享張很讚的照片:{name}',

//自動升級
'no_need_to_update'                => '無需升級！',
'version_can_not_be_empty'         => '版本號不能為空！',
'dir_not_writable'                 => '目錄：%s 不可寫！',
'fil​​e_not_writable'                => '文件：%s 不可寫！',
'fil​​e_has_been_downloaded'         => '文件已下載！',
'download_package_failed'          => '下載升級包失敗！',
'download_package_succ'            => '下載文件成功！',
'unzip_package_succ'               => '解壓文件成功！',
'delete_tmp_download_file'         => '刪除下載的臨時文件！',
'upgrade_after_jump'               => '跳轉後執行升級腳本！',
'get_update_fail'                  => '獲取更新失敗！',
'have_been_updated'                => '已經升級過了！',
'could_not_degrade'                => '腳本無法執行降級操作！',
'too_old_to_update'                => '對不起, 您的版本太舊！無法自動升級！',
'upgrade_success'                  => '升級成功，跳轉至首頁！',
'click_to_jump'                    => '點擊此處跳轉',
);