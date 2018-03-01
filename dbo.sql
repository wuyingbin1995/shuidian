/*
Navicat SQL Server Data Transfer

Source Server         : shuidian
Source Server Version : 105000
Source Host           : localhost:1433
Source Database       : test
Source Schema         : dbo

Target Server Type    : SQL Server
Target Server Version : 105000
File Encoding         : 65001

Date: 2018-03-01 13:53:16
*/


-- ----------------------------
-- Table structure for [dbo].[AUTH]
-- ----------------------------
DROP TABLE [dbo].[AUTH]
GO
CREATE TABLE [dbo].[AUTH] (
[id] int NOT NULL IDENTITY(1,1) ,
[auth_name] varchar(20) NULL ,
[pid] int NULL ,
[auth_c] varchar(32) NULL ,
[auth_a] varchar(32) NULL ,
[is_nav] tinyint NULL DEFAULT ((1)) 
)


GO
DBCC CHECKIDENT(N'[dbo].[AUTH]', RESEED, 37)
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'AUTH', 
'COLUMN', N'auth_name')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'权限名称'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'AUTH'
, @level2type = 'COLUMN', @level2name = N'auth_name'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'权限名称'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'AUTH'
, @level2type = 'COLUMN', @level2name = N'auth_name'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'AUTH', 
'COLUMN', N'pid')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'上级权限'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'AUTH'
, @level2type = 'COLUMN', @level2name = N'pid'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'上级权限'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'AUTH'
, @level2type = 'COLUMN', @level2name = N'pid'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'AUTH', 
'COLUMN', N'auth_c')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'控制器'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'AUTH'
, @level2type = 'COLUMN', @level2name = N'auth_c'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'控制器'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'AUTH'
, @level2type = 'COLUMN', @level2name = N'auth_c'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'AUTH', 
'COLUMN', N'auth_a')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'方法'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'AUTH'
, @level2type = 'COLUMN', @level2name = N'auth_a'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'方法'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'AUTH'
, @level2type = 'COLUMN', @level2name = N'auth_a'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'AUTH', 
'COLUMN', N'is_nav')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'是否顶级权限'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'AUTH'
, @level2type = 'COLUMN', @level2name = N'is_nav'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'是否顶级权限'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'AUTH'
, @level2type = 'COLUMN', @level2name = N'is_nav'
GO

-- ----------------------------
-- Records of AUTH
-- ----------------------------
SET IDENTITY_INSERT [dbo].[AUTH] ON
GO
INSERT INTO [dbo].[AUTH] ([id], [auth_name], [pid], [auth_c], [auth_a], [is_nav]) VALUES (N'1', N'用户管理', N'0', N'', N'', N'1');
GO
INSERT INTO [dbo].[AUTH] ([id], [auth_name], [pid], [auth_c], [auth_a], [is_nav]) VALUES (N'2', N'控制器管理', N'0', null, null, N'1');
GO
INSERT INTO [dbo].[AUTH] ([id], [auth_name], [pid], [auth_c], [auth_a], [is_nav]) VALUES (N'3', N'水电表设置', N'0', null, null, N'1');
GO
INSERT INTO [dbo].[AUTH] ([id], [auth_name], [pid], [auth_c], [auth_a], [is_nav]) VALUES (N'4', N'电时表时段设置', N'0', null, null, N'1');
GO
INSERT INTO [dbo].[AUTH] ([id], [auth_name], [pid], [auth_c], [auth_a], [is_nav]) VALUES (N'5', N'售电管理', N'0', null, null, N'1');
GO
INSERT INTO [dbo].[AUTH] ([id], [auth_name], [pid], [auth_c], [auth_a], [is_nav]) VALUES (N'6', N'统计管理', N'0', null, null, N'1');
GO
INSERT INTO [dbo].[AUTH] ([id], [auth_name], [pid], [auth_c], [auth_a], [is_nav]) VALUES (N'7', N'发票管理', N'0', null, null, N'1');
GO
INSERT INTO [dbo].[AUTH] ([id], [auth_name], [pid], [auth_c], [auth_a], [is_nav]) VALUES (N'8', N'权限管理', N'0', null, null, N'1');
GO
INSERT INTO [dbo].[AUTH] ([id], [auth_name], [pid], [auth_c], [auth_a], [is_nav]) VALUES (N'9', N'用户详情', N'1', N'Manager', N'manager_list', N'1');
GO
INSERT INTO [dbo].[AUTH] ([id], [auth_name], [pid], [auth_c], [auth_a], [is_nav]) VALUES (N'10', N'控制器列表', N'2', null, null, N'1');
GO
INSERT INTO [dbo].[AUTH] ([id], [auth_name], [pid], [auth_c], [auth_a], [is_nav]) VALUES (N'11', N'控制器控制', N'2', null, null, N'1');
GO
INSERT INTO [dbo].[AUTH] ([id], [auth_name], [pid], [auth_c], [auth_a], [is_nav]) VALUES (N'12', N'水电表设置', N'3', null, null, N'1');
GO
INSERT INTO [dbo].[AUTH] ([id], [auth_name], [pid], [auth_c], [auth_a], [is_nav]) VALUES (N'13', N'电时表时段设置', N'4', null, null, N'1');
GO
INSERT INTO [dbo].[AUTH] ([id], [auth_name], [pid], [auth_c], [auth_a], [is_nav]) VALUES (N'14', N'售电管理', N'5', null, null, N'1');
GO
INSERT INTO [dbo].[AUTH] ([id], [auth_name], [pid], [auth_c], [auth_a], [is_nav]) VALUES (N'15', N'统计管理', N'6', null, null, N'1');
GO
INSERT INTO [dbo].[AUTH] ([id], [auth_name], [pid], [auth_c], [auth_a], [is_nav]) VALUES (N'16', N'发票管理', N'7', null, null, N'1');
GO
INSERT INTO [dbo].[AUTH] ([id], [auth_name], [pid], [auth_c], [auth_a], [is_nav]) VALUES (N'17', N'角色管理', N'8', N'Role', N'role_list', N'1');
GO
INSERT INTO [dbo].[AUTH] ([id], [auth_name], [pid], [auth_c], [auth_a], [is_nav]) VALUES (N'18', N'权限管理', N'8', N'Auth', N'auth_list', N'1');
GO
INSERT INTO [dbo].[AUTH] ([id], [auth_name], [pid], [auth_c], [auth_a], [is_nav]) VALUES (N'19', N'权限添加', N'8', N'Auth', N'auth_add', N'0');
GO
INSERT INTO [dbo].[AUTH] ([id], [auth_name], [pid], [auth_c], [auth_a], [is_nav]) VALUES (N'20', N'权限修改', N'8', N'Auth', N'auth_edit', N'0');
GO
INSERT INTO [dbo].[AUTH] ([id], [auth_name], [pid], [auth_c], [auth_a], [is_nav]) VALUES (N'21', N'权限删除', N'8', N'Auth', N'auth_del', N'0');
GO
INSERT INTO [dbo].[AUTH] ([id], [auth_name], [pid], [auth_c], [auth_a], [is_nav]) VALUES (N'26', N'角色添加', N'8', N'Role', N'role_add', N'0');
GO
INSERT INTO [dbo].[AUTH] ([id], [auth_name], [pid], [auth_c], [auth_a], [is_nav]) VALUES (N'27', N'分配权限', N'8', N'Role', N'role_edit', N'0');
GO
INSERT INTO [dbo].[AUTH] ([id], [auth_name], [pid], [auth_c], [auth_a], [is_nav]) VALUES (N'28', N'角色删除', N'8', N'Role', N'role_del', N'0');
GO
SET IDENTITY_INSERT [dbo].[AUTH] OFF
GO

-- ----------------------------
-- Table structure for [dbo].[BCCBK]
-- ----------------------------
DROP TABLE [dbo].[BCCBK]
GO
CREATE TABLE [dbo].[BCCBK] (
[ZYDL] numeric(9,2) NULL ,
[CBRQ] datetime NULL ,
[DBCCBH] varchar(12) NULL ,
[YHDZ] varchar(20) NULL ,
[YHXM] varchar(12) NULL ,
[YHDW] varchar(30) NULL ,
[ZGDL] numeric(9,2) NULL ,
[SYDL] numeric(9,2) NULL ,
[BTBH1] varchar(12) NULL ,
[ZT] varchar(100) NULL ,
[CBSJ] varchar(20) NULL 
)


GO

-- ----------------------------
-- Records of BCCBK
-- ----------------------------

-- ----------------------------
-- Table structure for [dbo].[BJLK]
-- ----------------------------
DROP TABLE [dbo].[BJLK]
GO
CREATE TABLE [dbo].[BJLK] (
[DBCCBH] varchar(12) NULL ,
[YHDZ] varchar(20) NULL ,
[SB] varchar(16) NULL ,
[BTBH] char(4) NULL ,
[JLLB] varchar(20) NULL ,
[BTBH1] varchar(12) NULL 
)


GO

-- ----------------------------
-- Records of BJLK
-- ----------------------------

