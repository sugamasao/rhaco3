<?php
namespace org\rhaco\io\log;
/**
 * ファイルにログを出力するLogモジュール
 * @author tokushima
 * @conf string $path ログファイルを保存するファイルパス
 */
class OneFile{
	private $path;

	public function __construct($path=null){
		$this->path = (empty($path)) ? \org\rhaco\Conf::get('path',\org\rhaco\io\File::work_path('output.log')) : $path;
		$dir = dirname($this->path);
		\org\rhaco\io\File::mkdir($dir,0777);
	}
	/**
	 * @module org.rhaco.Log
	 * @param \org\org.rhaco.Log\Log $log
	 * @param string $id
	 */
	public function debug(\org\rhaco\Log $log,$id){
		file_put_contents($this->path,((string)$log).PHP_EOL,FILE_APPEND);
	}
	/**
	 * @module org.rhaco.Log
	 * @param \org\org.rhaco.Log\Log $log
	 * @param string $id
	 */
	public function info(\org\rhaco\Log $log,$id){
		file_put_contents($this->path,((string)$log).PHP_EOL,FILE_APPEND);
	}
	/**
	 * @module org.rhaco.Log
	 * @param \org\org.rhaco.Log\Log $log
	 * @param string $id
	 */
	public function warn(\org\rhaco\Log $log,$id){
		file_put_contents($this->path,((string)$log).PHP_EOL,FILE_APPEND);
	}
	/**
	 * @module org.rhaco.Log
	 * @param \org\org.rhaco.Log\Log $log
	 * @param string $id
	 */
	public function error(\org\rhaco\Log $log,$id){
		file_put_contents($this->path,((string)$log).PHP_EOL,FILE_APPEND);
	}
}
