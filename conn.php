<?php
	class conn{
		private $host='localhost';
		private $name='root';
		private $pwd='root';
		private $dBase='';
		private $conn='';
		private $sdb=false;
		private $result='';
		private $msg='';
		private $cuowu;
		private $field;
		private $fieldsNum=0;
		private $rowsNum=0;
		private $rowsRst='';
		private $filesArray=array();
		private $rowsArray=array();
		private $out;
		private $outarr=array();
		function __construct($host='',$name='',$pwd='',$dBase='cg'){
			if($host!=''){
				$this->host=$host;
			}
			if($name!='')
				$this->name=$name;
			if($pwd!='')
				$this->pwd=$pwd;
			if($dBase!='')
				$this->dBase=$dBase;
			$this->init_conn();
		}
		function setBase($dbase){
			$this->dBase=$dbase;
		}
		function init_conn(){
			$this->conn=@mysql_connect($this->host,$this->name,$this->pwd);
			if($this->conn){
				$this->sdb=@mysql_select_db($this->dBase,$this->conn);
				if($this->sdb){
					mysql_query("set names utf8");
				}else{
					$this->cuowu=mysql_errno().mysql_error();
				}
			}else{
				$this->cuowu=mysql_errno().mysql_error();
			}
			
		}
		function query($sql){
			if(!$this->sdb){
				$this->init_conn();
			}else{
				$this->result=@mysql_query($sql,$this->conn);
				if(mysql_errno()==0){
					return $this->result;
				}else{
					$this->cuowu=mysql_errno().mysql_error();
					return false;
				}
			}
		}
		function getArr($sql){
			if(!!$sql){
				$this->query($sql);
			}
			$this->outarr=array();
			if($this->result){
				while($this->out=mysql_fetch_assoc($this->result)){
					$this->outarr[]=$this->out;
				}
				return $this->outarr;
			}
		}
		function getsNum($sql){
			if(!!$sql){
				$this->query($sql);
			}
			return $this->snum=@mysql_num_rows($this->result);
		}
		function getNum($sql){
			if(!!$sql){
				$this->query($sql);
			}
			return $this->num=mysql_affected_rows();
		}
		function getcuowu(){
			return $this->cuowu;
		}
	function __destruct(){
		mysql_close($this->conn);
	}
}
?>