-- ----------------------------
-- Table structure for [dbo].[CBSD]
-- ----------------------------
DROP TABLE [dbo].[CBSD]
GO
CREATE TABLE [dbo].[CBSD] (
[BTBH] char(4) NULL ,
[CBSDH] int NULL ,
[STH] int NULL ,
[STS] int NULL ,
[EDH] int NULL ,
[EDS] int NULL ,
[BTBH1] varchar(12) NULL ,
[FS] varchar(20) NULL ,
[TS] int NULL 
)


GO

-- ----------------------------
-- Records of CBSD
-- ----------------------------

-- ----------------------------
-- Table structure for [dbo].[COMCONFIG]
-- ----------------------------
DROP TABLE [dbo].[COMCONFIG]
GO
CREATE TABLE [dbo].[COMCONFIG] (
[COMPORT] varchar(4) NULL ,
[BAUD] int NULL ,
[PARITY] char(1) NULL ,
[DATABIT] smallint NULL ,
[STOPBIT] smallint NULL ,
[FPMC] varchar(40) NULL 
)


GO

-- ----------------------------
-- Records of COMCONFIG
-- ----------------------------
INSERT INTO [dbo].[COMCONFIG] ([COMPORT], [BAUD], [PARITY], [DATABIT], [STOPBIT], [FPMC]) VALUES (N'COM1', N'2400', N'E', N'8', N'1', null);
GO

-- ----------------------------
-- Table structure for [dbo].[CSK]
-- ----------------------------
DROP TABLE [dbo].[CSK]
GO
CREATE TABLE [dbo].[CSK] (
[TT] int NULL ,
[NN] int NULL ,
[WW] numeric(9,4) NULL ,
[ZZ] numeric(9,4) NULL ,
[PP] numeric(9,1) NULL ,
[QQ] numeric(9,1) NULL ,
[BB] numeric(9,1) NULL ,
[HH] numeric(9,1) NULL ,
[EE] numeric(9,1) NULL ,
[RR] numeric(9,1) NULL ,
[DD] numeric(9,1) NULL ,
[FF] numeric(9,3) NULL ,
[JG] int NULL 
)


GO

-- ----------------------------
-- Records of CSK
-- ----------------------------

-- ----------------------------
-- Table structure for [dbo].[CZQXCFG]
-- ----------------------------
DROP TABLE [dbo].[CZQXCFG]
GO
CREATE TABLE [dbo].[CZQXCFG] (
[XZDB1] smallint NULL ,
[XZDB2] smallint NULL ,
[DBBJ1] smallint NULL ,
[DBBJ2] smallint NULL ,
[HB1] smallint NULL ,
[HB2] smallint NULL ,
[JSDF1] smallint NULL ,
[JSDF2] smallint NULL ,
[SF1] smallint NULL ,
[SF2] smallint NULL ,
[TF1] smallint NULL ,
[TF2] smallint NULL ,
[CKSZ1] smallint NULL ,
[CKSZ2] smallint NULL ,
[JZQSZ1] smallint NULL ,
[JZQSZ2] smallint NULL ,
[CBR1] smallint NULL ,
[CBR2] smallint NULL ,
[DJSZ1] smallint NULL ,
[DJSZ2] smallint NULL ,
[FPSZ1] smallint NULL ,
[FPSZ2] smallint NULL ,
[BH1] smallint NULL ,
[BH2] smallint NULL 
)


GO

-- ----------------------------
-- Records of CZQXCFG
-- ----------------------------

-- ----------------------------
-- Table structure for [dbo].[CZRZK]
-- ----------------------------
DROP TABLE [dbo].[CZRZK]
GO
CREATE TABLE [dbo].[CZRZK] (
[CZYXM] varchar(8) NULL ,
[CZRQ] datetime NULL ,
[CZSJ] varchar(11) NULL ,
[OP] varchar(20) NULL 
)


GO

-- ----------------------------
-- Records of CZRZK
-- ----------------------------
INSERT INTO [dbo].[CZRZK] ([CZYXM], [CZRQ], [CZSJ], [OP]) VALUES (N'1', N'2017-12-05 00:00:00.000', N'11:57:55', N'设置串口');
GO
INSERT INTO [dbo].[CZRZK] ([CZYXM], [CZRQ], [CZSJ], [OP]) VALUES (N'1', N'2017-12-05 00:00:00.000', N'11:58:11', N'编辑用户信息');
GO
INSERT INTO [dbo].[CZRZK] ([CZYXM], [CZRQ], [CZSJ], [OP]) VALUES (N'1', N'2017-12-05 00:00:00.000', N'11:57:59', N'设置电价');
GO
INSERT INTO [dbo].[CZRZK] ([CZYXM], [CZRQ], [CZSJ], [OP]) VALUES (N'1', N'2017-12-05 00:00:00.000', N'11:58:6', N'新增电表');
GO

-- ----------------------------
-- Table structure for [dbo].[DBLXK]
-- ----------------------------
DROP TABLE [dbo].[DBLXK]
GO
CREATE TABLE [dbo].[DBLXK] (
[DBLXBH] varchar(4) NULL ,
[DBLXMC] varchar(16) NULL ,
[YJDL] numeric(9,1) NULL DEFAULT ((0)) ,
[DDBJDL] numeric(9,1) NULL DEFAULT ((0)) ,
[YHDL] numeric(9,1) NULL DEFAULT ((0)) 
)


GO

-- ----------------------------
-- Records of DBLXK
-- ----------------------------

-- ----------------------------
-- Table structure for [dbo].[dtproperties]
-- ----------------------------
DROP TABLE [dbo].[dtproperties]
GO
CREATE TABLE [dbo].[dtproperties] (
[id] int NOT NULL IDENTITY(1,1) ,
[objectid] int NULL ,
[property] varchar(64) NOT NULL ,
[value] varchar(255) NULL ,
[uvalue] nvarchar(255) NULL ,
[lvalue] image NULL ,
[version] int NOT NULL DEFAULT ((0)) 
)


GO

-- ----------------------------
-- Records of dtproperties
-- ----------------------------
SET IDENTITY_INSERT [dbo].[dtproperties] ON
GO
SET IDENTITY_INSERT [dbo].[dtproperties] OFF
GO

-- ----------------------------
-- Table structure for [dbo].[FPSZ]
-- ----------------------------
DROP TABLE [dbo].[FPSZ]
GO
CREATE TABLE [dbo].[FPSZ] (
[FPWID] int NULL ,
[FPHEI] int NULL ,
[BHTOP] int NULL ,
[BHLFT] int NULL ,
[SJTOP] int NULL ,
[SJLFT] int NULL ,
[HHTOP] int NULL ,
[HHLFT] int NULL ,
[XMTOP] int NULL ,
[XMLFT] int NULL ,
[DZTOP] int NULL ,
[DZLFT] int NULL ,
[YDLTOP] int NULL ,
[YDLLFT] int NULL ,
[DJTOP] int NULL ,
[DJLFT] int NULL ,
[JKTOP] int NULL ,
[JKLFT] int NULL ,
[YHDLTOP] int NULL ,
[YHDLLFT] int NULL ,
[MCGDTOP] int NULL ,
[MCGDLFT] int NULL ,
[MCJKTOP] int NULL ,
[MCJKLFT] int NULL ,
[ZGDLTOP] int NULL ,
[ZGDLLFT] int NULL ,
[BHBZ] varchar(5) NULL ,
[HHBZ] varchar(5) NULL ,
[XMBZ] varchar(5) NULL ,
[DZBZ] varchar(5) NULL ,
[SJBZ] varchar(5) NULL ,
[ZDJBZ] varchar(5) NULL ,
[ZJKBZ] varchar(5) NULL ,
[MCGDBZ] varchar(5) NULL ,
[MCJKBZ] varchar(5) NULL ,
[ZGDLBZ] varchar(5) NULL ,
[YHDLBZ] varchar(5) NULL ,
[BZFPBZ] varchar(5) NULL ,
[ZJKTOP] int NULL ,
[ZJKLFT] int NULL ,
[DXJKTOP] int NULL ,
[DXJKLFT] int NULL ,
[DXBZ] varchar(5) NULL 
)


GO

-- ----------------------------
-- Records of FPSZ
-- ----------------------------

