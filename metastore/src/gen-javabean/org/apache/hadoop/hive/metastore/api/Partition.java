/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 */
package org.apache.hadoop.hive.metastore.api;

import java.util.List;
import java.util.ArrayList;
import java.util.Map;
import java.util.HashMap;
import java.util.Set;
import java.util.HashSet;
import com.facebook.thrift.*;

import com.facebook.thrift.protocol.*;
import com.facebook.thrift.transport.*;

public class Partition implements TBase, java.io.Serializable {
private List<String> values;
private String dbName;
private String tableName;
private int createTime;
private int lastAccessTime;
private StorageDescriptor sd;
private Map<String,String> parameters;

public final Isset __isset = new Isset();
public static final class Isset implements java.io.Serializable {
public boolean values = false;
public boolean dbName = false;
public boolean tableName = false;
public boolean createTime = false;
public boolean lastAccessTime = false;
public boolean sd = false;
public boolean parameters = false;
}

public Partition() {
}

public Partition(
List<String> values,
String dbName,
String tableName,
int createTime,
int lastAccessTime,
StorageDescriptor sd,
Map<String,String> parameters)
{
this();
this.values = values;
this.__isset.values = true;
this.dbName = dbName;
this.__isset.dbName = true;
this.tableName = tableName;
this.__isset.tableName = true;
this.createTime = createTime;
this.__isset.createTime = true;
this.lastAccessTime = lastAccessTime;
this.__isset.lastAccessTime = true;
this.sd = sd;
this.__isset.sd = true;
this.parameters = parameters;
this.__isset.parameters = true;
}

public int getValuesSize() {
return (this.values == null) ? 0 : this.values.size();
}

public java.util.Iterator<String> getValuesIterator() {
return (this.values == null) ? null : this.values.iterator();
}

public void addToValues(String elem) {
if (this.values == null) {
this.values = new ArrayList<String>();
}
this.values.add(elem);
this.__isset.values = true;
}

public List<String> getValues() {
return this.values;
}

public void setValues(List<String> values) {
this.values = values;
this.__isset.values = true;
}

public void unsetValues() {
this.values = null;
this.__isset.values = false;
}

public String getDbName() {
return this.dbName;
}

public void setDbName(String dbName) {
this.dbName = dbName;
this.__isset.dbName = true;
}

public void unsetDbName() {
this.__isset.dbName = false;
}

public String getTableName() {
return this.tableName;
}

public void setTableName(String tableName) {
this.tableName = tableName;
this.__isset.tableName = true;
}

public void unsetTableName() {
this.__isset.tableName = false;
}

public int getCreateTime() {
return this.createTime;
}

public void setCreateTime(int createTime) {
this.createTime = createTime;
this.__isset.createTime = true;
}

public void unsetCreateTime() {
this.__isset.createTime = false;
}

public int getLastAccessTime() {
return this.lastAccessTime;
}

public void setLastAccessTime(int lastAccessTime) {
this.lastAccessTime = lastAccessTime;
this.__isset.lastAccessTime = true;
}

public void unsetLastAccessTime() {
this.__isset.lastAccessTime = false;
}

public StorageDescriptor getSd() {
return this.sd;
}

public void setSd(StorageDescriptor sd) {
this.sd = sd;
this.__isset.sd = true;
}

public void unsetSd() {
this.sd = null;
this.__isset.sd = false;
}

public int getParametersSize() {
return (this.parameters == null) ? 0 : this.parameters.size();
}

public void putToParameters(String key, String val) {
if (this.parameters == null) {
this.parameters = new HashMap<String,String>();
}
this.parameters.put(key, val);
this.__isset.parameters = true;
}

public Map<String,String> getParameters() {
return this.parameters;
}

public void setParameters(Map<String,String> parameters) {
this.parameters = parameters;
this.__isset.parameters = true;
}

public void unsetParameters() {
this.parameters = null;
this.__isset.parameters = false;
}

public boolean equals(Object that) {
if (that == null)
  return false;
if (that instanceof Partition)
  return this.equals((Partition)that);
return false;
}

public boolean equals(Partition that) {
if (that == null)
  return false;

boolean this_present_values = true && (this.values != null);
boolean that_present_values = true && (that.values != null);
if (this_present_values || that_present_values) {
if (!(this_present_values && that_present_values))
  return false;
if (!this.values.equals(that.values))
  return false;
}

boolean this_present_dbName = true && (this.dbName != null);
boolean that_present_dbName = true && (that.dbName != null);
if (this_present_dbName || that_present_dbName) {
if (!(this_present_dbName && that_present_dbName))
  return false;
if (!this.dbName.equals(that.dbName))
  return false;
}

boolean this_present_tableName = true && (this.tableName != null);
boolean that_present_tableName = true && (that.tableName != null);
if (this_present_tableName || that_present_tableName) {
if (!(this_present_tableName && that_present_tableName))
  return false;
if (!this.tableName.equals(that.tableName))
  return false;
}

boolean this_present_createTime = true;
boolean that_present_createTime = true;
if (this_present_createTime || that_present_createTime) {
if (!(this_present_createTime && that_present_createTime))
  return false;
if (this.createTime != that.createTime)
  return false;
}

boolean this_present_lastAccessTime = true;
boolean that_present_lastAccessTime = true;
if (this_present_lastAccessTime || that_present_lastAccessTime) {
if (!(this_present_lastAccessTime && that_present_lastAccessTime))
  return false;
if (this.lastAccessTime != that.lastAccessTime)
  return false;
}

boolean this_present_sd = true && (this.sd != null);
boolean that_present_sd = true && (that.sd != null);
if (this_present_sd || that_present_sd) {
if (!(this_present_sd && that_present_sd))
  return false;
if (!this.sd.equals(that.sd))
  return false;
}

boolean this_present_parameters = true && (this.parameters != null);
boolean that_present_parameters = true && (that.parameters != null);
if (this_present_parameters || that_present_parameters) {
if (!(this_present_parameters && that_present_parameters))
  return false;
if (!this.parameters.equals(that.parameters))
  return false;
}

return true;
}

public int hashCode() {
return 0;
}

public void read(TProtocol iprot) throws TException {
TField field;
iprot.readStructBegin();
while (true)
{
field = iprot.readFieldBegin();
if (field.type == TType.STOP) { 
  break;
}
switch (field.id)
{
  case 1:
    if (field.type == TType.LIST) {
      {
        TList _list35 = iprot.readListBegin();
        this.values = new ArrayList<String>(_list35.size);
        for (int _i36 = 0; _i36 < _list35.size; ++_i36)
        {
          String _elem37 = null;
          _elem37 = iprot.readString();
          this.values.add(_elem37);
        }
        iprot.readListEnd();
      }
      this.__isset.values = true;
    } else { 
      TProtocolUtil.skip(iprot, field.type);
    }
    break;
  case 2:
    if (field.type == TType.STRING) {
      this.dbName = iprot.readString();
      this.__isset.dbName = true;
    } else { 
      TProtocolUtil.skip(iprot, field.type);
    }
    break;
  case 3:
    if (field.type == TType.STRING) {
      this.tableName = iprot.readString();
      this.__isset.tableName = true;
    } else { 
      TProtocolUtil.skip(iprot, field.type);
    }
    break;
  case 4:
    if (field.type == TType.I32) {
      this.createTime = iprot.readI32();
      this.__isset.createTime = true;
    } else { 
      TProtocolUtil.skip(iprot, field.type);
    }
    break;
  case 5:
    if (field.type == TType.I32) {
      this.lastAccessTime = iprot.readI32();
      this.__isset.lastAccessTime = true;
    } else { 
      TProtocolUtil.skip(iprot, field.type);
    }
    break;
  case 6:
    if (field.type == TType.STRUCT) {
      this.sd = new StorageDescriptor();
      this.sd.read(iprot);
      this.__isset.sd = true;
    } else { 
      TProtocolUtil.skip(iprot, field.type);
    }
    break;
  case 7:
    if (field.type == TType.MAP) {
      {
        TMap _map38 = iprot.readMapBegin();
        this.parameters = new HashMap<String,String>(2*_map38.size);
        for (int _i39 = 0; _i39 < _map38.size; ++_i39)
        {
          String _key40;
          String _val41;
          _key40 = iprot.readString();
          _val41 = iprot.readString();
          this.parameters.put(_key40, _val41);
        }
        iprot.readMapEnd();
      }
      this.__isset.parameters = true;
    } else { 
      TProtocolUtil.skip(iprot, field.type);
    }
    break;
  default:
    TProtocolUtil.skip(iprot, field.type);
    break;
}
iprot.readFieldEnd();
}
iprot.readStructEnd();
}

public void write(TProtocol oprot) throws TException {
TStruct struct = new TStruct("Partition");
oprot.writeStructBegin(struct);
TField field = new TField();
if (this.values != null) {
field.name = "values";
field.type = TType.LIST;
field.id = 1;
oprot.writeFieldBegin(field);
{
  oprot.writeListBegin(new TList(TType.STRING, this.values.size()));
  for (String _iter42 : this.values)  {
    oprot.writeString(_iter42);
  }
  oprot.writeListEnd();
}
oprot.writeFieldEnd();
}
if (this.dbName != null) {
field.name = "dbName";
field.type = TType.STRING;
field.id = 2;
oprot.writeFieldBegin(field);
oprot.writeString(this.dbName);
oprot.writeFieldEnd();
}
if (this.tableName != null) {
field.name = "tableName";
field.type = TType.STRING;
field.id = 3;
oprot.writeFieldBegin(field);
oprot.writeString(this.tableName);
oprot.writeFieldEnd();
}
field.name = "createTime";
field.type = TType.I32;
field.id = 4;
oprot.writeFieldBegin(field);
oprot.writeI32(this.createTime);
oprot.writeFieldEnd();
field.name = "lastAccessTime";
field.type = TType.I32;
field.id = 5;
oprot.writeFieldBegin(field);
oprot.writeI32(this.lastAccessTime);
oprot.writeFieldEnd();
if (this.sd != null) {
field.name = "sd";
field.type = TType.STRUCT;
field.id = 6;
oprot.writeFieldBegin(field);
this.sd.write(oprot);
oprot.writeFieldEnd();
}
if (this.parameters != null) {
field.name = "parameters";
field.type = TType.MAP;
field.id = 7;
oprot.writeFieldBegin(field);
{
  oprot.writeMapBegin(new TMap(TType.STRING, TType.STRING, this.parameters.size()));
  for (String _iter43 : this.parameters.keySet())  {
    oprot.writeString(_iter43);
    oprot.writeString(this.parameters.get(_iter43));
  }
  oprot.writeMapEnd();
}
oprot.writeFieldEnd();
}
oprot.writeFieldStop();
oprot.writeStructEnd();
}

public String toString() {
StringBuilder sb = new StringBuilder("Partition(");
sb.append("values:");
sb.append(this.values);
sb.append(",dbName:");
sb.append(this.dbName);
sb.append(",tableName:");
sb.append(this.tableName);
sb.append(",createTime:");
sb.append(this.createTime);
sb.append(",lastAccessTime:");
sb.append(this.lastAccessTime);
sb.append(",sd:");
sb.append(this.sd);
sb.append(",parameters:");
sb.append(this.parameters);
sb.append(")");
return sb.toString();
}

}

