<?php
/**
 * WordPress Direct Filesystem.
 *
 * @package WordPress
 * @subpackage Filesystem
 */

/**
 * WordPress Filesystem Class for direct PHP file and folder manipulation.
 *
 * @since 2.5.0
 *
 * @see WP_Filesystem_Base
 */
class WP_Filesystem_Direct extends WP_Filesystem_Base {

	/**
	 * constructor
	 *
<<<<<<< HEAD
	 * @param mixed $arg ignored argument
	 */
	public function __construct( $arg ) {
=======
	 *
	 * @param mixed $arg ignored argument
	 */
	public function __construct($arg) {
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		$this->method = 'direct';
		$this->errors = new WP_Error();
	}

	/**
	 * Reads entire file into a string
	 *
<<<<<<< HEAD
	 * @param string $file Name of the file to read.
	 * @return string|bool The function returns the read data or false on failure.
	 */
	public function get_contents( $file ) {
		return @file_get_contents( $file );
=======
	 *
	 * @param string $file Name of the file to read.
	 * @return string|bool The function returns the read data or false on failure.
	 */
	public function get_contents($file) {
		return @file_get_contents($file);
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	}

	/**
	 * Reads entire file into an array
	 *
<<<<<<< HEAD
	 * @param string $file Path to the file.
	 * @return array|bool the file contents in an array or false on failure.
	 */
	public function get_contents_array( $file ) {
		return @file( $file );
=======
	 *
	 * @param string $file Path to the file.
	 * @return array|bool the file contents in an array or false on failure.
	 */
	public function get_contents_array($file) {
		return @file($file);
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	}

	/**
	 * Write a string to a file
	 *
<<<<<<< HEAD
=======
	 *
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 * @param string $file     Remote path to the file where to write the data.
	 * @param string $contents The data to write.
	 * @param int    $mode     Optional. The file permissions as octal number, usually 0644.
	 *                         Default false.
	 * @return bool False upon failure, true otherwise.
	 */
	public function put_contents( $file, $contents, $mode = false ) {
		$fp = @fopen( $file, 'wb' );
<<<<<<< HEAD
		if ( ! $fp ) {
			return false;
		}
=======
		if ( ! $fp )
			return false;
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

		mbstring_binary_safe_encoding();

		$data_length = strlen( $contents );

		$bytes_written = fwrite( $fp, $contents );

		reset_mbstring_encoding();

		fclose( $fp );

<<<<<<< HEAD
		if ( $data_length !== $bytes_written ) {
			return false;
		}
=======
		if ( $data_length !== $bytes_written )
			return false;
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

		$this->chmod( $file, $mode );

		return true;
	}

	/**
	 * Gets the current working directory
	 *
<<<<<<< HEAD
=======
	 *
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 * @return string|bool the current working directory on success, or false on failure.
	 */
	public function cwd() {
		return @getcwd();
	}

	/**
	 * Change directory
	 *
<<<<<<< HEAD
	 * @param string $dir The new current directory.
	 * @return bool Returns true on success or false on failure.
	 */
	public function chdir( $dir ) {
		return @chdir( $dir );
=======
	 *
	 * @param string $dir The new current directory.
	 * @return bool Returns true on success or false on failure.
	 */
	public function chdir($dir) {
		return @chdir($dir);
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	}

	/**
	 * Changes file group
	 *
<<<<<<< HEAD
=======
	 *
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 * @param string $file      Path to the file.
	 * @param mixed  $group     A group name or number.
	 * @param bool   $recursive Optional. If set True changes file group recursively. Default false.
	 * @return bool Returns true on success or false on failure.
	 */
<<<<<<< HEAD
	public function chgrp( $file, $group, $recursive = false ) {
		if ( ! $this->exists( $file ) ) {
			return false;
		}
		if ( ! $recursive ) {
			return @chgrp( $file, $group );
		}
		if ( ! $this->is_dir( $file ) ) {
			return @chgrp( $file, $group );
		}
		// Is a directory, and we want recursive
		$file     = trailingslashit( $file );
		$filelist = $this->dirlist( $file );
		foreach ( $filelist as $filename ) {
			$this->chgrp( $file . $filename, $group, $recursive );
		}
=======
	public function chgrp($file, $group, $recursive = false) {
		if ( ! $this->exists($file) )
			return false;
		if ( ! $recursive )
			return @chgrp($file, $group);
		if ( ! $this->is_dir($file) )
			return @chgrp($file, $group);
		// Is a directory, and we want recursive
		$file = trailingslashit($file);
		$filelist = $this->dirlist($file);
		foreach ($filelist as $filename)
			$this->chgrp($file . $filename, $group, $recursive);
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

		return true;
	}

	/**
	 * Changes filesystem permissions
	 *
<<<<<<< HEAD
=======
	 *
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 * @param string $file      Path to the file.
	 * @param int    $mode      Optional. The permissions as octal number, usually 0644 for files,
	 *                          0755 for dirs. Default false.
	 * @param bool   $recursive Optional. If set True changes file group recursively. Default false.
	 * @return bool Returns true on success or false on failure.
	 */
<<<<<<< HEAD
	public function chmod( $file, $mode = false, $recursive = false ) {
		if ( ! $mode ) {
			if ( $this->is_file( $file ) ) {
				$mode = FS_CHMOD_FILE;
			} elseif ( $this->is_dir( $file ) ) {
				$mode = FS_CHMOD_DIR;
			} else {
				return false;
			}
		}

		if ( ! $recursive || ! $this->is_dir( $file ) ) {
			return @chmod( $file, $mode );
		}
		// Is a directory, and we want recursive
		$file     = trailingslashit( $file );
		$filelist = $this->dirlist( $file );
		foreach ( (array) $filelist as $filename => $filemeta ) {
			$this->chmod( $file . $filename, $mode, $recursive );
		}
=======
	public function chmod($file, $mode = false, $recursive = false) {
		if ( ! $mode ) {
			if ( $this->is_file($file) )
				$mode = FS_CHMOD_FILE;
			elseif ( $this->is_dir($file) )
				$mode = FS_CHMOD_DIR;
			else
				return false;
		}

		if ( ! $recursive || ! $this->is_dir($file) )
			return @chmod($file, $mode);
		// Is a directory, and we want recursive
		$file = trailingslashit($file);
		$filelist = $this->dirlist($file);
		foreach ( (array)$filelist as $filename => $filemeta)
			$this->chmod($file . $filename, $mode, $recursive);
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

		return true;
	}

	/**
	 * Changes file owner
	 *
<<<<<<< HEAD
=======
	 *
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 * @param string $file      Path to the file.
	 * @param mixed  $owner     A user name or number.
	 * @param bool   $recursive Optional. If set True changes file owner recursively.
	 *                          Default false.
	 * @return bool Returns true on success or false on failure.
	 */
<<<<<<< HEAD
	public function chown( $file, $owner, $recursive = false ) {
		if ( ! $this->exists( $file ) ) {
			return false;
		}
		if ( ! $recursive ) {
			return @chown( $file, $owner );
		}
		if ( ! $this->is_dir( $file ) ) {
			return @chown( $file, $owner );
		}
		// Is a directory, and we want recursive
		$filelist = $this->dirlist( $file );
		foreach ( $filelist as $filename ) {
			$this->chown( $file . '/' . $filename, $owner, $recursive );
=======
	public function chown($file, $owner, $recursive = false) {
		if ( ! $this->exists($file) )
			return false;
		if ( ! $recursive )
			return @chown($file, $owner);
		if ( ! $this->is_dir($file) )
			return @chown($file, $owner);
		// Is a directory, and we want recursive
		$filelist = $this->dirlist($file);
		foreach ($filelist as $filename) {
			$this->chown($file . '/' . $filename, $owner, $recursive);
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		}
		return true;
	}

	/**
	 * Gets file owner
	 *
<<<<<<< HEAD
	 * @param string $file Path to the file.
	 * @return string|bool Username of the user or false on error.
	 */
	public function owner( $file ) {
		$owneruid = @fileowner( $file );
		if ( ! $owneruid ) {
			return false;
		}
		if ( ! function_exists( 'posix_getpwuid' ) ) {
			return $owneruid;
		}
		$ownerarray = posix_getpwuid( $owneruid );
=======
	 *
	 * @param string $file Path to the file.
	 * @return string|bool Username of the user or false on error.
	 */
	public function owner($file) {
		$owneruid = @fileowner($file);
		if ( ! $owneruid )
			return false;
		if ( ! function_exists('posix_getpwuid') )
			return $owneruid;
		$ownerarray = posix_getpwuid($owneruid);
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		return $ownerarray['name'];
	}

	/**
	 * Gets file permissions
	 *
	 * FIXME does not handle errors in fileperms()
	 *
<<<<<<< HEAD
	 * @param string $file Path to the file.
	 * @return string Mode of the file (last 3 digits).
	 */
	public function getchmod( $file ) {
=======
	 *
	 * @param string $file Path to the file.
	 * @return string Mode of the file (last 3 digits).
	 */
	public function getchmod($file) {
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		return substr( decoct( @fileperms( $file ) ), -3 );
	}

	/**
<<<<<<< HEAD
	 * @param string $file
	 * @return string|false
	 */
	public function group( $file ) {
		$gid = @filegroup( $file );
		if ( ! $gid ) {
			return false;
		}
		if ( ! function_exists( 'posix_getgrgid' ) ) {
			return $gid;
		}
		$grouparray = posix_getgrgid( $gid );
=======
	 *
	 * @param string $file
	 * @return string|false
	 */
	public function group($file) {
		$gid = @filegroup($file);
		if ( ! $gid )
			return false;
		if ( ! function_exists('posix_getgrgid') )
			return $gid;
		$grouparray = posix_getgrgid($gid);
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		return $grouparray['name'];
	}

	/**
<<<<<<< HEAD
=======
	 *
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 * @param string $source
	 * @param string $destination
	 * @param bool   $overwrite
	 * @param int    $mode
	 * @return bool
	 */
<<<<<<< HEAD
	public function copy( $source, $destination, $overwrite = false, $mode = false ) {
		if ( ! $overwrite && $this->exists( $destination ) ) {
			return false;
		}

		$rtval = copy( $source, $destination );
		if ( $mode ) {
			$this->chmod( $destination, $mode );
		}
=======
	public function copy($source, $destination, $overwrite = false, $mode = false) {
		if ( ! $overwrite && $this->exists($destination) )
			return false;

		$rtval = copy($source, $destination);
		if ( $mode )
			$this->chmod($destination, $mode);
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		return $rtval;
	}

	/**
<<<<<<< HEAD
=======
	 *
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 * @param string $source
	 * @param string $destination
	 * @param bool $overwrite
	 * @return bool
	 */
<<<<<<< HEAD
	public function move( $source, $destination, $overwrite = false ) {
		if ( ! $overwrite && $this->exists( $destination ) ) {
			return false;
		}

		// Try using rename first. if that fails (for example, source is read only) try copy.
		if ( @rename( $source, $destination ) ) {
			return true;
		}

		if ( $this->copy( $source, $destination, $overwrite ) && $this->exists( $destination ) ) {
			$this->delete( $source );
=======
	public function move($source, $destination, $overwrite = false) {
		if ( ! $overwrite && $this->exists($destination) )
			return false;

		// Try using rename first. if that fails (for example, source is read only) try copy.
		if ( @rename($source, $destination) )
			return true;

		if ( $this->copy($source, $destination, $overwrite) && $this->exists($destination) ) {
			$this->delete($source);
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
			return true;
		} else {
			return false;
		}
	}

	/**
<<<<<<< HEAD
=======
	 *
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 * @param string $file
	 * @param bool $recursive
	 * @param string $type
	 * @return bool
	 */
<<<<<<< HEAD
	public function delete( $file, $recursive = false, $type = false ) {
		if ( empty( $file ) ) { // Some filesystems report this as /, which can cause non-expected recursive deletion of all files in the filesystem.
			return false;
		}
		$file = str_replace( '\\', '/', $file ); // for win32, occasional problems deleting files otherwise

		if ( 'f' == $type || $this->is_file( $file ) ) {
			return @unlink( $file );
		}
		if ( ! $recursive && $this->is_dir( $file ) ) {
			return @rmdir( $file );
		}

		// At this point it's a folder, and we're in recursive mode
		$file     = trailingslashit( $file );
		$filelist = $this->dirlist( $file, true );
=======
	public function delete($file, $recursive = false, $type = false) {
		if ( empty( $file ) ) // Some filesystems report this as /, which can cause non-expected recursive deletion of all files in the filesystem.
			return false;
		$file = str_replace( '\\', '/', $file ); // for win32, occasional problems deleting files otherwise

		if ( 'f' == $type || $this->is_file($file) )
			return @unlink($file);
		if ( ! $recursive && $this->is_dir($file) )
			return @rmdir($file);

		// At this point it's a folder, and we're in recursive mode
		$file = trailingslashit($file);
		$filelist = $this->dirlist($file, true);
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

		$retval = true;
		if ( is_array( $filelist ) ) {
			foreach ( $filelist as $filename => $fileinfo ) {
<<<<<<< HEAD
				if ( ! $this->delete( $file . $filename, $recursive, $fileinfo['type'] ) ) {
					$retval = false;
				}
			}
		}

		if ( file_exists( $file ) && ! @rmdir( $file ) ) {
			$retval = false;
		}
=======
				if ( ! $this->delete($file . $filename, $recursive, $fileinfo['type']) )
					$retval = false;
			}
		}

		if ( file_exists($file) && ! @rmdir($file) )
			$retval = false;
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

		return $retval;
	}
	/**
<<<<<<< HEAD
	 * @param string $file
	 * @return bool
	 */
	public function exists( $file ) {
		return @file_exists( $file );
	}
	/**
	 * @param string $file
	 * @return bool
	 */
	public function is_file( $file ) {
		return @is_file( $file );
	}
	/**
	 * @param string $path
	 * @return bool
	 */
	public function is_dir( $path ) {
		return @is_dir( $path );
	}

	/**
	 * @param string $file
	 * @return bool
	 */
	public function is_readable( $file ) {
		return @is_readable( $file );
	}

	/**
	 * @param string $file
	 * @return bool
	 */
	public function is_writable( $file ) {
		return @is_writable( $file );
	}

	/**
	 * @param string $file
	 * @return int
	 */
	public function atime( $file ) {
		return @fileatime( $file );
	}

	/**
	 * @param string $file
	 * @return int
	 */
	public function mtime( $file ) {
		return @filemtime( $file );
	}

	/**
	 * @param string $file
	 * @return int
	 */
	public function size( $file ) {
		return @filesize( $file );
	}

	/**
=======
	 *
	 * @param string $file
	 * @return bool
	 */
	public function exists($file) {
		return @file_exists($file);
	}
	/**
	 *
	 * @param string $file
	 * @return bool
	 */
	public function is_file($file) {
		return @is_file($file);
	}
	/**
	 *
	 * @param string $path
	 * @return bool
	 */
	public function is_dir($path) {
		return @is_dir($path);
	}

	/**
	 *
	 * @param string $file
	 * @return bool
	 */
	public function is_readable($file) {
		return @is_readable($file);
	}

	/**
	 *
	 * @param string $file
	 * @return bool
	 */
	public function is_writable($file) {
		return @is_writable($file);
	}

	/**
	 *
	 * @param string $file
	 * @return int
	 */
	public function atime($file) {
		return @fileatime($file);
	}

	/**
	 *
	 * @param string $file
	 * @return int
	 */
	public function mtime($file) {
		return @filemtime($file);
	}

	/**
	 *
	 * @param string $file
	 * @return int
	 */
	public function size($file) {
		return @filesize($file);
	}

	/**
	 *
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 * @param string $file
	 * @param int $time
	 * @param int $atime
	 * @return bool
	 */
<<<<<<< HEAD
	public function touch( $file, $time = 0, $atime = 0 ) {
		if ( $time == 0 ) {
			$time = time();
		}
		if ( $atime == 0 ) {
			$atime = time();
		}
		return @touch( $file, $time, $atime );
	}

	/**
=======
	public function touch($file, $time = 0, $atime = 0) {
		if ($time == 0)
			$time = time();
		if ($atime == 0)
			$atime = time();
		return @touch($file, $time, $atime);
	}

	/**
	 *
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 * @param string $path
	 * @param mixed  $chmod
	 * @param mixed  $chown
	 * @param mixed  $chgrp
	 * @return bool
	 */
<<<<<<< HEAD
	public function mkdir( $path, $chmod = false, $chown = false, $chgrp = false ) {
		// Safe mode fails with a trailing slash under certain PHP versions.
		$path = untrailingslashit( $path );
		if ( empty( $path ) ) {
			return false;
		}

		if ( ! $chmod ) {
			$chmod = FS_CHMOD_DIR;
		}

		if ( ! @mkdir( $path ) ) {
			return false;
		}
		$this->chmod( $path, $chmod );
		if ( $chown ) {
			$this->chown( $path, $chown );
		}
		if ( $chgrp ) {
			$this->chgrp( $path, $chgrp );
		}
=======
	public function mkdir($path, $chmod = false, $chown = false, $chgrp = false) {
		// Safe mode fails with a trailing slash under certain PHP versions.
		$path = untrailingslashit($path);
		if ( empty($path) )
			return false;

		if ( ! $chmod )
			$chmod = FS_CHMOD_DIR;

		if ( ! @mkdir($path) )
			return false;
		$this->chmod($path, $chmod);
		if ( $chown )
			$this->chown($path, $chown);
		if ( $chgrp )
			$this->chgrp($path, $chgrp);
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		return true;
	}

	/**
<<<<<<< HEAD
=======
	 *
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 * @param string $path
	 * @param bool $recursive
	 * @return bool
	 */
<<<<<<< HEAD
	public function rmdir( $path, $recursive = false ) {
		return $this->delete( $path, $recursive );
	}

	/**
=======
	public function rmdir($path, $recursive = false) {
		return $this->delete($path, $recursive);
	}

	/**
	 *
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 * @param string $path
	 * @param bool $include_hidden
	 * @param bool $recursive
	 * @return bool|array
	 */
<<<<<<< HEAD
	public function dirlist( $path, $include_hidden = true, $recursive = false ) {
		if ( $this->is_file( $path ) ) {
			$limit_file = basename( $path );
			$path       = dirname( $path );
=======
	public function dirlist($path, $include_hidden = true, $recursive = false) {
		if ( $this->is_file($path) ) {
			$limit_file = basename($path);
			$path = dirname($path);
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		} else {
			$limit_file = false;
		}

<<<<<<< HEAD
		if ( ! $this->is_dir( $path ) ) {
			return false;
		}

		$dir = @dir( $path );
		if ( ! $dir ) {
			return false;
		}

		$ret = array();

		while ( false !== ( $entry = $dir->read() ) ) {
			$struc         = array();
			$struc['name'] = $entry;

			if ( '.' == $struc['name'] || '..' == $struc['name'] ) {
				continue;
			}

			if ( ! $include_hidden && '.' == $struc['name'][0] ) {
				continue;
			}

			if ( $limit_file && $struc['name'] != $limit_file ) {
				continue;
			}

			$struc['perms']       = $this->gethchmod( $path . '/' . $entry );
			$struc['permsn']      = $this->getnumchmodfromh( $struc['perms'] );
			$struc['number']      = false;
			$struc['owner']       = $this->owner( $path . '/' . $entry );
			$struc['group']       = $this->group( $path . '/' . $entry );
			$struc['size']        = $this->size( $path . '/' . $entry );
			$struc['lastmodunix'] = $this->mtime( $path . '/' . $entry );
			$struc['lastmod']     = date( 'M j', $struc['lastmodunix'] );
			$struc['time']        = date( 'h:i:s', $struc['lastmodunix'] );
			$struc['type']        = $this->is_dir( $path . '/' . $entry ) ? 'd' : 'f';

			if ( 'd' == $struc['type'] ) {
				if ( $recursive ) {
					$struc['files'] = $this->dirlist( $path . '/' . $struc['name'], $include_hidden, $recursive );
				} else {
					$struc['files'] = array();
				}
=======
		if ( ! $this->is_dir($path) )
			return false;

		$dir = @dir($path);
		if ( ! $dir )
			return false;

		$ret = array();

		while (false !== ($entry = $dir->read()) ) {
			$struc = array();
			$struc['name'] = $entry;

			if ( '.' == $struc['name'] || '..' == $struc['name'] )
				continue;

			if ( ! $include_hidden && '.' == $struc['name'][0] )
				continue;

			if ( $limit_file && $struc['name'] != $limit_file)
				continue;

			$struc['perms'] 	= $this->gethchmod($path.'/'.$entry);
			$struc['permsn']	= $this->getnumchmodfromh($struc['perms']);
			$struc['number'] 	= false;
			$struc['owner']    	= $this->owner($path.'/'.$entry);
			$struc['group']    	= $this->group($path.'/'.$entry);
			$struc['size']    	= $this->size($path.'/'.$entry);
			$struc['lastmodunix']= $this->mtime($path.'/'.$entry);
			$struc['lastmod']   = date('M j',$struc['lastmodunix']);
			$struc['time']    	= date('h:i:s',$struc['lastmodunix']);
			$struc['type']		= $this->is_dir($path.'/'.$entry) ? 'd' : 'f';

			if ( 'd' == $struc['type'] ) {
				if ( $recursive )
					$struc['files'] = $this->dirlist($path . '/' . $struc['name'], $include_hidden, $recursive);
				else
					$struc['files'] = array();
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
			}

			$ret[ $struc['name'] ] = $struc;
		}
		$dir->close();
<<<<<<< HEAD
		unset( $dir );
=======
		unset($dir);
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		return $ret;
	}
}
