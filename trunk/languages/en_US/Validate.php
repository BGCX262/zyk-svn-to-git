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
    "alnumInvalid" => "Invalid type given, value should be float, string, or integer",
    "notAlnum" => "'%value%' contains characters which are non alphabetic and no digits",
    "alnumStringEmpty" => "'%value%' is an empty string",

    // Zend_Validate_Alpha
    "alphaInvalid" => "Invalid type given, value should be a string",
    "notAlpha" => "'%value%' contains non alphabetic characters",
    "alphaStringEmpty" => "'%value%' is an empty string",

    // Zend_Validate_Barcode
    "barcodeFailed" => "'%value%' failed checksum validation",
    "barcodeInvalidChars" => "'%value%' contains invalid characters",
    "barcodeInvalidLength" => "'%value%' should have a length of %length% characters",
    "barcodeInvalid" => "Invalid type given, value should be string",

    // Zend_Validate_Between
    "notBetween" => "'%value%' is not between '%min%' and '%max%', inclusively",
    "notBetweenStrict" => "'%value%' is not strictly between '%min%' and '%max%'",

    // Zend_Validate_Callback
    "callbackValue" => "'%value%' is not valid",
    "callbackInvalid" => "Failure within the callback, exception returned",

    // Zend_Validate_Ccnum
    "ccnumLength" => "'%value%' must contain between 13 and 19 digits",
    "ccnumChecksum" => "Luhn algorithm (mod-10 checksum) failed on '%value%'",

    // Zend_Validate_CreditCard
    "creditcardChecksum" => "Luhn algorithm (mod-10 checksum) failed on '%value%'",
    "creditcardContent" => "'%value%' must contain only digits",
    "creditcardInvalid" => "Invalid type given, value should be a string",
    "creditcardLength" => "'%value%' contains an invalid amount of digits",
    "creditcardPrefix" => "'%value%' is not from an allowed institute",
    "creditcardService" => "Validation of '%value%' has been failed by the service",
    "creditcardServiceFailure" => "The service returned a failure while validating '%value%'",

    // Zend_Validate_Date
    "dateInvalid" => "Invalid type given, value should be string, integer, array or Zend_Date",
    "dateInvalidDate" => "'%value%' does not appear to be a valid date",
    "dateFalseFormat" => "'%value%' does not fit the date format '%format%'",

    // Zend_Validate_Db_Abstract
    "noRecordFound" => "No record matching %value% was found",
    "recordFound" => "A record matching %value% was found",

    // Zend_Validate_Digits
    "digitsInvalid" => "Invalid type given, value should be string, integer or float",
    "notDigits" => "'%value%' contains characters which are not digits; but only digits are allowed",
    "digitsStringEmpty" => "'%value%' is an empty string",

    // Zend_Validate_EmailAddress
    "emailAddressInvalid" => "Invalid type given, value should be a string",
    "emailAddressInvalidFormat" => "'%value%' is no valid email address in the basic format local-part@hostname",
    "emailAddressInvalidHostname" => "'%hostname%' is no valid hostname for email address '%value%'",
    "emailAddressInvalidMxRecord" => "'%hostname%' does not appear to have a valid MX record for the email address '%value%'",
    "emailAddressInvalidSegment" => "'%hostname%' is not in a routable network segment. The email address '%value%' should not be resolved from public network.",
    "emailAddressDotAtom" => "'%localPart%' can not be matched against dot-atom format",
    "emailAddressQuotedString" => "'%localPart%' can not be matched against quoted-string format",
    "emailAddressInvalidLocalPart" => "'%localPart%' is no valid local part for email address '%value%'",
    "emailAddressLengthExceeded" => "'%value%' exceeds the allowed length",

    // Zend_Validate_File_Count
    "fileCountTooMany" => "Too many files, maximum '%max%' are allowed but '%count%' are given",
    "fileCountTooFew" => "Too few files, minimum '%min%' are expected but '%count%' are given",

    // Zend_Validate_File_Crc32
    "fileCrc32DoesNotMatch" => "File '%value%' does not match the given crc32 hashes",
    "fileCrc32NotDetected" => "A crc32 hash could not be evaluated for the given file",
    "fileCrc32NotFound" => "File '%value%' could not be found",

    // Zend_Validate_File_ExcludeExtension
    "fileExcludeExtensionFalse" => "File '%value%' has a false extension",
    "fileExcludeExtensionNotFound" => "File '%value%' could not be found",

    // Zend_Validate_File_ExcludeMimeType
    "fileExcludeMimeTypeFalse" => "File '%value%' has a false mimetype of '%type%'",
    "fileExcludeMimeTypeNotDetected" => "The mimetype of file '%value%' could not be detected",
    "fileExcludeMimeTypeNotReadable" => "File '%value%' can not be read",

    // Zend_Validate_File_Exists
    "fileExistsDoesNotExist" => "File '%value%' does not exist",

    // Zend_Validate_File_Extension
    "fileExtensionFalse" => "File '%value%' has a false extension",
    "fileExtensionNotFound" => "File '%value%' could not be found",

    // Zend_Validate_File_FilesSize
    "fileFilesSizeTooBig" => "All files in sum should have a maximum size of '%max%' but '%size%' were detected",
    "fileFilesSizeTooSmall" => "All files in sum should have a minimum size of '%min%' but '%size%' were detected",
    "fileFilesSizeNotReadable" => "One or more files can not be read",

    // Zend_Validate_File_Hash
    "fileHashDoesNotMatch" => "File '%value%' does not match the given hashes",
    "fileHashHashNotDetected" => "A hash could not be evaluated for the given file",
    "fileHashNotFound" => "File '%value%' could not be found",

    // Zend_Validate_File_ImageSize
    "fileImageSizeWidthTooBig" => "Maximum allowed width for image '%value%' should be '%maxwidth%' but '%width%' detected",
    "MfileImageSizeWidthTooSmall" => "Minimum expected width for image '%value%' should be '%minwidth%' but '%width%' detected",
    "fileImageSizeHeightTooBig" => "Maximum allowed height for image '%value%' should be '%maxheight%' but '%height%' detected",
    "fileImageSizeHeightTooSmall" => "Minimum expected height for image '%value%' should be '%minheight%' but '%height%' detected",
    "fileImageSizeNotDetected" => "The size of image '%value%' could not be detected",
    "fileImageSizeNotReadable" => "File '%value%' can not be read",

    // Zend_Validate_File_IsCompressed
    "fileIsCompressedFalseType" => "File '%value%' is not compressed, '%type%' detected",
    "fileIsCompressedNotDetected" => "The mimetype of file '%value%' could not be detected",
    "fileIsCompressedNotReadable" => "File '%value%' can not be read",

    // Zend_Validate_File_IsImage
    "fileIsImageFalseType" => "File '%value%' is no image, '%type%' detected",
    "fileIsImageNotDetected" => "The mimetype of file '%value%' could not be detected",
    "fileIsImageNotReadable" => "File '%value%' can not be read",

    // Zend_Validate_File_Md5
    "fileMd5DoesNotMatch" => "File '%value%' does not match the given md5 hashes",
    "fileMd5NotDetected" => "A md5 hash could not be evaluated for the given file",
    "fileMd5NotFound" => "File '%value%' could not be found",

    // Zend_Validate_File_MimeType
    "fileMimeTypeFalse" => "File '%value%' has a false mimetype of '%type%'",
    "fileMimeTypeNotDetected" => "The mimetype of file '%value%' could not be detected",
    "fileMimeTypeNotReadable" => "File '%value%' can not be read",

    // Zend_Validate_File_NotExists
    "fileNotExistsDoesExist" => "File '%value%' exists",

    // Zend_Validate_File_Sha1
    "fileSha1DoesNotMatch" => "File '%value%' does not match the given sha1 hashes",
    "fileSha1NotDetected" => "A sha1 hash could not be evaluated for the given file",
    "fileSha1NotFound" => "File '%value%' could not be found",

    // Zend_Validate_File_Size
    "fileSizeTooBig" => "Maximum allowed size for file '%value%' is '%max%' but '%size%' detected",
    "fileSizeTooSmall" => "Minimum expected size for file '%value%' is '%min%' but '%size%' detected",
    "fileSizeNotFound" => "File '%value%' could not be found",

    // Zend_Validate_File_Upload
    "fileUploadErrorIniSize" => "File '%value%' exceeds the defined ini size",
    "fileUploadErrorFormSize" => "File '%value%' exceeds the defined form size",
    "fileUploadErrorPartial" => "File '%value%' was only partially uploaded",
    "fileUploadErrorNoFile" => "File '%value%' was not uploaded",
    "fileUploadErrorNoTmpDir" => "No temporary directory was found for file '%value%'",
    "fileUploadErrorCantWrite" => "File '%value%' can't be written",
    "fileUploadErrorExtension" => "A PHP extension returned an error while uploading the file '%value%'",
    "fileUploadErrorAttack" => "File '%value%' was illegally uploaded. This could be a possible attack",
    "fileUploadErrorFileNotFound" => "File '%value%' was not found",
    "fileUploadErrorUnknown" => "Unknown error while uploading file '%value%'",

    // Zend_Validate_File_WordCount
    "fileWordCountTooMuch" => "Too much words, maximum '%max%' are allowed but '%count%' were counted",
    "fileWordCountTooLess" => "Too less words, minimum '%min%' are expected but '%count%' were counted",
    "fileWordCountNotFound" => "File '%value%' could not be found",

    // Zend_Validate_Float
    "floatInvalid" => "Invalid type given, value should be float, string, or integer",
    "notFloat" => "'%value%' does not appear to be a float",

    // Zend_Validate_GreaterThan
    "notGreaterThan" => "'%value%' is not greater than '%min%'",

    // Zend_Validate_Hex
    "hexInvalid" => "Invalid type given, value should be a string",
    "notHex" => "'%value%' has not only hexadecimal digit characters",

    // Zend_Validate_Hostname
    "hostnameInvalid" => "Invalid type given, value should be a string",
    "hostnameIpAddressNotAllowed" => "'%value%' appears to be an IP address, but IP addresses are not allowed",
    "hostnameUnknownTld" => "'%value%' appears to be a DNS hostname but cannot match TLD against known list",
    "hostnameDashCharacter" => "'%value%' appears to be a DNS hostname but contains a dash in an invalid position",
    "hostnameInvalidHostnameSchema" => "'%value%' appears to be a DNS hostname but cannot match against hostname schema for TLD '%tld%'",
    "hostnameUndecipherableTld" => "'%value%' appears to be a DNS hostname but cannot extract TLD part",
    "hostnameInvalidHostname" => "'%value%' does not match the expected structure for a DNS hostname",
    "hostnameInvalidLocalName" => "'%value%' does not appear to be a valid local network name",
    "hostnameLocalNameNotAllowed" => "'%value%' appears to be a local network name but local network names are not allowed",
    "hostnameCannotDecodePunycode" => "'%value%' appears to be a DNS hostname but the given punycode notation cannot be decoded",

    // Zend_Validate_Iban
    "ibanNotSupported" => "Unknown country within the IBAN '%value%'",
    "ibanFalseFormat" => "'%value%' has a false IBAN format",
    "ibanCheckFailed" => "'%value%' has failed the IBAN check",

    // Zend_Validate_Identical
    "notSame" => "The token '%token%' does not match the given token '%value%'",
    "missingToken" => "No token was provided to match against",

    // Zend_Validate_InArray
    "notInArray" => "'%value%' was not found in the haystack",

    // Zend_Validate_Int
    "intInvalid" => "Invalid type given, value should be string or integer",
    "notInt" => "'%value%' does not appear to be an integer",

    // Zend_Validate_Ip
    "ipInvalid" => "Invalid type given, value should be a string",
    "notIpAddress" => "'%value%' does not appear to be a valid IP address",

    // Zend_Validate_Isbn
    "isbnInvalid" => "'%value%' is no valid ISBN number",

    // Zend_Validate_LessThan
    "notLessThan" => "'%value%' is not less than '%max%'",

    // Zend_Validate_NotEmpty
    "notEmptyInvalid" => "Invalid type given, value should be float, string, array, boolean or integer",
    "isEmpty" => "Value is required and can't be empty",

    // Zend_Validate_PostCode
    "postcodeInvalid" => "Invalid type given, value should be string or integer",
    "postcodeNoMatch" => "'%value%' does not appear to be an postal code",

    // Zend_Validate_Regex
    "regexInvalid" => "Invalid type given, value should be string, integer or float",
    "regexNotMatch" => "'%value%' does not match against pattern '%pattern%'",

    // Zend_Validate_Sitemap_Changefreq
    "invalidSitemapChangefreq" => "'%value%' is no valid sitemap changefreq",

    // Zend_Validate_Sitemap_Lastmod
    "invalidSitemapLastmod" => "'%value%' is no valid sitemap lastmod",

    // Zend_Validate_Sitemap_Loc
    "invalidSitemapLoc" => "'%value%' is no valid sitemap location",

    // Zend_Validate_Sitemap_Priority
    "invalidSitemapPriority" => "'%value%' is no valid sitemap priority",

    // Zend_Validate_StringLength
    "stringLengthInvalid" => "Invalid type given, value should be a string",
    "stringLengthTooShort" => "'%value%' is less than %min% characters long",
    "stringLengthTooLong" => "'%value%' is more than %max% characters long",
	
    "missingValue" => "Empty captcha value",
    "missingID" => "Captcha ID field is missing",
    "badCaptcha" => "Captcha value is wrong",
);
