<?php
if ( is_readable( “myfile.txt” ) {
echo “I can read myfile.txt”;
}
if ( is_writable( “myfile.txt” ) {
echo “I can write to myfile.txt”;
}
if ( is_executable( “myfile.txt” ) {
echo “I can execute myfile.txt”;
}
copy( “./copyme.txt”, “./copied.txt” ); //copies a to b
rename( “./address.dat”, “./address.backup” ); //renames
rename( “/home/joe/myfile.txt”, “/home/joe/archives/myfile.txt” );//changes directory
unlink( “./trash.txt” );
?>