-- ----------------------------
-- Table structure for [dbo].[GDJLK]
-- ----------------------------
DROP TABLE [dbo].[GDJLK]
GO
CREATE TABLE [dbo].[GDJLK] (
[YHBH] varchar(16) NULL ,
[YDLX] varchar(4) NULL ,
[YHXM] varchar(8) NULL ,
[YHDW] varchar(20) NULL ,
[YHDZ] varchar(20) NULL ,
[YHDH] varchar(16) NULL ,
[XH] varchar(6) NULL ,
[DBDD] int NULL ,
[DBLX] varchar(10) NULL ,
[GDCS] int NULL ,
[BCGDL] numeric(9,2) NULL DEFAULT ((0)) ,
[BCJK] numeric(9,2) NULL DEFAULT ((0)) ,
[BCGDRQ] datetime NULL ,
[BZXL] smallint NULL ,
[ZGDL] numeric(9,2) NULL DEFAULT ((0)) ,
[ZYDL] numeric(9,2) NULL DEFAULT ((0)) ,
[ZJK] numeric(9,2) NULL DEFAULT ((0)) ,
[CZYXM] varchar(8) NULL ,
[CZYBH] varchar(8) NULL ,
[CZSJ] varchar(12) NULL ,
[CZYDLXH] int NULL ,
[ZDJ] numeric(9,4) NULL DEFAULT ((0)) ,
[YHDL] smallint NULL ,
[XS] numeric(9,2) NULL ,
[BXDS] smallint NULL ,
[YUER] numeric(9,3) NULL DEFAULT ((0)) ,
[DBBL] int NULL ,
[DBCCBH] varchar(16) NULL ,
[BTBH1] varchar(12) NULL ,
[RECNO] int NOT NULL IDENTITY(1,1) ,
[JBL] int NULL ,
[JBK] numeric(18,3) NULL ,
[JTL1] int NULL ,
[JTK1] numeric(18,3) NULL ,
[JTL2] int NULL ,
[JTK2] numeric(18,3) NULL ,
[pay_type] int NOT NULL DEFAULT ((0)) ,
[pay_status] int NOT NULL ,
[order_sn] varchar(32) NULL ,
[DDBH] varchar(32) NULL ,
[ZFLX] int NULL 
)


GO
DBCC CHECKIDENT(N'[dbo].[GDJLK]', RESEED, 160)
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'YHBH')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'用户编号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'YHBH'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'用户编号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'YHBH'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'YDLX')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'用量类型'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'YDLX'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'用量类型'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'YDLX'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'YHXM')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'用户姓名'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'YHXM'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'用户姓名'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'YHXM'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'YHDW')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'用户详细地址'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'YHDW'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'用户详细地址'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'YHDW'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'YHDZ')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'用户显示地址'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'YHDZ'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'用户显示地址'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'YHDZ'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'YHDH')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'用户电话'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'YHDH'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'用户电话'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'YHDH'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'XH')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'线号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'XH'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'线号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'XH'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'DBDD')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'表底度'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'DBDD'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'表底度'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'DBDD'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'DBLX')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'表类型'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'DBLX'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'表类型'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'DBLX'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'GDCS')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'购电次数'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'GDCS'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'购电次数'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'GDCS'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'BCGDL')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'本次购量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'BCGDL'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'本次购量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'BCGDL'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'BCJK')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'本次交款'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'BCJK'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'本次交款'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'BCJK'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'BCGDRQ')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'本次购量日期'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'BCGDRQ'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'本次购量日期'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'BCGDRQ'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'BZXL')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'报装限流'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'BZXL'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'报装限流'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'BZXL'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'ZGDL')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'总购电量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'ZGDL'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'总购电量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'ZGDL'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'ZYDL')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'总用电量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'ZYDL'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'总用电量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'ZYDL'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'ZJK')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'总交款'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'ZJK'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'总交款'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'ZJK'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'CZYXM')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'操作员姓名'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'CZYXM'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'操作员姓名'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'CZYXM'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'CZYBH')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'操作员编号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'CZYBH'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'操作员编号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'CZYBH'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'CZSJ')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'操作时间'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'CZSJ'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'操作时间'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'CZSJ'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'CZYDLXH')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'操作员登陆序号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'CZYDLXH'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'操作员登陆序号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'CZYDLXH'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'ZDJ')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'总单价'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'ZDJ'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'总单价'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'ZDJ'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'YHDL')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'用户量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'YHDL'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'用户量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'YHDL'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'BXDS')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'补写量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'BXDS'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'补写量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'BXDS'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'YUER')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'余额'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'YUER'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'余额'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'YUER'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'DBBL')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'表倍率'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'DBBL'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'表倍率'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'DBBL'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'DBCCBH')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'表出厂编号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'DBCCBH'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'表出厂编号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'DBCCBH'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'BTBH1')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'管理机表号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'BTBH1'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'管理机表号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'BTBH1'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'RECNO')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'计数'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'RECNO'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'计数'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'RECNO'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'JBL')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'基本量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'JBL'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'基本量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'JBL'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'JBK')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'基本款'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'JBK'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'基本款'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'JBK'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'JTL1')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'阶梯量1'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'JTL1'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'阶梯量1'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'JTL1'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'JTK1')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'阶梯款1'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'JTK1'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'阶梯款1'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'JTK1'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'JTL2')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'阶梯量2'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'JTL2'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'阶梯量2'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'JTL2'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'JTK2')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'阶梯款2'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'JTK2'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'阶梯款2'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'JTK2'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'pay_type')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'购买类型1微信 2支付宝'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'pay_type'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'购买类型1微信 2支付宝'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'pay_type'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'GDJLK', 
'COLUMN', N'pay_status')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'支付状态 0未支付 1已支付'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'pay_status'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'支付状态 0未支付 1已支付'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'GDJLK'
, @level2type = 'COLUMN', @level2name = N'pay_status'
GO

-- ----------------------------
-- Records of GDJLK
-- ----------------------------
SET IDENTITY_INSERT [dbo].[GDJLK] ON
GO
INSERT INTO [dbo].[GDJLK] ([YHBH], [YDLX], [YHXM], [YHDW], [YHDZ], [YHDH], [XH], [DBDD], [DBLX], [GDCS], [BCGDL], [BCJK], [BCGDRQ], [BZXL], [ZGDL], [ZYDL], [ZJK], [CZYXM], [CZYBH], [CZSJ], [CZYDLXH], [ZDJ], [YHDL], [XS], [BXDS], [YUER], [DBBL], [DBCCBH], [BTBH1], [RECNO], [JBL], [JBK], [JTL1], [JTK1], [JTL2], [JTK2], [pay_type], [pay_status], [order_sn], [DDBH], [ZFLX]) VALUES (N'110116109417', N'1', N'任健', null, N'4-2-100', N'13753297724', null, null, null, null, N'.00', N'1000.00', N'2018-01-19 14:23:41.000', null, N'.00', N'.00', N'.00', null, null, null, null, N'.0000', null, null, null, N'.000', null, null, null, N'158', null, null, null, null, null, null, N'2', N'0', N'32134654646', N'12345678910', N'1');
GO
SET IDENTITY_INSERT [dbo].[GDJLK] OFF
GO

-- ----------------------------
-- Table structure for [dbo].[GZRSD]
-- ----------------------------
DROP TABLE [dbo].[GZRSD]
GO
CREATE TABLE [dbo].[GZRSD] (
[BTBH] char(4) NULL ,
[GZRSDH] int NULL ,
[STH] int NULL ,
[STS] int NULL ,
[EDH] int NULL ,
[EDS] int NULL ,
[BTBH1] varchar(12) NULL ,
[FS] varchar(20) NULL ,
[TS] int NULL ,
[MS] varchar(20) NULL 
)


GO

-- ----------------------------
-- Records of GZRSD
-- ----------------------------

-- ----------------------------
-- Table structure for [dbo].[JIAOFK]
-- ----------------------------
DROP TABLE [dbo].[JIAOFK]
GO
CREATE TABLE [dbo].[JIAOFK] (
[DBCCBH] varchar(12) NULL ,
[YHBH] varchar(16) NULL ,
[YHXM] varchar(16) NULL ,
[YHDZ] varchar(16) NULL ,
[ZYDL] numeric(9,2) NULL ,
[SCCBDD] numeric(9,2) NULL ,
[MCCBDD] numeric(9,2) NULL ,
[BCJK] numeric(9,2) NULL ,
[ZJK] numeric(9,2) NULL ,
[CZYXM] varchar(8) NULL ,
[CZSJ] varchar(12) NULL ,
[ZDJ] numeric(9,4) NULL ,
[YUER] numeric(9,2) NULL DEFAULT ((0)) ,
[JFRQ] datetime NULL ,
[BTBH1] varchar(12) NULL 
)


GO

-- ----------------------------
-- Records of JIAOFK
-- ----------------------------

-- ----------------------------
-- Table structure for [dbo].[JJRQSD]
-- ----------------------------
DROP TABLE [dbo].[JJRQSD]
GO
CREATE TABLE [dbo].[JJRQSD] (
[BTBH] char(4) NULL ,
[JJRQSDH] int NULL ,
[STH] int NULL ,
[STS] int NULL ,
[EDH] int NULL ,
[EDS] int NULL ,
[BTBH1] varchar(12) NULL ,
[TS] int NULL 
)


GO

-- ----------------------------
-- Records of JJRQSD
-- ----------------------------

-- ----------------------------
-- Table structure for [dbo].[JJRSD]
-- ----------------------------
DROP TABLE [dbo].[JJRSD]
GO
CREATE TABLE [dbo].[JJRSD] (
[BTBH] char(4) NULL ,
[JJRSDH] int NULL ,
[STH] varchar(6) NULL ,
[STS] int NULL ,
[EDH] int NULL ,
[EDS] int NULL ,
[BTBH1] varchar(12) NULL ,
[FS] varchar(20) NULL ,
[TS] int NULL ,
[MS] varchar(20) NULL 
)


GO

-- ----------------------------
-- Records of JJRSD
-- ----------------------------

