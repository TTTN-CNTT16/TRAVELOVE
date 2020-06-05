<!-- Đổi chuỗi bình thường thành chuỗi không dấu -->

function changTitle( $str, $strSymbol ='-', $case = MB_CASE_LOWER ){
    $str = trim( $str);
    if( $str == "") return "";
    $str = str_replace('"', '', $str);
    $str = str_replace("'", '', $str);
    $str = stripUnicode( $str);
    $str = bm_convert_case( $str, $case, 'utf-8');
    $str = preg_replace( '/[\W|_]+\', $strSymbol, $str);
    return $str;
}
// "files": [
        //     "app/function/function.php"
        // ],
       // composer dumpautoload