<?php

abstract class DbFactory {
    abstract public function DBConnection(): Conn;
    abstract public function DBRecrord(): Recrordset;
	abstract public function DBQueryBuiler(): QueryBuiler;
}

abstract class Conn {
    abstract public function connection();
}
abstract class Recrordset {
    abstract public function rec();
}
abstract class QueryBuiler {
    abstract public function queryBuiler();
}

class MySQLConn extends Conn {
    public function connection() {
        // code to Connect
    }
}
class MySQLRec extends Recrordset {
    public function rec() {
        // code to Recrordset
    }
}
class MySQLQB extends QueryBuiler {
    public function queryBuiler() {
        // code to QueryBuiler
    }
}

class PostgreSQLConn extends Conn {
    public function connection() {
        // code to Connect
    }
}
class PostgreSQLRec extends Recrordset {
    public function rec() {
        // code to Recrordset
    }
}
class PostgreSQLQB extends QueryBuiler {
    public function queryBuiler() {
        // code to QueryBuiler
    }
}

class OracleConn extends Conn {
    public function connection() {
        // code to Connect
    }
}
class OracleRec extends Recrordset {
    public function rec() {
        // code to Recrordset
    }
}
class OracleQB extends QueryBuiler {
    public function queryBuiler() {
        // code to QueryBuiler
    }
}

class MySQLFactory extends DbFactory {
    public function DBConnection(): MySQLConn {
        return new MySQLConn();
    }
    public function DBRecrord(): MySQLRec {
        return new MySQLRec();
    }
	public function DBQueryBuiler(): MySQLQB {
        return new MySQLQB();
    }
}
class PostgreSQLFactory extends DbFactory {
    public function DBConnection(): PostgreSQLConn {
        return new PostgreSQLConn();
    }
    public function DBRecrord(): PostgreSQLRec {
        return new PostgreSQLRec();
    }
	public function DBQueryBuiler(): PostgreSQLQB {
        return new PostgreSQLQB();
    }
}
class OracleFactory extends DbFactory {
    public function DBConnection(): OracleConn {
        return new OracleConn();
    }
    public function DBRecrord(): OracleRec {
        return new OracleRec();
    }
	public function DBQueryBuiler(): OracleQB {
        return new OracleQB();
    }
}

$OracleFactory = new OracleFactory();
$Conn = $OracleFactory->DBConnection();
$Conn->OracleConn();

$PostgreSQLFactory = new PostgreSQLFactory();
$record = $PostgreSQLFactory->DBRecrord();
$record->PostgreSQLRec();

$MySQLFactory = new MySQLFactory();
$query = $MySQLFactory->DBQueryBuiler();
$query->MySQLQB();