-- ----------------------------
-- Table structure for [dbo].[jtjs]
-- ----------------------------
DROP TABLE [dbo].[jtjs]
GO
CREATE TABLE [dbo].[jtjs] (
[jtjss] int NULL ,
[JTJSL1] numeric(18,2) NULL ,
[JTJSL2] numeric(18,2) NULL ,
[JTJSL3] numeric(18,2) NULL ,
[JTJSL4] numeric(18,2) NULL ,
[JTJSL5] numeric(18,2) NULL ,
[JTJSZ1] numeric(18,4) NULL ,
[JTJSZ2] numeric(18,4) NULL ,
[JTJSZ3] numeric(18,4) NULL ,
[JTJSZ4] numeric(18,5) NULL ,
[JTJSZ5] numeric(18,4) NULL ,
[JTJSZ6] numeric(18,4) NULL ,
[NJSR1] varchar(6) NULL ,
[NJSR2] varchar(6) NULL ,
[NJSR3] varchar(6) NULL ,
[NJSR4] varchar(6) NULL 
)


GO

-- ----------------------------
-- Records of jtjs
-- ----------------------------

-- ----------------------------
-- Table structure for [dbo].[MAINDBF]
-- ----------------------------
DROP TABLE [dbo].[MAINDBF]
GO
CREATE TABLE [dbo].[MAINDBF] (
[DBCCBH] varchar(12) NULL ,
[YHBH] varchar(16) NULL ,
[YDLX] varchar(4) NULL ,
[YHXM] varchar(16) NULL ,
[YHDW] varchar(20) NULL ,
[YHDZ] varchar(50) NULL ,
[YHDH] varchar(16) NULL ,
[XH] smallint NULL ,
[DBDD] numeric(9,2) NULL DEFAULT ((0)) ,
[DBLX] varchar(10) NULL ,
[AZSJ] datetime NULL ,
[KHSJ] datetime NULL ,
[XLSJ] smallint NULL ,
[MCMM] varchar(20) NULL ,
[DKCS] int NULL ,
[MCGDL] numeric(9,2) NULL DEFAULT ((0)) ,
[MCJK] numeric(9,2) NULL ,
[MCGDRQ] datetime NULL ,
[ZDXL] numeric(9,2) NULL DEFAULT ((0)) ,
[BZXL] numeric(9,2) NULL DEFAULT ((0)) ,
[ZGDL] numeric(9,2) NULL DEFAULT ((0)) ,
[ZYDL] numeric(9,2) NULL DEFAULT ((0)) ,
[ZJK] numeric(9,2) NULL DEFAULT ((0)) ,
[KHCZYXM] varchar(8) NULL ,
[CXKHSJ] datetime NULL ,
[CZYDLXH] int NULL ,
[ZDJ] numeric(9,4) NULL DEFAULT ((0)) ,
[ISADDBT] smallint NULL ,
[MCCBRQ] datetime NULL ,
[MCCBSJ] varchar(16) NULL ,
[MCCBDD] numeric(9,2) NULL DEFAULT ((0)) ,
[SCCBRQ] datetime NULL ,
[SCCBDD] numeric(9,2) NULL DEFAULT ((0)) ,
[SCCBSJ] varchar(11) NULL ,
[YUER] numeric(9,3) NULL DEFAULT ((0)) ,
[CPUNO] varchar(8) NULL ,
[HAVEXK] smallint NULL DEFAULT ((0)) ,
[ACOUNT] varchar(18) NULL ,
[ZYHDL] numeric(9,2) NULL DEFAULT ((0)) ,
[MCJGDL] numeric(9,2) NULL DEFAULT ((0)) ,
[MCFGDL] numeric(9,2) NULL DEFAULT ((0)) ,
[MCGGDL] numeric(9,2) NULL DEFAULT ((0)) ,
[JZYDL] numeric(9,2) NULL DEFAULT ((0)) ,
[FZYDL] numeric(9,2) NULL DEFAULT ((0)) ,
[GZYDL] numeric(9,2) NULL DEFAULT ((0)) ,
[MCCBJDD] numeric(9,2) NULL DEFAULT ((0)) ,
[MCCBFDD] numeric(9,2) NULL DEFAULT ((0)) ,
[MCCBGDD] numeric(9,2) NULL DEFAULT ((0)) ,
[JZDJ] numeric(9,4) NULL DEFAULT ((0)) ,
[FZDJ] numeric(9,4) NULL DEFAULT ((0)) ,
[GZDJ] numeric(9,4) NULL DEFAULT ((0)) ,
[DBBL] int NULL DEFAULT ((1)) ,
[STATE] varchar(4) NULL ,
[HHBZ] varchar(12) NULL ,
[GDCS] int NULL DEFAULT ((0)) ,
[BTBH1] varchar(12) NULL ,
[TZL] numeric(9,2) NULL DEFAULT ((0)) ,
[TJL] numeric(9,2) NULL DEFAULT ((0)) ,
[HKS] int NULL ,
[SBFS] int NULL ,
[RQBZ] varchar(20) NULL ,
[FLBM] int NULL ,
[JTBM] int NULL ,
[GY] varchar(20) NULL ,
[BTL] int NULL ,
[cjdm] varchar(2) NULL ,
[recno] int NOT NULL IDENTITY(1,1) 
)


GO
DBCC CHECKIDENT(N'[dbo].[MAINDBF]', RESEED, 1923)
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'DBCCBH')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'表出厂编号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'DBCCBH'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'表出厂编号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'DBCCBH'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'YHBH')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'用户编号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'YHBH'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'用户编号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'YHBH'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'YDLX')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'用量类型'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'YDLX'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'用量类型'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'YDLX'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'YHXM')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'用户姓名'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'YHXM'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'用户姓名'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'YHXM'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'YHDW')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'用户单位'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'YHDW'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'用户单位'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'YHDW'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'YHDZ')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'用户地址'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'YHDZ'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'用户地址'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'YHDZ'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'YHDH')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'用户电话'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'YHDH'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'用户电话'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'YHDH'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'XH')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'线号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'XH'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'线号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'XH'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'DBDD')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'表底度'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'DBDD'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'表底度'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'DBDD'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'DBLX')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'表类型'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'DBLX'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'表类型'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'DBLX'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'AZSJ')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'安装时间'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'AZSJ'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'安装时间'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'AZSJ'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'KHSJ')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'开户时间'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'KHSJ'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'开户时间'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'KHSJ'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'XLSJ')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'需量时间'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'XLSJ'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'需量时间'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'XLSJ'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'MCMM')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'末次密码'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'MCMM'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'末次密码'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'MCMM'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'DKCS')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'读卡次数'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'DKCS'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'读卡次数'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'DKCS'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'MCGDL')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'末次够量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'MCGDL'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'末次够量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'MCGDL'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'MCJK')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'末次交款'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'MCJK'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'末次交款'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'MCJK'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'MCGDRQ')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'末次购买日期'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'MCGDRQ'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'末次购买日期'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'MCGDRQ'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'ZDXL')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'最大限流'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'ZDXL'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'最大限流'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'ZDXL'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'BZXL')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'报装限流'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'BZXL'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'报装限流'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'BZXL'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'ZGDL')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'总够电量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'ZGDL'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'总够电量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'ZGDL'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'ZYDL')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'总用电量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'ZYDL'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'总用电量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'ZYDL'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'ZJK')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'总交款'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'ZJK'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'总交款'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'ZJK'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'KHCZYXM')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'操作员姓名'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'KHCZYXM'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'操作员姓名'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'KHCZYXM'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'CXKHSJ')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'重新开户时间'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'CXKHSJ'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'重新开户时间'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'CXKHSJ'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'CZYDLXH')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'操作员登陆序号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'CZYDLXH'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'操作员登陆序号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'CZYDLXH'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'ZDJ')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'总单价'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'ZDJ'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'总单价'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'ZDJ'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'ISADDBT')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'是否加到管理机'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'ISADDBT'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'是否加到管理机'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'ISADDBT'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'MCCBRQ')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'末次抄表日期'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'MCCBRQ'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'末次抄表日期'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'MCCBRQ'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'MCCBSJ')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'末次抄表时间'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'MCCBSJ'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'末次抄表时间'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'MCCBSJ'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'MCCBDD')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'末次抄表底度'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'MCCBDD'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'末次抄表底度'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'MCCBDD'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'SCCBRQ')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'上次抄表日期'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'SCCBRQ'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'上次抄表日期'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'SCCBRQ'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'SCCBDD')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'上次抄表底度'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'SCCBDD'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'上次抄表底度'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'SCCBDD'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'SCCBSJ')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'上次抄表时间'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'SCCBSJ'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'上次抄表时间'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'SCCBSJ'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'YUER')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'余额'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'YUER'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'余额'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'YUER'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'CPUNO')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'cpu编号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'CPUNO'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'cpu编号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'CPUNO'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'HAVEXK')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'下发标志'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'HAVEXK'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'下发标志'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'HAVEXK'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'ACOUNT')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'帐户'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'ACOUNT'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'帐户'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'ACOUNT'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'ZYHDL')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'总优惠量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'ZYHDL'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'总优惠量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'ZYHDL'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'MCJGDL')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'末次尖够量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'MCJGDL'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'末次尖够量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'MCJGDL'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'MCFGDL')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'末次峰够量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'MCFGDL'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'末次峰够量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'MCFGDL'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'MCGGDL')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'末次谷够量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'MCGGDL'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'末次谷够量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'MCGGDL'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'JZYDL')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'尖总用电量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'JZYDL'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'尖总用电量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'JZYDL'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'FZYDL')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'峰总用电量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'FZYDL'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'峰总用电量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'FZYDL'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'GZYDL')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'谷总用电量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'GZYDL'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'谷总用电量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'GZYDL'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'MCCBJDD')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'末次抄表尖底度'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'MCCBJDD'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'末次抄表尖底度'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'MCCBJDD'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'MCCBFDD')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'末次抄表峰底度'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'MCCBFDD'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'末次抄表峰底度'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'MCCBFDD'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'MCCBGDD')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'末次抄表谷底度'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'MCCBGDD'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'末次抄表谷底度'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'MCCBGDD'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'JZDJ')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'尖总单价'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'JZDJ'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'尖总单价'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'JZDJ'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'FZDJ')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'峰总单价'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'FZDJ'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'峰总单价'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'FZDJ'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'GZDJ')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'谷总单价'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'GZDJ'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'谷总单价'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'GZDJ'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'DBBL')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'表倍率'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'DBBL'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'表倍率'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'DBBL'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'STATE')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'状态'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'STATE'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'状态'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'STATE'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'HHBZ')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'下发量标志'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'HHBZ'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'下发量标志'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'HHBZ'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'GDCS')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'购电次数'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'GDCS'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'购电次数'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'GDCS'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'BTBH1')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'管理机编号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'BTBH1'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'管理机编号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'BTBH1'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'TZL')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'透支量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'TZL'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'透支量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'TZL'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'TJL')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'囤积量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'TJL'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'囤积量'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'TJL'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'HKS')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'回路数'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'HKS'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'回路数'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'HKS'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'SBFS')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'上报方式'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'SBFS'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'上报方式'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'SBFS'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'RQBZ')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'日期标志'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'RQBZ'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'日期标志'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'RQBZ'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'FLBM')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'费率编码'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'FLBM'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'费率编码'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'FLBM'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'JTBM')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'阶梯编号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'JTBM'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'阶梯编号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'JTBM'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'GY')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'钢印号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'GY'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'钢印号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'GY'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'BTL')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'波特率'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'BTL'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'波特率'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'BTL'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'cjdm')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'厂家代码'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'cjdm'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'厂家代码'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'cjdm'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MAINDBF', 
'COLUMN', N'recno')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'记录号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'recno'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'记录号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MAINDBF'
, @level2type = 'COLUMN', @level2name = N'recno'
GO

