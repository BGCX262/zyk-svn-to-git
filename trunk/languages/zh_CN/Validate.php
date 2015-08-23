<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Translate
 * @subpackage Ressource
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id:$
 */

/**
 * EN-Revision: 21134
 */
return array(
    // Zend_Validate_Alnum
    "alnumInvalid" => "无效的类型, 给出的值应该是浮点型，字符串或整型",
    "notAlnum" => "'%value%' 的值包含非字母或数字字符",
    "alnumStringEmpty" => "'%value%' 是空字符串",

    // Zend_Validate_Alpha
    "alphaInvalid" => "无效的类型, 给出的值应该是字符串",
    "notAlpha" => "'%value%' 的值包含非字母字符",
    "alphaStringEmpty" => "'%value%' 是空字符串",

    // Zend_Validate_Barcode
    "barcodeFailed" => "'%value%' 验证失败",
    "barcodeInvalidChars" => "'%value%' 包含无效字符",
    "barcodeInvalidLength" => "'%value%' 的长度应为 %length% 个字符",
    "barcodeInvalid" => "无效的类型, 给出的值应该是字符串",

    // Zend_Validate_Between
    "notBetween" => "'%value%' 不在 '%min%' - '%max%' 之间",
    "notBetweenStrict" => "'%value%' 不在 '%min%' - '%max%' 之内",

    // Zend_Validate_Callback
    "callbackValue" => "'%value%' 不是有效的",
    "callbackInvalid" => "在回调中失败，返回异常",

    // Zend_Validate_Ccnum
    "ccnumLength" => "'%value%' 必须包含 13 - 19 数字",
    "ccnumChecksum" => "'%value%' 使用 Luhn算法 (mod-10 checksum) 校验失败",

    // Zend_Validate_CreditCard
    "creditcardChecksum" => "'%value%' 使用 Luhn算法 (mod-10 checksum) 校验失败",
    "creditcardContent" => "'%value%' 必须只包含数字",
    "creditcardInvalid" => "无效的类型, 给出的值应该是字符串",
    "creditcardLength" => "'%value%' 包含的数字金额无效",
    "creditcardPrefix" => "'%value%' 的值不是允许的CCV",
    "creditcardService" => "'%value%' 校验失败(By the service)",
    "creditcardServiceFailure" => "'%value%' 时,服务返回失败",

    // Zend_Validate_Date
    "dateInvalid" => "无效的类型, 给出的值应该是字符串, 整型, 数组 或 Zend_Date",
    "dateInvalidDate" => "'%value%' 不是一个有效的日期",
    "dateFalseFormat" => "'%value%' 不符合日期格式 '%format%'",

    // Zend_Validate_Db_Abstract
    "noRecordFound" => "没有记录匹配 %value%",
    "recordFound" => "有记录匹配 %value%",

    // Zend_Validate_Digits
    "digitsInvalid" => "无效的类型, 给出的值应该是字符串，整数或浮点型",
    "notDigits" => "'%value%' 包含的字符不是数字; 只允许数字字符",
    "digitsStringEmpty" => "'%value%' 是一个空字符串",

    // Zend_Validate_EmailAddress
    "emailAddressInvalid" => "无效的类型, 给出的值应该是字符串",
    "emailAddressInvalidFormat" => "'%value%' 的email地址基格式 local-part@hostname 无效",
    "emailAddressInvalidHostname" => "Email地址 ('%value%') 的主机名('%hostname%') 无效",
    "emailAddressInvalidMxRecord" => "'%hostname%' 似乎没有一个有效的电子邮件地址'%value%' 的MX记录",
    "emailAddressInvalidSegment" => "'%hostname%' 是无法路由的网段. Email地址('%value%') 不能从公共网络解析.",
    "emailAddressDotAtom" => "'%localPart%' 与 dot-atom 格式不匹配",
    "emailAddressQuotedString" => "'%localPart%' 与 quoted-string 格式不匹配",
    "emailAddressInvalidLocalPart" => "电子邮件 '%value%' 的local part('%localPart%') 无效",
    "emailAddressLengthExceeded" => "'%value%' 长度超过限制",

    // Zend_Validate_File_Count
    "fileCountTooMany" => "文件数过多, 总个数为 '%count%'(字数最大限制'%max%')",
    "fileCountTooFew" => "文件数过少, 总个数为 '%count%'(字数最大限制'%min%')",

    // Zend_Validate_File_Crc32
    "fileCrc32DoesNotMatch" => "文件 '%value%' 不匹配为定的 crc32 hashes值",
    "fileCrc32NotDetected" => "给定文件的 crc32 hash值 无法计算",
    "fileCrc32NotFound" => "找不到文件 '%value%'",

    // Zend_Validate_File_ExcludeExtension
    "fileExcludeExtensionFalse" => "文件 '%value%' 扩展名无效",
    "fileExcludeExtensionNotFound" => "找不到文件 '%value%'",

    // Zend_Validate_File_ExcludeMimeType
    "fileExcludeMimeTypeFalse" => "文件 '%value%' 的mime类型 '%type%' 无效",
    "fileExcludeMimeTypeNotDetectedd" => "无法检测文件 '%value%' 的mime类型",
    "fileExcludeMimeTypeNotReadable" => "文件 '%value%' 不可读",

    // Zend_Validate_File_Exists
    "fileExistsDoesNotExist" => "文件 '%value%' 不存在",

    // Zend_Validate_File_Extension
    "fileExtensionFalse" => "文件 '%value%' 扩展名无效",
    "fileExtensionNotFound" => "找不到文件 '%value%'",

    // Zend_Validate_File_FilesSize
    "fileFilesSizeTooBig" => "所有文件的大小最大值应该控制在 '%max%' 之内 (Error File: '%size%')",
    "fileFilesSizeTooSmall" => "所有文件的大小最小值应该控制在 '%min%' 之上 (Error File: '%size%')",
    "fileFilesSizeNotReadable" => "一个或多个文件 '%value%' 不可读",

    // Zend_Validate_File_Hash
    "fileHashDoesNotMatch" => "文件 '%value%' 不匹配给定的 hashes",
    "fileHashHashNotDetected" => "文件 hash 失败",
    "fileHashNotFound" => "找不到文件 '%value%'",

    // Zend_Validate_File_ImageSize
    "fileImageSizeWidthTooBig" => "图片 '%value%' 的宽度'%width%'(最大限度 '%maxwidth%')",
    "MfileImageSizeWidthTooSmall" => "图片 '%value%' 的宽度'%width%'(最小限度 '%minwidth%')",
    "fileImageSizeHeightTooBig" => "图片 '%value%' 的高度'%height%'(最大限度 '%maxheight%')",
    "fileImageSizeHeightTooSmall" => "图片 '%value%' 的高度'%height%'(最大限度 '%minheight%')",
    "fileImageSizeNotDetected" => "图片文件 '%value%' 大小检测失败",
    "fileImageSizeNotReadable" => "文件 '%value%' 不可读",

    // Zend_Validate_File_IsCompressed
    "fileIsCompressedFalseType" => "文件 '%value%' 没有压缩('%type%' 检测)",
    "fileIsCompressedNotDetected" => "文件 '%value%' mimetype 检测失败",
    "fileIsCompressedNotReadable" => "文件 '%value%' 不可读",

    // Zend_Validate_File_IsImage
    "fileIsImageFalseType" => "'%value%' 不是有效的图片文件.('%type%' 检测)",
    "fileIsImageNotDetected" => "文件 '%value%' mimetype 检测失败",
    "fileIsImageNotReadable" => "文件 '%value%' 不可读",

    // Zend_Validate_File_Md5
    "fileMd5DoesNotMatch" => "文件 '%value%' 不匹配给定的 md5 hashes",
    "fileMd5NotDetected" => "文件 md5 hash 失败",
    "fileMd5NotFound" => "找不到文件 '%value%'",

    // Zend_Validate_File_MimeType
    "fileMimeTypeFalse" => "文件 '%value%' 的 mimetype '%type%' 无效",
    "fileMimeTypeNotDetected" => "文件 '%value%' mimetype 检测失败",
    "fileMimeTypeNotReadable" => "文件 '%value%' 不可读",

    // Zend_Validate_File_NotExists
    "fileNotExistsDoesExist" => "文件 '%value%' 已存在",

    // Zend_Validate_File_Sha1
    "fileSha1DoesNotMatch" => "文件 '%value%' 不匹配给定的 sha1 hashes",
    "fileSha1NotDetected" => "文件 sha1 hash 失败",
    "fileSha1NotFound" => "找不到文件 '%value%'",

    // Zend_Validate_File_Size
    "fileSizeTooBig" => "文件 '%value%' 的大小 '%size%' 太大(最大限制'%max%')",
    "fileSizeTooSmall" => "文件 '%value%' 的大小 '%size%' 太小(最小限制'%min%')",
    "fileSizeNotFound" => "找不到文件 '%value%'",

    // Zend_Validate_File_Upload
    "fileUploadErrorIniSize" => "File '%value%' 大小超过配置文件定义(upload_max_filesize)最大值",
    "fileUploadErrorFormSize" => "文件 '%value%' 大小超过表单定义(MAX_FILE_SIZE)最大值",
    "fileUploadErrorPartial" => "文件 '%value%' 只有部分上传",
    "fileUploadErrorNoFile" => "找不到文件 '%value%'",
    "fileUploadErrorNoTmpDir" => "文件 '%value%' 没有找到临时目录",
    "fileUploadErrorCantWrite" => "文件 '%value%' 不可写",
    "fileUploadErrorExtension" => "文件 '%value%' 上传时被PHP扩展程序中断",
    "fileUploadErrorAttack" => "文件 '%value%' 非法上传, 可能是恶意攻击",
    "fileUploadErrorFileNotFound" => "找不到文件 '%value%'",
    "fileUploadErrorUnknown" => "文件 '%value%' 上传时出现未知错误",

    // Zend_Validate_File_WordCount
    "fileWordCountTooMuch" => "字数太多, 总字数为 '%count%'(字数最大限制'%max%')",
    "fileWordCountTooLess" => "字数太少, 总字数为 '%count%'(字数最小限制'%min%')",
    "fileWordCountNotFound" => "找不到文件 '%value%'",

    // Zend_Validate_Float
    "floatInvalid" => "无效的类型, 给出的值应该是浮点型, 整型 或 字符串",
    "notFloat" => "'%value%' 不是一个有效的浮点型",

    // Zend_Validate_GreaterThan
    "notGreaterThan" => "'%value%' 不大于 '%min%'",

    // Zend_Validate_Hex
    "hexInvalid" => "无效的类型, 给出的值应该是字符串",
    "notHex" => "'%value%' 不是标准的16进制字符",

    // Zend_Validate_Hostname
    "hostnameInvalid" => "无效的类型, 给出的值应该是字符串",
    "hostnameIpAddressNotAllowed" => "'%value%' 似乎是一个IP地址,但该IP是不允许的",
    "hostnameUnknownTld" => "'%value%' 似乎是一个DNS 主机名,但是与已知 TLD(顶级域名) 不匹配",
    "hostnameDashCharacter" => "'%value%' 似乎是一个DNS 主机名, 但是包含的破折号位置不正确",
    "hostnameInvalidHostnameSchema" => "'%value%' 似乎是一个DNS 主机名, 但主机名schema与 TLD('%tld%')不匹配",
    "hostnameUndecipherableTld" => "'%value%' 似乎是一个DNS 主机名, 但是无法获取 TLD 部分",
    "hostnameInvalidHostname" => "'%value%' 与预期的DNS主机名不符",
    "hostnameInvalidLocalName" => "'%value%' 似乎不是一个有效的本地网络名称",
    "hostnameLocalNameNotAllowed" => "'%value%' 似乎是一个本地网络,但该本地网络名是不允许的",
    "hostnameCannotDecodePunycode" => "'%value%' 似乎是一个DNS 主机名, 但是给定的punycode解码失败",

    // Zend_Validate_Iban
    "ibanNotSupported" => "未知国家的 IBAN '%value%'",
    "ibanFalseFormat" => "'%value%' 是一个无效的 IBAN 格式",
    "ibanCheckFailed" => "'%value%' 的IBAN 检测失败",

    // Zend_Validate_Identical
    "notSame" => "令牌 '%token%' 与给定的令牌 '%value%' 不匹配",
    "missingToken" => "令牌丢失",

    // Zend_Validate_InArray
    "notInArray" => "'%value%' 在堆栈中没有被找到",

    // Zend_Validate_Int
    "intInvalid" => "无效的类型, 给出的值应该是字符串 或 整型",
    "notInt" => "'%value%' 不是一个有效的整型",

    // Zend_Validate_Ip
    "ipInvalid" => "无效的类型, 给出的值应该是字符串",
    "notIpAddress" => "'%value%' 不是一个有效的IP地址",

    // Zend_Validate_Isbn
    "isbnInvalid" => "'%value%' 不是有效的 ISBN",

    // Zend_Validate_LessThan
    "notLessThan" => "'%value%' 不小于 '%max%'",

    // Zend_Validate_NotEmpty
    "notEmptyInvalid" => "无效的类型, 给出的值应该是浮点型, 字符串, 数组, 布尔 或 整型",
    "isEmpty" => "值是必须的,且不能为空",

    // Zend_Validate_PostCode
    "postcodeInvalid" => "无效的类型, 给出的值应该是字符串 或 整型",
    "postcodeNoMatch" => "'%value%' 不是一个有效的邮政编码",

    // Zend_Validate_Regex
    "regexInvalid" => "无效的类型, 给出的值应该是字符串, 整型 或浮点型",
    "regexNotMatch" => "'%value%' 与给定的模式 '%pattern%' 不匹配",

    // Zend_Validate_Sitemap_Changefreq
    "invalidSitemapChangefreq" => "站点地图更新频率(changefreq) '%value%' 无效",

    // Zend_Validate_Sitemap_Lastmod
    "invalidSitemapLastmod" => "站点地图最后修改时间(lastmod) '%value%' 无效",

    // Zend_Validate_Sitemap_Loc
    "invalidSitemapLoc" => "站点地图链接地址(location) '%value%' 无效",

    // Zend_Validate_Sitemap_Priority
    "invalidSitemapPriority" => "站点地图优先权(priority) '%value%' 无效",

    // Zend_Validate_StringLength
    "stringLengthInvalid" => "无效的类型, 给出的值应该是字符串",
    "stringLengthTooShort" => "'%value%' 过短 - 必须大于 %min% 字符",
    "stringLengthTooLong" => "'%value%' 过长 - 必须小于 %max% 字符",
	
    "missingValue" => "验证码为空",
    "missingID" => "验证码 ID 丢失",
    "badCaptcha" => "验证码错误",
);
