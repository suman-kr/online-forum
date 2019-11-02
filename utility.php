

<?php
	// error_reporting ( 1 );
	function ExecuteQuery($SQL) {
		$con = mysqli_connect ( "127.0.0.1", "root", "" );
		mysqli_select_db ( "forum2", $con );

		$rows = mysqli_query ( $con,$SQL );

		mysqli_close ();

		return $rows;
	}
	function ExecuteNonQuery($SQL) {
		$con = mysqli_connect ( "localhost", "root", "" );
		mysqli_select_db ( "forum2", $con );

		$result = mysqli_query ( $SQL );

		mysqli_close ();

		return $result;
	}
?>