-- ----------------------------
-- Records of MAINDBF
-- ----------------------------
SET IDENTITY_INSERT [dbo].[MAINDBF] ON
GO
INSERT INTO [dbo].[MAINDBF] ([DBCCBH], [YHBH], [YDLX], [YHXM], [YHDW], [YHDZ], [YHDH], [XH], [DBDD], [DBLX], [AZSJ], [KHSJ], [XLSJ], [MCMM], [DKCS], [MCGDL], [MCJK], [MCGDRQ], [ZDXL], [BZXL], [ZGDL], [ZYDL], [ZJK], [KHCZYXM], [CXKHSJ], [CZYDLXH], [ZDJ], [ISADDBT], [MCCBRQ], [MCCBSJ], [MCCBDD], [SCCBRQ], [SCCBDD], [SCCBSJ], [YUER], [CPUNO], [HAVEXK], [ACOUNT], [ZYHDL], [MCJGDL], [MCFGDL], [MCGGDL], [JZYDL], [FZYDL], [GZYDL], [MCCBJDD], [MCCBFDD], [MCCBGDD], [JZDJ], [FZDJ], [GZDJ], [DBBL], [STATE], [HHBZ], [GDCS], [BTBH1], [TZL], [TJL], [HKS], [SBFS], [RQBZ], [FLBM], [JTBM], [GY], [BTL], [cjdm], [recno]) VALUES (N'110116109416', N'742', N'1', N'任健', N'东城', N'4-2-101', N'13753297724', null, N'.00', N'单相表', null, null, null, null, null, N'2.00', N'2.00', N'2018-01-05 15:09:08.000', N'.00', N'30.00', N'100.00', N'80.00', N'100.00', null, null, null, N'1.0000', null, N'2018-01-08 13:30:22.000', null, N'100.00', null, N'.40', null, N'.400', null, N'0', N'', N'.00', N'.00', N'10.00', N'.00', N'.00', N'.00', N'.00', N'.00', N'.00', N'.00', N'.0000', N'.0000', N'.0000', N'1', null, N'0', N'0', N'120117000135', N'.00', N'.00', null, null, null, null, null, N'645规范', N'2400', null, N'1921');
GO
INSERT INTO [dbo].[MAINDBF] ([DBCCBH], [YHBH], [YDLX], [YHXM], [YHDW], [YHDZ], [YHDH], [XH], [DBDD], [DBLX], [AZSJ], [KHSJ], [XLSJ], [MCMM], [DKCS], [MCGDL], [MCJK], [MCGDRQ], [ZDXL], [BZXL], [ZGDL], [ZYDL], [ZJK], [KHCZYXM], [CXKHSJ], [CZYDLXH], [ZDJ], [ISADDBT], [MCCBRQ], [MCCBSJ], [MCCBDD], [SCCBRQ], [SCCBDD], [SCCBSJ], [YUER], [CPUNO], [HAVEXK], [ACOUNT], [ZYHDL], [MCJGDL], [MCFGDL], [MCGGDL], [JZYDL], [FZYDL], [GZYDL], [MCCBJDD], [MCCBFDD], [MCCBGDD], [JZDJ], [FZDJ], [GZDJ], [DBBL], [STATE], [HHBZ], [GDCS], [BTBH1], [TZL], [TJL], [HKS], [SBFS], [RQBZ], [FLBM], [JTBM], [GY], [BTL], [cjdm], [recno]) VALUES (N'110116109417', N'743', N'1', N'张鹏', N'东城', N'4-2-100', N'12345678910', null, N'.00', null, null, null, null, null, null, N'1.00', N'1.00', N'2018-01-05 15:14:42.000', N'.00', N'30.00', N'200.00', N'200.00', N'100.00', null, null, null, N'1.0000', null, N'2018-01-08 13:30:25.000', null, N'100.00', null, N'.40', null, N'.400', null, N'0', N'', N'.00', N'.00', N'10.00', N'.00', N'.00', N'.00', N'.00', N'.00', N'.00', N'.00', N'.0000', N'.0000', N'.0000', N'1', null, N'0', N'0', N'120117000135', N'.00', N'.00', null, null, null, null, null, N'645规范', N'2400', null, N'1922');
GO
INSERT INTO [dbo].[MAINDBF] ([DBCCBH], [YHBH], [YDLX], [YHXM], [YHDW], [YHDZ], [YHDH], [XH], [DBDD], [DBLX], [AZSJ], [KHSJ], [XLSJ], [MCMM], [DKCS], [MCGDL], [MCJK], [MCGDRQ], [ZDXL], [BZXL], [ZGDL], [ZYDL], [ZJK], [KHCZYXM], [CXKHSJ], [CZYDLXH], [ZDJ], [ISADDBT], [MCCBRQ], [MCCBSJ], [MCCBDD], [SCCBRQ], [SCCBDD], [SCCBSJ], [YUER], [CPUNO], [HAVEXK], [ACOUNT], [ZYHDL], [MCJGDL], [MCFGDL], [MCGGDL], [JZYDL], [FZYDL], [GZYDL], [MCCBJDD], [MCCBFDD], [MCCBGDD], [JZDJ], [FZDJ], [GZDJ], [DBBL], [STATE], [HHBZ], [GDCS], [BTBH1], [TZL], [TJL], [HKS], [SBFS], [RQBZ], [FLBM], [JTBM], [GY], [BTL], [cjdm], [recno]) VALUES (N'110116109418', N'744', N'2', N'任健', N'东城', N'4-2-102', N'13753297724', null, N'.00', null, null, null, null, null, null, N'1.00', N'2.00', N'2018-01-11 10:21:32.000', N'.00', N'30.00', N'200.00', N'50.00', N'100.00', null, null, null, N'.0000', null, null, null, N'.00', null, N'.00', null, N'.000', null, N'0', null, N'.00', N'.00', N'.00', N'.00', N'.00', N'.00', N'.00', N'.00', N'.00', N'.00', N'.0000', N'.0000', N'.0000', N'1', null, null, N'0', null, N'.00', N'.00', null, null, null, null, null, null, null, null, N'1923');
GO
SET IDENTITY_INSERT [dbo].[MAINDBF] OFF
GO

-- ----------------------------
-- Table structure for [dbo].[MANAGER]
-- ----------------------------
DROP TABLE [dbo].[MANAGER]
GO
CREATE TABLE [dbo].[MANAGER] (
[id] int NOT NULL IDENTITY(1,1) ,
[username] varchar(255) NOT NULL ,
[password] varchar(255) NOT NULL ,
[email] varchar(255) NULL ,
[nickname] varchar(255) NULL ,
[last_login_time] datetime NULL ,
[status] tinyint NULL ,
[update_time] timestamp NULL ,
[create_time] datetime NULL ,
[role_id] tinyint NOT NULL 
)


