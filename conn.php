<?php
$config = array(
        			'db_type'      =>  'pdo',
        			'username'  =>  'informix',
        			'password'  =>  '123456',
        			'db_host'  =>  '192.168.1.106',
        			'db_port'  =>  '9088',
        			'db_name'  =>  'sysuser@ol_informix1210',
    				'dsn'		=> 'informix:host=debian-vm;service=9088;database=sysuser;server=ol_informix1210; protocol=onsoctcp;EnableScrollableCursors=1',
					'db_params'		=> null
        	);
try{
                $conn = new PDO( $config['dsn'], $config['username'], $config['password'],$config['params']);
                //$conn = new PDO( $config['dsn'], $config['username'], $config['password']);
		//$conn = new PDO('mysql:dbname=cook;host=127.0.0.1', 'cook', '123456');
		var_dump($conn);
            }catch (\PDOException $e) {
                var_dump($e->getMessage());
    }
