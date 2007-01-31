<?php defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); ?>

<!-- List of product reviews -->
<h4><?php echo $VM_LANG->_PHPSHOP_REVIEWS ?>:</h4>

<?php 
foreach( $reviews as $review ) { // Loop through all reviews
	/**
	 * Available indexes:
	 * 
	 * $review['userid'] => The user ID of the comment author
	 * $review['username'] => The username of the comment author
	 * $review['name'] => The name of the comment author
	 * $review['time'] => The UNIX timestamp of the comment ("when" it was posted)
	 * $review['user_rating'] => The rating; an integer from 1 - 5
	 * $review['comment'] => The comment text
	 * 
	 */
	$date = strftime (_DATE_FORMAT_LC, $review["time"]);
	?>
	<strong><?php echo $review["username"]."&nbsp;&nbsp;($date)" ?></strong>
	<br />
	<?php echo $VM_LANG->_PHPSHOP_RATE_NOM // "Rating:" ?>: 
		<img src="<?php echo VM_THEMEURL ?>images/stars/<?php echo $review["user_rating"] ?>.gif" border="0" alt="<?php echo $review["user_rating"] ?>"" />
	<br />
	<blockquote><div><?php echo $review['comment'] ?></div></blockquote>
	
	<br /><br />
	
	<?php
}

if( $num_rows < 1 ) {
  echo $VM_LANG->_PHPSHOP_NO_REVIEWS." <br />"; // "There are no reviews for this product"
  if (!empty($my->id)) {
  	echo $VM_LANG->_PHPSHOP_WRITE_FIRST_REVIEW; // "Be the first to write a review!"
  }
  else {
  	echo $VM_LANG->_PHPSHOP_REVIEW_LOGIN; // Login to write a review!
  }
}
if( !$showall && $num_rows >=5 ) {
	// Link to: "SHOW ALL Reviews"
	echo "<a href=\"".$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']."&showall=1\">"._MORE."</a>";
}

?>