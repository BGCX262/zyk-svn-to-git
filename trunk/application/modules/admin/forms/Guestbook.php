<?php 
class Admin_Form_Guestbook extends Zend_Form 
 { 
         public function init($option = NULL) 
         { 
                 parent::init($option); 
                  
                 /*$filterPath = $this->getView()->getFilterPaths(); 
                 $preFix = 'Zend_View_Filter_'; 
                 $this->addElementPrefixPath($preFix, $filterPath[$preFix][1], 'filter');*/ 
                  
                 //var_dump($this->getTranslator());exit; 
                 //$translate = $this->getTranslator(); 
                 //Zend_Debug::dump($translate->_('alnumInvalid'));exit; 
                  
                  
                 $this->addElementPrefixPath('Vow_Filter', 'Vow/Filter', 'filter'); 
  
                 $this->addElement('text', 'username', array( 
                         //'Required'   => true, 
                         'Filters'    => array('StringTrim', 'UcFirst'), 
                         'Validators' => array( 
                                 'Alnum', 
                                 array('StringLength', false, array( 
                                         2,  
                                         5,  
                                         # 如果没有使用Zend_Translate时,使用如下配置, 
                                         # 否则Validator时会自动查找isTranslated($message或$messageKey),@SEE Zend_Validate_Abstract 221 
                                         # 最后在表单重建时把 error 写入 表单装饰器 Errors中. @SEE Zend_Form_Element 1364 
                                         /*'messages' => array( 
                                                 Zend_Validate_StringLength::INVALID   => $translate->_(Zend_Validate_StringLength::INVALID), 
                                                 Zend_Validate_StringLength::TOO_SHORT => $translate->_(Zend_Validate_StringLength::TOO_SHORT), 
                                                 Zend_Validate_StringLength::TOO_LONG  => $translate->_(Zend_Validate_StringLength::TOO_LONG) 
                                     )*/ 
                             )) 
                         ), 
                         'Label'          => '昵称：', 
                         'Description'    => '(2 < strlen(this) < 10)', 
                         'AllowEmpty' 	  => false,//默认是允许为空的         
                         'Attribs'        => array('class'=>'inp'), 
                         /*'prefixPath' => array(//这里是使用addPrefixPaths,需传递数组!,@see Zend/Form.php->setOptions() 
			                array(  
			                     'type'   => 'filter',  
			                     'prefix' => 'Vow_Filter',  
			                     'path'   => 'Vow/Filter/'  
			                 )  
             			),*/  
                 )); 
  
                 $this->addElement('text', 'mail1', array( 
                         'Validators' => array( 
                                 'EmailAddress' 
                         ), 
                         'Label'          => 'Mail：', 
                         'Description'    => 'e.g.:msn@msn.com', 
                         'AllowEmpty'     => false,//默认是允许为空的         
                         'Attribs'        => array('class'=>'inp'), 
                         'ErrorMessages'  => array('Email格式错误!')//覆盖validate错误时多条提示 
                 )); 
                  
                 $this->addElement('text', 'mail2', array( 
                         'prefixPath' => array( 
                                 array( 
                                 'type'   => 'validate',  
			                     'prefix' => 'Vow_Form_Validate',  
			                     'path'   => 'Vow/Form/Validate/'     
                                 ) 
                         ), 
                         'Validators' => array( 
                                 //array('EmailAddress',ture, array('messages'=>'Email地址错误!')),  
                                 array('EmailConfirmation', false, array(array('mail1', 'mail2')))//可以传递两个字段的值,也可以传递前一项,进行比较 
                         ), 
                         'ignore'         => true, 
                         'Label'          => 'ReMail：', 
                         'AllowEmpty'     => false,//默认是允许为空的 
                         'Attribs'        => array('class'=>'inp'), 
                 )); 
                  
                 $this->addElement('textarea', 'content', array( 
                         //'Required'     => true, 
                         'Filters'       => array('StringTrim'), 
                         'Validators' 	 => array( 
                                 array('StringLength', false, array( 
                                         2,  
                                         200 
                             	)) 
                         ), 
                         'AllowEmpty' 	 => false,//默认是允许为空的         
                         'Label'         => '内容：', 
                         'Attribs'       => array('rows'=>'8', 'cols'=>'80', 'class'=>'inp', 'style'=>'height: 100px; width: 450px; overflow-y: auto;') 
                 )); 
                  
                 $this->addElement('captcha', 'captcha', array( 
                         'captcha' => array( 
				 				'captcha' 		=> 'Image',             //验证码类型
				                'wordLen' 		=> 5,                   //字符长度
				                'fontsize' 		=> 18,                  //字体大小
				                'width' 		=> 120,                 //图像宽度
				                'height' 	 	=> 40,                  //图像高度
				                'dotNoiseLevel' => 2,                   //噪点数
                                'lineNoiseLevel'=> 5,                   //干扰线条
				                'timeout' 		=> 10,                 //会话周期
				                'font' 			=> 'fonts/Faktos.ttf',  //字体文件
				                'imgDir' 		=> './captcha/',        //生成的图像目录
				                'imgUrl' 		=> '/captcha/',         //图像访问网址(相对)
				                'gcFreq' 		=> 2,                   //执行垃圾收集频率(mt_rand(1, gcFreq) == 1)
				                'expiration' 	=> 10,                  //生成图像过期(秒)
                 				'imgAlt'		=> '验证码',             //图片ALT
                                //'startImage'	=> './images/b.png'
                         ), 
                         'Filters'    => array('StringTrim'), 
                         'AllowEmpty' => false,//默认是允许为空的         
                         'Label'      => '验证码：', 
                         'Attribs'    => array('class'=>'inp captcha'),
                 )); 
                            
                 $this->addElement('submit', 'submitbotton', array( 
                         'ignore'    => true, 
                         'Label'     => '提交留言', 
                         'Attribs'   => array('class'=>'but') 
                 )); 
                  
                 $this->addElement('hash', 'csrf', array( 
                         'ignore'=>true,
                 		 'salt' => 'unique'
                 ));
                 
                 $this->setDecorators(array( 
                         'FormElements',//表单内部 
                         array('HtmlTag', array('tag'=>'dl', 'class'=>'zend_form')),//表单第一层,对DL加Css,方便对每个form样式定制
                         'Form'//表单 
                 )); 
     	} 
 } 