GO
DBCC CHECKIDENT(N'[dbo].[MANAGER]', RESEED, 6)
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MANAGER', 
'COLUMN', N'username')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'账号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MANAGER'
, @level2type = 'COLUMN', @level2name = N'username'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'账号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MANAGER'
, @level2type = 'COLUMN', @level2name = N'username'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MANAGER', 
'COLUMN', N'password')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'密码'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MANAGER'
, @level2type = 'COLUMN', @level2name = N'password'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'密码'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MANAGER'
, @level2type = 'COLUMN', @level2name = N'password'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MANAGER', 
'COLUMN', N'email')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'邮箱'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MANAGER'
, @level2type = 'COLUMN', @level2name = N'email'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'邮箱'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MANAGER'
, @level2type = 'COLUMN', @level2name = N'email'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MANAGER', 
'COLUMN', N'nickname')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'昵称'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MANAGER'
, @level2type = 'COLUMN', @level2name = N'nickname'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'昵称'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MANAGER'
, @level2type = 'COLUMN', @level2name = N'nickname'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MANAGER', 
'COLUMN', N'last_login_time')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'最后登陆时间'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MANAGER'
, @level2type = 'COLUMN', @level2name = N'last_login_time'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'最后登陆时间'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MANAGER'
, @level2type = 'COLUMN', @level2name = N'last_login_time'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MANAGER', 
'COLUMN', N'status')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'是否停用'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MANAGER'
, @level2type = 'COLUMN', @level2name = N'status'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'是否停用'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MANAGER'
, @level2type = 'COLUMN', @level2name = N'status'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MANAGER', 
'COLUMN', N'update_time')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'修改时间'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MANAGER'
, @level2type = 'COLUMN', @level2name = N'update_time'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'修改时间'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MANAGER'
, @level2type = 'COLUMN', @level2name = N'update_time'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MANAGER', 
'COLUMN', N'create_time')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'创建时间'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MANAGER'
, @level2type = 'COLUMN', @level2name = N'create_time'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'创建时间'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MANAGER'
, @level2type = 'COLUMN', @level2name = N'create_time'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'MANAGER', 
'COLUMN', N'role_id')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'角色id'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MANAGER'
, @level2type = 'COLUMN', @level2name = N'role_id'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'角色id'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'MANAGER'
, @level2type = 'COLUMN', @level2name = N'role_id'
GO

-- ----------------------------
-- Records of MANAGER
-- ----------------------------
SET IDENTITY_INSERT [dbo].[MANAGER] ON
GO
INSERT INTO [dbo].[MANAGER] ([id], [username], [password], [email], [nickname], [last_login_time], [status], [update_time], [create_time], [role_id]) VALUES (N'1', N'sey', N'a80e2e3c332fac18d44c19a1b1a68912', N'446916547@qq.com', N'十二月', N'2018-01-03 16:36:58.000', N'1', DEFAULT, null, N'1');
GO
INSERT INTO [dbo].[MANAGER] ([id], [username], [password], [email], [nickname], [last_login_time], [status], [update_time], [create_time], [role_id]) VALUES (N'2', N'test', N'a80e2e3c332fac18d44c19a1b1a68912', N'123456@qq.com', N'test', N'2018-01-03 16:37:49.000', N'1', DEFAULT, null, N'16');
GO
INSERT INTO [dbo].[MANAGER] ([id], [username], [password], [email], [nickname], [last_login_time], [status], [update_time], [create_time], [role_id]) VALUES (N'5', N'zjl', N'a80e2e3c332fac18d44c19a1b1a68912', null, N'总经理', null, N'1', DEFAULT, null, N'2');
GO
INSERT INTO [dbo].[MANAGER] ([id], [username], [password], [email], [nickname], [last_login_time], [status], [update_time], [create_time], [role_id]) VALUES (N'6', N'admin', N'adf4b8ad707b2cd20ea2201545135a24', null, N'阿斯顿', null, N'1', DEFAULT, null, N'24');
GO
SET IDENTITY_INSERT [dbo].[MANAGER] OFF
GO

-- ----------------------------
-- Table structure for [dbo].[NSQ]
-- ----------------------------
DROP TABLE [dbo].[NSQ]
GO
CREATE TABLE [dbo].[NSQ] (
[BTBH1] char(12) NULL ,
[STH] int NULL ,
[STS] int NULL ,
[TS] int NULL ,
[SQH] int NULL 
)


GO

-- ----------------------------
-- Records of NSQ
-- ----------------------------

-- ----------------------------
-- Table structure for [dbo].[RCB24K]
-- ----------------------------
DROP TABLE [dbo].[RCB24K]
GO
CREATE TABLE [dbo].[RCB24K] (
[ZYDL] numeric(9,1) NULL ,
[BIAOZI] varchar(20) NULL ,
[CBRQ] datetime NULL ,
[TIMESIGN] varchar(28) NULL ,
[DBCCBH] varchar(12) NULL ,
[BTBH] char(4) NULL ,
[YHDZ] varchar(20) NULL ,
[RHOU] int NULL ,
[RMIN] int NULL ,
[YHDW] varchar(30) NULL ,
[YHXM] varchar(12) NULL ,
[ZGDL] int NULL ,
[SYDL] numeric(9,2) NULL ,
[BTBH1] varchar(12) NULL 
)


GO

-- ----------------------------
-- Records of RCB24K
-- ----------------------------

-- ----------------------------
-- Table structure for [dbo].[ROLE]
-- ----------------------------
DROP TABLE [dbo].[ROLE]
GO
CREATE TABLE [dbo].[ROLE] (
[role_id] int NOT NULL IDENTITY(1,1) ,
[role_name] varchar(20) NOT NULL ,
[role_auth_ids] varchar(128) NULL ,
[role_auth_ac] text NULL 
)


GO
DBCC CHECKIDENT(N'[dbo].[ROLE]', RESEED, 24)
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'ROLE', 
'COLUMN', N'role_id')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'角色id'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'ROLE'
, @level2type = 'COLUMN', @level2name = N'role_id'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'角色id'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'ROLE'
, @level2type = 'COLUMN', @level2name = N'role_id'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'ROLE', 
'COLUMN', N'role_name')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'角色名称'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'ROLE'
, @level2type = 'COLUMN', @level2name = N'role_name'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'角色名称'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'ROLE'
, @level2type = 'COLUMN', @level2name = N'role_name'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'ROLE', 
'COLUMN', N'role_auth_ids')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'拥有权限'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'ROLE'
, @level2type = 'COLUMN', @level2name = N'role_auth_ids'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'拥有权限'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'ROLE'
, @level2type = 'COLUMN', @level2name = N'role_auth_ids'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'ROLE', 
'COLUMN', N'role_auth_ac')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'拥有方法'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'ROLE'
, @level2type = 'COLUMN', @level2name = N'role_auth_ac'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'拥有方法'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'ROLE'
, @level2type = 'COLUMN', @level2name = N'role_auth_ac'
GO

-- ----------------------------
-- Records of ROLE
-- ----------------------------
SET IDENTITY_INSERT [dbo].[ROLE] ON
GO
INSERT INTO [dbo].[ROLE] ([role_id], [role_name], [role_auth_ids], [role_auth_ac]) VALUES (N'2', N'总经理', N'1,9,8,17,18,19,20,21,26,27,28', N'Manager-manager_list,Role-role_list,Auth-auth_list,Auth-auth_add,Auth-auth_edit,Auth-auth_del,Role-role_add,Role-role_edit,Role-role_del');
GO
INSERT INTO [dbo].[ROLE] ([role_id], [role_name], [role_auth_ids], [role_auth_ac]) VALUES (N'16', N'测试', N'1,9,8,17,18,19,20,26,27', N'Manager-manager_list,Role-role_list,Auth-auth_list,Auth-auth_add,Auth-auth_edit,Role-role_add,Role-role_edit');
GO
INSERT INTO [dbo].[ROLE] ([role_id], [role_name], [role_auth_ids], [role_auth_ac]) VALUES (N'24', N'测试2', N'2,10,8,18', N'Auth-auth_list');
GO
SET IDENTITY_INSERT [dbo].[ROLE] OFF
GO

-- ----------------------------
-- Table structure for [dbo].[SBXXK]
-- ----------------------------
DROP TABLE [dbo].[SBXXK]
GO
CREATE TABLE [dbo].[SBXXK] (
[DBCCBH] varchar(12) NULL ,
[YHDZ] varchar(20) NULL ,
[YHXM] varchar(12) NULL ,
[YHDW] varchar(30) NULL ,
[ZT] varchar(100) NULL ,
[SBSJ] varchar(20) NULL ,
[SBRQ] datetime NULL 
)


GO

-- ----------------------------
-- Records of SBXXK
-- ----------------------------

