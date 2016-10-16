<?php 

/***********************************************/
/*                table define                 */
/***********************************************/

/*    nbateam table, add by xum
 */
define("DB_NBATEAM_TAB", "nbateam");
define("DB_NBATEAM_ID", "Id");
define("DB_NBATEAM_NAME", "Name");
define("DB_NBATEAM_LOGO", "Logo");
define("DB_NBATEAM_WIN", "Win");
define("DB_NBATEAM_LOSE", "Lose");
define("DB_NBATEAM_RANK", "Rank");
define("DB_NBATEAM_ALLIANCE", "Alliance");
define("DB_NBATEAM_PLAYOFFS", "Playoffs");
define("DB_NBATEAM_PARTITION", "Partition");

/** Generates an UUID
 * @param string  an optional prefix
 * @return string  the formatted uuid
 */
function uuid($prefix = ''){
	$chars = md5(uniqid(mt_rand(), true));
	$uuid  = substr($chars,0,8);
	$uuid .= substr($chars,8,4);
	$uuid .= substr($chars,12,4);
	$uuid .= substr($chars,16,4);
	$uuid .= substr($chars,20,12);
	return $prefix.$uuid;
}

?>