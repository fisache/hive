<?php
/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 */
include_once $GLOBALS['THRIFT_ROOT'].'/Thrift.php';

include_once $GLOBALS['THRIFT_ROOT'].'/packages/hive_service/hive_service_types.php';
include_once $GLOBALS['THRIFT_ROOT'].'/packages/hive_metastore/ThriftHiveMetastore.php';

interface ThriftHiveIf extends ThriftHiveMetastoreIf {
  public function execute($query);
  public function fetchOne();
  public function fetchN($numRows);
  public function fetchAll();
  public function getSchema();
}

class ThriftHiveClient extends ThriftHiveMetastoreClient implements ThriftHiveIf {
  public function __construct($input, $output=null) {
    parent::__construct($input, $output);
  }

  public function execute($query)
  {
    $this->send_execute($query);
    $this->recv_execute();
  }

  public function send_execute($query)
  {
    $args = new ThriftHive_execute_args();
    $args->query = $query;
    $bin_accel = ($this->output_ instanceof TProtocol::$TBINARYPROTOCOLACCELERATED) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'execute', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('execute', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_execute()
  {
    $bin_accel = ($this->input_ instanceof TProtocol::$TBINARYPROTOCOLACCELERATED) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, 'ThriftHive_execute_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new ThriftHive_execute_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->ex !== null) {
      throw $result->ex;
    }
    return;
  }

  public function fetchOne()
  {
    $this->send_fetchOne();
    return $this->recv_fetchOne();
  }

  public function send_fetchOne()
  {
    $args = new ThriftHive_fetchOne_args();
    $bin_accel = ($this->output_ instanceof TProtocol::$TBINARYPROTOCOLACCELERATED) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'fetchOne', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('fetchOne', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_fetchOne()
  {
    $bin_accel = ($this->input_ instanceof TProtocol::$TBINARYPROTOCOLACCELERATED) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, 'ThriftHive_fetchOne_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new ThriftHive_fetchOne_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->ex !== null) {
      throw $result->ex;
    }
    throw new Exception("fetchOne failed: unknown result");
  }

  public function fetchN($numRows)
  {
    $this->send_fetchN($numRows);
    return $this->recv_fetchN();
  }

  public function send_fetchN($numRows)
  {
    $args = new ThriftHive_fetchN_args();
    $args->numRows = $numRows;
    $bin_accel = ($this->output_ instanceof TProtocol::$TBINARYPROTOCOLACCELERATED) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'fetchN', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('fetchN', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_fetchN()
  {
    $bin_accel = ($this->input_ instanceof TProtocol::$TBINARYPROTOCOLACCELERATED) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, 'ThriftHive_fetchN_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new ThriftHive_fetchN_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->ex !== null) {
      throw $result->ex;
    }
    throw new Exception("fetchN failed: unknown result");
  }

  public function fetchAll()
  {
    $this->send_fetchAll();
    return $this->recv_fetchAll();
  }

  public function send_fetchAll()
  {
    $args = new ThriftHive_fetchAll_args();
    $bin_accel = ($this->output_ instanceof TProtocol::$TBINARYPROTOCOLACCELERATED) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'fetchAll', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('fetchAll', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_fetchAll()
  {
    $bin_accel = ($this->input_ instanceof TProtocol::$TBINARYPROTOCOLACCELERATED) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, 'ThriftHive_fetchAll_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new ThriftHive_fetchAll_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->ex !== null) {
      throw $result->ex;
    }
    throw new Exception("fetchAll failed: unknown result");
  }

  public function getSchema()
  {
    $this->send_getSchema();
    return $this->recv_getSchema();
  }

  public function send_getSchema()
  {
    $args = new ThriftHive_getSchema_args();
    $bin_accel = ($this->output_ instanceof TProtocol::$TBINARYPROTOCOLACCELERATED) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'getSchema', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('getSchema', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_getSchema()
  {
    $bin_accel = ($this->input_ instanceof TProtocol::$TBINARYPROTOCOLACCELERATED) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, 'ThriftHive_getSchema_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new ThriftHive_getSchema_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->ex !== null) {
      throw $result->ex;
    }
    throw new Exception("getSchema failed: unknown result");
  }

}

// HELPER FUNCTIONS AND STRUCTURES

class ThriftHive_execute_args {
  static $_TSPEC;

  public $query = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'query',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['query'])) {
        $this->query = $vals['query'];
      }
    }
  }

  public function getName() {
    return 'ThriftHive_execute_args';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->query);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('ThriftHive_execute_args');
    if ($this->query !== null) {
      $xfer += $output->writeFieldBegin('query', TType::STRING, 1);
      $xfer += $output->writeString($this->query);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class ThriftHive_execute_result {
  static $_TSPEC;

  public $ex = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'ex',
          'type' => TType::STRUCT,
          'class' => 'HiveServerException',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['ex'])) {
        $this->ex = $vals['ex'];
      }
    }
  }

  public function getName() {
    return 'ThriftHive_execute_result';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRUCT) {
            $this->ex = new HiveServerException();
            $xfer += $this->ex->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('ThriftHive_execute_result');
    if ($this->ex !== null) {
      $xfer += $output->writeFieldBegin('ex', TType::STRUCT, 1);
      $xfer += $this->ex->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class ThriftHive_fetchOne_args {
  static $_TSPEC;


  public function __construct() {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        );
    }
  }

  public function getName() {
    return 'ThriftHive_fetchOne_args';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('ThriftHive_fetchOne_args');
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class ThriftHive_fetchOne_result {
  static $_TSPEC;

  public $success = null;
  public $ex = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRING,
          ),
        1 => array(
          'var' => 'ex',
          'type' => TType::STRUCT,
          'class' => 'HiveServerException',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
      if (isset($vals['ex'])) {
        $this->ex = $vals['ex'];
      }
    }
  }

  public function getName() {
    return 'ThriftHive_fetchOne_result';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 0:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->success);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 1:
          if ($ftype == TType::STRUCT) {
            $this->ex = new HiveServerException();
            $xfer += $this->ex->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('ThriftHive_fetchOne_result');
    if ($this->success !== null) {
      $xfer += $output->writeFieldBegin('success', TType::STRING, 0);
      $xfer += $output->writeString($this->success);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->ex !== null) {
      $xfer += $output->writeFieldBegin('ex', TType::STRUCT, 1);
      $xfer += $this->ex->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class ThriftHive_fetchN_args {
  static $_TSPEC;

  public $numRows = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'numRows',
          'type' => TType::I32,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['numRows'])) {
        $this->numRows = $vals['numRows'];
      }
    }
  }

  public function getName() {
    return 'ThriftHive_fetchN_args';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->numRows);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('ThriftHive_fetchN_args');
    if ($this->numRows !== null) {
      $xfer += $output->writeFieldBegin('numRows', TType::I32, 1);
      $xfer += $output->writeI32($this->numRows);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class ThriftHive_fetchN_result {
  static $_TSPEC;

  public $success = null;
  public $ex = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::LST,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
            ),
          ),
        1 => array(
          'var' => 'ex',
          'type' => TType::STRUCT,
          'class' => 'HiveServerException',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
      if (isset($vals['ex'])) {
        $this->ex = $vals['ex'];
      }
    }
  }

  public function getName() {
    return 'ThriftHive_fetchN_result';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 0:
          if ($ftype == TType::LST) {
            $this->success = array();
            $_size0 = 0;
            $_etype3 = 0;
            $xfer += $input->readListBegin($_etype3, $_size0);
            for ($_i4 = 0; $_i4 < $_size0; ++$_i4)
            {
              $elem5 = null;
              $xfer += $input->readString($elem5);
              $this->success []= $elem5;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 1:
          if ($ftype == TType::STRUCT) {
            $this->ex = new HiveServerException();
            $xfer += $this->ex->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('ThriftHive_fetchN_result');
    if ($this->success !== null) {
      if (!is_array($this->success)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('success', TType::LST, 0);
      {
        $output->writeListBegin(TType::STRING, count($this->success));
        {
          foreach ($this->success as $iter6)
          {
            $xfer += $output->writeString($iter6);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->ex !== null) {
      $xfer += $output->writeFieldBegin('ex', TType::STRUCT, 1);
      $xfer += $this->ex->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class ThriftHive_fetchAll_args {
  static $_TSPEC;


  public function __construct() {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        );
    }
  }

  public function getName() {
    return 'ThriftHive_fetchAll_args';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('ThriftHive_fetchAll_args');
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class ThriftHive_fetchAll_result {
  static $_TSPEC;

  public $success = null;
  public $ex = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::LST,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
            ),
          ),
        1 => array(
          'var' => 'ex',
          'type' => TType::STRUCT,
          'class' => 'HiveServerException',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
      if (isset($vals['ex'])) {
        $this->ex = $vals['ex'];
      }
    }
  }

  public function getName() {
    return 'ThriftHive_fetchAll_result';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 0:
          if ($ftype == TType::LST) {
            $this->success = array();
            $_size7 = 0;
            $_etype10 = 0;
            $xfer += $input->readListBegin($_etype10, $_size7);
            for ($_i11 = 0; $_i11 < $_size7; ++$_i11)
            {
              $elem12 = null;
              $xfer += $input->readString($elem12);
              $this->success []= $elem12;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 1:
          if ($ftype == TType::STRUCT) {
            $this->ex = new HiveServerException();
            $xfer += $this->ex->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('ThriftHive_fetchAll_result');
    if ($this->success !== null) {
      if (!is_array($this->success)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('success', TType::LST, 0);
      {
        $output->writeListBegin(TType::STRING, count($this->success));
        {
          foreach ($this->success as $iter13)
          {
            $xfer += $output->writeString($iter13);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->ex !== null) {
      $xfer += $output->writeFieldBegin('ex', TType::STRUCT, 1);
      $xfer += $this->ex->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class ThriftHive_getSchema_args {
  static $_TSPEC;


  public function __construct() {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        );
    }
  }

  public function getName() {
    return 'ThriftHive_getSchema_args';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('ThriftHive_getSchema_args');
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class ThriftHive_getSchema_result {
  static $_TSPEC;

  public $success = null;
  public $ex = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => 'metastore_Schema',
          ),
        1 => array(
          'var' => 'ex',
          'type' => TType::STRUCT,
          'class' => 'HiveServerException',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
      if (isset($vals['ex'])) {
        $this->ex = $vals['ex'];
      }
    }
  }

  public function getName() {
    return 'ThriftHive_getSchema_result';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 0:
          if ($ftype == TType::STRUCT) {
            $this->success = new metastore_Schema();
            $xfer += $this->success->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 1:
          if ($ftype == TType::STRUCT) {
            $this->ex = new HiveServerException();
            $xfer += $this->ex->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('ThriftHive_getSchema_result');
    if ($this->success !== null) {
      if (!is_object($this->success)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('success', TType::STRUCT, 0);
      $xfer += $this->success->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->ex !== null) {
      $xfer += $output->writeFieldBegin('ex', TType::STRUCT, 1);
      $xfer += $this->ex->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class ThriftHiveProcessor extends ThriftHiveMetastoreProcessor {
  public function __construct($handler) {
    parent::__construct($handler);
  }

  public function process($input, $output) {
    $rseqid = 0;
    $fname = null;
    $mtype = 0;

    $input->readMessageBegin($fname, $mtype, $rseqid);
    $methodname = 'process_'.$fname;
    if (!method_exists($this, $methodname)) {
      $input->skip(TType::STRUCT);
      $input->readMessageEnd();
      $x = new TApplicationException('Function '.$fname.' not implemented.', TApplicationException::UNKNOWN_METHOD);
      $output->writeMessageBegin($fname, TMessageType::EXCEPTION, $rseqid);
      $x->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
      return;
    }
    $this->$methodname($rseqid, $input, $output);
    return true;
  }

  protected function process_execute($seqid, $input, $output) {
    $args = new ThriftHive_execute_args();
    $args->read($input);
    $input->readMessageEnd();
    $result = new ThriftHive_execute_result();
    try {
      $this->handler_->execute($args->query);
    } catch (HiveServerException $ex) {
      $result->ex = $ex;
    }
    $output->writeMessageBegin('execute', TMessageType::REPLY, $seqid);
    $result->write($output);
    $output->getTransport()->flush();
  }
  protected function process_fetchOne($seqid, $input, $output) {
    $args = new ThriftHive_fetchOne_args();
    $args->read($input);
    $input->readMessageEnd();
    $result = new ThriftHive_fetchOne_result();
    try {
      $result->success = $this->handler_->fetchOne();
    } catch (HiveServerException $ex) {
      $result->ex = $ex;
    }
    $output->writeMessageBegin('fetchOne', TMessageType::REPLY, $seqid);
    $result->write($output);
    $output->getTransport()->flush();
  }
  protected function process_fetchN($seqid, $input, $output) {
    $args = new ThriftHive_fetchN_args();
    $args->read($input);
    $input->readMessageEnd();
    $result = new ThriftHive_fetchN_result();
    try {
      $result->success = $this->handler_->fetchN($args->numRows);
    } catch (HiveServerException $ex) {
      $result->ex = $ex;
    }
    $output->writeMessageBegin('fetchN', TMessageType::REPLY, $seqid);
    $result->write($output);
    $output->getTransport()->flush();
  }
  protected function process_fetchAll($seqid, $input, $output) {
    $args = new ThriftHive_fetchAll_args();
    $args->read($input);
    $input->readMessageEnd();
    $result = new ThriftHive_fetchAll_result();
    try {
      $result->success = $this->handler_->fetchAll();
    } catch (HiveServerException $ex) {
      $result->ex = $ex;
    }
    $output->writeMessageBegin('fetchAll', TMessageType::REPLY, $seqid);
    $result->write($output);
    $output->getTransport()->flush();
  }
  protected function process_getSchema($seqid, $input, $output) {
    $args = new ThriftHive_getSchema_args();
    $args->read($input);
    $input->readMessageEnd();
    $result = new ThriftHive_getSchema_result();
    try {
      $result->success = $this->handler_->getSchema();
    } catch (HiveServerException $ex) {
      $result->ex = $ex;
    }
    $output->writeMessageBegin('getSchema', TMessageType::REPLY, $seqid);
    $result->write($output);
    $output->getTransport()->flush();
  }
}
?>