-- ----------------------------
-- Table structure for [dbo].[SJCJQK]
-- ----------------------------
DROP TABLE [dbo].[SJCJQK]
GO
CREATE TABLE [dbo].[SJCJQK] (
[BTMC] varchar(60) NOT NULL ,
[BTDZ] varchar(40) NOT NULL ,
[BTDH] varchar(15) NOT NULL ,
[BTDJ] varchar(16) NULL ,
[BTRL] int NULL ,
[JLFS] varchar(8) NULL ,
[DYBDZMC] varchar(20) NULL ,
[DYBTZKGBH] varchar(20) NULL ,
[SJCJQAZSJ] datetime NULL ,
[SJCJQCCBH] varchar(16) NULL ,
[MCCBRQ] datetime NULL ,
[MCCBSJ] varchar(11) NULL ,
[BTXDBZS] varchar(10) NULL ,
[BTZBX] int NULL ,
[BTZBY] int NULL ,
[SCDJRQ] datetime NULL ,
[MCDJRQ] datetime NULL ,
[BTCBRSJH] int NULL DEFAULT ((0)) ,
[CZYXM] varchar(8) NULL ,
[CZYDLXH] int NULL ,
[BTBH] char(4) NOT NULL ,
[BTMA] char(8) NOT NULL ,
[BTCBRRQ] int NULL DEFAULT ((0)) ,
[BTLX] varchar(12) NULL ,
[BTCBRSJS] int NULL DEFAULT ((0)) ,
[BTBH1] varchar(12) NULL ,
[recno] int NOT NULL IDENTITY(1,1) 
)


GO
DBCC CHECKIDENT(N'[dbo].[SJCJQK]', RESEED, 3496)
GO

-- ----------------------------
-- Records of SJCJQK
-- ----------------------------
SET IDENTITY_INSERT [dbo].[SJCJQK] ON
GO
SET IDENTITY_INSERT [dbo].[SJCJQK] OFF
GO

-- ----------------------------
-- Table structure for [dbo].[SXRSD]
-- ----------------------------
DROP TABLE [dbo].[SXRSD]
GO
CREATE TABLE [dbo].[SXRSD] (
[BTBH] char(4) NULL ,
[SXRSDH] int NULL ,
[STH] int NULL ,
[STS] int NULL ,
[EDH] int NULL ,
[EDS] int NULL ,
[BTBH1] varchar(12) NULL ,
[FS] varchar(20) NULL ,
[TS] int NULL ,
[MS] varchar(20) NULL 
)


GO

-- ----------------------------
-- Records of SXRSD
-- ----------------------------

-- ----------------------------
-- Table structure for [dbo].[sysdiagrams]
-- ----------------------------
DROP TABLE [dbo].[sysdiagrams]
GO
CREATE TABLE [dbo].[sysdiagrams] (
[name] sysname NOT NULL ,
[principal_id] int NOT NULL ,
[diagram_id] int NOT NULL IDENTITY(1,1) ,
[version] int NULL ,
[definition] varbinary(MAX) NULL 
)


GO

-- ----------------------------
-- Records of sysdiagrams
-- ----------------------------
SET IDENTITY_INSERT [dbo].[sysdiagrams] ON
GO
SET IDENTITY_INSERT [dbo].[sysdiagrams] OFF
GO

-- ----------------------------
-- Table structure for [dbo].[TDJLK]
-- ----------------------------
DROP TABLE [dbo].[TDJLK]
GO
CREATE TABLE [dbo].[TDJLK] (
[YHBH] varchar(16) NULL ,
[YDLX] varchar(4) NULL ,
[YHXM] varchar(8) NULL ,
[YHDW] varchar(20) NULL ,
[YHDZ] varchar(20) NULL ,
[YHDH] varchar(16) NULL ,
[XH] varchar(6) NULL ,
[DBDD] int NULL ,
[DBLX] varchar(10) NULL ,
[TDCS] int NULL ,
[BCTDL] numeric(9,2) NOT NULL DEFAULT ((0)) ,
[BCTDRQ] datetime NULL ,
[ZTDL] numeric(9,2) NOT NULL DEFAULT ((0)) ,
[ZYDL] numeric(9,2) NOT NULL DEFAULT ((0)) ,
[CZYXM] varchar(8) NULL ,
[CZYBH] varchar(8) NULL ,
[CZSJ] varchar(12) NULL ,
[CZYDLXH] int NULL ,
[YUER] numeric(9,3) NOT NULL DEFAULT ((0)) ,
[ZDJ] numeric(9,4) NULL ,
[BCTK] numeric(9,2) NULL ,
[ZTK] numeric(9,2) NULL ,
[DBCCBH] varchar(16) NULL ,
[BTBH1] varchar(12) NULL 
)


GO

-- ----------------------------
-- Records of TDJLK
-- ----------------------------

-- ----------------------------
-- Table structure for [dbo].[XXSJK]
-- ----------------------------
DROP TABLE [dbo].[XXSJK]
GO
CREATE TABLE [dbo].[XXSJK] (
[SBYG1] numeric(9,1) NULL ,
[SBWG1] numeric(9,1) NULL ,
[SBYG2] numeric(9,1) NULL ,
[SBWG2] numeric(9,1) NULL ,
[SBYG3] numeric(9,1) NULL ,
[SBWG3] numeric(9,1) NULL ,
[SBYG4] numeric(9,1) NULL ,
[SBWG4] numeric(9,1) NULL ,
[SBYG5] numeric(9,1) NULL ,
[SBWG5] numeric(9,1) NULL ,
[HLH] int NULL 
)


GO

-- ----------------------------
-- Records of XXSJK
-- ----------------------------

-- ----------------------------
-- Table structure for [dbo].[YDLXK]
-- ----------------------------
DROP TABLE [dbo].[YDLXK]
GO
CREATE TABLE [dbo].[YDLXK] (
[YDLXBH] varchar(4) NULL ,
[YDLXMC] varchar(16) NULL ,
[SZRQ] datetime NULL ,
[CZYXM] varchar(8) NULL ,
[JJMC1] varchar(12) NULL ,
[JJMC2] varchar(12) NULL ,
[JJMC3] varchar(12) NULL ,
[JJMC4] varchar(12) NULL ,
[JBDJ] numeric(9,4) NULL DEFAULT ((0)) ,
[ZDJ] numeric(9,4) NULL DEFAULT ((0)) ,
[JJK1] int NULL DEFAULT ((0)) ,
[JJK2] numeric(9,4) NULL DEFAULT ((0)) ,
[JJK3] int NULL DEFAULT ((0)) ,
[JJK4] numeric(9,4) NULL DEFAULT ((0)) ,
[JZDJ] numeric(9,4) NULL DEFAULT ((0)) ,
[FZDJ] numeric(9,4) NULL DEFAULT ((0)) ,
[GZDJ] numeric(9,4) NULL DEFAULT ((0)) ,
[JTQSRQ] datetime NULL 
)


GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'YDLXK', 
'COLUMN', N'YDLXBH')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'用量类型编号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'YDLXBH'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'用量类型编号'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'YDLXBH'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'YDLXK', 
'COLUMN', N'YDLXMC')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'用量类型名称'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'YDLXMC'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'用量类型名称'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'YDLXMC'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'YDLXK', 
'COLUMN', N'SZRQ')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'设置日期'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'SZRQ'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'设置日期'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'SZRQ'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'YDLXK', 
'COLUMN', N'CZYXM')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'操作员姓名'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'CZYXM'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'操作员姓名'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'CZYXM'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'YDLXK', 
'COLUMN', N'JJMC1')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'加价名称1'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'JJMC1'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'加价名称1'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'JJMC1'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'YDLXK', 
'COLUMN', N'JJMC2')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'加价名称2'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'JJMC2'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'加价名称2'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'JJMC2'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'YDLXK', 
'COLUMN', N'JJMC3')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'加价名称3'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'JJMC3'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'加价名称3'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'JJMC3'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'YDLXK', 
'COLUMN', N'JJMC4')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'加价名称4'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'JJMC4'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'加价名称4'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'JJMC4'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'YDLXK', 
'COLUMN', N'JBDJ')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'基本单价'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'JBDJ'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'基本单价'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'JBDJ'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'YDLXK', 
'COLUMN', N'ZDJ')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'总单价'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'ZDJ'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'总单价'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'ZDJ'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'YDLXK', 
'COLUMN', N'JJK1')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'加价款1'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'JJK1'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'加价款1'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'JJK1'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'YDLXK', 
'COLUMN', N'JJK2')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'加价款2'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'JJK2'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'加价款2'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'JJK2'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'YDLXK', 
'COLUMN', N'JJK3')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'加价款3'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'JJK3'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'加价款3'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'JJK3'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'YDLXK', 
'COLUMN', N'JJK4')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'加价款4'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'JJK4'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'加价款4'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'JJK4'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'YDLXK', 
'COLUMN', N'JZDJ')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'尖总单价'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'JZDJ'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'尖总单价'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'JZDJ'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'YDLXK', 
'COLUMN', N'FZDJ')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'峰总单价'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'FZDJ'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'峰总单价'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'FZDJ'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'YDLXK', 
'COLUMN', N'GZDJ')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'谷总单价'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'GZDJ'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'谷总单价'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'GZDJ'
GO
IF ((SELECT COUNT(*) from fn_listextendedproperty('MS_Description', 
'SCHEMA', N'dbo', 
'TABLE', N'YDLXK', 
'COLUMN', N'JTQSRQ')) > 0) 
EXEC sp_updateextendedproperty @name = N'MS_Description', @value = N'阶梯起始日期'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'JTQSRQ'
ELSE
EXEC sp_addextendedproperty @name = N'MS_Description', @value = N'阶梯起始日期'
, @level0type = 'SCHEMA', @level0name = N'dbo'
, @level1type = 'TABLE', @level1name = N'YDLXK'
, @level2type = 'COLUMN', @level2name = N'JTQSRQ'
GO

