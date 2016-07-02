
private function constructIncludes( $data, $path = [] )
{
if( count($data) ) {
foreach ($data as $name => $parts) {
$loopPath = $path;
array_push($loopPath, $name);
$this->constructIncludes($data->{$name}->directory, $loopPath);
$this->file($data->{$name}->file, $loopPath);
}
}
}
private function file( $data, $path )
{
if( count( $data ) ){
foreach( $data as $file ){
$this->includeFile( $file, $path );
}
}
}
private function includeFile( $file, $path )
{
include_once(
$this->rootDirectory.
implode( DIRECTORY_SEPARATOR, $path ).
DIRECTORY_SEPARATOR.
$file
);
}