-- ----------------------------
-- Records of YDLXK
-- ----------------------------
INSERT INTO [dbo].[YDLXK] ([YDLXBH], [YDLXMC], [SZRQ], [CZYXM], [JJMC1], [JJMC2], [JJMC3], [JJMC4], [JBDJ], [ZDJ], [JJK1], [JJK2], [JJK3], [JJK4], [JZDJ], [FZDJ], [GZDJ], [JTQSRQ]) VALUES (N'1', N'居民照明', N'2018-01-05 15:16:59.000', null, null, null, null, null, N'.5600', N'.5600', N'0', N'.0000', N'0', N'.0000', N'.0000', N'.0000', N'.0000', null);
GO
INSERT INTO [dbo].[YDLXK] ([YDLXBH], [YDLXMC], [SZRQ], [CZYXM], [JJMC1], [JJMC2], [JJMC3], [JJMC4], [JBDJ], [ZDJ], [JJK1], [JJK2], [JJK3], [JJK4], [JZDJ], [FZDJ], [GZDJ], [JTQSRQ]) VALUES (N'2', N'居民用水', N'2018-01-05 15:17:52.000', null, null, null, null, null, N'.6000', N'3.6000', N'0', N'.0000', N'0', N'.0000', N'.0000', N'.0000', N'.0000', null);
GO

-- ----------------------------
-- Table structure for [dbo].[YDLXSC]
-- ----------------------------
DROP TABLE [dbo].[YDLXSC]
GO
CREATE TABLE [dbo].[YDLXSC] (
[YDLXBH] varchar(4) NULL ,
[YDLXMC] varchar(16) NULL ,
[SZRQ] datetime NULL ,
[SCRQ] datetime NULL ,
[CZYXM] varchar(8) NULL ,
[JBDJ] numeric(9,4) NULL DEFAULT ((0)) ,
[ZDJ] numeric(9,4) NULL DEFAULT ((0)) ,
[JZDJ] numeric(9,4) NULL DEFAULT ((0)) ,
[FZDJ] numeric(9,4) NULL DEFAULT ((0)) ,
[GZDJ] numeric(9,4) NULL DEFAULT ((0)) 
)


GO

-- ----------------------------
-- Records of YDLXSC
-- ----------------------------

-- ----------------------------
-- Table structure for [dbo].[YDLXXG]
-- ----------------------------
DROP TABLE [dbo].[YDLXXG]
GO
CREATE TABLE [dbo].[YDLXXG] (
[YDLXBH] varchar(4) NULL ,
[YDLXMC] varchar(16) NULL ,
[XGRQ] datetime NULL ,
[CZYXM] varchar(8) NULL ,
[JBDJ] numeric(9,4) NULL DEFAULT ((0)) ,
[ZDJ] numeric(9,4) NULL DEFAULT ((0)) ,
[OJBDJ] numeric(9,4) NULL DEFAULT ((0)) ,
[OZDJ] numeric(9,4) NULL DEFAULT ((0)) ,
[JZDJ] numeric(9,4) NULL DEFAULT ((0)) ,
[FZDJ] numeric(9,4) NULL DEFAULT ((0)) ,
[GZDJ] numeric(9,4) NULL DEFAULT ((0)) ,
[OJZDJ] numeric(9,4) NULL DEFAULT ((0)) ,
[OFZDJ] numeric(9,4) NULL DEFAULT ((0)) ,
[OGZDJ] numeric(9,4) NULL DEFAULT ((0)) 
)


GO

-- ----------------------------
-- Records of YDLXXG
-- ----------------------------

-- ----------------------------
-- Table structure for [dbo].[YHDLK]
-- ----------------------------
DROP TABLE [dbo].[YHDLK]
GO
CREATE TABLE [dbo].[YHDLK] (
[YHLXBH] varchar(4) NULL ,
[YDLXMC] varchar(40) NULL ,
[RQBZ] varchar(20) NULL ,
[TIMESIGN] varchar(28) NULL ,
[YHDL] int NULL ,
[YHLXMC] varchar(20) NULL 
)


GO

-- ----------------------------
-- Records of YHDLK
-- ----------------------------

-- ----------------------------
-- Table structure for [dbo].[YHHB]
-- ----------------------------
DROP TABLE [dbo].[YHHB]
GO
CREATE TABLE [dbo].[YHHB] (
[DBCCBH] varchar(12) NULL ,
[YHBH] varchar(16) NULL ,
[YDLX] varchar(4) NULL ,
[YHXM] varchar(8) NULL ,
[YHDZ] varchar(20) NULL ,
[BZXL] smallint NULL ,
[CZYXM] varchar(8) NULL ,
[HBRQ] datetime NULL ,
[ODBCCBH] varchar(12) NULL ,
[OYDLX] varchar(4) NULL ,
[OBZXL] smallint NULL ,
[ZDJ] numeric(9,4) NULL DEFAULT ((0)) ,
[OZDJ] numeric(9,4) NULL DEFAULT ((0)) ,
[DBLX] varchar(10) NULL ,
[BTBH] char(4) NULL ,
[BTBH1] varchar(12) NULL 
)


GO

-- ----------------------------
-- Records of YHHB
-- ----------------------------

-- ----------------------------
-- Table structure for [dbo].[YHSC]
-- ----------------------------
DROP TABLE [dbo].[YHSC]
GO
CREATE TABLE [dbo].[YHSC] (
[DBCCBH] varchar(12) NULL ,
[YHBH] varchar(16) NULL ,
[YDLX] varchar(4) NULL ,
[YHXM] varchar(8) NULL ,
[YHDZ] varchar(20) NULL ,
[AZSJ] datetime NULL ,
[ZJK] numeric(9,2) NULL ,
[ZGDL] int NULL ,
[CZYXM] varchar(8) NULL ,
[SCRQ] datetime NULL ,
[ZDJ] numeric(9,4) NULL DEFAULT ((0)) ,
[DBLX] varchar(10) NULL ,
[BTBH] char(4) NULL ,
[YUER] numeric(9,2) NOT NULL DEFAULT ((0)) ,
[BTBH1] varchar(12) NULL 
)


GO

-- ----------------------------
-- Records of YHSC
-- ----------------------------

-- ----------------------------
-- Table structure for [dbo].[ZBYDJK]
-- ----------------------------
DROP TABLE [dbo].[ZBYDJK]
GO
CREATE TABLE [dbo].[ZBYDJK] (
[ZBYXM] varchar(8) NULL ,
[ZBYQX] varchar(12) NULL ,
[ZBYMM] varchar(6) NULL ,
[ZCRQ] datetime NULL 
)


GO

-- ----------------------------
-- Records of ZBYDJK
-- ----------------------------
INSERT INTO [dbo].[ZBYDJK] ([ZBYXM], [ZBYQX], [ZBYMM], [ZCRQ]) VALUES (N'1', N'系统管理员', N'1', N'2016-04-21 00:00:00.000');
GO

-- ----------------------------
-- Indexes structure for table AUTH
-- ----------------------------

-- ----------------------------
-- Primary Key structure for table [dbo].[AUTH]
-- ----------------------------
ALTER TABLE [dbo].[AUTH] ADD PRIMARY KEY ([id])
GO

-- ----------------------------
-- Indexes structure for table dtproperties
-- ----------------------------

-- ----------------------------
-- Primary Key structure for table [dbo].[dtproperties]
-- ----------------------------
ALTER TABLE [dbo].[dtproperties] ADD PRIMARY KEY ([id], [property])
GO

-- ----------------------------
-- Indexes structure for table MANAGER
-- ----------------------------

-- ----------------------------
-- Primary Key structure for table [dbo].[MANAGER]
-- ----------------------------
ALTER TABLE [dbo].[MANAGER] ADD PRIMARY KEY ([id])
GO

-- ----------------------------
-- Indexes structure for table ROLE
-- ----------------------------

-- ----------------------------
-- Primary Key structure for table [dbo].[ROLE]
-- ----------------------------
ALTER TABLE [dbo].[ROLE] ADD PRIMARY KEY ([role_id])
GO

-- ----------------------------
-- Indexes structure for table sysdiagrams
-- ----------------------------

-- ----------------------------
-- Primary Key structure for table [dbo].[sysdiagrams]
-- ----------------------------
ALTER TABLE [dbo].[sysdiagrams] ADD PRIMARY KEY ([diagram_id])
GO

-- ----------------------------
-- Uniques structure for table [dbo].[sysdiagrams]
-- ----------------------------
ALTER TABLE [dbo].[sysdiagrams] ADD UNIQUE ([principal_id] ASC, [name] ASC)
GO
